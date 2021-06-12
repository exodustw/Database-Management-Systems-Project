<?php
	@session_start();
	if(@$_SESSION["usercode"] != "" && @$_REQUEST["id"] != ""){
		require('sql.php');
		$query = sprintf("CALL PlaceDelete('%s','%s');",
			mysqli_real_escape_string($cn,$_SESSION["usercode"]),
			mysqli_real_escape_string($cn,$_REQUEST["id"]));
 		mysqli_query($cn,$query);
		echo "<script>location.replace('../mymap.php');</script>";
	}else{
		echo "<script>alert('刪除失敗');location.replace('../mymap.php');</script>";
	}
?>
