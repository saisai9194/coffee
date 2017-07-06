<?

    $conn = new mysqli( "localhost", "root", "1111","mydb");  
        
    if ($conn->connect_error) 
    	die( "SQL server에 연결할 수 없습니다." . $conn->connect_error); 
    
?>
