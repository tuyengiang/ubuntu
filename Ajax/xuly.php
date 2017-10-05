<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$a=$_POST["a"];
	$b=$_POST["b"];

	switch($_POST["tinh"]){
		case "+":
			echo "a+b= " .($a+$b);
			break;
		case "-":
			echo "a-b = ". ($a-$b);
			break;
		case "*":
			echo "a*b = ". ($a*$b);
			break;
		case "/":
			echo "a/b= ". ($a/$b);
			break;
	}
}
?>
