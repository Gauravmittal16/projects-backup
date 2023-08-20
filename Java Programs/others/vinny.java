import java.applet.*;
import java.awt.Graphics;
import java.awt.event.*;
/*<applet code="vinny" width="300" height="300"></applet>*/
public class vinny extends Applet implements MouseListener,MouseMotionListener
{
int x1=0,y1=0,x2,y2;
public void init()
{
addMouseListener(this);
addMouseMotionListener(this);
}
public void mouseEntered(MouseEvent e)
{}
public void mouseExited(MouseEvent e)
{}
public void mousePressed(MouseEvent e)
{
x1=e.getX();
y1=e.getY();
}
public void mouseReleased(MouseEvent e)
{}
public void mouseClicked(MouseEvent e)
{}
public void mouseMoved(MouseEvent e)
{}
public void mouseDragged(MouseEvent e)
{
Graphics g=getGraphics(); 
x2=e.getX();
y2=e.getY();
g.drawLine(x1,y1,x2,y2);
x1=x2;
y1=y2;
}
}