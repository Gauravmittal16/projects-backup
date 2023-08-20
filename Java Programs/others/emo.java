import java.applet.*;
import java.awt.*;
/*<applet code="emo" width="300" height="400"></applet>*/
public class emo extends Applet implements Runnable
{
Thread t;
public int y=70;
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
y=y-10;
Thread.sleep(100);
if(y<=50)
{
y=70;
}
}
catch(Exception e)
{}
}
}
public void paint(Graphics g)
{
g.setColor(Color.yellow);
g.fillOval(40,40,200,200);
g.setColor(Color.blue);
g.fillOval(75,85,35,50);
g.setColor(Color.blue);
g.fillOval(168,85,35,50);
g.setColor(Color.blue);
g.drawArc(75,y,35,35,0,180);
g.drawArc(168,y,35,35,0,180);
g.drawArc(85,135,100,65,180,185);
g.drawLine(135,135,135,145);

}
}