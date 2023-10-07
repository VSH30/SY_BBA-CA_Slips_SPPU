<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
  die("Connection failed");
}

$query = "CREATE DATABASE slip29;";

$query .= "USE slip29;";

$query .= "CREATE TABLE movie(m_no int(3) PRIMARY KEY, m_name varchar(20), r_year int(4));";

$query .= "CREATE TABLE actor(actor_no int(3) PRIMARY KEY, actor_name varchar(20));";

$query .= "CREATE TABLE mov_act(m_no int(3) REFERENCES movie(m_no), actor_no int(3) REFERENCES actor(actor_no));";

$query .= "INSERT INTO movie VALUES(101,'ZZZ',2019),(102,'YYY',2016),(103,'XXX',2022);";

$query .= "INSERT INTO actor VALUES(222,'ABCDE'),(444,'FGHIJ'),(666,'KLMNO'),(888,'PQRST'),(999,'UVWXYZ');";

$query .= "INSERT INTO mov_act VALUES(101,222),(101,888),(101,999),(102,444),(102,666),(102,888),(103,222),(103,444),(103,999),(103,666);";

$r = mysqli_multi_query($conn,$query);
if(!$r)
{
	die("FAILED!!!");
}else{
	echo "DATABASE AND TABLES CREATED (VALUES ALSO INSERTED)!!!";
}
mysqli_close($conn);
?>