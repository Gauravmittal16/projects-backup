import java.applet.*;
import java.awt.*;
/*<applet code="Myapplet" width="500" height="400" ></applet> */
public class Myapplet extends Applet implements Runnable
{
Thread t;
public int y=10;
public void init()
{
t=new Thread(this);
t.start();
}
public void run()
{
while(true)
   {
    try
       {
          repaint();
          y=y+10;
        if(y>100)
                {y=10;}
       }
catch(InterruptedException e)
   {}
  
}
}
public void paint(Graphics g)
{
g.drawString("myapplet",y,100);
}
}