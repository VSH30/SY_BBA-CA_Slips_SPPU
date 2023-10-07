<HTML>
	<HEAD>
		<TITLE>Stud Info</TITLE>
	</HEAD>
	<FORM method=POST action=# align=center>
		<h1 align=center>Student Information</h1>
		Enter name:
		<input type=text name=name><br>
		Enter class:
		<input type=text name=class><br>
		Enter address:
		<input type=text name=addr><br>
		<input type=submit name=submit value=submit>
		<input type=reset name=reset value=reset>
	</FORM>
</HTML>
<?php
session_start();

if(isset($_POST['submit']))
{
	if(empty($_POST['name'])||empty($_POST['class'])||empty($_POST['addr']))
	{
		echo "ALL FIELDS REQUIRED!!!";
	}else{
		$_SESSION['name']=$_POST['name'];
		$_SESSION['class']=$_POST['class'];
		$_SESSION['addr']=$_POST['addr'];
		header("LOCATION:s21b.php");
	}
}
?>
