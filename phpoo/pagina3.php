<html>
    <head>
        <title>Pruebas</title>
    </head>
    <body>
        <?php
        class Menu {
            private $enlaces=array();
            private $titulos=array();
            private $colorFondo = "white";
            private $colorLetras = "black";
            public function cargarOpcion($en,$tit){
                $this->enlaces[]=$en;
                $this->titulos[]=$tit;
            }
            public function colores($colorFondo, $colorLetras){
                $this->colorFondo = $colorFondo;
                $this->colorLetras = $colorLetras;
            }
            public function mostrar(){ 
                echo '<div style="background-color:'.$this->colorFondo.'; padding:0.5em">';
                for($f=0;$f<count($this->enlaces);$f++){
                    echo '<a style="color:'.$this->colorLetras.';text-decoration:none" href="'.$this->enlaces[$f].'">'.$this->titulos[$f].'</a>';
                    if($f != count($this->enlaces)-1){
                       echo " | ";
                    }
                }
                echo "</div>";
            }
        }

        $menu1=new Menu();
        $menu1->cargarOpcion('http://www.google.com','Google');
        $menu1->cargarOpcion('http://www.yahoo.com','Yahoo');
        $menu1->cargarOpcion('http://www.msn.com','MSN');
        $menu1->colores("blue", "white");
        $menu1->mostrar();
        ?>
    </body>
</html>