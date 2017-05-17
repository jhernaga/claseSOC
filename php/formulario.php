<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Num 1: <input type="number" name="n1" value="<?php echo $_REQUEST['n1']; ?>" >
  Num 2: <input type="number" name="n2" value="<?php echo $_REQUEST['n2']; ?>" >
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $n1 = htmlspecialchars($_REQUEST['n1']);
    $n2 = htmlspecialchars($_REQUEST['n2']);
    $res = $n1 + $n2;
    echo $n1 . " + ". $n2 . " = ". $res;
}
?>


</body>
</html>