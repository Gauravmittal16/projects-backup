package com.gmt.dev.products;

import org.springframework.stereotype.Component;

@Component
public class IntelProcessor implements ComputerProcessors{

	public String processor() {
		String process="Processor with 2.4Ghz processing speed.";
		return process;
	}

}
