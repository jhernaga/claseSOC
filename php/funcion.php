<!DOCTYPE html>
<html>
    <body>

        <?php
        function familyName($fname) {
            echo "$fname Refsnes.<br>";
        }
        ?>

        <span>
        <?php $nombre = array("Jani", "Hege", "Stale", "Kai Jim", "Borge") ?>
            <?php for($x=0; $x< count($nombre); $x++): ?>
                <?php //if(substr($nombre[$x], 0, 1)=="S" || substr($nombre[$x], 0, 1)=="s"): ?>
                    <span><?php familyName($nombre[$x]) ?></span>
                <?php //endif ?>
            <?php endfor ?>
        </span>

    </body>
</html>