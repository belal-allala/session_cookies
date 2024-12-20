<?php
session_start();
if(!isset($_SESSION['username'])) {
    header("Location:login.php");
    exit();
}

if (isset($_POST['submit'])){
    session_destroy();
    header("Location: login.php");
    exit();
}
?>

bienvenue <?= $_SESSION['username']; ?>! <form method="post"><input type="submit" value="déconnexion" name="submit"></form>