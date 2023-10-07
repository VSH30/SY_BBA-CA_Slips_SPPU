<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
  die("Connection failed");
}

$query = "CREATE DATABASE slip28;";

$query .= "USE slip28;";

$query .= "CREATE TABLE student(sno int(5) PRIMARY KEY, s_name char(30), s_class char(10), s_addr char(50));";

$query .= "CREATE TABLE teacher(tno int(5) PRIMARY KEY, t_name char(35), qualification char(100), experience int(5));";

$query .= "CREATE TABLE student_teacher(sno int(5) REFERENCES student(sno), tno int(50) REFERENCES teacher(tno), subject char(15));";

$query .= "INSERT INTO student VALUES
						(1,'Vishal','SYBBACA','ABC'),
						(2,'Pranav','SYBBACA','DEF'),
						(3,'Rohit','SYBBACA','GHI'),
						(4,'Adnan','SYBBACA','JKL'),
						(5,'Siddesh','SYBBACA','MNO');";

$query .= "INSERT INTO teacher VALUES
						(18,'Snigdha Prasad Shukla','BE(computer)MCA',15),
						(7,'Vinayak Sambhaji More','M. Sc.(CS)',14),
						(13,'Gloriya Kardile','Msc(Comp.Sci)',3),
						(9,'Pooja Ravi Kambale','BCA AND MCA (Management) AND Ph.D Pursuing from SPPU',5),
						(19,'Umeshwari Prataprao Patil','M.Sc AND PGDBM AND MCA',13);";
						
$query .= "INSERT INTO student_teacher VALUES
						(1,9,'PHP'),
						(2,9,'PHP'),
						(3,9,'PHP'),
						(4,9,'PHP'),
						(5,9,'PHP'),
						(2,19,'BD'),
						(4,13,'SE'),
						(1,13,'SE'),
						(5,18,'DM'),
						(1,7,'DS'),
						(4,18,'DM'),
						(5,7,'DS'),
						(2,7,'DS');";
$r = mysqli_multi_query($conn,$query);
if(!$r)
{
	die("FAILED!!!");
}else{
	echo "DATABASE AND TABLES CREATED (VALUES ALSO INSERTED)!!!";
}
mysqli_close($conn);
?>