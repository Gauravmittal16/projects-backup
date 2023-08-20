import java.beans.*;
import java.util.*;
import java.awt.*;
import java.awt.event.*;

public class Tcanvas extends Canvas
{
	public static final int WIDTH=200;
	public static final int HEIGHT=200;
     public int width=WIDTH;
	 public int height=HEIGHT;
	 public int leftMargin=5;
	 public int topMargin=5;
	 
	 public String text="";
public boolean border=true;
public Tcanvas()
{
	super();
	
}	
public Dimension getPreferredSize()
{
	return new Dimension(width,height);
}
public synchronized void paint(Graphics g)
{
	if(border)g.drawRect(0,0,width-1,height-1);
	Font font=g.getFont();
	FontMetrics fm=g.getFontMetrics(font);
	int lineHeight=fm.getHeight();
	int y=fm.getLeading()+fm.getAscent();
	StringTokenizer tokenizer=new StringTokenizer(text,"|");
	String line;
	while(tokenizer.hasMoreTokens())
	{
		line=tokenizer.nextToken();
		if(border)g.drawString(line,leftMargin+1,topMargin+y+1);
		
		else
	    g.drawString(line,leftMargin,topMargin+y);
	y+=lineHeight;
	}
}
public String getText()
{
	return text;
}
public void setText(String new Textvalue)
{
	text=new Textvalue;
}
public int getWidth()
{
return width;
}
public void setWidth(int new Width)
{
	if(new Width>0)
	{
		width=new Width;
		updateSize();
	}
}
public int getHeight()
{
	
	return height;
}
public void setHeight(int new Height)
{
	if(new Height>0)
	{
		height=new Height;
	}
}
public void setLeftMargin(int new LeftMargin)
{
	if(new LeftMargin>=0)
	{
		leftMargin=new LeftMargin;
	}
}
public int getTopMargin()
{
	return topMargin;
}
public void setTopMargin(int new TopMargin)
{
	if(new TopMargin>=0)
	{
		topMargin=new TopMargin;
	}
}
public boolean isBorder()
{
	return border;
}
public void setBorder(boolean new Border)
{
	border=new Border;
}
void updateSize()
{
	setSize(width,height);
	Container container=getParent();
	if(container!=null)
	{
		container.invalidate();
		container.doLayout();
	}
}

}



	

	