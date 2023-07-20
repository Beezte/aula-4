<?php
//error_reporting(0);

try{
    $conexao = mysqli_connect("localhost", "root", "", "bazante");
}
catch(Exception $e){
    header('Location: erroconexao.html');
    die();
}

//$conexao = mysqli_connect("localhost", "root", "", "bazante");
//if($conexao->connect_errno){
////    echo "erro";
//    header("Location: http://localhost:63342/aula-4/erroconexao.html", true);
//    exit();
//}
?>
