<?php

class PropiedadInmobiliaria

{
    function __construct($Idi,$Di,$MeCu,$Ci,$Va) {
        $this->Id=$Idi;
        $this->Ciudad=$Di;
        $this->MetrosCuadrados=$MeCu;
        $this->Ciudad=$Ci;
        $this->Valor=$Va;
       
    }

    public $Id;
    public $Dirección;
    public $MetrosCuadrados;
    public $Ciudad;
    public $Valor;
    
    

    public function MostrarDatos () 
    {
        echo 'Id: ' . $this->Id . '<br>';
        echo 'Dirección: ' . $this->Dirección . '<br>';
        echo 'Metros Cuadrados: ' . $this->MetrosCuadrados . '<br>';
        echo 'Ciudad: ' . $this->Ciudad . '<br>';
        echo 'Valor: ' . $this->Valor . '<br>';

    }
}