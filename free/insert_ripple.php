<?
   session_start();

   $userid = $_SESSION[userid];
   $username = $_SESSION[username];
   $usernick = $_SESSION[usernick];
   $userlevel = $_SESSION[userlevel];  

   $num = $_GET[num];
   $ripple_content = $_POST[ripple_content];
   $table = "free";

?>
<meta charset="utf-8">
<?
   if(!$userid) {
     echo("
	   <script>
	     window.alert('�α��� �� �̿��ϼ���.')
	     history.go(-1)
	   </script>
	 ");
	 exit;
   }   
   include "../lib/dbconn.php";       // dconn.php ������ �ҷ���

   $regist_day = date("Y-m-d (H:i)");  // ������ '��-��-��-��-��'�� ����

   // ���ڵ� ���� ���
   $sql = "insert into free_ripple (parent, id, name, nick, content, regist_day) ";
   $sql .= "values($num, '$userid', '$username', '$usernick', '$ripple_content', '$regist_day')";    
   
   $conn->query($sql);  // $sql �� ����� ��� ����
   $conn->close();                // DB ���� ����

   echo "
	   <script>
	    location.href = 'view.php?table=$table&num=$num';
	   </script>
	";
?>

   
