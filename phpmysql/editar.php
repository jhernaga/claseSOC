<!DOCTYPE html>
<html>
    <head>
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
            .button {
                background-color: #4CAF50;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <?php
        $servername = "mysql-shorttis.alwaysdata.net";
        $username = "shorttis";
        $password = "jordi88";
        $dbname = "shorttis_php";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
            $sql = "UPDATE MyGuests SET firtname = '".$_POST['fname']."', lastname = '".$_POST['lname']."', email = '".$_POST['mail']."' WHERE id = ".$_POST['id'];
            echo $sql;
            $conn->query($sql);
       
        
        $sql = "SELECT * FROM MyGuests WHERE id LIKE ".$_GET['id'];
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        if ($result->num_rows > 0) : ?>
        
        <form action="editar.php?id=<?php echo $_GET['id'] ?>" method="post">
            First name: <input type="text" name="fname" value="<?php echo $row["firstname"] ?>"><br>
            Last name: <input type="text" name="lname" value="<?php echo $row["lastname"] ?>"><br>
            Email: <input type="text" name="mail" value="<?php echo $row["email"] ?> "><br>
            <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
            <input type="submit" value="Submit">
        </form>

        <a class="button" href="selectTabla.php">Volver</a>

        <?php else: ?>
        <p>0 results</p>
        <?php endif; ?>
        
        <?php         
        $result = $conn->query($sql);
        
        $conn->close(); ?>
    </body>
</html>