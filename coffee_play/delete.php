<?

	$num = $_GET[num];

   include "../lib/dbconn.php";

   $sql = "delete from memo where num = $num";
      $conn->query($sql);

      $conn->close();

   echo "
	   <script>
	    location.href = 'coffee_play.php';
	   </script>
	";
?>

