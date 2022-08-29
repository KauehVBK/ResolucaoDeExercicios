<?php
# declaracao de obj, parametros, etc.
$produtos = $objeto->listaProdutos($par1, $par2);

for ($i = 0; $i < count($produtos); $i++) {
$produto = $produtos[$i];
$estrutura = $objeto->listaEstrutura($produto['codigo']);

if (!empty($estrutura)) {
$produtos[$i] = $estrutura;
continue;
}

echo "{$produto['codigo']} - {$produto['descricao']}: {$produto['quantidade']} peças. \n";
}
