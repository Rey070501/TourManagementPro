 <?php
$db_server="localhost";
$db_user="root";
$db_pass="";
$db_name="register";
$conn=new mysqli($db_server,$db_user,$db_pass,$db_name);
if($conn->connect_error){
    echo "failed to connect DB" .$conn->connect_error;
}


 ?>