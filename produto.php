<?php
$user = 'root';
$pass = '';
$port = '3306';
$host = 'localhost';
$bd = "avaliacao";

try{
    $pdo = new PDO("mysql:host=$host; dbname=$bd", $user,$pass );
    
    $cod_descricao = $_GET["cod_descricao"];
    $descricao = $_GET["descricao"];

    $inserir = $pdo->query("INSERT INTO produto (codigo_produto, descricao) VALUES ('$cod_descricao', '$descricao');");

    $produto = $pdo->query("SELECT * FROM produto;");

    echo "Cadastro Efetuado com Sucesso!";

    foreach ($produto as $linha)
      {
          echo "<p><b>{$linha['codigo_produto']}</b> {$linha['descricao']}<br></p>";
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