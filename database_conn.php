<?php 
### FEITO POR PATRICK SOUZA ###
### Uma básica conexão com o banco de dados ######


$host = "localhost";
$user = "root";
$pass = "";
$dbname = "algumprojetoai"

$conn = new mysqli($host, $user, $pass, $dbname);

  if($conn->connect_error){
    die('Houve um erro ao tentar se conectar com o banco de dados');
  } else {
    echo "Está tudo ok por aqui. Pode continuar";
  }

?>
