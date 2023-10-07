<html>
<form method=POST action=#>
Select Project: <select name=pname>
<option value="ABC">ABC</option>
<option value="DEF">DEF</option>
<option value="GHI">GHI</option>
</select>
<input type=submit name=submit value=submit>
</form>
</html>

<?php
$conn = mysqli_connect("localhost","root","","slip27");

if(!$conn)
	die("FAILED TO CONNECT".mysqli_connect_error($conn));
if(isset($_POST['submit']))
{
	$pname = $_POST['pname'];

	$query = "SELECT * FROM project,employee,proemp
						WHERE project.pno = proemp.pno 
						AND employee.eno = proemp.eno 
						AND project.p_name = '$pname';";
	
	$r = mysqli_query($conn,$query);
	
	if($r)
	{
		$i=0;
		while($arr = mysqli_fetch_array($r))
		{
			$i++;
			echo "<br>$i) Eno = ".$arr['eno']." || EName = ".$arr['e_name']." || Qual = ".$arr['qualification']." || JoinDate = ".$arr['joindate']." || Startdate = ".$arr['start_date']." || hrs_worked = ".$arr['hrs_worked'];
		}
	}else{
		die("FAILED TO FETCH".mysqli_error($conn));
	}
}

?>