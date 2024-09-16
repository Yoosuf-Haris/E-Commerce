
<?php
//SQL connection 
$servername="localhost";
$username="root";
$password="";
$dbname="bauhinia clothing";

//create connection
$conn = new mysqli($severname,$username,$password,$dbname);

//chack connection
if ($conn->connect_error){
    die("Connection Failed:".$conn->connect_error);
}
echo "Connected Successfully";
?>