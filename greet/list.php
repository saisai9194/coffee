<? 
	session_start(); 

	$userid = $_SESSION[userid];
	$username = $_SESSION[username];
	$usernick = $_SESSION[usernick];
	$userlevel = $_SESSION[userlevel];	


?>
<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<link href="../css/common.css" rel="stylesheet" type="text/css" media="all">
<link href="../css/greet.css" rel="stylesheet" type="text/css" media="all">
</head>
<?
	include "../lib/dbconn.php";

	$find = $_POST[find];
	$search = $_POST[search];


	$scale=10;			// 한 화면에 표시되는 글 수

    if ($_GET[mode]=="search")
	{
		if(!$search)
		{
			echo("
				<script>
				 window.alert('검색할 단어를 입력해 주세요!');
			     history.go(-1);
				</script>
			");
			exit;
		}

		$sql = "select * from greet where $find like '%$search%' order by num desc";
	}
	else
	{
		$sql = "select * from greet order by num desc";
	}

	$result = $conn->query($sql);

	$total_record = $result->num_rows; // 전체 글 수

	// 전체 페이지 수($total_page) 계산 
	if ($total_record % $scale == 0)     
		$total_page = floor($total_record/$scale); //총페이지
	else
		$total_page = floor($total_record/$scale) + 1; 
 
	if (!$_GET[page])                 // 페이지번호($page)가 0 일 때
		$page = 1;              // 페이지 번호를 1로 초기화
 	else
 		$page = $_GET[page];
	// 표시할 페이지($page)에 따라 $start 계산  
	$start = ($page - 1) * $scale;      

	$number = $total_record - $start;
?>
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
<?
			include "../lib/left_menu.php";
?>
		</div>
	</div>
	<div id="col2">
        
		<div id="title">
			<img src="../img/title_greet.gif">
		</div>

		<form  name="board_form" method="post" action="list.php?mode=search"> 
		<div id="list_search">
			<div id="list_search1">▷ 총 <?= $total_record ?> 개의 게시물이 있습니다.  </div>
			<div id="list_search2"><img src="../img/select_search.gif"></div>
			<div id="list_search3">
				<select name="find">
                    <option value='subject'>제목</option>
                    <option value='content'>내용</option>
                    <option value='nick'>별명</option>
                    <option value='name'>이름</option>
				</select></div>
			<div id="list_search4"><input type="text" name="search"></div>
			<div id="list_search5"><input type="image" src="../img/list_search_button.gif"></div>
		</div>
		</form>

		<div class="clear"></div>

		<div id="list_top_title">
			<ul>
				<li id="list_title1"><img src="../img/list_title1.gif"></li>
				<li id="list_title2"><img src="../img/list_title2.gif"></li>
				<li id="list_title3"><img src="../img/list_title3.gif"></li>
				<li id="list_title4"><img src="../img/list_title4.gif"></li>
				<li id="list_title5"><img src="../img/list_title5.gif"></li>
			</ul>		
		</div>

		<div id="list_content">
<?		
   for ($i=$start; $i<$start+$scale && $i < $total_record; $i++)                    
   {
      $result->data_seek($i);       
      // 가져올 레코드로 위치(포인터) 이동  
      $row = $result->fetch_assoc();       
      // 하나의 레코드 가져오기
	
	  $item_num     = $row[num];
	  $item_id      = $row[id];
	  $item_name    = $row[name];
  	  $item_nick    = $row[nick];
	  $item_hit     = $row[hit];

      $item_date    = $row[regist_day];
	  $item_date = substr($item_date, 0, 10);  
	  $item_subject = str_replace(" ", "&nbsp;", $row[subject]);

?>
			<div id="list_item">
				<div id="list_item1"><?= $number ?></div>
				<div id="list_item2"><a href="view.php?num=<?=$item_num?>&page=<?=$page?>"><?= $item_subject ?></a></div>
				<div id="list_item3"><?= $item_nick ?></div>
				<div id="list_item4"><?= $item_date ?></div>
				<div id="list_item5"><?= $item_hit ?></div>
			</div>
<?
   	   $number--;
   }
?>
			<div id="page_button">
				<div id="page_num"> <a href="list.php?page=<?=$page-1?>">◀ 이전</a> &nbsp;&nbsp;&nbsp;&nbsp; 
<?
   // 게시판 목록 하단에 페이지 링크 번호 출력
   for ($i=1; $i<=$total_page; $i++)
   {
		if ($_GET[page] == $i)     // 현재 페이지 번호 링크 안함
		{
			echo "<b> $i </b>";
		}
		else
		{ 
			echo "<a href='list.php?page=$i'> $i </a>";
		}      
   }
?>			
			&nbsp;&nbsp;&nbsp;&nbsp;<a href="list.php?page=<?=$page+1?>">다음 ▶</a>
				</div>
				<div id="button">
					<a href="list.php?page=<?=$page?>"><img src="../img/list.png"></a>&nbsp;
<? 
	if($userid)
	{
?>
		<a href="write_form.php"><img src="../img/write.png"></a>
<?
	}
?>
				</div>
			</div> <!-- end of page_button -->
		
        </div> <!-- end of list content -->

		<div class="clear"></div>

	</div> <!-- end of col2 -->
  </div> <!-- end of content -->
</div> <!-- end of wrap -->

</body>
</html>
