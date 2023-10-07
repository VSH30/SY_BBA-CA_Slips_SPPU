<html>
<form method=POST action=#>
Enter Username : <input type=text name=user value="<?php if(isset($_POST['submit'])) echo $_POST['user'];?>"><br>
Enter Password : <input type=password name=pass value="<?php if(isset($_POST['submit'])) echo $_POST['pass'];?>"><br>
<input type=submit value=submit name=submit>
<input type=reset value=reset name=reset>
</form>
</html>

<?php
session_start();
if(isset($_POST['submit']))
{
	$_SESSION['c'];
	$p = "abcd";
	$u = "VSH";
	if($_POST['user']==$u && $_POST['pass']==$p)
	{
		echo "DONE";
	}elseif($_SESSION['c']>2 && $_SESSION['c'] != NULL){
		echo "ERROR YOU HAVE ENTERED INCORRECT DETAILS FOR MORE THAN 3 TIMES!!!!";
	}else{
		if($_SESSION['c']==NULL){
			$_SESSION['c']=1;
			$x = 3-$_SESSION['c'];
		}else{
			$_SESSION['c']++;
			$x = 3-$_SESSION['c'];
		}
		
		echo "You have $x Chances to enter Right Userid and Password!!!";
	}
}

?>