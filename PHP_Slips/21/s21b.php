<HTML>
	<HEAD>
		<TITLE>Subject Marks</TITLE>
	</HEAD>
	<FORM method=POST action=# align=center>
		<h1 align=center>Subject Marks</h1>
		<b>Enter marks:</b><br><br>
		Physics:<input type=number name=phy><br>
		Biology:<input type=number name=bio><br>
		Chemistry:<input type=number name=chem><br>
		Mathematics:<input type=number name=math><br>
		Marathi:<input type=number name=mar><br>
		English:<input type=number name=eng><br>
		<br>
		<input type=submit name=submit value=submit>
		<input type=reset name=reset value=reset>
	</FORM>
</HTML>
<?php
session_start();
if(isset($_POST['submit']))
{
	if(empty($_POST['phy'])||empty($_POST['bio'])||empty($_POST['chem'])||empty($_POST['math'])||empty($_POST['mar'])||empty($_POST['eng']))
	{
		echo "ALL FIELDS REQUIRED!!!";
	}else{
		$_SESSION['phy']=$_POST['phy'];
		$_SESSION['bio']=$_POST['bio'];
		$_SESSION['chem']=$_POST['chem'];
		$_SESSION['math']=$_POST['math'];
		$_SESSION['mar']=$_POST['mar'];
		$_SESSION['eng']=$_POST['eng'];
		header("LOCATION:s21c.php");
	}
}
?>