<html>
    <head>
        <title>Pruebas</title>
    </head>
    <body>
        <?php

        abstract class Trabajador {
            private $nombre;
            private $sueldo;
            public function setNombre($nom){
                $this->nombre=$nom;
            }
            public function imprimir(){
                return $this->nombre.' es de '.$this->sueldo.'€ ';
            }
            public function setSueldo($s){
                $this->sueldo=$s;
            }
            public abstract function calcularSueldo();
        }  

        class Empleado extends Trabajador {
            private $horasTrabajadas;
            private $valorHora;
            public function __construct($nom,$horas,$valor){
                parent::setNombre($nom);
                $this->horasTrabajadas=$horas;
                $this->valorHora=$valor;
            }
            public function calcularSueldo(){
                $this->setSueldo($this->horasTrabajadas*$this->valorHora);
            }
            public function getHoras(){
                return $this->horasTrabajadas;
            }
        }

        class Gerente extends Trabajador {
            private $utilidades;
            private $porcentaje;
            public function __construct($nom,$uti,$p){
                parent::setNombre($nom);
                $this->utilidades=$uti;
                $this->porcentaje=$p/100;
            }
            public function calcularSueldo(){
                $this->setSueldo($this->utilidades*$this->porcentaje);
            }
        }

        $empleado1=new Empleado('Pablo Rodriguez',150,3.50);
        $empleado1->calcularSueldo();
        echo 'El sueldo del empleado ';
        echo $empleado1->imprimir();
        echo "y eso que ha trabajado ".$empleado1->getHoras()." horas<br>";

        $gerente1=new Gerente('Marcos Herning',1000000, 10);
        $gerente1->calcularSueldo();
        echo 'El sueldo del gerente ';
        echo $gerente1->imprimir()." y eso que se rasca los huevazos";
        ?>
    </body>
</html>