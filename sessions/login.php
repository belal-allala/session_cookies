<?php
session_start();
if (isset($_SESSION['username'])){
    header("Location:welcome.php");
    exit();
}
if (isset($_POST['submit'])){
    if ($_POST['username'] === 'admin' && $_POST['password'] === 'admin') {
        $_SESSION['username'] = $_POST['username'];
        header("Location: welcome.php");
        exit();
    }
}
?>

<form method="post">
    Nom d'utilisateur: <input type="text" name="username"><br>
    mot de passe: <input type="password" name="password"><br>
    <input type="submit" value="connexion" name="submit">
</form>