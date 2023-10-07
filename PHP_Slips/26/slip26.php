<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
  die("Connection failed");
}

$query = "CREATE DATABASE slip26;";

$query .= "USE slip26;";

$query .= "CREATE TABLE doctor(doc_no int(10) PRIMARY KEY, doc_name varchar(20), address varchar(20), city varchar(20), area varchar(20));";

$query .= "CREATE TABLE hospital(hosp_no int(10) PRIMARY KEY, hosp_name varchar(20), hosp_city varchar(20));";

$query .= "CREATE TABLE doc_hos(doc_no int(10) REFERENCES Doctor(doc_no),
															hosp_no int(10) REFERENCES Hospital(hosp_no));";

$query .= "INSERT INTO doctor VALUES(101,'Vishal','A','DE','JKL'),
																		(102,'Rohit','B','FG','MNO'),
																		(103,'Pranav','C','HI','PQR');";

$query .= "INSERT INTO hospital VALUES(901,'AAA','MUMBAI'),(902,'BBB','PUNE'),(903,'CCC','DELHI');";

$query .= "INSERT INTO doc_hos VALUES(101,901),(101,903),(102,902),(102,901),(103,903),(103,902);";

$r = mysqli_multi_query($conn,$query);
if(!$r)
{
	die("FAILED!!!");
}else{
	echo "DATABASE AND TABLES CREATED (VALUES ALSO INSERTED)!!!";
}
mysqli_close($conn);
?>