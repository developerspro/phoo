<?php 
include_once 'Pessoa.php';
include_once 'Endereco.php';
include_once 'Cliente.php';

$obj_end = new Endereco();
$obj_end->cep='09090999';
$obj_end->rua='Rua guarani';
$obj_end->numero=735;
$obj_end->bairro='Serraria';
$obj_end->cidade='Diadema';
$obj_end->estado='SP';

$obj = new Pessoa();
$obj->endereco = $obj_end;
$obj->endereco->mostraDados();
$obj->nome= "tio Patinhas";
echo $obj->nome.'<br>';
$obj->idade = 80;    
$obj->cadastrarCpf(21342143124312);
$obj->mostrarCpf();
$cliente1  = new Cliente();
$cliente1->nome = 'Pateta';
$cliente1->mostrarNome();