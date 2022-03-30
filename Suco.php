<?php
    require_once 'Bebida.php';
    class Suco extends Bebida{
        private $sabor;

        public function setSabor($sabor){
            $this->sabor = $sabor;
        }
        public function getSabor(){
            return $this->sabor;
        }
        public function mostrarBebida(){
            $dados = '<br>'."Nome: ".$this->getNome()."<br>
                    Sabor: ".$this->getSabor()."<br>
                    Preço: ".$this->getPreco()."<br>";
            return $dados;
        }
        public function verificaPreco($preco){
            $retorno = false;
            if($this->getPreco() < 2.5){
                $retorno = true;
            }
                return $retorno;
        }
    }
?>