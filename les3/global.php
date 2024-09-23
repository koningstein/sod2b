<form action="global.php" method="POST">
    <input name="student">
    <input name="age">
</form>

<a href="global.php?page=about"
<?php
session_start();

// global.php?student=jan&age=20

$_POST['student'];
$_POST['age'];

$_GET['page'];

$_SESSION['student'] = "JAn";
$_SESSION['age'] = 18;

unset($_SESSION['student']);
$_SESSION['student'] = null;
$_SESSION = [];

$_SERVER['PHP_AUTH_USER'] = "JAn";
$_SERVER['PHP_AUTH_PW'] = "Jan";
$_SERVER


