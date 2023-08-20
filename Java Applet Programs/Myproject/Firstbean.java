import java.beans.*;
import java.util.*;
import java.awt.*;
import java.awt.event.*;

public class Firstbean extends Canvas
{
	public static final int WIDTH=200;
	public static final int HEIGHT=200;
     public int width=WIDTH;
	 public int height=HEIGHT;
	 public int leftMargin=5;
	 public int topMargin=5;
	 
	 public String text="";
public boolean border=true;
public Firstbean()
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
public void setText(String newTextValue)
{
	text=newTextValue;
}
public int getWidth()
{
return width;
}
public void setWidth(int newWidth)
{
	if(newWidth>0)
	{
		width=newWidth;
		updateSize();
	}
}
public int getHeight()
{
	
	return height;
}
public void setHeight(int newHeight)
{
	if(newHeight>0)
	{
		height=newHeight;
		updateSize();
	}
}
public int getLeftMargin()
{
	return leftMargin;
}

public void setLeftMargin(int newLeftMargin)
{
	if(newLeftMargin>=0)
	{
		leftMargin=newLeftMargin;
	}
}
public int getTopMargin()
{
	return topMargin;
}
public void setTopMargin(int newTopMargin)
{
	if(newTopMargin>=0)
	{
		topMargin=newTopMargin;
	}
}
public boolean isBorder()
{
	return border;
}
public void setBorder(boolean newBorder)
{
	border=newBorder;
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



	

	