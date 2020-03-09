<?php

require_once 'Pessoa.php';

class Garfanhoto extends Pessoa {

//Atributos
    private $login;
    private $totAssistido;
//Metodo Construtor
    public function __construct($nome, $idade, $sexo,$login) {
        parent::__construct($nome,$idade,$sexo);
        $this->login = $login;
        $this->totAssistido = 0;
    }

//metodos
    public function viuMaisUm() {
        
    }
//Metodos Especiais
    public function getLogin() {
        return $this->login;
    }

    public function getTotAssistido() {
        return $this->totAssistido;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function setTotAssistido($totAssistido) {
        $this->totAssistido = $totAssistido;
    }




}
