<?php


// Connect to the database
//$conn = new PDO("mysql:host=localhost;dbname=casino_emp;", "root", "root");
include_once('class.dbconnection.php');
$db_connection = new dbConnection();
$link = $db_connection->connect();
//Check the connection
   if ($db_connection->connect_error) {
       die("Connection failed: " . $db_connection->connect_error);
   }
   echo "Connected successfully.";

$query = $link->query("select * from Employee where Positions_positionID= '$a' ");

$count = $query->rowCount();
$query->setFetchMode(PDO::FETCH_ASSOC);
echo"hello2";
$i =0;

while($result = $query->fetch()){

$array = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
if($i<$count){
   echo
       "<div class= 'Table'>".
       "<div class='Row'>".
       "<div class='sublist' id='".$array[$i]."'>".$result['first_name']."</div>".
       "<div class='sublist'>".$result['last_name']." "."( ".$result['holiday_hours']." )"."</div>".
       "</div></div>";

echo "Hello";
}
$i++;
}
?>

