<?php
//classe com nome pessoa
class Pessoa{
    //objetos com visibilidade privada
    private $nome;
    private $endereco;
    private $bairro;
    private $cep;
    private $cidade;
    private $estado;
//metedo de captura de valor de onjeto
    public function getNome(){
        return $this ->nome;
    }
    //metodo de alteração de objeto
    public function setNome(){
         $this->nome = $nome;
    }
    public function getEndereco(){
        return $this ->endereco;
    }
    public function setEndereco(){
        $this->endereco= $endereco;
    }
    public function getBairro(){
        return $this->bairro;
}
public function setBairro($bairro){
        $this->bairro = $bairro;
}
public function getCep(){
       return $this->cep;
}
public function setCep($cep){
       $this->cep= $cep;
}
public function getCidade(){
      return $this->cidade;
}
public function setCidade($cidade){
      $this->cidade= $cidade;
}
public function getEstado(){
      return $this->estado;
}
public function setEstado($estado){
      $this->estado= $estado;
}   
}
?>
