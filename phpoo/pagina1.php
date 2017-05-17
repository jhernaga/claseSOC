<html>
    <head>
        <title>Pruebas</title>
    </head>
    <body>
        <?php
        class Persona {
            private $nombre;
            private $edad;
            public function inicializar($nombre, $edad){
                $this->nombre=$nombre;
                $this->edad=$edad;
            }
            public function imprimir(){
                echo $this->nombre." tiene una edad de ".$this->edad." años";
                echo '<br>';
            }
            public function getEdad(){
                return $this->edad;
            }
        }
        function imprimirTotalEdad($personas){
            $suma = 0;
            for($x=0; $x<sizeof($personas);$x++){
                $suma += $personas[$x]->getEdad();
            }
            echo "Edad sumada de todas las personas: ".$suma;
        }

        $personas = array();

        $per1=new Persona();
        $per1->inicializar('Juan',12);
        array_push($personas, $per1);
        $per1->imprimir();

        $per2=new Persona();
        $per2->inicializar('Ana',52);
        array_push($personas, $per2);
        $per2->imprimir();

        imprimirTotalEdad($personas);

        ?>
    </body>
</html>