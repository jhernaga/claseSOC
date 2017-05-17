<html>
    <head>
        <title>Pruebas</title>
    </head>
    <body>
<?php
class Cliente {
static public $nombre_completo = 'Cliente desconocido';
protected $id = 1001;
}
print Cliente::$nombre_completo;
print Cliente::$id;
?>

    </body>
</html>