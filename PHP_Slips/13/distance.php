<html>
	<head>
		<title>Slip13</title>
	</head>
	<body>
		<h1 align=center>SLIP 13</h1>
	<form method=GET action=# align=center>
		<h2>Distance Calculator</h2>
		Enter Distance : <input type="text" name="d"><br><br>
		<b>Choose an operation</b><br>
		Convert Miles to Kilometers <input type="radio" name="op" value="1">
		<br>
		Convert Kilometers to Miles <input type="radio" name="op" value="2">
		<br><br>
		<input type="submit" name="submit" value="submit">
		<input type="reset" name="reset" value="reset">
	</form>
	</body>
</html>
<?php
function kmtom($x)
{
	$m = $x * (1/1.609);
	$m=round($m);
	echo "<h3>$x Kilometers = $m Miles<h3>";
}
function mtokm($y)
{
	$km = $y * 1.609;
	$km=round($km);
	echo "<h3>$y Miles = $km Kilometers</h3>";
}
echo "<body align=center><h2>Distance Calculator</h2>";
if(isset($_GET['submit'])){
$d = $_GET['d'];
$op = $_GET['op'];

switch($op)
{
	case 1:
		mtokm($d);
		break;
	
	case 2:
		kmtom($d);
		break;
		
	default:
		echo "Please select an Operation!!!";
		break;
}
echo "</body>";
}
?>