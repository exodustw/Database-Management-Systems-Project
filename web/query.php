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
                                            <div class="col-md-12 col-xl-12">
                                                <div class="card fb-card">
                                                    <div class="card-header">
                                                        <i class="icofont icofont-database"></i>
                                                        <div class="d-inline-block">
                                                            <h5>歷史肇事地點查詢</h5>
                                                            <span>可選擇您對應的資訊進行排名</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <form class="form-inline" action="query.php" method="post">
	                                                      	<label class="my-1 mr-2" for="s1">年度</label>
	                                                      	<select class="custom-select my-1 mr-sm-2" id="s1" name="year">
		                                                        <option value="-1" disabled selected>Choose...</option>
		                                                        <option value="109">109</option>
		                                                        <option value="108">108</option>
		                                                        <option value="107">107</option>
		                                                        <option value="106">106</option>
		                                                        <option value="105">105</option>
		                                                        <option value="104">104</option>
		                                                        <option value="103">103</option>
		                                                        <option value="102">102</option>
		                                                        <option value="101">101</option>
	                                                      	</select>

                                                          	<label class="my-1 mr-2" for="s2">區域</label>
                                                          	<select class="custom-select my-1 mr-sm-2" id="s2" name="region">
	                                                            <option value="-1" disabled selected>Choose...</option>
	                                                            <option value="中正">中正區</option>
	                                                            <option value="萬華">萬華區</option>
	                                                            <option value="大同">大同區</option>
	                                                            <option value="中山">中山區</option>
	                                                            <option value="松山">松山區</option>
	                                                            <option value="大安">大安區</option>
	                                                            <option value="信義">信義區</option>
	                                                            <option value="內湖">內湖區</option>
	                                                            <option value="南港">南港區</option>
	                                                            <option value="士林">士林區</option>
	                                                            <option value="北投">北投區</option>
	                                                            <option value="文山">文山區</option>
                                                          	</select>

                                                          	<label class="my-1 mr-2" for="s3">排行依據</label>
                                                          	<select class="custom-select my-1 mr-sm-2" id="s3" name="mode">
	                                                            <option value="-1" disabled selected>Choose...</option>
	                                                            <option value="4">發生時間</option>
	                                                            <option value="1">受傷人數</option>
	                                                            <option value="2">死亡人數</option>
	                                                            <option value="3">當事人數</option>
                                                          	</select>
	                                                        <div class="row m-t-30">
	                                                            <div class="col-md-12">
	                                                                <input type="submit" class="btn btn-success btn-md waves-effect text-center m-b-20" value="Submit">
	                                                                <input type="reset" class="btn btn-danger btn-md waves-effect text-center m-b-20" value="Reset">
	                                                            </div>
	                                                        </div>
                                                        </form>
                                                    </div>
                                            	</div>
                                            </div>

											<div class="col-md-12 col-xl-12">
                                              <div class="card">
                                                  <div class="card-header">
                                                      <h5>肇事列表</h5>
													  <?php
													   	if(@$_REQUEST["year"] > 0 && @$_REQUEST["region"] != "" && @$_REQUEST["mode"] > 0){
															echo "<span>台北市".strip_tags($_REQUEST["year"])."年度".strip_tags($_REQUEST["region"])."區A1及A2事故列表</span>";
														}else{
															echo "<span>請至上方開始查詢</span>";
														}
													  ?>
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
                                                                      <th>日期</th>
                                                                      <th>時間</th>
                                                                      <th>地區</th>
                                                                      <th>地點</th>
                                                                      <th>死亡人數</th>
                                                                      <th>受傷人數</th>
                                                                      <th>當事人數</th>
                                                                  </tr>
                                                              </thead>
                                                              <tbody>
																  	<?php
																		/*echo "HELLO!<br>";
																		echo "year: ".$_REQUEST["year"]."<br>";
																		echo "region: ".$_REQUEST["region"]."<br>";
																		echo "mode: ".$_REQUEST["mode"]."<br>";*/
																		if(@$_REQUEST["year"] > 0 && @$_REQUEST["region"] != "" && @$_REQUEST["mode"] > 0){
																			require('exec/sql.php');
																			$query = sprintf("CALL AccidentRank('%s','%s','%s');",
																				mysqli_real_escape_string($cn,$_REQUEST["year"]),
																				mysqli_real_escape_string($cn,$_REQUEST["region"]),
																				mysqli_real_escape_string($cn,$_REQUEST["mode"]));
																			$data = mysqli_query($cn,$query);
																			$i = 0;
																			while($row = mysqli_fetch_assoc($data)){
																				$i += 1;
																				if($row["死亡人數"] > 0){
																					echo "<tr class=\"table-danger clickable-row\" data-href=\"detail.php?id=".$row["事故編號"]."\">";
																				}else{
																					echo "<tr class=\"clickable-row\" data-href=\"detail.php?id=".$row["事故編號"]."\">";
																				}
																				echo "<th scope=\"row\">".$i."</th>";
		                                                                        echo "<td>".$row["發生年"]."/".$row["發生月"]."/".$row["發生日"]."</td>";
		                                                                        echo "<td>".str_pad($row["發生時"],2,"0",STR_PAD_LEFT).":".str_pad($row["發生分"],2,"0",STR_PAD_LEFT)."</td>";
		                                                                        echo "<td>".$row["區序"]."</td>";
		                                                                        echo "<td>".$row["肇事地點"]."</td>";
		                                                                        echo "<td>".$row["死亡人數"]."</td>";
		                                                                        echo "<td>".$row["受傷人數"]."</td>";
		                                                                        echo "<td>".$row["當事人數"]."</td></tr>";
																			}
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
  			document.getElementById('s1').value = "<?php echo @$_REQUEST["year"] > 0 ? @$_REQUEST["year"] : -1;?>";
	  		document.getElementById('s2').value = "<?php echo @$_REQUEST["region"] != "" ? @$_REQUEST["region"] : -1;?>";
	  		document.getElementById('s3').value = "<?php echo @$_REQUEST["mode"] > 0 ? @$_REQUEST["mode"] : -1;?>";
		</script>
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
		<script>
		  $('#myModal').on('shown.bs.modal', function () {
		    $('#myInput').trigger('focus')
		  })
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
		<script>
		  jQuery(document).ready(function($) {
		    $(".clickable-row").click(function() {
		        var href = $(this).data("href");
		        window.open(href, '_blank');
		    });
		});
		</script>
	</body>
</html>
