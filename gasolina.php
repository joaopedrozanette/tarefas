<?php 

  Class Posto{
    private $litrosGasolina;
    private $abastecimentoGasolina;

    public function __construct()
    {    $this->litrosGasolina = 0;
        $this->abastecimentoGasolina = array();      
    }
    public function abastecer($litros){
        if($litros<$this->litrosGasolina){
          "Não há combustivel o suficiente para abatecer!";
          return false;
        }else 
        "Abastecimento bem sucedido";
        return true;

    }
    public function reporEstoque($litros){

    }

    /**
     * Get the value of abastecimentoGasolina
     */
    public function getAbastecimentoGasolina()
    {
        return $this->abastecimentoGasolina;
    }

    /**
     * Set the value of abastecimentoGasolina
     */
    public function setAbastecimentoGasolina($abastecimentoGasolina): self
    {
        $this->abastecimentoGasolina = $abastecimentoGasolina;

        return $this;
    }
  }

  $posto = new Posto;

  $opcao = 0;
do {
  echo "\n-----------MENU-----------\n";
  echo "1- Abastecer\n";
  echo "2- Repor Estoque\n";
  echo "3- Listar Abastecimentos\n";
  echo "0- Sair\n";
  $opcao = readline("Escolha a opção: ");
  switch ($opcao) {
    case 0:
      echo "Programa encerrado!\n";
      break;
    case 1:
      $litros = readline("Quantos litros deseja abastecer: ");
      $posto->getAbastecimentoGasolina();
        
      break;
    case 2:
      echo "Listando....\n";
      break;
    case 3:
      break;
    default:
      echo "Opção INVÁLIDA!\n";
  }
} while ($opcao != 0);
