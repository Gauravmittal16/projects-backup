package com.gmt.dev.products;

import org.springframework.context.ApplicationContext;
import org.springframework.context.annotation.AnnotationConfigApplicationContext;

/**
 * Hello world!
 *
 */
public class App 
{
    public static void main( String[] args )
    {
       
        ApplicationContext appContext=new AnnotationConfigApplicationContext(ApplicationConfig.class);
        Laptop laptop=appContext.getBean(Laptop.class);
        laptop.info();
    }
}
