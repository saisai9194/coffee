<?
session_start();
?>
<!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
	<script
	  src="https://code.jquery.com/jquery-3.1.1.js"
	  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
	  crossorigin="anonymous">
	</script>
	<script src="semantic/semantic.js"></script>

	<style>
		.carousel-inner > .item > img,
		.carousel-inner > .item > a > img {
			width: 100%;
			margin: auto;
		}

			#well {
				width: 100%;
			}
		body{
			padding:1;
		}
		
	</style>

	<link rel="stylesheet" type="text/css" href="css/common.css">
</head>

<body>
	<div id="wrap">
		<div id="header">
			<? include "./lib/top_login1.php"; ?>
		</div>  <!-- end of header -->

		<div id="menu">
			<? include "./lib/top_menu1.php"; ?>
		</div>  <!-- end of menu --> 

		<div id="content">
			<div id="main_img">
				<div class="container">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>

						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="./img/main_img1.jpg"  width="560" height="345">
								<div class="carousel-caption">
								</div>
							</div>

							<div class="item">
								<img src="./img/main_img2.jpg"  width="560" height="345">
								<div class="carousel-caption">
								</div>
							</div>
						</div>

						<!-- Left and right controls -->
						<a class="carousel-control" href="#myCarousel" role="button" data-slide="prev">
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control" href="#myCarousel" role="button" data-slide="next">
							<span class="sr-only">Next</span>
						</a>
					</div>


					<!-- ÃÖ±Ù ±Û ºÒ·¯¿À±â ½ÃÀÛ -->
					<? include "./lib/func.php"; ?>

					<div id="latest">
							<div id="latest1">
							<div id = "well" class="well">
								<div id="title_latest1"><img src="./img/title_latest1.gif"></div>
								<div class="latest_box">
									<? latest_article("greet", 10, 30); ?>
								</div>
							</div>
						</div>
						
							<div id="latest2">
							<div id = "well" class="well">
								<div id="title_latest2"><img src="./img/title_latest2.gif"></div>
								<div class="latest_box">
									<? latest_article("concert", 10, 30); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- ÃÖ±Ù ±Û ºÒ·¯¿À±â ³¡ -->
			</div>
		</div> <!-- end of content -->
	</div> <!-- end of wrap -->

</body>
</html>
