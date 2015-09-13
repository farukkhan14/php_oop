<?php 

	class Person{
		public $name = "faruk";
		public $age = "27";

		public function personInfo(){
			echo "Person Name: ". $this->name. " & " ."Age: ". $this->age;
		}

	}	
	$a = new person;
	// $a->name = "Faruk khan";
	// $a->age = "27";
	$a->personInfo(); 	



 ?>