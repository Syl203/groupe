<?php session_start();
if(!isset($_SESSION["connecte"])){
    header('Location:login.php');
}else{
    header('Location: accueil.php');
}
?>