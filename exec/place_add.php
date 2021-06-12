<?php
	@session_start();
	if(@$_SESSION["usercode"] != "" && @$_REQUEST["loc"] != "" &&
	 @$_REQUEST["lat"] != "-1" && @$_REQUEST["lng"] != "-1" && @$_REQUEST["type"] != ""){
		require('sql.php');
		$query = sprintf("CALL PlaceAdd('%s','%s','%s','%s','%s');",
			mysqli_real_escape_string($cn,$_SESSION["usercode"]),
			mysqli_real_escape_string($cn,$_REQUEST["loc"]),
			mysqli_real_escape_string($cn,$_REQUEST["lat"]),
			mysqli_real_escape_string($cn,$_REQUEST["lng"]),
			mysqli_real_escape_string($cn,$_REQUEST["type"]));
 		mysqli_query($cn,$query);
		//echo "<script>alert('新增成功');location.replace('../mymap.php');</script>";
		echo "<script>location.replace('../mymap.php');</script>";
	}else{
		echo "<script>alert('新增失敗');location.replace('../mymap.php');</script>";
	}
?>
