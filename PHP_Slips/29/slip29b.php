<html><body>
<form method=POST action=#>
Choose and Option:<br><br>
<input type=radio name=op value=1>
Accept actor name and display movies<br>
<input type=radio name=op value=2>
Insert new Movie Info<br>
<input type=radio name=op value=3>
Update the release year of movie<br>
<input type=submit name=next value=next>

<?php
 session_start();
if(isset($_POST['next']))
{
	if(isset($_POST['op']))
	{
		$c=$_POST['op'];
		if($c==1)
		{
			$_SESSION['cc']=1;
			echo "Enter actor name :<select name='aname'><option value=ABCDE>ABCDE</option><option value=FGHIJ>FGHIJ</option><option value=KLMNO>KLMNO</option><option value=PQRST>PQRST</option><option value=UVWXYZ>UVWXYZ</option></select>";
		}elseif($c==2){
			$_SESSION['cc']=2;
			echo "Enter movie no. : <input type ='number' name='n1'><br>
					Enter movie name : <input type='text' name='mname'><br>
					Enter release year of movie : <input type='number' name ='y1'>";
		}elseif($c==3){
			$_SESSION['cc']=3;
			echo "Enter the movie name : <select name='mname'><option value=ZZZ>ZZZ</option><option value=YYY>YYY</option><option value=XXX>XXX</option></select> <br>
			Enter the updated movie year :<input type ='number' name ='y2'>";
		}
	}
}
?>

<input type=submit name=submit value=submit>
</form>

</body></html>

<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db="slip29";
$conn = mysqli_connect($servername, $username, $password,$db);
if (!$conn)
{
  die("Connection failed");
}
$cc=$_SESSION['cc'];
if($cc==1)
{
	$aname=$_POST['aname'];
	$query = "SELECT * from movie,actor,mov_act where movie.m_no=mov_act.m_no AND actor.actor_no=mov_act.actor_no AND actor_name='$aname'";
	$result=mysqli_query($conn,$query);
	if($result)
	{
		while($arr=mysqli_fetch_array($result))
		{
			echo "<br> movie no=".$arr['m_no']."|| movie name =".$arr['m_name']."|| year=".$arr['r_year'];
		}
	}
}elseif($cc==2){
	if($_POST['submit'])
	{
		if(!empty($_POST['n1']) && !empty($_POST['mname']) && !empty($_POST['y1']))
		{
			$n1=$_POST['n1'];
			$mname=$_POST['mname'];
			$y=$_POST['y1'];
		
			$query = "INSERT INTO movie VALUES($n1,'$mname',$y)";
			$result=mysqli_query($conn,$query);
			if(!$result)
			{
				die("FAILED TO INSERT!!!".mysqli_error($conn));
			}else{
				echo "INSERTED!!!";
			}
		}else{
			echo "ALL FIELDS MANDATORY!!!";
		}
	}
}elseif($cc==3){
	if(isset($_POST['submit']))
	{
		if(!empty($_POST['mname']) && !empty($_POST['y2']))
		{
			$m = $_POST['mname'];
			$y = $_POST['y2'];
			$query = "UPDATE movie SET r_year='$y' WHERE m_name='$m'";
			$result=mysqli_query($conn,$query);
			if(!$result)
			{
				die("FAILED TO UPDATE".mysqli_error($conn));
			}else{
				echo "UPDATED!!!";
			}
		}
	}
}
?>