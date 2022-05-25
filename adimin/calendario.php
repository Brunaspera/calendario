<?php
date_default_timezone_set ('America/Sao_Paulo');
//configurando o fuso horario

if(isset($_GET{"mes"})){
     $mes=$_GET['mes'];
}
else{
    //esse mes
    $mes = date ('y- m');
}
//checando o formato da hora 
 $timestamp=strtotime($mes . '-1');
 if ($timestamp== false){
     $mes = date ('Y-m-d');
 }
  //hoje
  $hoje = date('Y-m', time());
  //titulo da tag h3
  $titulo =date('Y/m',$timestamp);
  //criando link dos meses
  $anterior = date ('Y-m', mktime(0,0,0,date('m',$timestamp)-1,1,date('Y', $timestamp)));
  $proximo =  date ('Y-m', mktime(0,0,0,date('m',$timestamp)+1,1, date('Y',$timestamp)));
 
  //conatgem dos dias do mês
  $cont_dias = date('t' , $timestamp);

  //Definindo os dias da semana -> 0:Dim 1:Seg 2:Ter 3:Qua 4:Qui 5:Sex 6:Sab
  $dias = date('w',mktime(0, 0, 0, date('m',$timestamp),1, date('Y',$timestamp)));

  //Criando o calendario 
  $semanas = [];
  $semana =''; 

  //Adiciona as células vazias
  $semana .= str_repeat('<td></td>', $dias);

  for($dia = 1, $dia <= $cont_dias; $dia++, $dias++){
      $data = $mes . '-'. $dia;

      if($hoje ==$data){
          $semana .= ' <td class="today">' .$dia;
      }
      else{
          $semna .='<td>'. $dia;
      }
      $semana .= '</td>' ;

      //verificando o final de semana 
      if($dias % 7 == 6 || $dia == $cont_dias){
          //adiciona celulas vazias 
          $semana .= str_repeat('<td></td>', 6 - ($dias % 7));
      }
      
      $semanas[] = '<tr>' .$semana. '</tr>';

      //preparar nova semana 
      $semana = '';
  }

?>