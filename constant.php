<?php 

	class UserData{

		public $user;
		public $userId;
		const NAME = "Faruk Khan";
		public static $age = "30";

		public function __construct($userName, $userId){
			$this->user = $userName;
			$this->userId = $userId;

			echo "Username is $this->user and userid is $this->userId";
		}

		public static function display(){
			echo "Full name is: ".UserData::NAME ."<br>";
			echo "Age is : ".self::$age; 
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
	UserData::display();


 ?>