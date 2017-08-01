<?php
session_start();
include("header.php");
?>
<html>
<body>
	<?php
		echo "Welcome  ".$_SESSION["member"];
	?>

</body>
</html>
<?php
include("footer.php");
session_destroy();
?>
