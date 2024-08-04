<?php
$user = 'root';
$pass = '';
$port = '3306';
$host = 'localhost';
$bd = "avaliacao";

try{
    $pdo = new PDO("mysql:host=$host; dbname=$bd", $user,$pass );
    
    
    $cod_cliente = $_GET["cod_cliente"];
    $nome_cliente = $_GET["nome_cliente"];

    $inserir = $pdo->query("INSERT INTO cliente (codigo_cliente, nome_cliente) VALUES ('$cod_cliente', '$nome_cliente');");

    $cliente = $pdo->query("SELECT * FROM cliente;");

    echo "Cadastro Efetuado com Sucesso!";
    foreach ($cliente as $linha)
      {
          echo "<p><b>{$linha['codigo_cliente']}</b> {$linha['nome_cliente']}<br></p>";
      }

      
}
catch (Exception $e){
  echo "Conexão Falhou";
}
?>

<html>
    <body>
        <form action="index.html">
            <button>Retornar</button>
        </form><br>
    </body>
</html>