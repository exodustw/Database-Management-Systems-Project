<!DOCTYPE html>
<html lang="zh-tw">
<?php
	@session_start();
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
                                            <div class="col-md-12 col-xl-6">
                                                    <div class="card fb-card">
                                                        <div class="card-header">
                                                            <i class="icofont icofont-car"></i>
                                                            <div class="d-inline-block">
                                                                <h5>交通事故數量</h5>
                                                                <span>109年統計(去年)</span>
                                                            </div>
                                                        </div>
														<?php
															require('exec/sql.php');
															$query = "CALL Index1();";
															$data = mysqli_query($cn,$query);
															$row = mysqli_fetch_assoc($data);

															$id1_109 = $row["109"];
															$id1_108 = $row["108"];
														?>
                                                        <div class="card-block text-center">
                                                            <div class="row">
                                                                <div class="col-6 b-r-default">
                                                                    <h2><?php echo $id1_109; ?></h2>
                                                                    <p class="text-muted">數量</p>
                                                                </div>
                                                                <div class="col-6">
																	<?php $o1 = ($id1_109-$id1_108)/$id1_108 ; ?>
                                                                    <i class="ti-arrow-<?php echo $o1 >= 0 ? "up" : "down"; ?>"></i>
                                                                    <h2><?php echo round(abs($o1*100),2); ?>%</h2>
                                                                    <p class="text-muted">年增率</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                              </div>
                                            <!-- card1 end -->
                                            <!-- card2 start -->
                                            <div class="col-md-12 col-xl-6">
                                                    <div class="card dribble-card">
                                                        <div class="card-header">
                                                          <!-- <i class="ti-wheelchair"></i> -->
                                                            <i class="icofont icofont-wheelchair"></i>
                                                            <div class="d-inline-block">
                                                                <h5>交通事故死亡人數</h5>
                                                                <span>109年統計(去年)</span>
                                                            </div>
															<?php
																require('exec/sql.php');
																$query = "CALL Index2();";
																$data = mysqli_query($cn,$query);
																$row = mysqli_fetch_assoc($data);

																$id2_109 = $row["109"];
																$id2_108 = $row["108"];
															?>
                                                        </div>
                                                        <div class="card-block text-center">
                                                            <div class="row">
                                                                <div class="col-6 b-r-default">
                                                                    <h2><?php echo $id2_109; ?></h2>
                                                                    <p class="text-muted">數量</p>
                                                                </div>
                                                                <div class="col-6">
																	<?php $o2 = ($id2_109-$id2_108)/$id2_108 ; ?>
                                                                    <i class="ti-arrow-<?php echo $o2 >= 0 ? "up" : "down"; ?>"></i>
                                                                    <h2><?php echo round(abs($o2*100),2); ?>%</h2>
                                                                    <p class="text-muted">年增率</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                              </div>
                                            <!-- card2 end -->
                                            <!-- Contextual classes table starts -->
                                            <div class="col-md-12 col-xl-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>交通事故排名</h5>
                                                        <span>臺北市109年區域排名</span>
                                                        <div class="card-header-right">
                                                          <ul class="list-unstyled card-option">
                                                            <li><i class="icofont icofont-simple-left "></i></li>
                                                            <li><i class="icofont icofont-maximize full-card"></i></li>
                                                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                                                            <li><i class="icofont icofont-refresh reload-card"></i></li>
                                                            <li><i class="icofont icofont-error close-card"></i></li>
                                                          </ul
                                                        </div>
                                                    </div>
                                                    <div class="card-block table-border-style">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>地區</th>
                                                                        <th>事故件數</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
																	<?php
																		require('exec/sql.php');
																		$query = "CALL RegionAccidentByYear(109);";
																		$data = mysqli_query($cn,$query);
																		$i = 0;
																		while($row = mysqli_fetch_assoc($data)){
																			$i += 1;
																			if($i == 1){
																				echo "<tr class=\"table-danger\">";
																			}else if($i <= 3){
																				echo "<tr class=\"table-warning\">";
																			}else if($i <= 10){
																				echo "<tr class=\"table\">";
																			}else{
																				echo "<tr class=\"table-success\">";
																			}
																			echo "<th scope=\"row\">".$i."</th>";
																			echo "<td>".mb_substr($row["區序"],2,3)."</td>";
																			echo "<td>".$row["cnt"]."</td>";
																			echo "</tr>";
																		}
																	?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Contextual classes table ends -->
                                            <!-- Multiple Open Accordion start -->
                                            <div class="col-md-12 col-xl-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5 class="card-header-text">最新消息</h5>
                                                    </div>
                                                    <div class="card-block accordion-block color-accordion-block">
                                                        <div id="accordion" role="tablist" aria-multiselectable="true">
															<!-- Annocement -->
                                                    	</div>
                                                  </div>
                                                </div>
                                            </div>
                                            <!-- Multiple Open Accordion ends -->
                                            <!-- Statestics Start -->
                                            <div class="col-md-12 col-xl-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>歷年事故總數</h5>
                                                        <span>101-109年統計</span>
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
															require('exec/sql.php');
															$query = "CALL YearAccident();";
															$data = mysqli_query($cn,$query);
															$darr = array();
															while($row = mysqli_fetch_array($data)){
																array_push($darr, $row);
															}
														 ?>
                                                        <div id="morris-bar-chart"></div>
                                                        <canvas id="mainchart" ></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- 小卡 -->
                                            <!-- Email Sent End -->
                                            <!-- Data widget start -->


                                                <!-- Data widget End -->

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
		<script>
		  	var ctx = document.getElementById("mainchart"),
		  		example = new Chart(ctx, {
		  			// 參數設定[註1]
		  			type: 'line', // 圖表類型
		  			data: {
		  				labels: [ <?php
							if(is_array($darr)){
								for($i = 0; $i < count($darr); $i++) {
									if($i != 0){
										echo " , ";
									}
									echo "\"".$darr[$i][0]."年\"";
								}
							}
						 ?> ], // 標題
		  				datasets: [{
		  					label: '事故數', // 標籤
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
							 fill: true,
						     borderColor: 'rgb(75, 192, 192)',
							 backgroundColor: 'rgb(186, 228, 228)',
						     tension: 0.1
		  				}]
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

		<script type="text/javascript">
			document.body.onload = onload;
			function onload() {
				function Formatter(no, title, content) {
					var out = '';
					out = '<div class="accordion-panel" id="color-accordion">' +
						'<div class="accordion-heading" role="tab" id="headingOne" >' +
						'<h3 class="card-title accordion-title">' +
						'<a class="accordion-msg" data-toggle="collapse"' +
						'data-parent="#accordion" href="#collapse' + no +
						'" aria-expanded="true" aria-controls="collapse' + no +
						'">' + title + '</a></h3></div><div id="collapse' + no +
						'" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading' + no +
						'"><div class="accordion-content accordion-desc"><p>' + content +
						' </p></div></div></div>'
						;
					return out;
				}
				$.ajax({
					url: 'https://tcgbusfs.blob.core.windows.net/dotapp/news.json',
					type: 'GET',
					dataType: 'json',
					success: function(Jdata) {
						var context = '';
						for(let i = 0; i < Jdata.News.length; i++) {
							context += Formatter(i, Jdata.News[i]['chtmessage'], Jdata.News[i]['content']);
						}
						document.getElementById('accordion').innerHTML = context + document.getElementById('accordion').innerHTML ;
					},
			  		error: function() {
		  			}
				});
			}
		</script>
	</body>
</html>
