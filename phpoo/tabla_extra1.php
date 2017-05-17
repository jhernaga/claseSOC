<html>
    <head>
        <title>Pruebas</title>
    </head>
    <body>
        <?php
        include("celda.php");
        class Tabla {
            private $mat=array();
            private $cantFilas;
            private $cantColumnas;

            public function __construct($fi,$co){
                $this->cantFilas=$fi;
                $this->cantColumnas=$co;
                $sum=0;
                for($f=1;$f<=$this->cantFilas;$f++){
                    for($c=1;$c<=$this->cantColumnas;$c++){
                        $this->cargar($f,$c,++$sum);
                    }
                }
            }

            public function cargar($fila,$columna,$valor){
                if($valor%2==0){
                    $this->mat[$fila][$columna]=new Celda($valor, "yellow", "blue");
                }else{
                   $this->mat[$fila][$columna]=new Celda($valor, "yellow", "red"); 
                }
            }

            private function inicioTabla(){
                echo '<table border="1";>';
            }

            private function inicioFila(){
                echo '<tr>';
            }

            private function mostrar($fi,$co){
                echo "<td style=color:".$this->mat[$fi][$co]->getColorFuente().";background-color:".$this->mat[$fi][$co]->getColorFondo().">".$this->mat[$fi][$co]->getTexto()."</td>";
            }

            private function finFila(){
                echo '</tr>';
            }

            private function finTabla(){
                echo '</table>';
            }

            public function graficar(){
                $this->inicioTabla();
                for($f=1;$f<=$this->cantFilas;$f++){
                    $this->inicioFila();
                    for($c=1;$c<=$this->cantColumnas;$c++){
                        $this->mat[$f][$c]->mostrarCelda();
                    }
                    $this->finFila();
                }
                $this->finTabla();
            }
        }

        $tabla1=new Tabla(14,20);
        /*$tabla1->cargar(1,1,"1");
        $tabla1->cargar(1,2,"2");
        $tabla1->cargar(1,3,"3");
        $tabla1->cargar(2,1,"4");
        $tabla1->cargar(2,2,"5");
        $tabla1->cargar(2,3,"6");*/
        $tabla1->graficar();
        
        ?>
    </body>
</html>