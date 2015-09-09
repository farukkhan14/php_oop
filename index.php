<?php 
	include 'functions.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Basic Calculator</title>
</head>
<body>
	<form action="" method="post">
		<table>
			<tr>
				<td>Enter the First Number :</td>
				<td><input type="number" name= "num1" value = "<?php echo $_POST['num1'];?>" ></td> 
			</tr>
			<tr>
				<td>Enter the Second Number :</td>
				<td><input type="number" name= "num2" value = "<?php echo $_POST['num2']; ?>"></td> 
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name= "Calcultion" val= "Calculate"></td> 
			</tr>
		</table>
	</form>
	<?php 
		if (isset($_POST['Calcultion'])) {
			$numOne = $_POST['num1'];
			$numTwo = $_POST['num2'];

			echo "First Number: $numOne & Second Number: $numTwo <br>";

			if (empty($numOne) or empty($numTwo)) {
				echo "<span style = 'color:red'> Field must not be empty !!!</span>";
			}else{
				$cal = new Calculation;
				$cal->add($numOne, $numTwo);
				$cal->sub($numOne, $numTwo);
				$cal->mul($numOne, $numTwo);
				$cal->div($numOne, $numTwo);
			}
		}


	 ?>
</body>
</html>