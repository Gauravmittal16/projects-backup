import java.applet.*;
import java.awt.*;
import java.awt.event.*;
/*<applet code="ready" width="200" height="300"></applet>*/
public class ready extends Applet implements KeyListener
{
String msg=" ";
public void init()
{
addKeyListener(this);
requestFocus();
}
public void keyPressed(KeyEvent e)
{
int key;
key=e.getKeyCode();
switch(key)
{ 
case KeyEvent.VK_LEFT: msg+="Left";
                                          break;
case KeyEvent.VK_RIGHT: msg+="Right";
                                          break;
case KeyEvent.VK_F1: msg+="F1";
                                          break;
case KeyEvent.VK_F2: msg+="F2";
                                          break;
case KeyEvent.VK_PAGE_DOWN: msg+="Page down";
                                          break;
case KeyEvent.VK_PAGE_UP: msg+="Page up";
                                          break;
}
repaint();
}
public void keyReleased(KeyEvent e)
{
showStatus("released");
}
public void keyTyped(KeyEvent e)
{
msg+=e.getKeyChar();
showStatus("pressed");
repaint();
}
public void paint(Graphics g)
{
g.drawString(msg,100,100);
}
}