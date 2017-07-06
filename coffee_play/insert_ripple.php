<?
   session_start();
?>
<meta charset="utf-8">
<?

   $userid = $_SESSION[userid];
   $username = $_SESSION[username];
   $usernick = $_SESSION[usernick];
   $userlevel = $_SESSION[userlevel];  

   $num = $_POST[num];
   $ripple_content = $_POST[ripple_content];


   if(!$userid) {
     echo("
	   <script>
	     window.alert('로그인 후 이용하세요.')
	     history.go(-1)
	   </script>
	 ");
	 exit;
   }
   
   if(!$ripple_content) {
     echo("
	   <script>
	     window.alert('내용을 입력하세요.')
	     history.go(-1)
	   </script>
	 ");
	 exit;
   }
   
   include "../lib/dbconn.php";       // dconn.php 파일을 불러옴

   $sql = "select * from member where id='$userid'";
   //$result = mysql_query($sql, $connect);
   $result = $conn->query($sql);
   //$row = mysql_fetch_array($result);
   $row = $result->fetch_assoc();

   $name = $row[name];
   $nick = $row[nick];

   $regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장

   // 레코드 삽입 명령
   $sql = "INSERT INTO memo_ripple (parent, id, name, nick, content, regist_day)
   VALUES($num, '$userid', '$name', '$nick', '$ripple_content', '$regist_day')";    
   
      if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
     } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
     }

   $conn->close();                // DB 연결 끊기
   
   echo "
	   <script>
	    location.href = 'coffee_play.php';
	   </script>
	";
?>

   
