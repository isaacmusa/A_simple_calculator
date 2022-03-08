<!DOCTYPE html>
<html>

<head>

<meta charset="UTF-8">
<title>A Simple Calculator</title>
</head>

<body>

<form>
	<input type="number" name="num1" placeholder="Number 1">
	<input type="number" name="num2" placeholder="Number 2">
	<select name="operator">
		<option>None</option>
		<option>Add</option>
		<option>Subtract</option>
		<option>Multiply</option>
		<option>Divide</option>
		<option>Square</option>
		<option>Cube</option>
		<option>Squareroot</option>
	</select>
	<br>
	<button type=" submit" name="submit"  value="submit" >CALCULATE</button>


</form>

<?php
if(isset($_GET['submit'])) {
	$result1 = $_GET['num1'];
	$result2 = $_GET['num2'];
	$operator = $_GET['operator'];
	switch ($operator) {
		case "None":
			echo "Please select an valid operator!!!";
		break;
		case "Add":
			echo $result1 + $result2;
		break;
		case "Subtract":
			echo $result1 - $result2;
		break;
		case "Multiply":
			echo $result1 * $result2;
		break;
		case "Divide":
			echo $result1 / $result2;
		break;
		case "Square":
			echo pow($result1, 2);
		break;
		case "Cube":
			echo pow($result1, 3);
		break;
		case "Squareroot":
			if (empty($result1) && empty($result2)) {
				// code...
				echo "Please Enter A Number in Number 1 or Number 2";
			}
			elseif (empty($result1)) {
				// code...
				echo sqrt($result2);
			}
			elseif (Empty($result2)) {
				// code...
				echo sqrt($result1);
			}
			else {
				// code...
				echo  sqrt ($result1)." and ".sqrt($result2);
			}
			//echo  sqrt ($result1);
		break;



	}
}

?>
</body>


</html>
