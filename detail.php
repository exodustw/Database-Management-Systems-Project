<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <title>台北 先看才行</title>
	<!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="CodedThemes">
	<meta name="keywords" content="道路, 安全, 交通, 事故">
	<meta name="author" content="717DB">
	<!-- Favicon icon -->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
	<!-- Google font-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
	<!-- Required Fremwork -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
	<!-- themify-icons line icon -->
	<link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
	<!-- ico font -->
	<link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
	<!-- Style.css -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">

	<!-- Required Jquery -->
	<script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
	<script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
	<!-- jquery slimscroll js -->
	<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
	<!-- modernizr js -->
	<script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
	<!-- am chart -->
	<script src="assets/pages/widget/amchart/amcharts.min.js"></script>
	<script src="assets/pages/widget/amchart/serial.min.js"></script>
	<!-- Todo js -->
	<script type="text/javascript " src="assets/pages/todo/todo.js "></script>
	<!-- Custom js -->
	<script type="text/javascript" src="assets/pages/dashboard/custom-dashboard.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>
	<script type="text/javascript " src="assets/js/SmoothScroll.js"></script>
	<script src="assets/js/pcoded.min.js"></script>
	<script src="assets/js/demo-12.js"></script>
	<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>

	<script src="https://js.api.here.com/v3/3.1/mapsjs-core.js"
	type="text/javascript" charset="utf-8"></script>
	<script src="https://js.api.here.com/v3/3.1/mapsjs-service.js"
	type="text/javascript" charset="utf-8"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"
        type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" type="text/css"
        href="https://js.api.here.com/v3/3.1/mapsjs-ui.css" />
	<script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>
</head>

