<?php
require_once 'Controlador.php';
class ControleRemoto implements Controlador{
    // Atributos
    private $volume;
    private $ligado;
    private $tocando; 
    // Métodos especiais
    public function __construct() {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false; 
    }
    private function getVolume() {
        return $this->volume;
    }
    private function setVolume($volume): void {
        $this->volume = $volume;
    }
    private function getLigado() {
        return $this->ligado;
    }
    private function setLigado($ligado): void {
        $this->ligado = $ligado;
    }
    private function getTocando() {
        return $this->tocando;
    }
    private function setTocando($tocando): void {
        $this->tocando = $tocando;
    }
    public function ligar(){
        echo "<p style='color: red;'>TV ligada!</p>";
        $this->setLigado(true);
    }
    public function desligar(){
        echo "Desligada";
        $this->setLigado(false);
    }
    public function abrirMenu(){
        echo "<p>----------MENU----------</p>";
        echo "<br>Está ligado?: " .($this->getLigado()?"Sim":"Não");
        echo "<br>Está tocando?: " .($this->getTocando()?"Sim":"Não");
        echo "<br>Volume: " .$this->getVolume();
        for($i=0; $i <= $this->getVolume(); $i+=10){
            echo "|";
        }
        echo "<br>"; 
    }
    public function fecharMenu(){
        echo "Fechando menu...";
        
    }
    public function maisVolume(){
        if ($this->getLigado()){
            $this->setVolume($this->getVolume() + 10);
        }
    }
    public function menosVolume(){
        if($this->getLigado()){
            $this->setVolume($this->getVolume() - 10);
        }
    }
    public function ligarMudo(){
        if ($this->getLigado() && $this->getVolume() > 0){
            $this->setVolume(0);
        }
    }
    public function desligarMudo(){
        if ($this->getLigado() && $this->getVolume() == 0){
            $this->setVolume(50);
        }
    }
    public function play(){
        if ($this->getLigado() && !($this->getTocando())){
            $this->setTocando(true);
        }
    }
    public function pause(){
        if ($this->getLigado() && $this->getTocando()){
            $this->setTocando(false);
        }
    }
}
