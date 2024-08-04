<?php
$user = 'root';
$pass = '';
$port = '3306';
$host = 'localhost';
$bd = "avaliacao";

try{
    $pdo = new PDO("mysql:host=$host; dbname=$bd", $user,$pass );
        
    $cod_pedido = $_GET["cod_pedido"];
    $cod_descricao = $_GET["cod_descricao"]; //Verificar se der erro
    $quantidade = $_GET["quantidade"];
    
    $inserir = $pdo->query("INSERT INTO contem (numero_pedido, codigo_produto, quantidade) VALUES ('$cod_pedido', '$cod_descricao', '$quantidade');");

    $vendedor = $pdo->query("SELECT * FROM contem;");
    echo "Cadastro Efetuado com Sucesso!";

    foreach ($vendedor as $linha)
      {
          echo "<p><b>{$linha['numero_pedido']}</b> {$linha['codigo_produto']} {$linha['quantidade']} <br></p>";
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