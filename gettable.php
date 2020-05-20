<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
echo "BAC";


   exdb("localhost","dbaze_wp4","Y*7)J7QqguKh2OO3fu)56&^3","dbaze_wp4" ); 


// by https://github.com/ttodua/useful-php-scripts //
function exdb($host,$user,$pass,$db){ 
echo $host.$user.$pass;
echo "<br>";
echo $db;
echo "<br>";
// Create connection
$conn = new mysqli($host, $user, $pass);
    
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
echo "<br>";
$mysqli = new mysqli($host, $user, $pass, $db);
 //show tables
$myq="SHOW TABLES from ".$db;
   // $result = $mysqli ->query($myq);
$queryTables = $mysqli->query($myq); 
  //  print_r($result);
while($row = $queryTables->fetch_row()) { 
echo($row[0]."<br>");
$table=$row[0];
echo $table;
echo "<br>";
           $result2 = $mysqli->query("SHOW COLUMNS from ".$table."");
        if(mysqli_num_rows($result2)){
while($row2 = mysqli_fetch_row($result2))
            {
foreach ($row2 as $key=>$value)
                {
                    echo $value;

                }
echo "<br>";
}
}
echo "<hr>";
 //$result2 = mysqli_query($table, 'SHOW COLUMNS FROM') or die("cannot show columns");   
//print_r($result2);  
 } 
}
?>
