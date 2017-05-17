<html>
    <head>
        <title>Pruebas</title>
    </head>
    <body>
        <?php
        class Empleado {
            private $nombre;
            private $sueldo;
            public function inicializar($nombre, $sueldo){
                $this->nombre=$nombre;
                $this->sueldo=$sueldo;
            }
            public function imprimir(){
                echo $this->nombre." cobra ".$this->sueldo."€";
                if($this->sueldo > 3000){
                    echo " y debe pagar impuestos";
                }else{
                    echo " y no debe pagar impuestos";
                }
                echo '<br>';
            }
        }

        $per1=new Empleado();
        $per1->inicializar('Juan',1000);
        $per1->imprimir();

        $per2=new Empleado();
        $per2->inicializar('Ana',4000);
        $per2->imprimir();


        ?>
    </body>
</html>