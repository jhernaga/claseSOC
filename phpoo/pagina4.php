<html>
    <head>
        <title>Pruebas</title>
    </head>
    <body>
        <?php
        class CabeceraPagina {
            private $titulo;
            private $ubicacion;
            private $colorText;
            public function __construct($tit,$ubi, $colorText)
            {
                $this->titulo=$tit;
                $this->ubicacion=$ubi;
                $this->colorText=$colorText;
            }
            public function graficar()
            {
                echo '<div style="font-size:40px;text-align:'.$this->ubicacion.';color:'.$this->colorText.'">';
                echo $this->titulo;
                echo '</div>';
            }
            public function getTitulo(){
                return $this->titulo;
            }
        }

        $cabecera=new CabeceraPagina('El blog del programador','center', 'blue');
        $cabecera->graficar();
        echo $cabecera->getTitulo();
        ?>
    </body>
</html> 