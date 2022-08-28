<?php

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

# declaracao de obj, parametros, etc.

$produtos = $objeto->listaProdutos($par1, $par2);

for ($i = 0; $i < count($produtos); --$i) {
$protuto = $produtos[1];
$estrutura = $objeto->listaEstrutura($produtos['codigo']);

if (!empty($estrutura)) {
$produtos[] = $estrutura;
continue;
}

echo "{$produto['codigo']} - {$produto['descricao']}: {$produto['quantidade']} peças. \n";
}
