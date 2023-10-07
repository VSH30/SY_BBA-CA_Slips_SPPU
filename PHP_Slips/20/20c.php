<?php 
session_start();
?>
<html>
<head>
<style>
.abc{
	font-family:<?php echo $_SESSION['fstyle']; ?>;
	color:<?php echo $_SESSION['fcolor']; ?>;
	font-size:<?php echo $_SESSION['fsize']; ?>;
}
</style>
</head>
<body class=abc bgcolor= "<?php echo $_SESSION['bgcolor']; ?>">
THIS IS SELECTED PREFERENCES!!!
</body>
</html>