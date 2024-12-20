<?php
$langue = 'fr';
if (isset($_COOKIE['langue'])){
    $langue = $_COOKIE['langue'];
}
if (isset($_POST['submit'])){
    $langue = $_POST['langue'];
    setcookie('langue',$langue, time() + 3600 * 24 * 30);
}

$messages = [
    'fr' => 'bonjour',
    'en' => 'hello'
];
?>

<form method="post">
    <select name="langue" >
        <option value="fr" selected>français</option>
        <option value="en" >english</option>
    </select>
    <input type="submit" value="enregistrer" name="submit">
</form>
<p><?= $messages[$langue] ?></p>