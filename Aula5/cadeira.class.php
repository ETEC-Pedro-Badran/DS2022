<?php
class Cadeira {
    public $patrimonio;
    public $id;
    public $material;
    public $modelo;
    public $preco;
    public $dataAquisicao;

    function toString(){
       return "Cadeira $this->modelo - id: $this->id" ;
    }

}




