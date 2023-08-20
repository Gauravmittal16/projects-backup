import java.applet.*;
import java.awt.*;
import java.awt.event.*;
/*<applet code="b" width="500" height="400" ></applet>*/
public class b extends Applet implements ActionListener 
{
TextField a,b,c;
Button b1,b2,b3,b4;
public void init()
{
Label l1=new Label("First number");
Label l2=new Label("second number");
Label l3=new Label("Answer ");
a=new TextField(12);
b=new TextField(12);
c=new TextField(12);
Button b1=new Button("+");
Button b2=new Button("-");
Button b3=new Button("*");
Button b4=new Button("/");
setLayout(null);
l1.setBounds(20,50,100,20);
l2.setBounds(20,100,100,20);
l3.setBounds(20,150,100,20);
a.setBounds(200,50,50,20);
b.setBounds(200,100,50,20);
c.setBounds(200,150,50,20);
b1.setBounds(50,200,50,40);
b2.setBounds(90,200,50,40);
b3.setBounds(50,240,50,40);
b4.setBounds(90,240,50,40);

add(l1);
add(l2);
add(l3);
add(a);
add(b);
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
public void actionPerformed(ActionEvent ae)
{
if(ae.getSource()==b1)
{
castText(Integer.toString(a.getText()+b.getText()));
}
else if(ae.getSource()==b2)
{
castText(Integer.toString(Integer.parseInt(a.getText())-Integer.parseInt(b.getText())));
}
else if(ae.getSource()==b3)
{
castText(Integer.toString(Integer.parseInt(a.getText())*Integer.parseInt(b.getText())));
}
else
{
castText(Integer.toString(Integer.parseInt(a.getText())/Integer.parseInt(b.getText())));
}
}
}