<?php

include('db.php');


$titre = $_POST['titre'];
$auteur = $_POST['auteur'];
$images = $_POST['images'];
$prix = $_POST['prix'];
$quantite = $_POST['quantite'];
$date_achat = $_POST['date_achat'];
$date_de_publication = $_POST['date_de_publication'];




$sql = "INSERT INTO livres (titre, auteur, images, prix, quantite, date_achat, date_de_publication)
VALUES ('$titre', '$auteur', '$images','$prix', '$quantite' , '$date_achat','$date_de_publication')";
// use exec() because no results are returned
// $conn->exec($sql);
mysqli_query($conn, $sql);

$target_dir = "image/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}


header("location: read.php");
?>
 
 //mysqli_query($conn,$sql);
//$sql = "INSERT INTO 'book' (`title`, `Author`, `image`, `prix`, `quantite_ou_stock`, `date_dachat`, `date_du_publication`) VALUES
  //('$title', '$Author','$image','$prix','$quantite_ou_stock', '$date_dachat','$date_du_pub');";
   //$stmt = $pdo->prepare($sql);
   //$stmt->execute(['title' => $title, 'Author' => $Author ,'image' => $image, 'prix' => $prix , `quantite_ou_stock`=>$quantite_ou_stock,`date_dachat`=>$date_dachat,`date_du_publication`=>$date_du_pub]);
  //echo 'Post add';

   header("location: ../read.php?add = success");