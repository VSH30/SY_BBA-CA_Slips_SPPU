<?php
session_start();

if(empty($_SESSION['c']))
	$_SESSION['c']=1;
else
	$_SESSION['c']++;

echo $_SESSION['c'];
?>