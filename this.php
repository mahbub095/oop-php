<!--  <?php
class student{
	public $name ="Mahbub";
	public function getName(){
		$name = 'Abdajfhbajfnakfl';
		return $name;
	}
}
$ob = new student;
echo $ob->getName();
?>  -->

<?php
class Student{
	public $name;
	public $age;



public function getName(){
	return $this->name;
}
public function getAge(){
	return $this->age;
}
public  function setName($name){
	$this->name= $name;
}
public function setAge($age){
	$this->age =$age;
}
}
$student = new Student;

$student ->setName("Mahbub");
$student ->setAge("24");


echo $student->getName();
echo $student->getAge();
?>