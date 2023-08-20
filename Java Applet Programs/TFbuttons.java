import java.awt.*;
import java.awt.event.*;
import java.applet.*;

public class TFbuttons extends Applet implements ActionListener
{
	TextField a,b,c;
Button add,sub,divide,multiply;
public void init()
{
Label l1=new Label("1st no.");
Label l2=new Label("2nd no.");
Label l3=new Label("result");
a=new TextField(12);
b=new TextField(12);
c=new TextField(12);
Button add=new Button("add");
Button sub=new Button("sub");
Button divide=new Button("divide");
Button multiply=new Button("multiply");
setLayout(new GridLayout(5,5));
add(l1);
add(a);
add(l2);
add(b);
add(l3);
add(c);
add(add);
add(sub);
add(divide);
add(multiply);
add.addActionListener(this);
sub.addActionListener(this);
divide.addActionListener(this);
multiply.addActionListener(this);}

public void actionPerformed(ActionEvent ae)
{
String Str=ae.getActionCommand();
if(Str.equals("add"))
{
	c.setText(Integer.toString(Integer.parseInt(a.getText())+Integer.parseInt(b.getText())));
}
else if(Str.equals("sub"))
{
	c.setText(Integer.toString(Integer.parseInt(a.getText())-Integer.parseInt(b.getText())));
	}
else if(Str.equals("divide"))
{
	c.setText(Integer.toString(Integer.parseInt(a.getText())/Integer.parseInt(b.getText())));
	}
else if(Str.equals("multiply"))
{
	c.setText(Integer.toString(Integer.parseInt(a.getText())*Integer.parseInt(b.getText())));
	}}}
