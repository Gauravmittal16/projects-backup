import java.awt.*;
import java.applet.Applet;
import java.awt.event.*;
/*<applet code="Pallindrome" width="300" height="400"></applet>*/

public class Pallindrome extends Applet implements ActionListener
{
		Label l1 = new Label("Enter a sentence...", Label.LEFT);
		TextField txt = new TextField(60);
		Button go = new Button("Is it a Palindrome?");
		String s;

	public void init() {

				Panel p = new Panel();
				p.setLayout(new GridLayout(3,1));

				// Draw the Label
				p.add(l1);

				// Draw the TextField
				Panel p1 = new Panel();
				p1.add(txt);
				p.add(p1);

				// Draw the Button
				Panel p2 = new Panel();
				p2.add(go);
				p.add(p2);

				p.setBackground(Color.cyan);

				// applet layout
				this.setLayout(new BorderLayout());
				this.add(p, "South");

				// Register Listener
		go.addActionListener(this);
	}

	public void paint( Graphics g )
	{

					g.drawString("Sentence = " + s, 20,40);
			if (isPalindrome())
				g.drawString("It is a palindrome!",20,50);
			else
				g.drawString("It is not a palindrome.", 20,50);

	}

	public boolean isPalindrome() {
		for (int Left=0, Right = s.length()-1; Left < Right; Left++, Right--) {
			if (s.charAt(Left) != s.charAt(Right))
				return false;
		}
		return true;
	}
	public void actionPerformed(ActionEvent e)
	{
		if (e.getSource() == go)
		{
			s=txt.getText();
		repaint();
		}	}
}
