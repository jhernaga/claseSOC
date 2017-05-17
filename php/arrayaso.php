<!DOCTYPE html>
<html>
    <body>

    <?php $cars = array( 250 => "Volvo", 125 =>"BMW", 300=>"Toyota");
        $aux=array_sum(array_keys($cars));
        print_r($aux);
    ?>
        <br>
        
    <?php
        function my_sort($a,$b){
            if ($a==$b) 
                return 0;
            else if ($a<$b)
                return -1;
            else
                return 1;
        }

        $arr = array("a"=>5, "b"=>2, "c"=>3, "d"=>6);
    uasort($arr,"my_sort");

        foreach($arr as $x=>$x_value){
            
            echo "Key=" . $x . ", Value=" . $x_value;
            if($x_value%2==0) echo ": par";
            else echo ": impar";
            echo "<br>";
        }
    uksort($arr,"my_sort");

        foreach($arr as $x=>$x_value){
            echo "Key=" . $x . ", Value=" . $x_value;
            echo "<br>";
        }
        
function ordeno($a, $b){
    if ($a%2==0 && $b%2==0)
        return 0;
    else if($a%2==0 && $b%2==1)
        return -1;
    else return 1;
}
$arrN = array(4,6,87,4,8,9,4,3,56,79,798,32,2,5,67,8,09,4,-4);
        usort($arrN, "ordeno");
        for($x=0; $x<count($arrN); $x++){
            echo $arrN[$x];
            if($arrN[$x]%2==0) echo ": par";
            else echo ": impar";
            echo "<br>";
        }
    ?>


    </body>
</html>