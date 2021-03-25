<?php

$url = 'https://www.bcb.gov.br/api/conteudo/pt-br/PAINEL_INDICADORES/cambio?'; //URL ONDE PEGAMOS OS DADOS

$dadosite = file_get_contents($url); 
$var1 = explode('"valorVenda":',$dadosite); 
$var2 = explode('"dataIndicador":"',$var1[1]); 
$Ptax = explode(',',$var2[0]); 


$var4 = explode('"dataIndicador":"',$var1[1]); 
$var5 = explode('T',$var4[1]); 
$date = explode('-',$var5[0]); 


print "<h1>".$Ptax[0]."</h1>"; 

print "<h1>Fechamento ".$date[2]."/".$date[1]."/".$date[0]."</h1>"; 

//CÓDIGO FEITO USANDO A AULA DE EXPLODE DO Rodrigo Kulb NO YOUTUBE
?>
