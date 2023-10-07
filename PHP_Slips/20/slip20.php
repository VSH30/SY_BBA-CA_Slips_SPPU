
<html>
<form method=POST action=#>
Enter F style: <input type=text name=fstyle><br>
Enter F size: <input type=text name=fsize><br>
Enter F color: <input type=text name=fcolor><br>
Enter Bg Color: <input type=text name=bgcolor><br><br>

<input type=submit value=submit name=submit>
<input type=reset name=reset value=reset>
</html>

<?php
session_start();
if(isset($_POST['submit']))
{
	if(!empty($_POST['fstyle']) || !empty($_POST['fsize']) || !empty($_POST['fcolor']) || !empty($_POST['bgcolor']))
	{
		$_SESSION['fstyle']=$_POST['fstyle'];
		$_SESSION['fsize']=$_POST['fsize'];
		$_SESSION['fcolor']=$_POST['fcolor'];
		$_SESSION['bgcolor']=$_POST['bgcolor'];
		header('LOCATION:20b.php');
		echo "<a href='20b.php'>Click here to continue</a>";
	}else{
		echo "ALL DETAILS REQUIRED!!!";
	}
}

?>