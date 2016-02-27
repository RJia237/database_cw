 <?php
    //MySQLi
      $mysql_host='localhost';
      $mysql_user='root';
      $mysql_password='group26';
      $connection = mysqli_connect($mysql_host,$mysql_user,$mysql_password);
      
      
    //check connection
        if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());}
        echo "Connected to MySQL";
?>
    
   