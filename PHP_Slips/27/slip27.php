<?php
$conn = mysqli_connect("localhost","root","");

if(!$conn)
	die("FAILED TO CONNECT".mysqli_connect_error($conn));

$query = "CREATE DATABASE slip27;";

$query .= "USE slip27;";

$query .= "CREATE TABLE project(pno int(3) PRIMARY KEY, p_name char(30), ptype char(20), duration int(5));";

$query .= "CREATE TABLE employee(eno int(3) PRIMARY KEY, e_name char(20), qualification char(15), joindate date);";

$query .= "CREATE TABLE proemp(pno int(3) REFERENCES project(pno),
																eno int(3) REFERENCES employee(eno),
																start_date date,
																hrs_worked int(3));";

$query .= "INSERT INTO project VALUES(101,'ABC','ZZZ',12),(102,'DEF','YYY',10),(103,'GHI','XXX',8);";

$query .= "INSERT INTO employee VALUES(901,'Abhishek','AA','2003-01-02'),
																			(902,'Vishal','BB','2000-04-30'),
																			(903,'Pranav','CC','2002-09-22'),
																			(904,'Rohit','DD','2002-07-21'),
																			(905,'Siddesh','EE','2002-06-20');";

$query .= "INSERT INTO proemp VALUES(101,901,'2002-09-20',10),(101,905,'2002-07-18',41),(101,904,'2002-05-17',22),
																		(102,903,'2003-04-16',23),(102,902,'2003-01-14',24),(102,901,'2004-12-19',33),
																		(103,904,'2003-04-20',34),(103,905,'2004-07-22',45),(103,903,'2002-03-18',61),(103,902,'2003-02-10',69);";
$r = mysqli_multi_query($conn,$query);

if(!$r)
	die("HAGG DIYA".mysqli_error($r));
else
	echo "SUCCESSFULL";
?>