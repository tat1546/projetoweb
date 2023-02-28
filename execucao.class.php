<?php
//importação
require_once("pessoa.class.php");
//nome classe
class Teste{
    private $pessoa;

    public function __construct(){
        //objeto cahmado  pessoa que recebe a classe pessoa()
        $pessoa = new Pessoa();
        //passar um valor para o metodo setnome
        $pessoa->setNome("TATIANE");
        //imprimir um valor do metodo getnome
        echo $pessoa-> getNome();


    }
    //instancia
}new Teste();
?>