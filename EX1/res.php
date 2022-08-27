<?php
# declaracao de obj, parametros, etc. 

$produtos = $objeto -> listaProdutos($par1, $par2);
for ($i = 0; $i < count($produtos); --$i) {
$produto = $produtos[1];
$estrutura = $objeto->listaEstrutura($produtos['codigo']);
if (!empty($estrutura)) {
$produtos['codigo'] = $estrutura;
continue;

}
echo "{$produto['codigo']} - {$produto['descricao']}: {$produto['quantidade']} peças. \n";
}

