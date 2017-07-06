<? session_start(); ?>
<meta charset="utf-8">
<?

	$userid = $_SESSION[userid];
	$username = $_SESSION[username];
	$usernick = $_SESSION[usernick];
	$userlevel = $_SESSION[userlevel];	

	$content = $_POST[content];

	if(!$userid) {
		echo("
		<script>
	     window.alert('로그인후에 이용해 주세요.')
	     history.go(-1)
	   </script>
		");
		exit;
	}

	if(!$content) {
		echo("
	   <script>
	     window.alert('내용을 입력하세요.')
	     history.go(-1)
	   </script>
		");
	 exit;
	}

	$regist_day = date("Y-m-d (H:i)");  // ÇöÀçÀÇ '³â-¿ù-ÀÏ-½Ã-ºÐ'À» ÀúÀå

	include "../lib/dbconn.php";       // dconn.php ÆÄÀÏÀ» ºÒ·¯¿È

    $sql = "select * from member where id='$userid'";
    $result = $conn->query($sql);
	$row = $result->fetch_assoc();

	$name = $row[name];
	$nick = $row[nick];



	$sql = "INSERT into memo (id, name, nick, content, regist_day) 
			VALUES('$userid', '$name', '$nick', '$content', '$regist_day')";

              if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
              } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
              }

	$conn->close();                // DB ¿¬°á ²÷±â

	echo "
	   <script>
	    location.href = 'coffee_play.php';
	   </script>
	";
?>

  
