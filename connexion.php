<?php

try {
  $conn = new PDO("mysql:host=localhost;dbname=numeric_history", "root", '');
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $elements=$conn->prepare("SELECT id, nom_complet, nom_image FROM personnages");
  $elements->execute();
  $personnages=$elements->fetchAll(PDO::FETCH_ASSOC);
  $details=$conn->prepare("SELECT * FROM personnages WHERE id= :id");
  $details->bindParam(":id", $_GET["id"]);
  $details->execute();
  $details_perso=$details->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>