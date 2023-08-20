package com.gmt.dev.products;

import org.junit.Before;
import org.junit.Test;
import org.springframework.beans.factory.annotation.Autowired;

import junit.framework.TestCase;

public class LaptopTesting extends TestCase {
	
	ComputerProcessors computerProcessor=null;
	@Before
	public void setUp(){
		computerProcessor= new IntelProcessor();
		System.out.println("Before test");
		
	}
	
	@Test
	public void testProcessor(){
		assertEquals("Processor with 2.4Ghz processing speed.", computerProcessor.processor());
	}

}
