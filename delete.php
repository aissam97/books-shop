<?php

include('db.php');
$id = $_GET["id"];
if (isset($_GET["id"]) && !empty($_GET["id"])) {
  $sql = "DELETE FROM livres WHERE id=$id";
  mysqli_query($conn, $sql);
  header("location: read.php");
}

  














