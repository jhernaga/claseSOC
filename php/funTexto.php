<!DOCTYPE html>
<html>
<body>

<?php
    $cont=0;
    $myfile = fopen("texto.txt", "r") or die("Unable to open file!");
    do{
        $leer=fgets($myfile);
        if(!preg_match("/^[aeiouAEIOU]*$/",$leer)){
            echo $leer;
            echo strlen($leer) . "<br>";
            //echo "<br>";
        }else{
            echo " ";
        }
        $cont++;
    }while(!feof($myfile));
    echo "Numero de lineas ".$cont;
fclose($myfile);
?>

</body>
</html>