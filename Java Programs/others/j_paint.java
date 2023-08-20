import java.applet.*;
import java.awt.*;
import java.awt.event.*;
/*<applet code="j_paint" width="300" height="300"></applet>*/
public class j_paint extends Applet implements MouseListner,MouseMotionListner
{
int x1=0,y1=0,x2,y2;
public void init()
{
addMouseListner(this);
addMouseMotionListner(this);
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
x2=e.getX();
y2=e.getY();
Graphics g=get Graphics();
g.drawLine(x1,y1,x2,y2);
x1=x2;
y1=y2;
}
}