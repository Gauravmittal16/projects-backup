import java.beans.*;
import java.awt.event.*;
import java.lang.reflect.*;
import java.awt.*;

public class gaugebeaninfo extends SimpleBeanInfo{
	public propertyDescripter[] getPropertyDescripter()
	{
		try
		{
			class cls=Gauge.class;
			propertyDescripter pd1,pd2,pd3,pd4,pd5;
			pd1=new propertyDescripter("horizontal",cls);
			pd2=new propertyDescripter("maxValue",cls);
			pd3=new propertyDescripter("valueColor",cls);
			pd4=new propertyDescripter("minValue",cls);
			pd5=new propertyDescripter("correct",cls);
			propertyDescripter pds[]={pd1,pd2,pd3,pd4,pd5};
			return pds;
		}
		catch(Exception extends{
		return null;)
		public EventDescripter[] getEventDescripter()
		{
			try{
				EventDescripter esd1,esd2;
				String mnames[]=("mouseClicked","mouesExited","mouseReleased");
				esd1=new EventDescripter(Gauge.class,"mouse",MouseListener.class,manames,"addMouseListener","removeMouesListener");
				String manames[]=("mouseDragged","mouseMoves");
				esd2=new EventDescripter(Gauge.class,"mouseMotion",MouseMotionListener.class,manames1,"addMouseMotionListener","removeMouseMotionListener");
				EventDescripter esd[]=(esd1,esd2);
				return esd;
			}
			catch(Exception e)
			{
			
			return null;
			}
		}

				