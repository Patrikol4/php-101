<?php 

class Pessoa 
{
  public $nome;
  public $idade;
  public $profissao;
  public $escolaridade;
  public $rendaMensal;
  
  public function mostrarNome()
  {
    return $this->nome;
  }
  
  public function mostrarIdade()
  {
   return $this->idade;
  }
  public function mostrarProfissao()
  {
    return $this->profissao;
  }
  public function mostrarEscolaridade()
  {
    return $this->escolaridade;
  }
  public function mostrarRenda()
  {
    return $this->rendaMensal;
  }
}

$pessoa = new Pessoa();

$pessoa->nome = "Joao da Silva Cavalcante";
$pessoa->idade = 24;
$pessoa->profissao = "Autonomo";
$pessoa->escolaridade = "Ensino medio completo";
$pessoa->rendaMensal = "2400 R$";
print $pessoa->nome;
print $pessoa->idade;
print $pessoa->profissao;
print $pessoa->escolaridade;
print $pessoa->rendaMensal;


?>
