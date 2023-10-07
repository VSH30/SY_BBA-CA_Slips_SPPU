<?php
$patt = "^[a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
$email = "hanchnoli@gmail.com";
if(!preg_match($patt,$email))
	echo "INVALID EMAIL!!!";
else
	echo "VALID EMAIL!!!";
?>