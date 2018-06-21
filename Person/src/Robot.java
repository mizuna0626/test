
public class Robot {
		public String name = null;
		public int age = 0;
		public String address
		= null;
		public String phonenumber = null;
		public void talk(){
			System.out.println(this.name+"が話す");
		}
		public void walk(){
		System.out.println(this.name + "が歩く");
		}
		public void run(){
		System.out.println(this.name + "が走る");
		}

		public Robot(){}
		public Robot(String name, int age){
			this.name = name;
			this.age =age;
		}
		public Robot(String name){
			this.name=name;
					this.age=0;
					}}