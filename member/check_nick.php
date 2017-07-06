<meta charset="utf-8">
<?
   $nick = $_GET[nick];

   if(!$nick) 
   {
      echo("닉네임을 입력하세요.");
   }
   else
   {
      include "../lib/dbconn.php";
 
      $sql = "select * from member where nick='$nick' ";

      $result = $conn->query($sql);
      /*$num_record = mysql_num_rows($result);*/


      if ($result->num_rows > 0)
      {
         echo "닉네임이 중복됩니다.<br>";
         echo "다른 닉네임을 사용하세요.<br>";
      }
      else
      {
         echo "사용가능한 닉네임입니다.";
      }
    
      $conn->close();
   }
?>

