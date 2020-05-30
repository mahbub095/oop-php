<?php

class parentclass{

	public $eyes =2;
	public $legs= 2;

	public function bongsho(){
		return "ABCD";
	}
}

class childclass extends parentclass
{
	public $name ='XYZ';

}
$child = new childclass;
echo $child->bongsho();
echo "<br>";
echo $child->name;
?>