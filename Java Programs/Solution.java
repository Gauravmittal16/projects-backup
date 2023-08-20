import java.util.*;
import java.math.*;

class Point
{
    double x,y;
    public Point(double x,double y)
    {
        this.x=x;
        this.y=y;
    }
}
public class Solution
{
    public static void main (String args[])
    {
        Point p1=new Point(10,20);
        Point p2=new Point(12,23);
        Point p3=new Point(22,60);
        Point res=high_distance_point(p1,p2,p3);
        System.out.format("Point with highest distance: %.2f %.2f",res.x,res.y);
    }
    public static high_distance_point(Point p1,Point p2,Point p3)
    {
        
        double d1=Math.sqrt(Math.pow(p1.x,2)+Math.pow(p1.y,2));
        double d2=Math.sqrt(Math.pow(p2.x,2)+Math.pow(p2.y,2));
        double d3=Math.sqrt(Math.pow(p3.x,2)+Math.pow(p3.y,2));

        return (d1>d2)?((d1>d3)?p1:p3):((d2>d3)?p2:p3);
    }
}