import java.sql.*;
import java.io.*;
 
 public class void main(String args[])
 {
	 Connection con=null;
	 Statement st=null;
	 
	 
	 Class.forName(com.mysql.jdbc.Driver);
	 con=DriverManager.getConnection("jdbc:mysql://localhost:3306/Students","root","8755");
	 st=con.CreateStatement();
	 String sql="Create table company"+"(name varchar(5)","age int(5)","fname varchar(10))";
	 
	 