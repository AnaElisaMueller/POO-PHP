<?php

abstract class Plantas{
    protected $nome; 
    protected $quantidade; 
    protected $tipo;

    abstract protected function Regar();
    abstract protected function Podar();
}


class Flor extends Plantas{
    public function Regar(){
        echo "Regada!";
    }
    public function Podar(){
        echo "Não podar!";
    }
}

class Arvore extends Plantas{
    public function Regar(){
        echo "Regada!";
    }

    public function Podar(){
        echo "Podada!";
    }
}

$tulipa = new Flor();
//$tulipa->setNome ('tulipa');//
//$tulipa->tipo = ['Chama olímpica', 'Belle Époque'];
var_dump($tulipa);//new
$tulipa->Podar();
echo "\n";

$all = [$tulipa];//prof_dois,aluno3, aluno4,
$salvarJson = json_encode($all);

file_put_contents('dados/ex5.json', $salvarJson); 