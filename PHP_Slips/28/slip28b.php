<html>
<form method=POST action=#>
Enter teacher name: <select name=teach>
<option value="Snigdha Prasad Shukla">Snigdha Prasad Shukla</option>
<option value="Vinayak Sambhaji More">Vinayak Sambhaji More</option>
<option value="Gloriya Kardile">Gloriya Kardile</option>
<option value="Pooja Ravi Kambale">Pooja Ravi Kambale</option>
<option value="Umeshwari Prataprao Patil">Umeshwari Prataprao Patil</option>
</select>
<input type=submit name=submit value=submit>
</form>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="slip28";
$conn = mysqli_connect($servername, $username, $password,$db);
if (!$conn) {
  die("Connection failed");
}
if(isset($_POST['submit']))
{
	if(isset($_POST['teach']))
	{
		$teach=$_POST['teach'];
		$query = "SELECT * from student,teacher,student_teacher 
							WHERE student.sno=student_teacher.sno
							AND teacher.tno=student_teacher.tno
							AND t_name='$teach'";
		
		$result=mysqli_query($conn,$query);
		
		if(!$result)
		{
			die("FAILED TO FETCH".mysqli_error($conn));
		}else{
			echo $teach;
			echo "<table border=2><tr align=center><th>sno</th><th>s_name</th><th>subject</th></tr>";
			while($d=mysqli_fetch_array($result))
			{
				echo "<tr align=center><td>".$d['sno']."</td><td>".$d['s_name']."</td><td>".$d['subject']."</td></tr>";
			}
			echo "</table>";
		}
	}else{
		echo "SELECT A FACULTY!!!";
	}
}

?>
