<?php 
        if (ISSET($_COOKIE["idioma"])) 
        { 
            include "compara.inc"; 
        } 
        else 
        { 
    ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolha o Idioma</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css"> 
</head>
<body>
    <div class="header">
        Bem vindo ao Site Web Design em Foco
    </div>
    
    <div class="container">
        <div class="welcome">Escolha o idioma para entrar</div>
        <div class="flags">
            <a href="idioma.php?idioma=ingles">
            <img src="https://th.bing.com/th/id/R.d472275e8dca6a4dc12c3954b4bbd33c?rik=A8CqaytSA56%2fJw&riu=http%3a%2f%2fcdn.wallpapersafari.com%2f17%2f23%2fpDl3Ej.jpg&ehk=sPg6yeZ3Kmy1sqgR%2bhlyam7cw%2bTU056ePHPzd1MgNOs%3d&risl=&pid=ImgRaw&r=0" alt="Inglês">
            </a>
            <a href="idioma.php?idioma=portugues">
            <img src="https://ezbrazil.com/wp-content/uploads/2019/06/brazil-flag.png" alt="Português">
            </a>
            <a href="idioma.php?idioma=espanhol">
            <img src="https://www.dicasfree.com/wp-content/uploads/bandeira-5.jpg" alt="Espanhol">
            </a>
        </div>
    </div>
</body>
</html>
<?php
}
?>
