<?php
class Celda{
    private $texto;
    private $colorFuente;
    private $colorFondo;

    public function __construct($texto, $colorFuente, $colorFondo){
        $this->texto = $texto;
        $this->colorFuente = $colorFuente;
        $this->colorFondo = $colorFondo;
    }
    public function getTexto(){
        return $this->texto;
    }
    public function getColorFuente(){
        return $this->colorFuente;
    }
    public function getColorFondo(){
        return $this->colorFondo;
    }
    public function mostrarCelda(){
        echo "<td style=text-align:center;color:".$this->getColorFuente().";background-color:".$this->getColorFondo().">".$this->getTexto()."</td>";
    }
}
?>