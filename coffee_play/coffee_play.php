<? 
session_start(); 

$userid = $_SESSION[userid];
$username = $_SESSION[username];
$usernick = $_SESSION[usernick];
$userlevel = $_SESSION[userlevel];

	$scale=5;			// 한 화면에 표시되는 글 수
	include "../lib/dbconn.php";

	$sql = "select * from memo order by num desc";
	$result = $conn->query($sql);

	$total_record = $result->num_rows; // 전체 글 수

	// 전체 페이지 수($total_page) 계산 
	if ($total_record % $scale == 0)   {  
		$total_page = floor($total_record/$scale);      
	}else{
		$total_page = floor($total_record/$scale) + 1; 
	}

	if (!$_GET[page])                  // 페이지번호($page)가 0 일 때 
	$page = 1;  
	else    
		$page = $_GET[page];        // 페이지 번호를 1로 초기화

	// 표시할 페이지($page)에 따라 $start 계산  
	$start = ($page - 1) * $scale;      

	$number = $total_record - $start;

	?>
	<!DOCTYPE html>
	<html>
	<head> 
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<link href="../css/common.css" rel="stylesheet" type="text/css" media="all">
		<link href="../css/board3.css" rel="stylesheet" type="text/css" media="all">
		<link href="../css/memo.css" rel="stylesheet" type="text/css" media="all">

		<style>

			#pills{

				font-size: 16px;
			}

			#well {
				width: 70%;
			}
			#well2{
				width: 150px;
			}
		</style>

	</head>

	<body>
		<div id="wrap">
			<div id="header">
				<? include "../lib/top_login2.php"; ?>
			</div>  <!-- end of header -->

			<div id="menu">
				<? include "../lib/top_menu2.php"; ?>
			</div>  <!-- end of menu --> 

			<div id="content">
				<div id="col1">
					<div id="left_menu">
						<div id="well2" class="well">
							<?
							include "../lib/left_menu.php";
							?>
						</div>
					</div>
				</div>

				<!--커피를 만들어보자 바디시작-->

				<div id="col2">        
					<div id="title">
						<img src="../img/title_download.gif">
					</div>

					<br>
					<div class="container">

						<ul class="nav nav-pills">
							<li class="active"><a id="pills" data-toggle="pill" href="#home">홈로스팅 도전!</a></li>
							<li><a id="pills" data-toggle="pill" href="#menu1">핸드드립 도전!</a></li>
							<li><a id="pills" data-toggle="pill" href="#menu2">에스프레소 도전!</a></li>
							<li><a id="pills" data-toggle="pill" href="#menu3">콜드브루(더치커피) 도전!</a></li>
						</ul>

						<div class="tab-content">
							<div id="home" class="tab-pane fade in active">
								<div id="well" class="well">
									<p><h2><span class="label label-default">홈로스팅 어렵지 않다! 따라해부작!</span></h2></p>
									<br>
									<iframe width="560" height="315" src="https://www.youtube.com/embed/AvyDC62vnqw" frameborder="0" allowfullscreen></iframe>
								</div>
							</div>
							<div id="menu1" class="tab-pane fade">
								<div id="well" class="well">
									<p><h2> <span class="label label-default">집에서도 쉽게 즐기는 맛난 커피! 따라해부작!</span></h2></p>
									<br>
									<iframe width="560" height="315" src="https://www.youtube.com/embed/zqJWgCpvzlU" frameborder="0" allowfullscreen></iframe>
								</div>
							</div>
							<div id="menu2" class="tab-pane fade">
								<div id="well" class="well">
									<p><h2><span class="label label-default">집에서도 우아하게 에스프레소한잔! 따라해부작!</span></h2></p>
									<br>
									<iframe width="560" height="315" src="https://www.youtube.com/embed/1NJNcG9uCr0" frameborder="0" allowfullscreen></iframe>
								</div>
							</div>
							<div id="menu3" class="tab-pane fade">
								<div id="well" class="well">
									<p><h2><span class="label label-default">커피의 눈물.. 한방울의 기다림! 콜드브루! 따라해부작!</span></h2></p>
									<br>
									<iframe width="560" height="315" src="https://www.youtube.com/embed/ssn_5ezHUdc" frameborder="0" allowfullscreen></iframe>
								</div>
							</div>
						</div>
						<!--memo well 시작-->
						<div id="well" class="well">
							<div id="memo_row1">
								<form  name="memo_form" method="post" action="insert.php"> 
									<div id="memo_writer"><span >▷ <?= $usernick ?></span></div>
									<div id="memo1"><textarea rows="6" cols="95" name="content"></textarea></div>
									<div id="memo2"><input type="image" src="../img/memo_button.gif"></div>
								</form>	
							</div> <!-- end of memo_row1 -->
							<?		
							for ($i=$start; $i<$start+$scale && $i < $total_record; $i++)                    
							{
								/*$result = $conn->data_seek($i);      */

								$result -> data_seek($i);
								$row = $result->fetch_assoc();       

								$memo_id      = $row[id];
								$memo_num     = $row[num];
								$memo_date    = $row[regist_day];
								$memo_nick    = $row[nick];

								$memo_content = str_replace("\n", "<br>", $row[content]);
								$memo_content = str_replace(" ", "&nbsp;", $memo_content);
								?>
								<div id="memo_writer_title">
									<ul>
										<li id="writer_title1"><?= $number ?></li>
										<li id="writer_title2"><?= $memo_nick ?></li>
										<li id="writer_title3"><?= $memo_date ?></li>
										<li id="writer_title4"> 
											<? 
											if($userid=="admin" || $userid==$memo_id)
												echo "<a href='delete.php?num=$memo_num'>[삭제]</a>"; 
											?>
										</li>
									</ul>
								</div>
								<div id="memo_content"><?= $memo_content ?>
								</div>
								<div id="ripple"> 
									<div id="ripple1">덧글</div>
									<div id="ripple2">
										<?
										$sql = "select * from memo_ripple where parent='$memo_num'";
										$ripple_result = $conn->query($sql);

										while ($row_ripple = $ripple_result->fetch_assoc())
										{
											$ripple_num     = $row_ripple[num];
											$ripple_id      = $row_ripple[id];
											$ripple_nick    = $row_ripple[nick];
											$ripple_content = str_replace("\n", "<br>", $row_ripple[content]);
											$ripple_content = str_replace(" ", "&nbsp;", $ripple_content);
											$ripple_date    = $row_ripple[regist_day];
											?>
											<div id="ripple_title">
												<ul>
													<li><?= $ripple_nick ?> &nbsp;&nbsp;&nbsp; <?= $ripple_date ?></li>
													<li id="mdi_del">
														<? 
														if($userid=="admin" || $userid==$ripple_id)
															echo "<a href='delete_ripple.php?num=$ripple_num'>삭제</a>";
														?>
													</li>
												</ul>
											</div>
											<div id="ripple_content"> <?= $ripple_content ?></div>
											<?
										}
										?>
										<form  name="ripple_form" method="post" action="insert_ripple.php"> 
											<input type="hidden" name="num" value="<?= $memo_num ?>"> 
											<div id="ripple_insert">
												<div id="ripple_textarea">
													<textarea rows="3" cols="80" name="ripple_content"></textarea>
												</div>
												<div id="ripple_button"><input type="image" src="../img/memo_ripple_button.png"></div>
											</div>
										</form>

									</div> <!-- end of ripple2 -->
									<div class="clear"></div>
									<div class="linespace_10"></div>
									<?
									$number--;
								}
								$conn->close();
								?>
								<div id="page_num"> ◀ 이전 &nbsp;&nbsp;&nbsp;&nbsp; 
									<?
   // 게시판 목록 하단에 페이지 링크 번호 출력
									for ($i=1; $i<=$total_page; $i++)
									{
		if ($page == $i)     // 현재 페이지 번호 링크 안함
		{
			echo "<b> $i </b>";
		}
		else
		{ 
			echo "<a href='coffee_play.php?page=$i'> $i </a>";
		}      
	}
	?>			
	&nbsp;&nbsp;&nbsp;&nbsp;다음 ▶</div>
</div> <!-- end of ripple -->
</div><!--end of memo well-->
</div><!--end of container-->
</div> <!-- end of col2 -->
</div> <!-- end of content -->
</div> <!-- end of wrap -->

</body>
</html>
