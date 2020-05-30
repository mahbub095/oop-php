<?php

 class person {
 	public $name="Mahbub";
 	public $age =29;

 	public function fullname(){

    return"My name is Mahbub"; 		
 	}

 }


 $obj =new person;
 echo  $obj->name;
 echo  $obj->fullname();

?>
