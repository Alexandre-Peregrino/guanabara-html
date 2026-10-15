<?php

require_once 'ControladorUEC.php';
class Lutador {
    // Atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empate;
    
    //Métodos Especiais
    public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em) {
        $this->nome = "no";
        $this->nacionalidade = "na";
        $this->idade = "id";
        $this->altura = "al";
        $this->setPeso("pe");
        $this->vitorias = "vi";
        $this->derrotas = "de";
        $this->empates ="em";
        
    }
    public function apresentar(){
        
    }
    public function status(){
        
    }
    public function ganharLuta(){
        
    }
    public function pederLuta(){
        
    }
    public function empatarLuta(){
        
    }
    
    // Métodos
    public function getNome() {
        return $this->nome;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getVitoria() {
        return $this->vitoria;
    }

    public function getDerrota() {
        return $this->derrota;
    }

    public function getEmpate() {
        return $this->empate;
    }

    public function setNome($no): void {
        $this->nome = $no;
    }

    public function setNacionalidade($nacionalidade): void {
        $this->nacionalidade = $nacionalidade;
    }

    public function setIdade($idade): void {
        $this->idade = $idade;
    }

    public function setAltura($altura): void {
        $this->altura = $altura;
    }

    public function setPeso($peso): void {
        $this->peso = $peso;
        $this->setCategoria();
    }

    public function setCategoria($categoria): void {
        if ($this->setPeso() < 52.2){
            echo "Categoria inválida!";
        } elseif($this->getPeso() <= 70.3){
            $this->setCategoria("Leve");
        }elseif($this->getPeso() <= 83.9){
            $this->setCategoria("Médio");
        }elseif($this->getPeso() <= 120.2){
            $this->setCategoria("Pesado");
        }else{
            $this->setCategoria("Inválido");
        }
    }

    public function setVitoria($vitoria): void {
        $this->vitoria = $vitoria;
    }

    public function setDerrota($derrota): void {
        $this->derrota = $derrota;
    }

    public function setEmpate($empate): void {
        $this->empate = $empate;
    }


}
