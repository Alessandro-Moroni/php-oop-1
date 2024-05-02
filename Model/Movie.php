<?php 

class Movie{
  public $nome;
  public $genere;
  public $regista;
  public $voto;
  public $anno;

  public function __construct(string $_nome, string $_genere, string $_regista, float $_voto, int $_anno){
    $this->nome = $_nome;
    $this->genere = $_genere;
    $this->regista = $_regista;
    $this->voto = $_voto;
    $this->anno = $_anno;
  }

  public function getInfoNome(){
    return "$this->nome";
  }
  public function getInfoGenere(){
    return "$this->genere";
  }
  public function getInfoRegista(){
    return "$this->regista";
  }
  public function getInfoVoto(){
    return "$this->voto";
  }
  public function getInfoAnno(){
    return "$this->anno";
  }

}

?>