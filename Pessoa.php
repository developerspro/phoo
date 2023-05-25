<?php 
class Pessoa{
  private $cpf;
  public $nome;
  public $idade;
  public $endereco;
  public $telefone;
  public $email;
  public $cargo;
  public $codigoFunc;
  public $depto;
  public $salario;

  public function cadastrarCpf($cpf){
    // validar cpf
    echo "CPF válido";
    $this->cpf=$cpf;
  }

 public function mostrarCpf(){
    echo '<br>CPF:'.$this->cpf;
 }
 public function mostrarNome(){
    echo '<br>Nome:'.$this->nome;
 }
}


