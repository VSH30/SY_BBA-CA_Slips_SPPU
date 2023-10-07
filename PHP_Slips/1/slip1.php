<?php
include("strfunc.php");

$ch = $_POST['r1'];
$str = $_POST['t1'];

switch($ch)
{
	case "vowel":
		totalvowel($str);
		break;
		
	case "palindrome":
		checkpalindrome($str);
		break;
	
	default:
		echo "Invalid Choice";
}

?>