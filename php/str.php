<!DOCTYPE html>
<html>
    <head>
        <title>Tablas tablas de multiplicar</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            *{
                margin-left:1em;
            }
            table{
                width: 12em !important;
            }
        </style>
    </head>
    <body>

        <?php $multi = $_GET['multi']; ?>
        <table class='table table-striped'><caption>Tabla del <?php echo $multi ?></caption>
            <?php for($x=0;$x<=10;$x++): ?>
                <tr><th><?php echo $multi ?> x <?php echo $x ?> = </th><td> <?php echo $x*$multi ?></td><td> 
                    <?php if(($x*$multi)%2 == 0): ?>PAR
                    <?php else: ?>IMPAR
                    <?php endif ?>
                </td></tr>
            <?php endfor ?>
        </table>
    </body>
</html>