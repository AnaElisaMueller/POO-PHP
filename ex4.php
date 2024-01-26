<?php


class Plantas {
    protected $nome; //acesso dentro da Classe e dos herdeiros (se usar set e get para acessar)
    public $quantidade; // acesso dentro e fora da classe
    private $tipo;//

    public function setNome($n){
        $this->nome =$n;
    }

    public function getNome(){
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
var_dump($tulipa);//new

$all = [$tulipa];//prof_dois,aluno3, aluno4,
$salvarJson = json_encode($all);

file_put_contents('dados/ex4.json', $salvarJson);