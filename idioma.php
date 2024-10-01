<?php
if (isset($_GET["idioma"])) {
    $idioma = $_GET["idioma"];
    setcookie("idioma", $idioma, time() + (86400 * 3));
    header("Location: index.php"); 
    exit();
}
?>
