<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>IFPE - HISTÓRIA DO CAMPUS</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <div class="cabecalho">
        <img src="arquivos/logo-reitoria.png" alt="LOGOIFPE">
    </div>
    <div class="menu-principal">
        <a href="index.html">Página Inicial</a> &nbsp; | &nbsp; <a href="historia.html">História do Campus</a> &nbsp; | &nbsp; <a href="imagens.html">Imagens</a> &nbsp; | &nbsp; <a href="noticias.html">Notícias</a> &nbsp; | &nbsp; <a href="matricula.html">Matricule-se</a>
    </div>
    <hr class="menu-hr">
</header>

<?php
//phpinfo();
$conexao = mysqli_connect("localhost", "root", "", "bazante");
if(!$conexao){
    echo"deu erro";
}
echo"se isso apreceu foi pq conectou caralaho deu certo?!!!!!!???"
?>

</body>
</html>