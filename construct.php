<?php  
	class Person{

		# 

		public $name;
		public $age;

		public function __construct($a, $b){
			$this->name = $a;
			$this->age = $b;
			echo "construct is created <br>";
			echo "Person name is $this->name and person is $this->age";
		}

		// public function personDetails(){
		// 	echo "Person name is $this->name and person is $this->age";
		// }

	}

	$personOne = new Person("Faruk Khan", "27");
	// $personOne->personDetails();


?>