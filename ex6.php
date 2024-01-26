<?php
//constantes

class Pessoa {
    const nome = 'Elisa';

    public function echoNome(){
        echo self::nome;
    }
}

class Sobrenome extends Pessoa{
    const nome = "M";

    public function echoNome(){
        echo parent::nome;   
        echo self::nome;
    }

}


$pessoa = new Sobrenome();
$pessoa->echoNome();
echo "\n";

