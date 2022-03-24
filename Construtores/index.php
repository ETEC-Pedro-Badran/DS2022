<?php
   
   require 'cadeira.class.php';
   require 'mesa.class.php';

   $cadeiraVerde = new Cadeira(123,1,'Feltro', 66.0,'ADV54ty','16/03/2022');
   /*   $cadeiraVerde->patrimonio =  123;
      $cadeiraVerde->id = 1;
      $cadeiraVerde->material = 'Feltro';
      $cadeiraVerde->preco = 55.0;
      $cadeiraVerde->modelo = 'ADV54TY';
      $cadeiraVerde->dataAquisicao = '16/03/2022';
     */ 
      $cadeiraVerde2 = new Cadeira(124,2,'Couro', 1888.0,'CCSFEE','23/03/2022');
      /*
      $cadeiraVerde2->patrimonio =  124;
      $cadeiraVerde2->id = 2;
      $cadeiraVerde2->material = 'Feltro';
      $cadeiraVerde2->preco = 55.0;
      $cadeiraVerde2->modelo = 'ADV54TY';
      $cadeiraVerde2->dataAquisicao = '16/03/2022';
   */
   
   echo $cadeiraVerde->toString()."<br>";
   echo $cadeiraVerde2->toString()."<br>";


   $mesa1 = new Mesa();
   $mesa1->patrimonio =  321;
   $mesa1->id = 1;
   $mesa1->preco = 223.40;
   $mesa1->modelo = 'MSA0234';
   $mesa1->dataAquisicao = '23/03/2022';
   echo $mesa1->toString()."<br>";


   $mesa2 = new Mesa();
   $mesa2->patrimonio =  543;
   $mesa2->id = 2;
   $mesa2->preco = 545.40;
   $mesa2->modelo = 'MSA234';
   $mesa2->dataAquisicao = '23/03/2022';
   echo $mesa2->toString()."<br>";
