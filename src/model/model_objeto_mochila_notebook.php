<?php

class ModelObjetoMochilaNotebook extends ModelObjetoMochilaBase {
    
    public function __construct() {
        $this->nome                 = 'Notebook';
        $this->peso                 = 3.5;
        $this->valor                = 6000;
        $this->quantidadeDisponivel = 2;
    }
    
}