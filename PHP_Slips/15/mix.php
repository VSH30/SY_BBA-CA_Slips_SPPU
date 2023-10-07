<?php
$na = array("Watermelon","Onions","Tomatoes","Ginger root","Bananas","Pineapple","Coconut","Grapes");
$ra = array(16,25,20,75,40,40,20,75);
?>
<html>
	<head>
		<title>slip15</title>
	</head>
	<body><h1 align=center>SLIP 15</h1>
	<form method=POST action="slip15.php" align=center>
		<h3>Items List</h3>
		<table align=center border=2>
			<tr align=center><th>SrNo.</th> <th>Select</th> <th>Item Name</th> <th>Rate</th></tr>
			<?php 
				for($i=0;$i<count($na);$i++)
				{
					echo "<tr align=center><td>".($i+1)."</td> <td><input type=checkbox name='s[]' value=$i></td> <td>$na[$i]</td> <td>$ra[$i]</td></tr>";
				}
			?>
		</table>
		<input type=submit name=submit value=submit>
		<input type=reset name=reset value=reset>
	</form>
	</body>
</html>
<?php
function dis($x,$y,$z,$o)
{
	echo "<tr align=center><td>".($o+1)."</td><td>$x[$z]</td><td>$y[$z]</td></tr>";
}
$cost = 0;
if(isset($_POST['submit'])){
if(empty($_POST['s']))
{
	echo "<br><h3 align=center>You haven't selected any item!!!</h3><br>";
}else{
		echo "<table border=1 align=center><tr><th>SrNo.</th><th>Item Name</th><th>Rate</th></tr>";
		$s = $_POST['s'];
		$n = count($s);
		for($i=0;$i<$n;$i++)
		{
			$op = $s[$i];
			dis($na,$ra,$op,$i);
			$cost = $cost + $ra[$op];
		}
		echo "<tr align=center><td colspan=2>TOTAL COST</td><td>$cost</td></tr></table>";
}
}
?>