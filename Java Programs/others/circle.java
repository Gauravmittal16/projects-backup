import java.awt.*;
import java.applet.*;
import java.awt.event.*;
/*<applet code="circle" width="300" height="300"></applet>*/
public class circle extends Applet implements ActionListener
{
Button b1,b2,b3,b4,b5,b6;
private int x=10,y=20,w=100,h=100;
public void init()
{
Button b1=new Button("Increase");
Button b2=new Button("Decrease");
Button b3=new Button("Right");
Button b4=new Button("Left");
Button b5=new Button("Up");
Button b6=new Button("Down");
add(b1);
add(b2);
add(b3);
add(b4);
add(b5);
add(b6);
b1.addActionListener(this);
b2.addActionListener(this);
b3.addActionListener(this);
b4.addActionListener(this);
b5.addActionListener(this);
b6.addActionListener(this);
}
public void actionPerformed(ActionEvent ae)
{
String s=ae.getActionCommand();
if(s.equals("Increase")){
w=w+10;
h=h+10;
repaint();}
else if(s.equals("Decrease")){
w=w-10;
h=h-10;
repaint();}
else if(s.equals("Right")){
x=x+10;
repaint();}
else if(s.equals("Left")){
x=x-10;
repaint();}
else if(s.equals("Up")){
y=y-10;
repaint();}
else {
y=y+10;
repaint();}
}
public void paint(Graphics g)
{
g.setColor(Color.blue);
g.fillOval(x,y,w,h);
}
}