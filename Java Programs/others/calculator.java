import java.applet.*;
import java.awt.*;
import java.awt.event.*;
/*<applet code="calculator" width="400" height="500"></applet>*/
public class calculator extends Applet implements ActionListener
{
TextField a,b,c;
Button b1,b2,b3,b4;
public void init()
{
Label l1=new Label("first no.");
Label l2=new Label("second no.");
Label l3=new Label("Answer");
a=new TextField(12);
b=new TextField(12);
c=new TextField(12);
Button b1=new Button("+");
Button b2=new Button("-");
Button b3=new Button("*");
Button b4=new Button("/");
add(l1);
add(a);
add(l2);
add(b);
add(l3);
add(c);
add(b1);
add(b2);
add(b3);
add(b4);
b1.addActionListener(this);
b2.addActionListener(this);
b3.addActionListener(this);
b4.addActionListener(this);
}
public void actionPerformed(ActionEvent e)
{
String s1,s2;
int z;
s1=a.getText();
s2=b.getText();
if(e.getSource()==b1)

{
z=Integer.parseInt(s1)+Integer.parseInt(s2);
c.setText(String.valueOf(z));
}
else if(e.getSource()==b2)
{
z=Integer.parseInt(s1)-Integer.parseInt(s2);

c.setText(String.valueOf(z));
}
else if(e.getSource()==b3)
{
z=Integer.parseInt(s1)*Integer.parseInt(s2);
c.setText(String.valueOf(z));
}
else
{
z=Integer.parseInt(s1)/Integer.parseInt(s2);

c.setText(String.valueOf(z));
}
}
}