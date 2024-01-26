<?php
class Cadastro{
    public static $cliente;

    public static function Validar(){
        echo self::$cliente ." já está cadastrado.";
    }

    public function Funcoes(){
        echo self::$cliente ." deseja falar com a atendente?";
    }

}
Cadastro::$cliente = "mauricio";
Cadastro::Validar();// stactic 

$cliente =new Cadastro;
$cliente->Funcoes();

//$cliente = new Cadastro;