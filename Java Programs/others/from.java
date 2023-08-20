import java.applet.*;
import java.awt.*;
/*<applet code="from" width="300" height="300"></applet>*/
public class from extends Applet implements Runnable
{
Thread t;
public int y=0;
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
  {
y=10;
   }  
 }
catch(Exception e){}
}
}
public void paint(Graphics g)
{
g.drawString("gaurav",y,100);
}
}