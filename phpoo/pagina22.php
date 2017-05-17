<html>
    <head>
        <title>Pruebas</title>
    </head>
    <body>

        <?php
        class Calculadora {
            public static function sumar($n1,$n2){
                return $n1+$n2;
            }
            public static function restar($n1,$n2){
                return $n1-$n2;
            }
            public static function multiplicar($n1,$n2){
                return $n1*$n2;
            }
            public static function dividir($n1,$n2){
                return $n1/$n2;
            }
        }

        $n1=10;
        $n2=5;
        echo "Suma: ".$n1." + ".$n2." = ".Calculadora::sumar($n1,$n2);
        echo '<br>';
        echo "Resta: ".$n1." - ".$n2." = ".Calculadora::restar($n1,$n2);
        echo '<br>';
        echo "Multiplicacion: ".$n1." x ".$n2." = ".Calculadora::multiplicar($n1,$n2);
        echo '<br>';
        echo "División: ".$n1." ·/. ".$n2." = ".Calculadora::dividir($n1,$n2);
        ?>

    </body>
</html>