<html>
    <head>
        <title>Pruebas</title>
    </head>
    <body>
        <?php

        abstract class Persona {
            protected $nombre;
            protected $edad;
            public function __construct($n, $e){
                $this->nombre=$n;
                $this->edad=$e;
            }
            public function toString(){
                return strtoupper($this->nombre).' de '.$this->edad.' años';
            }
        }

        class Empleado extends Persona{
            protected $sueldo;
            public function __construct($n, $e, $s){
                parent::__construct($n,$e);
                $this->sueldo=$s; 
            }
            public function toString(){
                return parent::toString().', cobra '.$this->sueldo.'€';
            }
        }
        
        class Profesor extends Empleado{
            protected $materia;
            public function __construct($n, $e, $s, $m){
                parent::__construct($n,$e, $s);
                $this->materia=$m;
            }
            public function toString(){
                return parent::toString().' y es profesor de '.$this->materia;
            }
        }


        $e=new Empleado("Jordi", 29, 1800);
       /* $e->setNombre("Juan");
        $e->setEdad(25);
        $e->setSueldo(2500);*/
        echo $e->toString();
        echo "<br>";
        //$e->imprimirDatos();
        $p=new Profesor("Pepe", 32, 1500, "matematicas");
        echo $p->toString();
        echo "<br>";

        ?>
    </body>
</html>