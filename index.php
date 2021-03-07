<?php

$url = 'https://www.bcb.gov.br/api/conteudo/pt-br/PAINEL_INDICADORES/cambio?'; //URL ONDE PEGAMOS OS DADOS

$dadosite = file_get_contents($url); //PEGA TODO O CÓDIGO FONTE
$var1 = explode('"valorVenda":',$dadosite); //DEFININDO ONDE ESTÁ O VALOR DO DOLAR PTAX
$var2 = explode('"dataIndicador":"',$var1[1]); //REFINANDO O EXPLODE PARA TRAZER SOMENTE O QUE QUEREMOS (REMOVENDO POLUIÇÃO VISUAL)
$Ptax = explode(',',$var2[0]); // RETORNANDO O VALOR DO DOLAR PTAX


$var4 = explode('"dataIndicador":"',$var1[1]); //DEFININDO ONDE ESTÁ A DATA DE FECHAMENTO
$var5 = explode('T',$var4[1]); //REFINANDO O EXPLODE PARA TRAZER SOMENTE O QUE QUEREMOS (REMOVENDO POLUIÇÃO VISUAL)
$date = explode('-',$var5[0]); //A DATA RETORNADA DO BANCO CENTRAL VEM INVERTIDA AAAA/MM/DD, ENTÃO ESTOU DESMEMBRANDO A DATA EM PARTES


print "<h1>".$Ptax[0]."</h1>"; //EXIBINDO NA TELA O VALOR RETORNADO DO DOLAR PTAX

print "<h1>Fechamento ".$date[2]."/".$date[1]."/".$date[0]."</h1>"; //EXIBINDO NA TELA O VALOR RETORNADO DA DATA DESMEMBRADA E CONCATENANDO OS VALORES NA ORDEM DD/MM/AAAA

//CÓDIGO FEITO USANDO A AULA DE EXPLODE DO Rodrigo Kulb NO YOUTUBE
?>