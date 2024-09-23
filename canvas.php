<!-- show_color.php -->
<?php
session_start();

$theme = $_GET['theme'];

echo "Je favoriete kleur is: " . $_SESSION['favorite_color'] . "<br>";
echo "Thema: " . $theme;
?>