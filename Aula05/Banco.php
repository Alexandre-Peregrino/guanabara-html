<?php

class Banco {
    
    private $nome;
    private $tipo;
    private $id;
    private $conta;
    private $saldo;
    
    public function setDepositar($conta, $tipo, $valor){
        $this->saldo += $valor;
        $this->conta = $conta;
        $this->tipo = $tipo;
    }
    
    public function setSacar($conta, $tipo, $valor){
        $this->conta = $conta;
        $this->tipo = $tipo;
        $this->saldo -= $valor;

    }
    
    public function getSaldo(){
        return $this->saldo;
    }

}
