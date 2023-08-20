package com.gmt.dev.products; 

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Component;

@Component
public class Laptop {
	
	@Autowired
	private ComputerProcessors processor;
	private String RAM;
	private String Harddisk;
	private String speakers;
	private String displayScreen;
	private String battery;
	
	
	public ComputerProcessors getProcessor() {
		return processor;
	}
	public void setProcessor(ComputerProcessors processor) {
		this.processor = processor;
	}
	public String getRAM() {
		return RAM;
	}
	public void setRAM(String rAM) {
		RAM = rAM;
	}
	public String getHarddisk() {
		return Harddisk;
	}
	public void setHarddisk(String harddisk) {
		Harddisk = harddisk;
	}
	public String getSpeakers() {
		return speakers;
	}
	public void setSpeakers(String speakers) {
		this.speakers = speakers;
	}
	public String getDisplayScreen() {
		return displayScreen;
	}
	public void setDisplayScreen(String displayScreen) {
		this.displayScreen = displayScreen;
	}
	public String getBattery() {
		return battery;
	}
	public void setBattery(String battery) {
		this.battery = battery;
	}

	public void info(){
		System.out.println("Newly launched laptop with processor:");
		processor.processor();
	}
	
}
