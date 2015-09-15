<?php  
	class Person{

		# 

		public $name;
		public $age;
		public $id;


		public function __construct($a, $b){
			$this->name = $a;
			$this->age = $b;
			echo "construct is created <br>";
			echo "Person name is $this->name and person is $this->age <br>";
		}

		// public function personDetails(){
		// 	echo "Person name is $this->name and person is $this->age";
		// }

		public function setId($id){
			$this->id = $id;
		}

		public function __destruct(){
			if (!empty($this->id)) {
				echo "Saving Person";
			}
		}



	}

	$personOne = new Person("Faruk Khan", "27");
	// $personOne->personDetails();

	$personOne->setId(10);
	// unset($personOne);
?>