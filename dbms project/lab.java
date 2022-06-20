interface handle_alarm
{
	void what_to_do();
	final int  max_time_to_sleep = 10;

}
class student implements handle_alarm
{
	public void what_to_do(){

	}

	public void display()
	{
		System.out.println("implements");

	}
}
class faculty implements handle_alarm
{
	public void what_to_do()
	{

	}

	public void display()
	{
		System.out.println("implements ");

	}
}
public class lab{
	public static void main(String[] args){
		student s1 = new student();
		faculty f1 = new faculty();
		s1.display();
		f1.display();


}
}