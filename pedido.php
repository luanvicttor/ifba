<?php
$user = 'root';
$pass = '';
$port = '3306';
$host = 'localhost';
$bd = "avaliacao";

try{
    $pdo = new PDO("mysql:host=$host; dbname=$bd", $user,$pass );
        
    $cod_pedido = $_GET["cod_pedido"];
    $data_pedido = $_GET["data_pedido"];
    $cod_vendedor = $_GET["cod_vendedor"];
    $cod_cliente = $_GET["cod_cliente"];

    $inserir = $pdo->query("INSERT INTO pedido (numero_pedido, data_pedido, codigo_vendedor, codigo_cliente) VALUES ('$cod_pedido', '$data_pedido', '$cod_vendedor', '$cod_cliente');");

    $vendedor = $pdo->query("SELECT * FROM pedido;");
    echo "Cadastro Efetuado com Sucesso!";

    foreach ($vendedor as $linha)
      {
          echo "<p><b>{$linha['numero_pedido']}</b> {$linha['data_pedido']} {$linha['codigo_vendedor']} {$linha['codigo_cliente']}<br></p>";
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