import java.awt.*;
import java.applet.*;
/*<applet code="bank" height="300" width="500"></applet>*/
public class bank extends Applet implements Runnable
{
Button b1,b2,b3,b4;
Thread t;
String s="State Bank Of India";
Font f;
public int x=0;
public void init()
{
b1=new Button("Customer");
b2=new Button("Employees");
b3=new Button("Manager");
b4=new Button("About");
add(b1);
add(b2);
add(b3);
add(b4);
t=new Thread(this);
t.start();
f=new Font ("Times New Roman",Font.BOLD,20);
System.out.println(s);
}
public void run()
{
while(true)
{try
{
repaint();
x=x+10;
Thread.sleep(100);
if(x>=500)
{x=10;}
}
catch(InterruptedException e){}
}
}
public void paint(Graphics g)
{
g.setFont(f);
g.drawString(s,150,50);
g.setColor(Color.blue);
g.drawString("0% interest for gov. workers",x,100);

}
}



