import java.beans.*;
import java.util.*;
import java.awt.*;
import java.awt.event.*;
import java.io.Serializable;
public class gauge extends Canvas implements Serializable
{
	public static final int HORIZONTAL=1;
	public static final int VERTICAL=2;
	public static  int WIDTH=100;
	public static  int HEIGHT=20;
	public int orientation=HORIZONTAL;
     public int width=WIDTH;
	 public int height=HEIGHT;
	 public int minvalue=0;
	 public int maxvalue=100;
	 
	 
	 public int correct=0;
	 public Color gaugeColor=Color.lightGray;
	 public Color valueColor=Color.blue;
	 
public gauge()
{
	super();
	
}	
public Dimension getPreferredSize()
{
	return new Dimension(width,height);
}
public synchronized void paint(Graphics g)
{
	g.setColor(gaugeColor);
	g.fill3DRect(0,0,width-1,height-1,false);
	int border=3;
	int innerHeight=height-2*border;
	int innerWidth=width-2*border;
	double scale=(double)(correct-minvalue)/(double)(correct)-(minvalue);
	 int gaugeValue;
	 g.setColor(valueColor);
	 if(orientation==HORIZONTAL)
	 {
		 gaugeValue=(int)((double)innerWidth*scale);
		 g.fillRect(border,border,gaugeValue,innerHeight);
	 }
	 else
	 {
		 gaugeValue=(int)((double)innerHeight*scale);
		 g.fillRect(border,border+(innerHeight-gaugeValue),innerWidth,gaugeValue);
	 }
}
public int getCorrect()
{
	return correct;
}
public void setCorrect(int newCorrect)
{
	if(newCorrect>=minvalue&&newCorrect<=maxvalue)
	{
		correct=newCorrect;
		repaint();
	}
}
public int getMinValue()
{
	return minvalue;
}
public void setMinValue(int newMinValue)
{
	if(newMinValue<=correct)
	{
		minvalue=newMinValue;
	}
}
public int getMaxValue()
{
	return maxvalue;
}
public void setMaxValue(int newMaxValue)
{
	if(newMaxValue<=correct)
	{
		maxvalue=newMaxValue;
	}
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
public Color getGaugeColor()
{
	return gaugeColor;
}
public void setgaugeColor(Color newGaugeColor)
{
	gaugeColor=newGaugeColor;
}
public Color getValueColor()
{
	return valueColor;
}
public void setValueColor(Color newValueColor)
{
	valueColor=newValueColor;
}
public boolean isHorizontal()
{
	if(orientation==HORIZONTAL)
	{
		return true;
	}
	else{
		return false;
	}
}
public void setHorizontal(boolean neworientation)
{
	if(neworientation)
	{
		if(orientation==VERTICAL)
			switchDimensions();
		orientation=HORIZONTAL;
	}
	else{
		if(orientation==HORIZONTAL)
			switchDimensions();
		orientation=VERTICAL;
	}
	updateSize();
}
	
void switchDimensions()
{
int temp=width;
width=height;
height=temp;
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






	

	