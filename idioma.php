<?php
if (isset($_GET["idioma"])) {
    $idioma = $_GET["idioma"];
    setcookie("idioma", $idioma, time() - (2));
    header("Location: index.php"); 
    exit();
}
?>
