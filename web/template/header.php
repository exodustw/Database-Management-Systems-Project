<?php
	@session_start();
	if(@$_SESSION["usercode"] == ""){
		$html = "<a href=\"login.php\">".
		"<span>登入</span>".
		"<i class=\"ti-shift-right\"></i></a>";
	}else{
		$html = "<a href=\"#\">".
		"<span>Hello, Demo!</span>".
		"<i class=\"ti-angle-down\"></i></a>".
		"<ul class=\"show-notification profile-notification\">".
		"<li><a href=\"exec/logout.php\">".
		"<i class=\"ti-shift-right\"></i> 登出".
		"</a></li></ul>";
	}
	echo str_replace("<phpcontent>", $html, file_get_contents('template/header.html'));
?>
