 <?php 

 //funcoes iguais mas reescrever 
 //echo $this->regar();


class Plantas{

    public function Regar(){
        echo "regou?";
    }
    public function Podar(){
        echo "podou?";
    }
}


class Flor extends Plantas{
    public function Regar(){
        echo "Regada!";
    }
    public function Podar(){
        echo "Não podada!";
    }
}

class Arvore extends Plantas{
    public function Regar(){
        echo "Não regada!";
    }

    public function Podar(){
        echo "Podada!";
    }
}

$tulipa = new Flor;
$tulipa->Regar();
$tulipa->Podar();

$bananeira = new Arvore;
$bananeira->Regar();
$bananeira->Podar();

