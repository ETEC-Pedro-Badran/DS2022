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


    function  __constructor($patrimonio,$id,$modelo,$preco,$dataAquisicao){
        $this->patrimonio = $patrimonio;
        $this->id = $id;
        $this->modelo = $modelo;
        $this->preco = $preco;
        $this->dataAquisicao = $dataAquisicao;
    }


}
