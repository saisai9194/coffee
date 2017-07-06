<?
   session_start();

   $num = $_GET[num];

   include "../lib/dbconn.php";

   $sql = "delete from greet where num = $num";
   $conn->query($sql);

   $conn->close();

   echo "
	   <script>
	    location.href = 'list.php';
	   </script>
	";
?>

