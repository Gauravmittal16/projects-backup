import java.beans.*;
import java.awt.event.*;
import java.awt.*;
import java.applet.*;
import java.io.*;
import java.util.*;

public class qiuz extends Applet implements ActionListener
{
TCanvas text1status;
Gauge gauge;
clock c;
String labels[]=["A","B","C","D"];
Button b1=new Button(labels[0]);
Button b2=new Button(labels[1]);
Button b3=new Button(labels[2]);
Button b4=new Button(labels[3]);

int question=0;
double current=0.0;
private int correct=0;
charTextBox name=new charTextBox();
intTextBox regno=new intTextBox();
Label name1=new Label("name:");
Label regno=new Label("reg no:");
}
public void init()
{
Panel bottompanel=new Panel();
Panel toppanel=new Panel();
Panel gaugepanel=new Panel();
Panel button=new Panel();
text1=new TCanvas();
status=new TCanvas();
gauge=new Gauge();
mainpanel.setLayout(new BorderLayout);
mainpanel.add(text1,"center");
gaugepanel.add(new Label("score :(0-100)"));
gaugepanel.add(gauge);
mainpanel.add(gaugepanel,"East");
bottompanel.setLayout(new BorderLayout());
buttons.add(b1);
buttons.add(b2);
buttons.add(b3);
buttons.add(b4);
buttons.add(status);

}	