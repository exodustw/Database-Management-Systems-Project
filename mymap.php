<!DOCTYPE html>
<html lang="zh-tw">
<?php
	@session_start();
	if(@$_SESSION["usercode"] == ""){
		echo "<script>location.replace('map.php');</script>";
	}
?>
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
                                                <div class="card fb-card">
                                                    <div class="card-header">
														<i class="icofont icofont-map"></i>
                                                        <div class="d-inline-block">
                                                            <h5>測速地圖</h5>
                                                            <span>台北市各測速照相機位置圖</span>
                                                        </div>
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
														<p>可點擊圖標獲得資訊。</p>
														<div style="height: 600px" id="mapContainer"></div>
                                                    </div>
                                                </div>
												<div class="card">
                                                    <div class="card-header">
                                                        <div class="d-inline-block">
                                                            <h5>自訂地圖</h5>
                                                            <span>可以自行增加地點</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <form class="form-inline" action="exec/place_add.php" method="post" onsubmit="return geocoding();">
															<label class="my-1 mr-2" for="s1">地址</label>
															<input type="text" class="form-control" id="s1" name="loc" placeholder="輸入地址">
															<input type="hidden" id="h1" name="lat" value="-1">
															<input type="hidden" id="h2" name="lng" value="-1">

                                                          	<label class="my-1 mr-2" for="s2">類型</label>
                                                          	<select class="custom-select my-1 mr-sm-2" id="s2" name="type">
	                                                            <option value="-1" disabled selected>Choose...</option>
	                                                            <option value="1">測速</option>
	                                                            <option value="2">闖紅燈</option>
	                                                            <option value="3">區間測速</option>
                                                          	</select>
															<div id="warn"></div>
	                                                        <div class="row m-t-30">
	                                                            <div class="col-md-12">
	                                                                <input type="submit" class="btn btn-success btn-md waves-effect text-center m-b-20" value="Submit">
	                                                                <input type="reset" class="btn btn-danger btn-md waves-effect text-center m-b-20" value="Reset">
	                                                            </div>
	                                                        </div>
                                                        </form>
                                                    </div>
                                            	</div>

												<div class="card">
                                                    <div class="card-header">
                                                        <h5>自訂地點列表</h5>
														<span>顯示你目前新增的地點</span>
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
	                                                                        <th>地址</th>
	                                                                        <th>經度座標</th>
	                                                                        <th>緯度座標</th>
	                                                                        <th>類型</th>
	                                                                        <th>新增時間</th>
	                                                                        <th>操作</th>
	                                                                    </tr>
	                                                                </thead>
	                                                                <tbody>
	  																  	<?php
																			require('exec/sql.php');
																			$query = sprintf("CALL PlaceInquire('%s');",
																				mysqli_real_escape_string($cn,$_SESSION["usercode"]));
																			$data = mysqli_query($cn,$query);
																			//echo $query;
																			$darr = array();
																			$count = mysqli_num_rows($data);
																			if($count > 0){
																				while($row = mysqli_fetch_assoc($data)){
																					array_push($darr, $row);
																				}
																			}
																			$i = 0;
  																			foreach ($darr as $dr){
																				$i += 1;
  																				echo "<tr class=\"clickable-row\">";
  																				echo "<th scope=\"row\">".$i."</th>";
  		                                                                        echo "<td>".$dr["地點"]."</td>";
  		                                                                        echo "<td>".$dr["lng"]."</td>";
  		                                                                        echo "<td>".$dr["lat"]."</td>";
  		                                                                        echo "<td>".$dr["類型名稱"]."</td>";
  		                                                                        echo "<td>".$dr["建立時間"]."</td>";
  		                                                                        echo "<td><a href=\"exec/place_delete.php?id=".$dr["地標編號"]."\">刪除</a></td></tr>";
  																			}
	  																   	?>
	                                                                </tbody>
	                                                            </table>
	                                                        </div>
	                                                    </div>
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
				document.getElementById('warn').innerHTML = '';
				if(document.getElementById('s1').value == '' || document.getElementById('s2').value == -1){
					document.getElementById('warn').innerHTML = '<span style="color: red;">缺漏項目未填</span>';
					return false;
				}
				var en = false;
				$.ajax({
					url: 'https://geocoder.ls.hereapi.com/6.2/geocode.json?' +
					'apiKey=5eC9DPQE_kq4eCyxcexplsLVbWqwye-t7HWEEPJ_HF0&city=Taipei&street=' +
					document.getElementById('s1').value,
					type: 'GET',
					dataType: 'json',
					async : false,
					success: function(Jdata){
						if(Jdata.Response.View[0] != null){
							document.getElementById('h1').value = Jdata.Response.View[0].Result[0].Location.DisplayPosition.Latitude;
							document.getElementById('h2').value = Jdata.Response.View[0].Result[0].Location.DisplayPosition.Longitude;
							en = 1;
						}else{
							document.getElementById('warn').innerHTML = '<span style="color: red;">地址查詢失敗(沒有相應座標)</span>';
						}
					},
					error: function() {
						return false;
					}
				});
				return en;
			}
		</script>

		<script type="text/javascript">
			var cameras = [
			<?php
				require('exec/sql.php');
				$query = "CALL CameraInquire();";
				$data = mysqli_query($cn,$query);
				$flag = 0;
				while($row = mysqli_fetch_assoc($data)){
					if($flag){
						echo " , ";
					}else{
						$flag = 1;
					}
					if(strpos($row["功能"],"區間測速") !== false){
						$type = 3;
					}else if(strpos($row["功能"],"闖紅燈") !== false){
						$type = 2;
					}else if(strpos($row["功能"],"測速") !== false){
						$type = 1;
					}
					echo "[ ".$type." , ".$row["lat"]." , ".$row["lng"]." , '".
					 $row["編號"]."' , '".$row["功能"]."' , '".$row["設置路段"]."' , '".
					 $row["設置地點"]."' , '".$row["轄區"]."' , '".$row["拍攝方向"]."' , '".
					 $row["速限"]."' ]";
				}
			?>
			];

			var mines = [
			<?php
				$flag = 0;
				foreach ($darr as $dr){
					if($flag){
						echo " , ";
					}else{
						$flag = 1;
					}
					echo "[ ".$dr["類型"]." , ".$dr["lat"]." , ".$dr["lng"]." , '".
					 $dr["地點"]."' , '".$dr["類型名稱"]."']";
				}
			?>
			];

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
					zoom: 12,
					center: { lat: 25.047551, lng: 121.543838}
				});

			// Define a variable holding SVG mark-up that defines an icon image:
			var svgMarkup = '<svg width="32" height="32" aria-hidden="true" ' +
			'focusable="false" data-prefix="fas" data-icon="map-marker-alt" ' +
			'class="svg-inline--fa fa-map-marker-alt fa-w-12" role="img" ' +
			'xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path ' +
			'fill="#F08C84" d="M172.268 501.67C26.97 291.031 0 269.413 ' +
			'0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 ' +
			'99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 ' +
			'272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 ' +
			'35.817 80 80 80z"></path></svg>';

			var cam_group = new H.map.Group();
			map.addObject(cam_group);

			// Create an icon, an object holding the latitude and longitude, and a marker:
			cameras.forEach(function(item, index, array) {
				if(item[0] == 1){
					var mark = '<svg width="32" height="32" aria-hidden="true" focusable="false" ' +
					'data-prefix="fas" data-icon="tachometer-alt" class="' +
					'svg-inline--fa fa-tachometer-alt fa-w-18" role="img" ' +
					'xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">' +
					'<path fill="#F0B235" d="M288 32C128.94 32 0 160.94 0 ' +
					'320c0 52.8 14.25 102.26 39.06 144.8 5.61 9.62 16.3 15.2 27.44' +
					' 15.2h443c11.14 0 21.83-5.58 27.44-15.2C561.75 422.26 576 372.8' +
					' 576 320c0-159.06-128.94-288-288-288zm0 64c14.71 0 26.58 10.13' +
					' 30.32 23.65-1.11 2.26-2.64 4.23-3.45 6.67l-9.22 27.67c-5.13' +
					' 3.49-10.97 6.01-17.64 6.01-17.67 0-32-14.33-32-32S270.33 96' +
					' 288 96zM96 384c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33' +
					' 32 32-14.33 32-32 32zm48-160c-17.67 0-32-14.33-32-32s14.33-32 ' +
					'32-32 32 14.33 32 32-14.33 32-32 32zm246.77-72.41l-61.33' +
					' 184C343.13 347.33 352 364.54 352 384c0 11.72-3.38 22.55-8.88' +
					' 32H232.88c-5.5-9.45-8.88-20.28-8.88-32 0-33.94 26.5-61.43' +
					' 59.9-63.59l61.34-184.01c4.17-12.56 17.73-19.45 30.36-15.17' +
					' 12.57 4.19 19.35 17.79 15.17 30.36zm14.66 57.2l15.52-46.55' +
					'c3.47-1.29 7.13-2.23 11.05-2.23 17.67 0 32 14.33 32 32s-14.33' +
					' 32-32 32c-11.38-.01-20.89-6.28-26.57-15.22zM480 384c-17.67' +
					' 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 ' +
					'32z"></path></svg>';
				}else if(item[0] == 2){
					var mark = '<svg width="32" height="32" aria-hidden="true" focusable="false" ' +
					'data-prefix="fas" data-icon="traffic-light" class="' +
					'svg-inline--fa fa-traffic-light fa-w-12" role="img" ' +
					'xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">' +
					'<path fill="#F0341D" d="M384 192h-64v-37.88c37.2-13.22' +
					' 64-48.38 64-90.12h-64V32c0-17.67-14.33-32-32-32H96C78.33 0 ' +
					'64 14.33 64 32v32H0c0 41.74 26.8 76.9 64 90.12V192H0c0 41.74 ' +
					'26.8 76.9 64 90.12V320H0c0 42.84 28.25 78.69 66.99 91.05C79.42' +
					' 468.72 130.6 512 192 512s112.58-43.28 125.01-100.95C355.75 ' +
					'398.69 384 362.84 384 320h-64v-37.88c37.2-13.22 64-48.38 ' +
					'64-90.12zM192 416c-26.51 0-48-21.49-48-48s21.49-48 48-48 48' +
					' 21.49 48 48-21.49 48-48 48zm0-128c-26.51 0-48-21.49-48-48s21' +
					'.49-48 48-48 48 21.49 48 48-21.49 48-48 48zm0-128c-26.51' +
					' 0-48-21.49-48-48s21.49-48 48-48 48 21.49 48 48-21.49 48-48' +
					' 48z"></path></svg>';
				}else{
					var mark = '<svg width="32" height="32" aria-hidden="true" focusable="false" ' +
					'data-prefix="fas" data-icon="stopwatch" class="' +
					'svg-inline--fa fa-stopwatch fa-w-14" role="img" ' +
					'xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">' +
					'<path fill="#F08C84" d="M432 304c0 114.9-93.1 208-208' +
					' 208S16 418.9 16 304c0-104 76.3-190.2 176-205.5V64h-28c-6.6 ' +
					'0-12-5.4-12-12V12c0-6.6 5.4-12 12-12h120c6.6 0 12 5.4 12 ' +
					'12v40c0 6.6-5.4 12-12 12h-28v34.5c37.5 5.8 71.7 21.6 99.7 ' +
					'44.6l27.5-27.5c4.7-4.7 12.3-4.7 17 0l28.3 28.3c4.7 4.7 4.7 ' +
					'12.3 0 17l-29.4 29.4-.6.6C419.7 223.3 432 262.2 432 304zm-176' +
					' 36V188.5c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12V340c0 6.6' +
					' 5.4 12 12 12h40c6.6 0 12-5.4 12-12z"></path></svg>';
				}
				var icon = new H.map.Icon(mark),
					coords = {lat: item[1], lng: item[2]},
					marker = new H.map.Marker(coords, {icon: icon});
				var html = '<div><h6><b>' + item[4] + '</b></h6><p>路段:' +
				  item[5] + '</p><p>地點:' + item[6] + '</p><p>方向:' +
				  item[8] + '</p><p>速限:' + item[9] + ' km/h</p></div>';

				marker.setData(html);
				cam_group.addObject(marker);
			});

			var my_group = new H.map.Group();
			map.addObject(my_group);

			// Create an icon, an object holding the latitude and longitude, and a marker:
			mines.forEach(function(item, index, array) {
				if(item[0] == 1){
					var mark = '<svg width="32" height="32" aria-hidden="true" focusable="false" ' +
					'data-prefix="fas" data-icon="tachometer-alt" class="' +
					'svg-inline--fa fa-tachometer-alt fa-w-18" role="img" ' +
					'xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">' +
					'<path fill="#000000" d="M288 32C128.94 32 0 160.94 0 ' +
					'320c0 52.8 14.25 102.26 39.06 144.8 5.61 9.62 16.3 15.2 27.44' +
					' 15.2h443c11.14 0 21.83-5.58 27.44-15.2C561.75 422.26 576 372.8' +
					' 576 320c0-159.06-128.94-288-288-288zm0 64c14.71 0 26.58 10.13' +
					' 30.32 23.65-1.11 2.26-2.64 4.23-3.45 6.67l-9.22 27.67c-5.13' +
					' 3.49-10.97 6.01-17.64 6.01-17.67 0-32-14.33-32-32S270.33 96' +
					' 288 96zM96 384c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33' +
					' 32 32-14.33 32-32 32zm48-160c-17.67 0-32-14.33-32-32s14.33-32 ' +
					'32-32 32 14.33 32 32-14.33 32-32 32zm246.77-72.41l-61.33' +
					' 184C343.13 347.33 352 364.54 352 384c0 11.72-3.38 22.55-8.88' +
					' 32H232.88c-5.5-9.45-8.88-20.28-8.88-32 0-33.94 26.5-61.43' +
					' 59.9-63.59l61.34-184.01c4.17-12.56 17.73-19.45 30.36-15.17' +
					' 12.57 4.19 19.35 17.79 15.17 30.36zm14.66 57.2l15.52-46.55' +
					'c3.47-1.29 7.13-2.23 11.05-2.23 17.67 0 32 14.33 32 32s-14.33' +
					' 32-32 32c-11.38-.01-20.89-6.28-26.57-15.22zM480 384c-17.67' +
					' 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 ' +
					'32z"></path></svg>';
				}else if(item[0] == 2){
					var mark = '<svg width="32" height="32" aria-hidden="true" focusable="false" ' +
					'data-prefix="fas" data-icon="traffic-light" class="' +
					'svg-inline--fa fa-traffic-light fa-w-12" role="img" ' +
					'xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">' +
					'<path fill="#000000" d="M384 192h-64v-37.88c37.2-13.22' +
					' 64-48.38 64-90.12h-64V32c0-17.67-14.33-32-32-32H96C78.33 0 ' +
					'64 14.33 64 32v32H0c0 41.74 26.8 76.9 64 90.12V192H0c0 41.74 ' +
					'26.8 76.9 64 90.12V320H0c0 42.84 28.25 78.69 66.99 91.05C79.42' +
					' 468.72 130.6 512 192 512s112.58-43.28 125.01-100.95C355.75 ' +
					'398.69 384 362.84 384 320h-64v-37.88c37.2-13.22 64-48.38 ' +
					'64-90.12zM192 416c-26.51 0-48-21.49-48-48s21.49-48 48-48 48' +
					' 21.49 48 48-21.49 48-48 48zm0-128c-26.51 0-48-21.49-48-48s21' +
					'.49-48 48-48 48 21.49 48 48-21.49 48-48 48zm0-128c-26.51' +
					' 0-48-21.49-48-48s21.49-48 48-48 48 21.49 48 48-21.49 48-48' +
					' 48z"></path></svg>';
				}else{
					var mark = '<svg width="32" height="32" aria-hidden="true" focusable="false" ' +
					'data-prefix="fas" data-icon="stopwatch" class="' +
					'svg-inline--fa fa-stopwatch fa-w-14" role="img" ' +
					'xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">' +
					'<path fill="#000000" d="M432 304c0 114.9-93.1 208-208' +
					' 208S16 418.9 16 304c0-104 76.3-190.2 176-205.5V64h-28c-6.6 ' +
					'0-12-5.4-12-12V12c0-6.6 5.4-12 12-12h120c6.6 0 12 5.4 12 ' +
					'12v40c0 6.6-5.4 12-12 12h-28v34.5c37.5 5.8 71.7 21.6 99.7 ' +
					'44.6l27.5-27.5c4.7-4.7 12.3-4.7 17 0l28.3 28.3c4.7 4.7 4.7 ' +
					'12.3 0 17l-29.4 29.4-.6.6C419.7 223.3 432 262.2 432 304zm-176' +
					' 36V188.5c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12V340c0 6.6' +
					' 5.4 12 12 12h40c6.6 0 12-5.4 12-12z"></path></svg>';
				}
				var icon = new H.map.Icon(mark),
					coords = {lat: item[1], lng: item[2]},
					marker = new H.map.Marker(coords, {icon: icon});
				var html = '<div><h6><b>' + item[4] + '-自訂</b></h6><p>地點:' +
					item[3] + '</p></div>';

				marker.setData(html);
				my_group.addObject(marker);
			});
			// Add the marker to the map and center the map at the location of the marker:
			//map.setCenter(coords);
			cam_group.addEventListener('tap', function (evt) {
				// event target is the marker itself, group is a parent event target
				// for all objects that it contains
				var bubble = new H.ui.InfoBubble(evt.target.getGeometry(), {
				  // read custom data
				  content: evt.target.getData()
				});
				// show info bubble
				ui.addBubble(bubble);
			  }, false);
			  my_group.addEventListener('tap', function (evt) {
  				// event target is the marker itself, group is a parent event target
  				// for all objects that it contains
  				var bubble = new H.ui.InfoBubble(evt.target.getGeometry(), {
  				  // read custom data
  				  content: evt.target.getData()
  				});
  				// show info bubble
  				ui.addBubble(bubble);
  			  }, false);
			var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));
			map.addLayer(defaultLayers.vector.normal.traffic);
			var ui = H.ui.UI.createDefault(map, defaultLayers);
		</script>

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
