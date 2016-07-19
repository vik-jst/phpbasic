<?php
class jst
{
 	public $name;
	   function get_name($new_name){
	   	$this->name=$new_name;
	   }
	   function show_name(){
		echo "<h1>";
	   	echo $this->name;
	  	echo "</h1>";
	   }
}
?>

<?php
class jst_constuct
{
	public $name;
 	public $age;
    function __construct($yourname,$yourage)
    {
	  	$this->name=$yourname;
  	 	$this->age=$yourage;
  	 	
    }
   	function show_detail(){
  		echo $this->name;	 
 		echo $this->age;	
   }
}
?>

<?php
class father
{
	public $love;
	function get_nature($love)
	{
		echo "hlo i m parent";
		$this->love=$love;
	}
}
class son extends father
{
	public $angry;
	function get_nature($angry)
	{
		echo "hlo i m child";
		$this->angry=$angry;
	}
	function show_all()
	{
		echo $this->angry;
		echo $this->love;
	}
}
?>

<?php
class car   // static method is used in this class
{
	public static $ab;
	public static function get_value($new_val)
	{
		self::$ab=$new_val; //$this keyword cannot be used.
	}
	static function show_value()
	{
		echo self::$ab;
	}
}
?>

<?php
abstract class Animal
{
    public $name;
    public $age;
    public $address;
    public function Describe()
    {
        return $this->name . ", " . $this->age . " years old";    
    }
    abstract public function Greet($address);
}
class Dog extends Animal
{
    public function Greet($address)
    {
        return $address;    
    }
    
    //public function Describe()
   // {
     //   return Animal::Describe() . ", and this is Dog class!";    
    //}
}
?>

<?php
 interface pqr
 {
 public function get_myname(); 
 }

class xyz implements pqr
//class xyz
{

	public function get_myname()
	{
		echo "my name is vikas";
	} 
}
?>