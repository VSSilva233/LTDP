<html>
<head>
<title>vinicius</title>
</head>
<body>
<?php
$num2 = 2;
	

for($num1 =1; $num1 < 4000000; $num1++){
	if ( ($num1 % $num2) == 0) {
		echo "<br/>Numero Par: " . $num1;
		
	}if ( ($num1 % $num2) == 1) {
		echo "<br/>Numero Impar: " . $num1;
		}
}
?>



</body>
</html>