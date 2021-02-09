<?php
include('db.php');
 header("location: read.php");

$id=$_GET['id'];

  if(count($_POST)>0) {
    
    mysqli_query($conn,"UPDATE livres SET titre= '".$_POST["titre"]."',
    auteur='".$_POST["auteur"]."',
    images='".$_POST["images"]."', 
     prix='".$_POST["prix"]."',
    quantite='".$_POST["quantite"]."',
    date_achat='".$_POST["date_achat"]."',
    date_de_publication='".$_POST["date_de_publication"]."'  WHERE id='".$id."'");
    }
    $result = mysqli_query($conn,"SELECT * FROM livres WHERE id='".$id."'");
    $row = mysqli_fetch_array($result);

?>