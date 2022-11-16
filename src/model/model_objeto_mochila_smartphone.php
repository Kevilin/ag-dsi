<?php

class ModelObjetoMochilaSmartphone extends ModelObjetoMochilaBase {
    
    public function __construct() {
        $this->nome                 = 'Smarthphone';
        $this->peso                 = 0.7;
        $this->valor                = 1500;
        $this->quantidadeDisponivel = 4;
    }
    
}