<?php
$user = 'root';
$pass = '';
$port = '3306';
$host = 'localhost';
$bd = "avaliacao";

try{
    $pdo = new PDO("mysql:host=$host; dbname=$bd", $user,$pass );
        
    $cod_vendedor = $_GET["cod_vendedor"];
    $nome_vendedor = $_GET["nome_vendedor"];

    $inserir = $pdo->query("INSERT INTO vendedor (codigo_vendedor, nome_vendedor) VALUES ('$cod_vendedor', '$nome_vendedor');");

    $vendedor = $pdo->query("SELECT * FROM vendedor;");
    echo "Cadastro Efetuado com Sucesso!";

    foreach ($vendedor as $linha)
      {
          echo "<p><b>{$linha['codigo_vendedor']}</b> {$linha['nome_vendedor']}<br></p>";
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