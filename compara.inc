<?php
if (isset($_COOKIE["idioma"])) {
    $idioma = $_COOKIE["idioma"];
    $conteudo = "";
    $corFundo = ""; 

    if ($idioma == "ingles") {
        $corFundo = "rgb(156,186,147)"; 
        $conteudo = "<span style='font-size: 20px;'><b>OUR PLANT</b></span><br>The XXX INDÚSTRIA DE MÁQUINAS LTDA, was founded in 1970, and became the most important and traditional supplier of BAGGING MACHINES in Brazil.";
    } elseif ($idioma == "portugues") {
        $corFundo = "rgb(156,186,147)"; 
        $conteudo = "<span style='font-size: 20px;'><b>EMPRESA</b></span><br>A XXX INDÚSTRIA DE MÁQUINAS LTDA, foi fundada em 1970, e tornou-se o mais importante e tradicional fabricante de máquinas ensacadeiras no Brasil.";
    } elseif ($idioma == "espanhol") {
        $corFundo = "rgb(156,186,147)"; 
        $conteudo = "<span style='font-size: 20px;'><b>EMPRESA</b></span><br>La XXX INDÚSTRIA DE MÁQUINAS LTDA, fue fundada en 1970, y se ha convertido en la más importante y tradicional fábrica de MÁQUINAS ENSACADORAS en Brasil.";
    }
    
    file_put_contents("versao.txt", strip_tags($conteudo)); 
  
    echo "<style>body { background-color: $corFundo; }</style>";
    echo nl2br($conteudo);
    echo '<br><br><a href="index.php" style="text-decoration: none;">Escolher outro idioma</a>';

}
?>
