<?php
	@session_start();
	$_SESSION["usercode"] = "";
	echo "<script>location.replace('../index.php');</script>";
?>
