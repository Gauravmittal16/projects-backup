import java.awt.*;
import java.applet.Applet;
import java.awt.event.*;
/*<applet code="app4" width="300" height="400"></applet>*/
public class app4 extends Applet implements ActionListener {

	// GUI Widgets
	TextField month1Text, day1Text, year1Text, month2Text, day2Text, year2Text;
	Button goButton;
	
	// Program variables
	int month1, month2, day1, day2, year1, year2;
	int days = 0;
	boolean valid = false;
	
	public void init() {
		makeGui();
		
	} // init
	
	public void paint(Graphics g) {
	
		if (valid) {
			g.drawString("Date1 is "+month1+"/"+day1+"/"+year1, 20, 110);
			g.drawString("Date2 is "+month2+"/"+day2+"/"+year2, 20, 130);
			g.drawString("Number of days between them is " + days, 20, 150);
		}
		else
			g.drawString("Please enter valid dates.", 20, 130);
	} // paint
	
	private void compute() {
		days = 0;
		// if the two dates are in the same year
		if (year1 == year2) {
			// if the two months are the same
			if (month1 == month2) {
				days = day2 - day1;
			}
			else { // the two months are not equal
				// add the # of days in month1
				days = days + daysInMonth(month1, year1) - day1;
				
				// add the number of days in each month from month1+1 .. month2-1
				for (int m= month1+1; m < month2; m++) {
					days = days + daysInMonth(m, year1);
				}
				
				// add # days in month2
				days = days + day2;
			}
		}
		else {// the two dates are in different years
			// #days in year1 
			// #days in month1
			days = days + daysInMonth(month1, year1) - day1;
			// #days in each month from month1+1..12
			for (int m = month1+1; m <= 12; m++)
				days = days + daysInMonth(m, year1);
			
			// #days in each year from year1+1 .. year2-1
			for (int y = year1+1; y < year2; y++) {
				if (leapyear(y))
					days = days + 366;
				else
					days = days + 365;
			}
			
			// #days in year 2
			// #days in each month from 1..month2-1
			for (int m = 1; m < month2; m++)
				days = days + daysInMonth(m, year2);
			// # days in month2
			days = days + day2;
		}
	}  // compute
	
	private int daysInMonth(int m, int y) {	// returns the # days in month, m in year y
	
		switch (m) {
		case 1:
		case 3:
		case 5:
		case 7:
		case 8:
		case 10:
		case 12: return 31;
		case 4:
		case 6:
		case 9:
		case 11: return 30;
		case 2: if (leapyear(y))
					return 29;
				else
					return 28;
		}
		return 0;
	} // daysInMonth
	
	private boolean leapyear(int y) {
		return (((y % 4 == 0) && (y % 100 != 0)) || (y % 400 == 0));
	} // leapYear
	
	private void readDate() {
		month1 = readValue(month1Text);
		day1 = readValue(day1Text);
		year1 = readValue(year1Text);
		
		month2 = readValue(month2Text);
		day2 = readValue(day2Text);
		year2 = readValue(year2Text);
	
	} // readDate
	
	private boolean validate (int m, int d, int y) {
		if ((m < 1) || (m > 12))
			return false;
		
		if (y < 1900)
			return false;
		
		if ((d <1) || (d > daysInMonth(m, y)))
			return false;
		
		return true;
	} // validate
	
	private int readValue(TextField t) {
		String s;
		Integer i;
		
		// Get the text in textfield
		s = t.getText();
		
		// Convert it to Integer object
		i = new Integer(s);
		
		// gets its int value
		return i.intValue();
	} // readValue
	
	public void actionPerformed(ActionEvent e) {
		if (e.getSource()==goButton) {
			readDate();
			valid = validate(month1, day1, year1) && validate(month2, day2, year2);
		}
		if (valid) 
			compute();
		repaint();
	} // actionPerformed
	
	private void makeGui() {
		Panel datePanel, mdy1Panel, mdy2Panel, allPanel, goPanel;
		Label date1L, m1L, d1L, y1L;
		Label date2L, m2L, d2L, y2L;
		
		setLayout(new BorderLayout());
		
		// Applet has 2 sets of three text fields for entering month/day/year for two dates
		// Date 1
		datePanel = new Panel();
		datePanel.setLayout(new GridLayout(2,2));
		
		mdy1Panel = new Panel();
		mdy1Panel.setLayout(new GridLayout(2,3));
		
		m1L = new Label("Month");
		d1L = new Label("Day");
		y1L = new Label("Year");
		mdy1Panel.add(m1L);
		mdy1Panel.add(d1L);
		mdy1Panel.add(y1L);
		
		month1Text = new TextField(2);
		day1Text = new TextField(2);
		year1Text = new TextField(4);
		mdy1Panel.add(month1Text);
		mdy1Panel.add(day1Text);
		mdy1Panel.add(year1Text);
		
		mdy1Panel.setBackground(Color.orange);

		
		// Date2
	
		mdy2Panel = new Panel();
		mdy2Panel.setLayout(new GridLayout(2,3));	
		
		m2L = new Label("Month");
		d2L = new Label("Day");
		y2L = new Label("Year");
		mdy2Panel.add(m2L);
		mdy2Panel.add(d2L);
		mdy2Panel.add(y2L);
		
		month2Text = new TextField(2);
		day2Text = new TextField(2);
		year2Text = new TextField(4);
		mdy2Panel.add(month2Text);
		mdy2Panel.add(day2Text);
		mdy2Panel.add(year2Text);
		
		mdy2Panel.setBackground(Color.magenta);
		
		date1L = new Label("Date 1");
		Panel date1P = new Panel();
		date1P.add(date1L);
		date1P.setBackground(Color.orange);
		
		date2L = new Label("Date 2");
		Panel date2P = new Panel();
		date2P.add(date2L);
		date2P.setBackground(Color.magenta);
		
		datePanel.add(date1P);
		datePanel.add(date2P);
		datePanel.add(mdy1Panel);
		datePanel.add(mdy2Panel);
		
		// applet has a Go Button
		goButton = new Button("Go");
		goPanel = new Panel();
		goPanel.add(goButton);
		goPanel.setBackground(Color.cyan);
		
		allPanel = new Panel();
		//allPanel.setLayout(new GridLayout(2,1));
		
		allPanel.add(datePanel);
		//allPanel.add(goPanel);
		
		add("South", goPanel);
		add("North", allPanel);
		
		// activate listener for go button
		goButton.addActionListener(this);
	} // makeGUI

} // Days