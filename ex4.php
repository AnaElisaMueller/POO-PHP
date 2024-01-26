<?php


class Plantas {
    protected $nome;
    public $quantidade;
    private $tipo;

    public function setNome($n){
        $this->nome =$n;
    }

    public function getTipo(){
         return $this->nome;
    }
}

class Flor extends Plantas{
    public function setNome($n){
        $this->nome =$n;
    }

    public function getNome(){
         return $this->nome;
    }
}

class Arvore extends Plantas{
    public function setNome($n){
        $this->nome =$n;
    }

    public function getNome(){
         return $this->nome;
    }
}

$tulipa = new Flor();
$tulipa->setNome ('tulipa');//
$tulipa->tipo = ['Chama olímpica', 'Belle Époque'];
var_dump($tulipa);

$all = [$tulipa];//prof_dois,aluno3, aluno4,
$salvarJson = json_encode($all);

file_put_contents('dados/dados.json', $salvarJson);