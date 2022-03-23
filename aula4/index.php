<?php

  function meuNome() {
      $nome = "PHP";
      echo $nome;
  }

  function diaDaSemana($dia){
      
    if ($dia==0) {
      echo "Domingo";
    } else if ($dia==1) {
      echo "Segunda-feira";
    } else if ($dia==2) {
      echo "Terça-feira";
    } else if ($dia==3) {
      echo "Quarta-feira";
    } else if ($dia==4) {
      echo "Quinta-feira";
    } else if ($dia==5) {
      echo "Sexta-feira";
    } else if ($dia==6) {
      echo "Sábado";
    }

  };

// chamada da função diaDaSemana(0);

  function vogal($letra){
      
    if ($letra=="A") {
      echo "Vogal A";
    } else if ($letra=="E"){
      echo "Vogal E";
    } else if ($letra=="I"){
      echo "Vogal I";
    } else if ($letra=="O"){
      echo "Vogal O";
    } else if ($letra=="U"){
      echo "Vogal U";
    } else 
      echo "Não é Vogal";
    };
  
  
  //chamada da função 
  vogal("I");

?>