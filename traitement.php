<?php
session_start();
include 'sql.php';
if(isset($_POST["nom"]) and isset($_POST["age"])){
    extract($_POST);


    $sql= $conn->prepare("SELECT id_ens FROM enseignant WHERE nom = ? AND age = ?");
    $sql->bind_param("ss",$nom, $age);
    $sql->execute();
    $sql->bind_result($id);

    if($sql->fetch()){
        $_SESSION["nom"]=$nom;
        header("Location:Salle.php");
    }else{
        header("Location:login.php");
    }
}
?>