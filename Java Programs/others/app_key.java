import java.applet.*;
import java.awt.*;
import java.awt.event.*;
public class app_key extends Applet implements KeyListener
{
String msg=" ";
public void init()
{
addKeyListener(this);
requestFocus();
}
public void KeyPressed(KeyEvent e)
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
repaint();
}
}
public void KeyTyped(KeyEvent e)
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