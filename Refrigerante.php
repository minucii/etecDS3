<?php
    require_once 'Bebida.php';
    class Refrigerante extends Bebida{
        private $retornavel;

        public function setRetornavel($retornavel){
            $this->retornavel = $retornavel;
        }
        public function getRetornavel(){
            return $this->retornavel;
        }
        public function mostrarBebida(){
            $dados = '<br>'."Nome: ".$this->getNome()."<br>
                    Retornavel: ".$this->getRetornavel()."<br>
                    Preço: ".$this->getPreco()."<br>";
            return $dados;
        }
        public function verificaPreco($preco){
            $retorno = false;
            if($this->getPreco() < 5){
                $retorno = true;
            }
                return $retorno;
        }
    }
?>
