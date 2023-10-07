<?php
session_start();
?>
<html>
<body>
<br>Font Style = <?php echo $_SESSION['fstyle']; ?>
<br>Font Color = <?php echo $_SESSION['fcolor']; ?>
<br>Font Size = <?php echo $_SESSION['fsize']; ?>
<br>Background Color = <?php echo $_SESSION['bgcolor']; ?>

<a href="20c.php">Click here to continue</a>
</body>
</html>