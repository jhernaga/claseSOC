<html>
    <head>
        <title>Pruebas</title>
    </head>
    <body>
        <?php
        abstract class Figura{
            private $costat;
            private $area;
            private $perimetre;
            public function datos($c,$a,$p){
                $this->costat=$c;
                $this->area=$a;
                $this->perimetre=$p;
            }
            public function getCostat(){
                return $this->costat;
            }
            public function getArea(){
                return $this->area;
            }
            public function getPerimetre(){
                return $this->perimetre;
            }
        }
        
        class Cuadrado extends Figura{
            public function __construct($costat){
                parent::datos($costat, pow($costat,2),$costat*4);
            }
        }
        class TrianguloEquilatero extends Figura{
            public function __construct($base){
                parent::datos($base, (sqrt(3)/4)*pow($base,2),$base*3);
            }
        }
        
        $c=new Cuadrado(5);
        echo "Cuadrado de lado: ".$c->getCostat()."<br>";
        echo "Area: ".$c->getArea()."<br>";
        echo "Perimetro: ".$c->getPerimetre()."<br>";
        
        $t=new TrianguloEquilatero(5);
        echo "Triangulo equilatero de lado: ".$c->getCostat()."<br>";
        echo "Area: ".$c->getArea()."<br>";
        echo "Perimetro: ".$c->getPerimetre()."<br>";
        ?>
    </body>
</html>