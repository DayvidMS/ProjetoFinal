<?php
//Aqui temos a agregação das classes
require_once 'Video.php';
require_once 'Garfanhoto.php';
class Vizualizacao {
//Atributos
    private $espectador;
    private $filme;
//Metodo Construtor
    public function __construct($espectador, $filmes) {
        $this->espectador = $espectador;
        $this->filme = $filmes;
        $this->filme->setViews($this->filme->getViews() + 1);
        $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
    }

//Metodos
    public function avaliar(){
        $this->filme->setAvaliacao(5);
    }
    public function avaliarNota($nota){
        $this->filme->setAvaliacao($nota);
    }
    public function avaliarPorc($porc){
        $nova = 0;
        if ($porc <= 20){
            $nova = 3;
        }elseif ($porc <= 50) {
            $nova = 5;
        }elseif ($porc <= 90 ) {
            $nova = 8;
        } else {
            $nova = 10 ;
        }
        $this->filme->setAvaliacao($nova);
    }
//Metodos Especiais
    public function getEspectador() {
        return $this->espectador;
    }

    public function getFilme() {
        return $this->filme;
    }

    public function setEspectador($espectador) {
        $this->espectador = $espectador;
    }

    public function setFilme($filmes) {
        $this->filme = $filme;
    }


}
