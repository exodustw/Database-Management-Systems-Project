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
                                            <!-- card1 start -->

                                            <!-- card1 end -->
                                            <!-- card1 start -->

                                            <!-- card1 end -->
                                            <!-- card1 start -->

                                            <!-- card1 end -->
                                            <!-- card1 start -->

                                            <!-- card1 end -->
                                            <!-- Statestics Start -->
                                            <div class="col-md-12 col-xl-12">
                                                <div class="card">
                                                    <div class="card-header">
														<?php
															switch(@$_GET["tid"]){
																case 1:
																	$e1 = 1;
																	$t1 = "年齡";
																	$q1 = "Age";
																	break;
																case 2:
																	$e1 = 1;
																	$t1 = "地點";
																	$q1 = "Place";
																	break;
																case 3:
																	$e1 = 1;
																	$t1 = "車種";
																	$q1 = "Vehicle";
																	break;
																case 4:
																	$e1 = 1;
																	$t1 = "天候";
																	$q1 = "Weather";
																	break;
																default:
																	$e1 = 0;
																	break;
															}
															switch(@$_GET["qid"]){
																case 1:
																	$e2 = 1;
																	$t2 = "事故死亡數";
																	$q2 = "DeathNumRank";
																	break;
																case 2:
																	$e2 = 1;
																	$t2 = "事故死亡率";
																	$q2 = "DeathProbabilityRank";
																	break;
																case 3:
																	$e2 = 1;
																	$t2 = "事故人數";
																	$q2 = "NumRank";
																	break;
																default:
																	$e2 = 0;
																	break;
															}
															if($e1 == 1 && $e2 == 1){
																echo "<h5>".$t1."事故統計</h5>";
		                                                        echo "<span>歷年各".$t1."交通".$t2."統計資料</span>";

																require('exec/sql.php');
																$query = "CALL Accident".$q1.$q2."();";
																$data = mysqli_query($cn,$query);
																$darr = array();
																while($row = mysqli_fetch_array($data)){
																	array_push($darr, $row);
																}
															}else{
																echo "<h5>查無圖表</h5>";
		                                                        echo "<span>非法參數</span>";
															}
														?>
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
                                                    <div class="card-block" style="height: 600px;">
                                                        <div id="morris-bar-chart"></div>
                                                        <canvas id="mainchart"></canvas>
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

        <!-- Warning Section Starts -->
        <!-- Older IE warning message -->
    <!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script>
	var params = (new URL(document.location)).searchParams;
	var id = params.get('id');

	var ctx = document.getElementById("mainchart"),
		chart = new Chart(ctx, {
			// 參數設定[註1]
			type: '<?php
				switch(@$_GET["type"]){
					case 1:
						echo "line";
						break;
					case 2:
						echo "bar";
						break;
					case 3:
						echo "radar";
						break;
					case 4:
						echo "doughnut";
						break;
					case 5:
						echo "pie";
						break;
					case 6:
						echo "polarArea";
						break;
					default:
						echo "bar";
						break;
				}
			 ?>', // 圖表類型
			data: {
				labels: [ <?php
					if(is_array($darr)){
						for($i = 0; $i < count($darr); $i++) {
							if($i != 0){
								echo " , ";
							}
							echo "\"".$darr[$i][0]."\"";
						}
					}
				 ?> ], // 標題
				datasets: [{
					label: '<?php echo @$t2; ?>', // 標籤
					data: [ <?php
						if(is_array($darr)){
							for($i = 0; $i < count($darr); $i++) {
								if($i != 0){
									echo " , ";
								}
								echo $darr[$i][1];
							}
						}
					 ?> ], // 資料
					backgroundColor: [ // 背景色
						'#d11141',
						'#00b159',
						'#00aedb',
						'#f37735',
						'#ffc425',
						'#a8e6cf',
						'#dcedc1',
						'#ffd3b6',
						'#ffaaa5',
						'#ff8b94',
						'#edc951',
						'#eb6841',
						'#cc2a36',
						'#4f372d',
						'#00a0b0',
						'#96ceb4',
						'#ffeead',
						'#ff6f69',
						'#ffcc5c',
						'#88d8b0',
						'#4a4e4d',
						'#0e9aa7',
						'#3da4ab',
						'#f6cd61',
						'#fe8a71'
					],
					borderWidth: 1 // 外框寬度
				}]
			},
		  options: {
		   	maintainAspectRatio: false,
		},
	  	responsive: true
	});
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
