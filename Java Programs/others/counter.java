import java.applet.*;
import java.awt.*;
/*<applet code="counter" width="300" height="300"></applet>*/
public class counter extends Applet implements Runnable
{
Thread t;
Font f;
public int y=0;
public void init()
{
t=new Thread(this);
f=new Font("Times New Roman",Font.BOLD,20);
t.start();
}
public void run()
{
try
{
while(true)
{
repaint();
  y++;
Thread.sleep(100);
 }
}
catch(Exception e){}
}

public void paint(Graphics g)
{g.setFont(f);
g.drawString(""+y,100,100);
}
}