<body>
    <!-- Pre-loader start 載入圖樣-->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">

                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <!-- [ Header ] start -->
            <nav class="navbar header-navbar pcoded-header">
				<?php
					require('template/header.php');
				?>
            </nav>
            <!-- [ Header ] end -->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    <!-- [ navigation menu ] start -->
                    <nav class="pcoded-navbar">
						<?php
							require('template/navbar.php');
						?>
                    </nav>
                    <!-- [ navigation menu ] end -->
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-md-12 col-xl-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>事故詳細資料</h5>
														<span>顯示指定事故的詳細資料</span>
                                                        <div class="card-header-left ">
                                                        </div>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="icofont icofont-simple-left "></i></li>
                                                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                                                <li><i class="icofont icofont-error close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
														<?php
															function formatter($in){
																if(mb_strpos($in,"區") !== false){
																	$mid = mb_substr($in,mb_strpos($in,"區") + 1,mb_strlen($in)-mb_strpos($in,"區")-1);
																}else{
																	$mid = $in;
																}
																if(mb_strpos($mid,"橋") !== false){
																	if(mb_strpos($mid,"大橋") !== false){
																		$mid = mb_substr($mid,mb_strpos($mid,"橋") - 3,4);
																	}else{
																		$mid = mb_substr($mid,mb_strpos($mid,"橋") - 2,3);
																	}
																}else if(mb_strpos($mid,"口") !== false){
																	if(mb_strpos($mid,"口") != mb_strlen($mid) -1){
																		//簡單取後
																		$mid = mb_substr($mid,mb_strpos($mid,"口") + 1,mb_strlen($mid)-mb_strpos($mid,"口")-1);
																		if(mb_strpos($mid,"口") !== false){
																			$mid = mb_substr($mid,0,mb_strlen($mid)-1);
																		}
																	}else{
																		$mid = mb_substr($mid,0,mb_strlen($mid)-1);
																	}
																}
																//echo "<p>mid: ".$mid."</p>";
																if(mb_strpos($mid,"與") !== false){
																	$out = str_replace("與","%20%40%20",$mid);
																}else{
																	$out = str_replace(" ","%20%40%20",$mid);
																}
																//echo "<p>out: ".$out."</p>";
																return $out;
															}

															if(@$_GET["year"] != "" && $_GET["month"] != "" && $_GET["day"] != "" &&
															 $_GET["hour"] != "" && $_GET["minute"] != "" && $_GET["type"] != "" &&
															 $_GET["loc"] != ""){
																require('exec/sql.php');
	 															$query = sprintf("CALL AccidentInquire_XY('%s','%s','%s','%s','%s','%s','%s');",
	 																mysqli_real_escape_string($cn,$_GET["year"]),
	 																mysqli_real_escape_string($cn,$_GET["month"]),
	 																mysqli_real_escape_string($cn,$_GET["day"]),
	 																mysqli_real_escape_string($cn,$_GET["hour"]),
	 																mysqli_real_escape_string($cn,$_GET["minute"]),
	 																mysqli_real_escape_string($cn,$_GET["type"]),
	 																mysqli_real_escape_string($cn,$_GET["loc"]));
	 															$data = mysqli_query($cn,$query);
																//echo $query;
	 															$darr = array();
																$count = mysqli_num_rows($data);
																if($count > 0){
																	while($row = mysqli_fetch_assoc($data)){
		 																array_push($darr, $row);
		 															}
																	$t1 = "日期：".$darr[0]["發生年"]."/".$darr[0]["發生月"]."/".$darr[0]["發生日"];
																	$t2 = "時間：".str_pad($darr[0]["發生時"],2,"0",STR_PAD_LEFT).":".str_pad($darr[0]["發生分"],2,"0",STR_PAD_LEFT);
																	$t3 = "天氣：".$darr[0]["天候名稱"];
																	$t4 = "發生區域：".$darr[0]["區序"];
																	$t5 = "詳細地點：".$darr[0]["肇事地點"];
																	if($darr[0]["處理別"] == 1){
																		$t6 = "處理類型：".$darr[0]["處理別名稱"]." (造成人員當場或二十四小時內死亡之交通事故)";
																	}elseif($darr[0]["處理別"] == 2){
																		$t6 = "處理類型：".$darr[0]["處理別名稱"]." (造成人員受傷或超過二十四小時死亡之交通事故)";
																	}else{
																		$t6 = "處理類型：".$darr[0]["處理別名稱"];
																	}
																	$t7 = "道路型態：".$darr[0]["道路型態名稱"];
																	$t8 = "事故位置：".$darr[0]["事故位置名稱"];
																}else{
																	echo "<h5>查無資料</h5>";
																}
															}else if($_GET["id"] != ""){
																require('exec/sql.php');
	 															$query = sprintf("CALL AccidentInquire_XY2('%s');",
	 																mysqli_real_escape_string($cn,$_GET["id"]));
	 															$data = mysqli_query($cn,$query);
																//echo $query;
	 															$darr = array();
																$count = mysqli_num_rows($data);
																if($count > 0){
																	while($row = mysqli_fetch_assoc($data)){
		 																array_push($darr, $row);
		 															}
																	$t1 = "日期：".$darr[0]["發生年"]."/".$darr[0]["發生月"]."/".$darr[0]["發生日"];
																	$t2 = "時間：".str_pad($darr[0]["發生時"],2,"0",STR_PAD_LEFT).":".str_pad($darr[0]["發生分"],2,"0",STR_PAD_LEFT);
																	$t3 = "天氣：".$darr[0]["天候名稱"];
																	$t4 = "發生區域：".$darr[0]["區序"];
																	$t5 = "詳細地點：".$darr[0]["肇事地點"];
																	if($darr[0]["處理別"] == 1){
																		$t6 = "處理類型：".$darr[0]["處理別名稱"]." (造成人員當場或二十四小時內死亡之交通事故)";
																	}elseif($darr[0]["處理別"] == 2){
																		$t6 = "處理類型：".$darr[0]["處理別名稱"]." (造成人員受傷或超過二十四小時死亡之交通事故)";
																	}else{
																		$t6 = "處理類型：".$darr[0]["處理別名稱"];
																	}
																	$t7 = "道路型態：".$darr[0]["道路型態名稱"];
																	$t8 = "事故位置：".$darr[0]["事故位置名稱"];
																}else{
																	echo "<h5>查無資料</h5>";
																}
															}else{
																echo "<p>參數有誤</p>";
															}
														?>
														<!-- Row start -->
														<div class="row">
															<div class="col-lg-12 col-xl-12">
																<!-- Nav tabs -->
																<ul class="nav nav-tabs md-tabs " role="tablist">
																	<li class="nav-item">
																		<a class="nav-link active" data-toggle="tab" href="#a1" role="tab">
																		  <i class="ti-time">
																		  </i>時間與天氣</a>
																		<div class="slide"></div>
																	</li>
																	<li class="nav-item">
																		<a class="nav-link" data-toggle="tab" href="#a3" role="tab">
																		  <i class="ti-location-pin">
																		  </i>地點</a>
																		<div class="slide"></div>
																	</li>
																	<li class="nav-item">
																		<a class="nav-link" data-toggle="tab" href="#a4" role="tab">
																		  <i class="ti-clipboard">
																		  </i>處理類型</a>
																		<div class="slide"></div>
																	</li>
																	<li class="nav-item">
																		<a class="nav-link" data-toggle="tab" href="#a5" role="tab">
																		  <i class="ti-car">
																		  </i>道路型態與事故位置</a>
																		<div class="slide"></div>
																	</li>
																</ul>
																<!-- Tab panes -->
																<div class="tab-content card-block">
																	<div class="tab-pane active" id="a1" role="tabpanel">
																		<p class="m-0"><?php echo @$t1; ?></p>
																		<p class="m-0"><?php echo @$t2; ?></p>
																		<p class="m-0"><?php echo @$t3; ?></p>
																	</div>
																	<div class="tab-pane" id="a3" role="tabpanel">
																		<p class="m-0"><?php echo @$t4; ?></p>
																		<p class="m-0"><?php echo @$t5; ?></p>
																	</div>
																	<div class="tab-pane" id="a4" role="tabpanel">
																		<p class="m-0"><?php echo @$t6; ?></p>
																	</div>
																	<div class="tab-pane" id="a5" role="tabpanel">
																		<p class="m-0"><?php echo @$t7; ?></p>
																		<p class="m-0"><?php echo @$t8; ?></p>
																	</div>
																</div>
															</div>
														</div>
														<!-- Row end -->
                                                    </div>
                                                </div>
												<div class="card">
                                                    <div class="card-header">
                                                        <h5>當事人情形</h5>
														<span>各當事人狀態表</span>
                                                        <div class="card-header-left ">
                                                        </div>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="icofont icofont-simple-left "></i></li>
                                                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                                                <li><i class="icofont icofont-error close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
														<div class="card-block table-border-style">
	                                                        <div class="table-responsive">
	                                                            <table class="table">
	                                                                <thead>
	                                                                    <tr>
	                                                                        <th>#</th>
	                                                                        <th>性別</th>
	                                                                        <th>受傷程度</th>
	                                                                        <th>車種</th>
	                                                                    </tr>
	                                                                </thead>
	                                                                <tbody>
	  																  	<?php
  																			foreach ($darr as $dr){
  																				if($dr["受傷程度"] == 1 || $dr["受傷程度"] == 5){
  																					echo "<tr class=\"table-danger clickable-row\">";
  																				}else{
  																					echo "<tr class=\"clickable-row\">";
  																				}
  																				echo "<th scope=\"row\">".$dr["當事人序"]."</th>";
  		                                                                        echo "<td>".$dr["性別名稱"]."</td>";
  		                                                                        echo "<td>".$dr["受傷程度名稱"]."</td>";
  		                                                                        echo "<td>".$dr["車種名稱"]."</td></tr>";
  																			}
	  																   	?>
	                                                                </tbody>
	                                                            </table>
	                                                        </div>
	                                                    </div>
                                                    </div>
                                                </div>
												<div class="card">
                                                    <div class="card-header">
                                                        <h5>事發地圖</h5>
														<span>目前僅收錄部分肇事資料GPS紀錄。</span>
                                                        <div class="card-header-left ">
                                                        </div>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="icofont icofont-simple-left "></i></li>
                                                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                                                <li><i class="icofont icofont-error close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
														<div style="height: 480px" id="mapContainer"></div>
														<?php
															if($darr[0]["lat"] !== NULL && $darr[0]["lng"] !== NULL){
																echo "<p>本GPS資訊由臺北市道路交通事故斑點圖提供。</p>";
															}else{
																echo "<p>本GPS資訊由Here Geocoding API提供。</p>";
															}
														?>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="styleSelector">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fixed-button">
                    <a href="index.php" target="_blank" class="btn btn-md btn-primary">
                      <i class="fa fa-shopping-cart" aria-hidden="true"></i> Home
                    </a>
                </div>
            </div>
        </div>
		<script type="text/javascript">
			function geocoding(){
				var x = 0, y = 0;
				$.ajax({
					url: 'https://geocoder.ls.hereapi.com/6.2/geocode.json?' +
					'apiKey=5eC9DPQE_kq4eCyxcexplsLVbWqwye-t7HWEEPJ_HF0&city=Taipei&street=' +
					'<?php if($darr[0]["lat"] === NULL || $darr[0]["lng"] === NULL) echo formatter($darr[0]["肇事地點"]); ?>',
					type: 'GET',
					dataType: 'json',
					async : false,
					success: function(Jdata) {
						x = Jdata.Response.View[0].Result[0].Location.DisplayPosition.Latitude;
						y = Jdata.Response.View[0].Result[0].Location.DisplayPosition.Longitude;
					},
			  		error: function() {
		  			}
				});
				return [x, y];
			}

			var platform = new H.service.Platform({
				'apikey': '5eC9DPQE_kq4eCyxcexplsLVbWqwye-t7HWEEPJ_HF0'
			});
			// Obtain the default map types from the platform object:
			var defaultLayers = platform.createDefaultLayers({
			    lg: 'zh-TW'
			 });

			// Instantiate (and display) a map object:
			var map = new H.Map(
				document.getElementById('mapContainer'),
				defaultLayers.vector.normal.map,
				{
				  	zoom: 15,
				  	center: { lat: 25.047551, lng: 121.543838}
				});

			// Define a variable holding SVG mark-up that defines an icon image:
			var svgMarkup = '<svg width="48" height="48" aria-hidden="true" ' +
			'focusable="false" data-prefix="fas" data-icon="car-crash" ' +
			'class="svg-inline--fa fa-car-crash fa-w-20" role="img" ' +
			'xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">' +
			'<path fill="#EB0028" d="M143.25 220.81l-12.42 46.37c-3.01' +
			' 11.25-3.63 22.89-2.41 34.39l-35.2 28.98c-6.57 5.41-16.31-.43-14.' +
			'62-8.77l15.44-76.68c1.06-5.26-2.66-10.28-8-10.79l-77.86-7.55c-8.47-' +
			'.82-11.23-11.83-4.14-16.54l65.15-43.3c4.46-2.97 5.38-9.15 1.98-13.29L21' +
			'.46 93.22c-5.41-6.57.43-16.3 8.78-14.62l76.68 15.44c5.26 1.06 ' +
			'10.28-2.66 10.8-8l7.55-77.86c.82-8.48 11.83-11.23 16.55-4.14l43.3' +
			' 65.14c2.97 4.46 9.15 5.38 13.29 1.98l60.4-49.71c6.57-5.41 16.3.43' +
			' 14.62 8.77L262.1 86.38c-2.71 3.05-5.43 6.09-7.91 9.4l-32.15 42.97-10' +
			'.71 14.32c-32.73 8.76-59.18 34.53-68.08 67.74zm494.57 132.51l-12.42 ' +
			'46.36c-3.13 11.68-9.38 21.61-17.55 29.36a66.876 66.876 0 0 1-8.76 ' +
			'7l-13.99 52.23c-1.14 4.27-3.1 8.1-5.65 11.38-7.67 9.84-20.74 14.68-33.54' +
			' 11.25L515 502.62c-17.07-4.57-27.2-22.12-22.63-39.19l8.28-30.91-247.28-66.' +
			'26-8.28 30.91c-4.57 17.07-22.12 27.2-39.19 22.63l-30.91-8.28c-12.8-3.43-21' +
			'.7-14.16-23.42-26.51-.57-4.12-.35-8.42.79-12.68l13.99-52.23a66.62 66.62 0' +
			' 0 1-4.09-10.45c-3.2-10.79-3.65-22.52-.52-34.2l12.42-46.37c5.31-19.8' +
			' 19.36-34.83 36.89-42.21a64.336 64.336 0 0 1 18.49-4.72l18.13-24.23' +
			' 32.15-42.97c3.45-4.61 7.19-8.9 11.2-12.84 8-7.89 17.03-14.44 26.74' +
			'-19.51 4.86-2.54 9.89-4.71 15.05-6.49 10.33-3.58 21.19-5.63 32.24-6.04' +
			' 11.05-.41 22.31.82 33.43 3.8l122.68 32.87c11.12 2.98 21.48 7.54 30.85' +
			' 13.43a111.11 111.11 0 0 1 34.69 34.5c8.82 13.88 14.64 29.84 16.68 ' +
			'46.99l6.36 53.29 3.59 30.05a64.49 64.49 0 0 1 22.74 29.93c4.39 11.88 ' +
			'5.29 25.19 1.75 38.39zM255.58 234.34c-18.55-4.97-34.21 4.04-39.17 ' +
			'22.53-4.96 18.49 4.11 34.12 22.65 39.09 18.55 4.97 45.54 15.51 ' +
			'50.49-2.98 4.96-18.49-15.43-53.67-33.97-58.64zm290.61 28.17l-' +
			'6.36-53.29c-.58-4.87-1.89-9.53-3.82-13.86-5.8-12.99-17.2-23.01' +
			'-31.42-26.82l-122.68-32.87a48.008 48.008 0 0 0-50.86 17.61l-32.15' +
			' 42.97 172 46.08 75.29 20.18zm18.49 54.65c-18.55-4.97-53.8 15.31-58.75' +
			' 33.79-4.95 18.49 23.69 22.86 42.24 27.83 18.55 4.97 34.21-4.04 ' +
			'39.17-22.53 4.95-18.48-4.11-34.12-22.66-39.09z"></path></svg>';

			<?php
				if($darr[0]["lat"] !== NULL && $darr[0]["lng"] !== NULL){
					echo "var geoResult = [ ".$darr[0]["lat"].", ".$darr[0]["lng"]." ]";
				}else{
					echo "var geoResult = geocoding();";
				}
			?>
			// Create an icon, an object holding the latitude and longitude, and a marker:
			var icon = new H.map.Icon(svgMarkup),
				coords = {lat: geoResult[0], lng: geoResult[1]},
				marker = new H.map.Marker(coords, {icon: icon});

			// Add the marker to the map and center the map at the location of the marker:
			map.addObject(marker);
			map.setCenter(coords);
			//map.setCenter(coords);
			var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));
			var ui = H.ui.UI.createDefault(map, defaultLayers);
		</script>

<script>
var $window = $(window);
var nav = $('.fixed-button');
    $window.scroll(function(){
        if ($window.scrollTop() >= 200) {
         nav.addClass('active');
     }
     else {
         nav.removeClass('active');
     }
 });
</script>
</body>

</html>
