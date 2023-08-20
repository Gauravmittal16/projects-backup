import java.awt.*;
import java.awt.event.*;
import java.applet.*;
/*<applet code="Fbuttons" width="400" height="500"></applet>*/
public class Fbuttons extends Applet implements ActionListener
{Button add;
public void init()
{

Button add=new Button("add");
add(add);
add.addActionListener(this);
}

public void actionPerformed(ActionEvent ae)
{
if(ae.getSource()==add){repaint();
}
else{}}
public void paint(Graphics g)
{
g.drawString("gauarav",100,100);
}
}