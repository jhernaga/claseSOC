<!DOCTYPE html>
<html>
<body>

<?php $cars = array("Volvo", "BMW", "Toyota"); ?>
<span class="nose">
    I like <?php echo $cars[0] ?>, <?php echo $cars[1] ?> and <?php echo $cars[2] ?>.
</span>
<br>
<?php $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach($age as $x => $x_value): ?>
    <span>
        Key: <?php echo $x ?>, 
        Value: <?php echo $x_value ?>
        <br>
    </span>
<?php endforeach ?>


</body>
</html>