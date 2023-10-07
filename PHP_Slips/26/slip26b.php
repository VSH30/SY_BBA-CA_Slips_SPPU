<html>
<form method=POST action=#>
Enter Hospital name: <select name=hosp>
<option value="AAA">AAA</option>
<option value="BBB">BBB</option>
<option value="CCC">CCC</option>
</select>
<input type=submit name=submit value=submit>
</form>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="slip26";
$conn = mysqli_connect($servername, $username, $password,$db);
if (!$conn) {
  die("Connection failed");
}

if(isset($_POST['submit']))
{
	if(isset($_POST['hosp']))
	{
		$h=$_POST['hosp'];
		echo $h;
		$query = "SELECT * FROM doctor,hospital,doc_hos
							WHERE doc_hos.doc_no=doctor.doc_no 
							AND doc_hos.hosp_no=hospital.hosp_no 
							AND hosp_name='$h';";
		$result=mysqli_query($conn,$query);
		
		if(!$result)
		{
			die("FAILED TO GET DATA!!!".mysqli_error($conn));
		}else{
			echo "<table border=2><tr align=center><th>doc_no</th><th>doc_name</th><th>addr</th><th>city</th><th>area</th></tr>";
			while($d=mysqli_fetch_array($result))
			{
				echo "<tr align=center><td>".$d['doc_no']."</td><td>".$d['doc_name']."</td><td>".$d['address']."</td><td>".$d['city']."</td><td>".$d['area']."</td></tr>";
			}
			echo"</table>";
		}
	}else{
		echo "SELECT A HOSPITAL!!!";
	}
}