
<?php
include_once('site.php');

$datans = array(0, 1);
$datans[0] = $_POST["data"];
$datans[1] = $_POST["data1"];
$idade = array(0, 1);

    
$data = $datans[0];
list($ano, $mes, $dia) = explode('-', $data);
$hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
$nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
$idade[0] = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
echo "Primeira idade: $idade[0]";
echo"<br>";

$data2 = $datans[1];
list($ano2, $mes, $dia) = explode('-', $data2);
$hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
$nascimento = mktime( 0, 0, 0, $mes, $dia, $ano2);
$idade[1] = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
echo"Segunda idade: $idade[1]";



if ($idade[0]<$idade[1]){

   
 $idadeve = ($idade[1])/2;
  echo"<br> Diferença de idade: $idadeve";
  $idadef = $idadeve+$ano;
  echo"<br> Ano em que vai ter a metade da idade: $idadef";  

}else{
    $idadeve = ($idade[0])/2;
    echo"<br> Diferença de idade: $idadeve";
    $idadef = $idadeve+$ano2;
    echo"<br> Ano em que vai ter a metade da idade: $idadef";
}


?>



