<?php
class Banco {
    private $conta;
    protected $tipo;  // "cc" = conta corrente | "cp" = conta poupança
    private $nome;
    private $saldo = 0;
    private $status = false;

    // ---------- GETS: as portas para LER os atributos privados ----------
    public function getNome(){
        return $this->nome;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function getConta(){
        return $this->conta;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function getStatus(){
        return $this->status;
    }

    // ---------- CONSTRUTOR: a conta já nasce aberta ----------
    public function __construct($nome, $tipo, $conta){
        $this->setAbrirConta($nome, $tipo, $conta);
    }

    public function setAbrirConta($nome, $tipo, $conta) {
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->conta = $conta;
        $this->status = true;
        if ($tipo == "cc"){
            $this->saldo += 50;
        } elseif ($tipo == "cp"){
            $this->saldo += 150;
        }
    }

    public function setFecharConta() {
        if ($this->saldo > 0){
            print("Seu saldo é {$this->saldo}, faça o saque nesse valor");
        } elseif ($this->saldo < 0){
            print("Seu saldo é {$this->saldo}, faça o depósito nesse valor");
        } else {
            $this->status = false;
            print("Conta encerrada");
        }
    }

    public function setDepositar($valor){
        if ($this->status){
            $this->saldo += $valor;
        }else{
            print("Conta inexistente");
        }
    }

    public function setSacar($valor){
        if ($this->status){
            if ($this->saldo > $valor){
                $this->saldo -= $valor;
            }else{
                print("Saldo insuficiente");
            }
        }else{
            print("Conta inválida");
        }
    }

    public function setPagarMensalidade(){
        if ($this->tipo == "cc") {
            $this->saldo -= 12;
        } elseif ($this->tipo == "cp") {
            $this->saldo -= 20;
        }
        if ($this->status){
            if ($this->saldo > 0){
                
            }
        }
    }
}
