<?php
class Mesa {
    private $patrimonio;
    private $id;
    private $modelo;
    private $preco;
    private $dataAquisicao;

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

    function __destruct()
    {
        echo "<p>Mesa destruída: $this->patrimonio";
    
    }


    function getPatrimonio(){
        return $this->patrimonio;
    }
    function setPatrimonio(String $patrimonio){
        if (isset($patrimonio)) {
           $this->patrimonio = $patrimonio;
        }
    }


    

}
