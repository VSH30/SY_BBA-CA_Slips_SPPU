<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
  die("Connection failed");
}

$query = "CREATE DATABASE slip30;";

$query .= "USE slip30;";

$query .= "CREATE TABLE student(stud_id int(3) PRIMARY KEY, name varchar(25), class varchar(10));";

$query .= "CREATE TABLE comp(c_no int(3) PRIMARY KEY, c_name varchar(25), type varchar(10));";

$query .= "CREATE TABLE stud_comp(stud_id int(3) REFERENCES student(stud_id), c_no int(3) REFERENCES comp(c_no), rank int(1));";

$query .= "INSERT INTO student VALUES(101,'Vishal','SYBBACA'),(102,'Rohit','SYBBACA'),(103,'Siddesh','SYBBACA'),(104,'Rohit S','SYBBACA');";

$query .= "INSERT INTO comp VALUES(111,'Coding','Indoor'),(222,'Cricket','Outdoor'),(333,'Chess','Indoor');";

$query .= "INSERT INTO stud_comp VALUES(101,111,1),(104,111,2),(103,111,3),
																				(102,222,1),(103,222,2),(104,222,3),
																				(104,333,1),(101,333,2),(103,333,3);";

$r = mysqli_multi_query($conn,$query);
if(!$r)
{
	die("FAILED!!!");
}else{
	echo "DATABASE AND TABLES CREATED (VALUES ALSO INSERTED)!!!";
}
mysqli_close($conn);
?>