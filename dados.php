<?php
$user = 'root';
$pass = '';
$port = '3306';
$host = 'localhost';
$bd = "avaliacao";

try{
    $pdo = new PDO("mysql:host=$host; dbname=$bd", $user,$pass );
    echo "Conexão Bem Sucedida!";

    $cod_cliente = $_GET["cod_cliente"];
    $nome_cliente = $_GET["nome_cliente"];

    $cod_vendedor = $_GET["cod_vendedor"];
    $nome_vendedor = $_GET["nome_vendedor"];

    $cod_vendedor = $_GET["cod_descricao"];
    $nome_vendedor = $_GET["descricao"];

    $inserir = $pdo->query("INSERT INTO usuario (nome, tipo) VALUES ('$nome', '$tipo');");

    $telefone = $pdo->query("SELECT * FROM usuario;");

    foreach ($telefone as $linha)
      {
          echo "<p><b>{$linha['nome']}</b> {$linha['tipo']}<br></p>";
      }
*/
}
catch (Exception $e){
  echo "Conexão Falhou";
}
?>