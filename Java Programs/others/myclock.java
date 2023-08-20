import java.applet.*;
import java.awt.*;
/*<applet code="myclock" width="300" height="300"></applet>*/
public class myclock extends Applet implements Runnable
{
Thread t;
Font f;
public int s=00,m=00,h=00;
public void init()
{
t=new Thread(this);
setBackground(Color.blue);
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
  s=s+1;
Thread.sleep(1000);
         if(s>=60)
          {s=00;
             m++;
               if(m>=60){
                    m=00;
                     h++;}
                          if(h>=24)
                     {h=00;}
           }
 }
}
catch(Exception e){}
}

public void paint(Graphics g)
{g.setFont(f);
g.drawString(""+h+":"+m+":"+s,50,100);
}
}