<?php 
class Endereco { 
    public $cep;
    public $rua;
    public $numero;
    public $bairro;
    public $cidade;
    public $estado;

public function mostraDados(){
    echo 'Rua:'.$this->rua;
    echo ' Numero:'.$this->numero;
    echo '<br>Bairro:'.$this->bairro.'<br>';
}
 
}