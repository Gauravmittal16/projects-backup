import java.awt.*;
import java.applet.Applet;
import java.awt.event.*;
/*<applet code="CanvasExample" width="300" height="400"></applet>*/
public class CanvasExample extends Applet implements ActionListener {

	Button goButton;
	leftCanvas L;
	rightCanvas R;

	public void init() {

		setLayout(new BorderLayout());

		goButton = new Button("Do it again!");
		Panel bPanel = new Panel();
		bPanel.add(goButton);
		add("South", bPanel);
		goButton.addActionListener(this);

		// add the two canvases
		Panel centerPanel = new Panel();
		centerPanel.setLayout(new GridLayout(1,2));

		L = new leftCanvas();
		R = new rightCanvas();
		centerPanel.add(L);
		centerPanel.add(R);

		add("Center", centerPanel);
	}

	public void actionPerformed(ActionEvent e) {

		if (e.getSource() == goButton) {
			repaint();		// repaint this applet
			L.repaint();	// also repaint the canvases
			R.repaint();	// repaint canvases
		}

	} // actionPerformed

} // CanvasExample

 class leftCanvas extends Canvas {

	int h, w;			// the height and width of this canvas

	public void paint(Graphics win) {
		int ovalDia;
		int r, g, b;
		int x, y;

		// set the height and width of this canvas
		// this depends on where it is added, so we'll use
		// getSize to get its dimensions
		h = getSize().height;
		w = getSize().width;
		win.drawRect(0,0, w-1, h-1);	// Draw border

		// draw a random colored oval
		ovalDia = (int) (Math.random()*(w/4));
		x = (int) (Math.random()*w);
		y = (int) (Math.random()*h);

		r = (int) (Math.random()*255);
		g = (int) (Math.random()*255);
		b = (int) (Math.random()*255);

		win.setColor(new Color(r, g, b));
		win.fillOval(x, y, ovalDia, ovalDia);

	} // paint

} // leftCanvas

class rightCanvas extends Canvas {
	// Every left canvas has a random colored box in it
	// every time it is repainted, it is generated and painted

	int h, w;			// the height and width of this canvas

	public void paint(Graphics win) {
		int boxSize;
		int r, g, b;
		int x, y;


		h = getSize().height;
		w = getSize().width;
		win.drawRect(0,0, w-1, h-1);		// Draw border

		// draw a random colored box
		boxSize = (int) (Math.random()*(w/4));
		x = (int) (Math.random()*w);
		y = (int) (Math.random()*h);

		r = (int) (Math.random()*256);
		g = (int) (Math.random()*256);
		b = (int) (Math.random()*256);

		win.setColor(new Color(r, g, b));
		win.fillRect(x, y, boxSize, boxSize);

	} // paint

} // leftCanvas

