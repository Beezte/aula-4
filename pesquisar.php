<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>IFPE - PESQUISAR USUARIO</title>
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
//error_reporting(0);
//phpinfo();
//if(isset($_GET))
//$conexao = mysqli_connect("localhost", "root", "", "bazante");
//if(!$conexao){
//    echo"deu erro";
//}else{
//    echo "se isso apreceu foi pq conectou caralaho deu certo?!!!!!!???";
//}
session_start();
include("conexao.php");
$cpfbase = $_POST['cpfaluno'];

$sql = "select * from cadastromatricula where cpf='$cpfbase'";
$resultadopesquisa = $conexao->query($sql);

//exibir resultado//
if ($resultadopesquisa->num_rows>0) {
    echo "<h2>Resultado da pesquisa</h2>";
    while ($row=$resultadopesquisa->fetch_assoc()) {
        echo "<p>".$row["nomecompleto"]."</p>";
        echo "<p>".$row["email"]."</p>";
        echo "<p>".$row["nascimento"]."</p>";
        echo "<p>".$row["cidade"]."</p>";
        echo "<p>".$row["login"]."</p>";
        echo "<p>".$row["senha"]."</p>";
//        echo "<p>".$row["fotocracha"]."</p>";
        echo "<br>";
    }
} else {
        echo "Não achei nada";
}
?>

</body>
</html>