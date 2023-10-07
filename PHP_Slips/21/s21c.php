<?php session_start();?>
<HTML>
<HEAD>
	<TITLE>RESULT</TITLE>
</HEAD>
<BODY>
	<h1 align=center>Result</h1>
	<table border=2 align=center>
		<tr><td>Name</td><th colspan=3><?php echo $_SESSION['name']?></th></tr>
		<tr><td>Class</td><th colspan=3><?php echo $_SESSION['class']?></th></tr>
		<tr align=center><th>Sr No.</th><th>Subject</th><th>Marks</th><th>Max Marks</th></tr>
		<tr align=center><td>1</td><td>Physics</td><td><?php echo $_SESSION['phy']?></td><td>100</td></tr>
		<tr align=center><td>2</td><td>Biology</td><td><?php echo $_SESSION['bio']?></td><td>100</td></tr>
		<tr align=center><td>3</td><td>Chemistry</td><td><?php echo $_SESSION['chem']?></td><td>100</td></tr>
		<tr align=center><td>4</td><td>Mathematics</td><td><?php echo $_SESSION['math']?></td><td>100</td></tr>
		<tr align=center><td>5</td><td>Marathi</td><td><?php echo $_SESSION['mar']?></td><td>100</td></tr>
		<tr align=center><td>6</td><td>English</td><td><?php echo $_SESSION['eng']?></td><td>100</td></tr>
		<?php $t=$_SESSION['phy']+$_SESSION['bio']+$_SESSION['chem']+$_SESSION['math']+$_SESSION['mar']+$_SESSION['eng']?>
		<tr><td colspan=2>TOTAL MARKS</td><th><?php echo $t?></th><th>600</th></tr>
		<tr><th colspan=4>Percentage = <?php echo(round(($t/600)*100))?></th></tr>
	</table>
</BODY>
</HTML>