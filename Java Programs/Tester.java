import java.text.*;
import java.util.*;
import java.math.*;

class Employee
{
    int emp_id;
    String name;
    double salary;

    public int getEmp_id()
    {
        return emp_id;
    }
    public void setEmp_id(int Emp_id)
    {
        this.emp_id=Emp_id;
    }
    public int getName()
    {
        return name;
    }
    public void setName(int name)
    {
        this.name=name;
    }
    public int getSalary()
    {
        return salary;
    }
    public void setSalary(int salary)
    {
        this.salary=salary;
    }
    public Employee(int id,String name,double salary)
    {
        this.emp_id=id;
        this.name=name;
        this.salary=salary;
    }
    public Employee()
    {

    }
    public static double avg_salary(Employee[] e)
    {
        double sum;
        for(int i=0;i<e.length;i++)
        {
            sum=sum+e[i].getSalary();
        }
        return sum/e.length;
    }
}


public class Test
{
    public static void main(String args[])
    {
        Employee e[]=new Employee[3];
        Empoyee e1=new Employee();
        e[0]=new Employee(123,"abc",8000);
        e[1]=new Employee(523,"jbc",9000);
        e[2]=new Employee(323,"hbc",5000);
        double ans=e1.avg_salary(e);
    }
}