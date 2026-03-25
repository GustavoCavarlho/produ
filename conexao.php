<?php
/*variaveis de conexão com mysql*/
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "produ";

$conexao = mysql_connect($servidor, $usario, $senha, $banco);

if(!$conexao){
    die("Erro de conexão: ".mysqli_connect_error());
}
?>