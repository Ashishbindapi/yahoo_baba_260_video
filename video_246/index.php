<?php
class student{
	
	public $course = "PHP";
	private $first_name;
	private $last_name;

	public function setName($fname, $lname){
		$this->first_name = $fname;
		$this->last_name = $lname;
	}

	public function __sleep(){
		return array('first_name', 'last_name');
	}

	public function __wakeup(){
		echo "This is wakeup method.";
	}
	
}

$obj =new student();
$obj->setName("Yahoo", "Baba");

$srl = serialize($obj);

$us = unserialize($srl);

print_r($us);



?>