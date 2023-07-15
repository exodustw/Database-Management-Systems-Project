<?php
	if(@$_REQUEST["gender"] != "" && @$_REQUEST["age"] != "" && @$_REQUEST["weather"] != "" && @$_REQUEST["car"] != ""){
		require('sql.php');
		$query = sprintf("CALL FortunePredict('%s','%s','%s','%s');",
			mysqli_real_escape_string($cn,$_REQUEST["gender"]),
			mysqli_real_escape_string($cn,$_REQUEST["age"]),
			mysqli_real_escape_string($cn,$_REQUEST["weather"]),
			mysqli_real_escape_string($cn,$_REQUEST["car"]));
		$data = mysqli_query($cn,$query);
		$count = @mysqli_num_rows($data);
		if($count > 0){
			$row = mysqli_fetch_array($data);
			if($row[0] == 0){
				echo "{\"Result\": 0}";
			}else{
				echo "{\"Result\": ".strval($row[0])."}";
			}
		}else{
			echo "{\"Result\": -1}";
		}
	}else{
		echo "{\"Result\": -2}";
	}
?>
