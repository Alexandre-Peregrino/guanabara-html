<?php

class ContaBanco {
    // Atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    
    // Métodos
    public function abrirConta($t){
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t == "cc"){
            $this->setSaldo(50);
        } elseif($t == "cp"){
            $this->setSaldo(150);
        }
    }
    public function fecharConta(){
        if ($this->getSaldo() > 0){
            echo "<p> Conta com saldo, retire para encerrar</p>";
        }elseif ($this->getSaldo() < 0){
            echo "<p> Conta negativa, não pode ser encerrada</p>";  
        }else {
            $this->setStatus(false);
            echo "<p>Conta de {$this->getDono()} encerrada com sucesso</p>";
        }  
    }
    public function depositar($v){
        if ($this->getStatus()){
            $this->setSaldo($this->getsaldo() + $v);
            echo "<p>Deposito de R$ {$v} na conta de {$this->getDono()}</p>";
        }else{
            echo "<p>Conta inativa, não pode depositar</p>";
        }
        
    }
    public function sacar($v){
        if ($this->getStatus()){
            if ($this->getSaldo() >= $v){
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Saque autorizado de $v na conta de {$this->getDono()}</p>";
            }else{
                echo "<p>Saldo insuficiente</p>";
            }
        }else{
            echo "<p>Conta inativa</p>";
        }
    }
    public function pagarMensal(){
        if ($this->getTipo() == "cc"){
            $v = 12;
        }elseif ($this->getTipo() == "cp"){
            $v = 20;
        } 
        if ($this->getStatus()){
            $this->setSaldo($this->getSaldo() - $v);
            echo "<p> Mensalidade descontada R$ {$v} na conta de {$this->getDono()} </p>";
        }else{
            echo"<p>Prolemas com a conta";
        }
    }
    
    // Métodos especiais
    public function __construct() {
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "<p>Conta criada com sucesso</P>";
    }
    public function getNumConta() {
        return $this->numConta;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getDono() {
        return $this->dono;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setnumConta($numConta): void {
        $this->numConta = $numConta;
    }

    public function setTipo($tipo): void {
        $this->tipo = $tipo;
    }

    public function setDono($dono): void {
        $this->dono = $dono;
    }

    public function setSaldo($saldo): void {
        $this->saldo = $saldo;
    }

    public function setStatus($status): void {
        $this->status = $status;
    }


}
