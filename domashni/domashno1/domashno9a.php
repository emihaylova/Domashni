<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Task2</title>
</head>
<body>
	<form action="Task2.php" method="get">
		side A
		<input type="text" name="sideA">
		side B
		<input type="text" name="sideB">	
		side C
		<input type="text" name="sideC">
		<input type="submit" name="submit" value="check">		
	</form>

	<?php
//Write a program that checks  
//if three side lengths can make a triangle.

	if (!empty($_GET['submit'])) {
		$sideA = $_GET['sideA'];
		$sideB = $_GET['sideB'];
		$sideC = $_GET['sideC'];

		
		if (($sideA-$sideB)<$sideC) {
			if ($sideC<($sideA+$sideB)) {
				echo "Valid triangle"; 
			} else {
				echo "Not a valid triangle";

			}
		}
	}
	?>