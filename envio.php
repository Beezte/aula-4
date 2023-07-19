<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>IFPE - MATRICULA</title>
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
echo"se isso apreceu foi pq conectou caralaho deu certo?!!!!!!???";
//ve se ja existe
$cpf = $_POST['CPF'];
$cpf = mysqli_real_escape_string($conexao, $cpf);

$sql = "SELECT cpf FROM bazante.cadastromatricula WHERE cpf='$cpf'";
$retorno = mysqli_query($conexao,$sql);

if(mysqli_num_rows($retorno)>0){
    echo "meuni achei teu cpg aqui ja";
}else{
    $nome = $_POST['nome'];
    $cpf = $_POST['CPF'];
    $email = $_POST['email'];
    $datanascimento = $_POST['datanascimento'];
    $cidade = $_POST['cidade'];
    $escolaridade = $_POST['escolaridade'];
    $loginmatricula = $_POST['loginmatricula'];
    $senhamatricula = $_POST['senhamatricula'];
    $senhacripto = password_hash($senhamatricula, PASSWORD_BCRYPT);
    $arquivocracha = $_POST['arquivocracha'];
    $curso = $_POST['curso'];
    $motivo = $_POST['motivo'];

    $sql = "INSERT INTO bazante.cadastromatricula(nomecompleto,cpf,email,nascimento,cidade,escolaridade,login,senha,fotocracha,curso,motivo) values('$nome','$cpf','$email','$datanascimento','$cidade','$escolaridade','$loginmatricula','$senhacripto','$arquivocracha','$curso','$motivo')";
    $resultado = mysqli_query($conexao,$sql);
    echo "usuario cadastrado";
}


?>

</body>
</html>