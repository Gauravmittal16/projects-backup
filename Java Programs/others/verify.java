import java.awt.*;
import java.awt.event.*;
import java.applet.*;
/*<applet code="verify" height="500" width="200" ></applet>*/
public class verify extends Applet implements ActionListener
{
Button drawbutton;
public void init()
{
Button drawbutton=new Button("draw");
add(drawbutton);
drawbutton.addActionListener(this);
}
public void paint(Graphics g)
{
g.drawString("gaurav",100,100);
}
public void actionPerformed(ActionEvent ae)
{
if(ae.getSource()==drawbutton)
{
repaint();}
}
example n=new example();
repaint();
}
class example extends Applet
{
public void paint(Graphics g)
{
g.drawString("Mittal",100,200);
}
}