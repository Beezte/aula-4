<?php
$conexao = mysqli_connect("localhost", "root", "", "bazante");
if(!$conexao){
    header('Location: erroconexao.html');
}
?>
