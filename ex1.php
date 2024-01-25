<?php



 class Pessoa {

    private string $nome;
    private int $idade;
    public $matricula;

        public function __construct($nome, $idade, $matricula){
                   $this->matricula = $matricula;
            $this->setNome($nome);
            $this->setIdade($idade);
     
        }


    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }
    public function getMatricula()
    {
        return $this->matricula;
    }

    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    }

}

$professor_um = new Pessoa('carlos', 25, 'arte');
$professor_dois = new Pessoa('', 0, 'curso');
$professor_dois->setNome('carla');
$professor_dois->setIdade(43);
$professor_dois->setMatricula('arquitetura');

var_dump($professor_um);
var_dump($professor_dois);