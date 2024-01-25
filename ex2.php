<?php

class Viagem {
    public $ano;
    public $lugar;
    public $pessoas; //quantidade

    public function Passado(){//aconteceu
        echo "Lembranças!";
    }

    public function Futuro(){//acontecerá
        echo "Sonhos!";
    }
}

class Praia extends Viagem{
}
class Cultural extends Viagem{
}

$ferias = new Praia();
$ferias->ano = 2020;
$ferias->lugar = 'RJ';
$ferias->pessoas = 7;
var_dump($ferias);
$ferias->Passado();
echo "\n \n";

$ferias2 = new Cultural();
$ferias2->ano = 2025;
$ferias2->lugar = 'RS';
$ferias2->pessoas = 12;
var_dump($ferias2);
$ferias->Futuro();
echo "\n \n";