import java.applet.*;
import java.awt.*;
/*<applet code="car" width="500" height="300"></applet>*/
public class car extends Applet implements Runnable
{
Thread t;
public int x=100,y=85,z=200,u=65,a=215,b=255,c=210,d=75;
public void init()
{
t=new Thread(this);
t.start();
setBackground(Color.gray);
}
public void run()
{
while(true)
{
try
{
repaint();
a=a+5;
b=b+5;
c=c+5;
d=d+5;
x=x+5;
y=y+5;
z=z+5;
u=u+5;
if(u>=490)
{
x=100;
y=85;
z=200;
u=65;
a=215;
b=255;
c=210;
d=75;}
Thread.sleep(100);
}
catch(Exception e)
{}
}
}
public void paint(Graphics g)
{
g.setColor(Color.blue);
g.drawLine(x,100,z,100);
g.drawLine(x,100,y,150);
g.drawLine(z,100,a,150);
g.drawLine(y,150,a,150);
g.drawLine(y,150,u,150);
g.drawLine(u,150,u,170);
g.drawLine(a,150,b,150);
g.drawLine(b,150,b,170);
g.drawLine(u,170,b,170);
g.drawLine(z,100,z,150);
g.setColor(Color.black);
g.fillOval(c,170,30,30);
g.fillOval(d,170,30,30);
g.setColor(Color.black);
g.drawLine(0,200,500,200);
}
}