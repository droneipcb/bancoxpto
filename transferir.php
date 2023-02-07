<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

// Se a sessão não está ativa...
if(!isset($_SESSION['login_user']))
{
  header("Location: index.php");
}

$username = $_SESSION['login_user'];

echo "<br>Username: ".$username;


if (!isset($_POST['destinatario']) ) {
  die("Não foi definido o destinatario da transferência bancária");
}
else $destinatario = $_POST['destinatario'];

if (!isset($_POST['valor']) || empty($_POST['valor']) ) {
  die("<br>Tem que colocar um valor");
}
else $valor = $_POST['valor'];


if (!isset($_POST['descricao']) || empty($_POST['descricao']) ) {
  die("<br>Tem que colocar uma descrição");
}
else $descricao = $_POST['descricao'];


echo "<p>Destinatario: ".$destinatario;
echo "<p>Valor: ".$valor." €";
echo "<p>Descricao: ".$descricao;


$dbhost = "localhost";
$dbuser = "root";
$dbpass = "aluno123";
$db = "bancoxpto";

$conn = new mysqli($dbhost, $dbuser, $dbpass,$db)
	or die("Ligacao a base de dados falhou: %s\n". $conn -> error);

$sqlQuery="INSERT INTO transferencias (origem,destino,valor,descricao) VALUES ('$username','$destinatario','$valor','$descricao');";

echo "<p>Query: ".$sqlQuery;
	
$result = $conn->query($sqlQuery);

$conn -> close();

header("Location: welcome.php");


?>
