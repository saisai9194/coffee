<?

	$num = $_GET[num];

      include "../lib/dbconn.php";

      $sql = "delete from memo_ripple where num=$num";
      //mysql_query($sql, $connect);
      $conn->query($sql);
      $conn->close();

      echo "
	   <script>
	    location.href = 'coffee_play.php';
	   </script>
	  ";
?>


