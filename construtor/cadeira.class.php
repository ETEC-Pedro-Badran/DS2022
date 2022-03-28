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


    function __construct($patrimonio, $id, $material, $modelo, $preco, $dataAquisicao)
    {
        $this->patrimonio = $patrimonio;
        $this->id = $id;
        $this->material = $material;
        $this->modelo = $modelo;
        $this->preco = $preco;
        $this->dataAquisicao = $dataAquisicao;
    }

    function __destruct()
    {
        echo "<p>Cadeira destruída: $this->patrimonio";
    }
}




