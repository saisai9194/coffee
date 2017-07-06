<meta charset="utf-8">
<?
   $id = $_GET[id];

   if(!$id) 
   {
      echo("아이디를 입력하세요.");
   }
   else
   {
      include "../lib/dbconn.php";
 
      $sql = "select * from member where id='$id' ";

      $result = $conn->query($sql);

      //$result = mysql_query($sql, $connect);
      //$num_record = mysql_num_rows($result);

      if ($result->num_rows > 0)
      {
         echo "아이디가 중복됩니다!<br>";
         echo "다른 아이디를 사용하세요.<br>";
      }
      else
      {
         echo "사용가능한 아이디입니다.";
      }
    
      $conn->close();
   }
?>

