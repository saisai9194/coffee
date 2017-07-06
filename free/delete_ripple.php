<?
      include "../lib/dbconn.php";

      $ripple_num = $_GET[ripple_num]

      $table = "free";
      $num = $_GET[num];



      $sql = "delete from free_ripple where num=$ripple_num";
		   $conn->query($sql);  // $sql 에 저장된 명령 실행
		   $conn->close();                // DB 연결 끊기

      echo "
	   <script>
	    location.href = 'view.php?table=$table&num=$num';
	   </script>
	  ";
?>
