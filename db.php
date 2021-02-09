<?php
$dbservername = "localhost";
 $dbusername = "root";
$dbpassword = "";
$dbname = "books";
$conn = new mysqli($dbservername ,$dbusername,$dbpassword,$dbname);

if($conn->connect_error){
   die("Connection failed: " .$conn->connect_error);
}else{
   echo "Connected.";
}



   // die("Connection failed: " . mysqli_connect_error());
//}
//try {
   //$conn = mysqli_connect($dbservername ,$dbusername,$dbpassword,$dbname);
//}catch (Exception $e){
  // $error = $e->getMessage();
   //echo $error;
//}




// Set DSN
//$dsn = 'mysql:host='. $dbservername .';dbname='. $dbname;

// Create a PDO instance
//$pdo = new PDO($dsn, $dbusername, $dbpassword);

 //$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
 //$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
# PRDO QUERY

  // $query = $pdo->query('SELECT * FROM books');

//while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    //echo $row['title'] . '';
  // }

//while($row = $query->fetch())
//{
    //print_r($row);
//}

  // while($row = $query->fetch()){
  // echo $row->title . '';
//}