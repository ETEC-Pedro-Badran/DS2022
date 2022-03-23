<?php
class Mesa {
    public $patrimonio;
    public $id;
    public $modelo;
    public $preco;
    public $dataAquisicao;

    function toString(){
       return "Mesa $this->modelo - id: $this->id" ;
    }

}
