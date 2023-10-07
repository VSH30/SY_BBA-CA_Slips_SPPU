<HTML>
<form method=POST action=#>
Comp name: <select name=comp>
<option value="Coding">Coding</option>
<option value="Cricket">Cricket</option>
<option value="Chess">Chess</option>
</select>
<input type=submit name=submit value=submit>
</form>
</HTML>

<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db="slip30";
$conn = mysqli_connect($servername, $username, $password,$db);
if (!$conn) {
  die("Connection failed");
}

if(isset($_POST['submit']))
{
	if(isset($_POST['comp']))
	{
		$comp = $_POST['comp'];
		
		$query = "SELECT * FROM stud_comp,student,comp WHERE stud_comp.stud_id=student.stud_id AND stud_comp.c_no=comp.c_no AND rank=1 AND c_name='$comp';";
		
		$result = mysqli_query($conn,$query);
		
		if($result)
		{
			$arr = mysqli_fetch_array($result);
			echo "RANK 1 in $comp:<br>";
			echo "stud_id=".$arr['stud_id']."<br>student name=".$arr['name']."<br>class=".$arr['class'];
		}else{
			echo "hagg diya!!!";
		}
	}else{
		echo "SELECT A COMP!!!";
	}
}
?>