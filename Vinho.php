<?php
    require_once 'Bebida.php';
    class Vinho extends Bebida{
        private $safra;
        private $tipo;

        public function setSafra($safra){
            $this->safra = $safra;
        }
        public function getSafra(){
            return $this->safra;
        }
        public function setTipo($tipo){
            $this->tipo = $tipo;
        }
        public function getTipo(){
            return $this->tipo;
        }
        public function mostrarBebida(){
            $dados = '<br>'."Nome: ".$this->getNome()."<br>
                    Tipo: ".$this->getTipo()."<br>
                    Preço: ".$this->getPreco()."<br>
                    Safra: ".$this->getSafra();
            return $dados;
        }
        public function verificaPreco($preco){
            $retorno = false;
            if($this->getPreco() < 25){
                $retorno = true;
            }
                return $retorno;
        }
    }
?>