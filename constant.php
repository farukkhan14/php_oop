<?php 

	class UserData{

		public $user;
		public $userId;
		const NAME = "Faruk Khan";

		public function __construct($userName, $userId){
			$this->user = $userName;
			$this->userId = $userId;

			echo "Username is $this->user and userid is $this->userId";
		}

		public function display(){
			echo "Full name is: ".UserData::NAME;
		}

		public function __destruct(){
			unset($this->user);
			unset($this->userId);
		}
	}

	$user = "Faruk";
	$id = "34";
	$ur = new UserData($user, $id);
	echo "<br>";
	$ur->display();


 ?>