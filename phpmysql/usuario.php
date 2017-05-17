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

        $sql = "SELECT * FROM MyGuests WHERE id LIKE ".$_GET['id'];
        $result = $conn->query($sql);

        if ($result->num_rows > 0) : ?>
        <table>
            <tr>
                <th>Full Name</th>
                <th>email</th>
                <th>Fecha de creación</th>
            </tr>
            <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row["firstname"]." ".$row["lastname"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["reg_date"]; ?></td>
            </tr>
            <?php endwhile; ?>
        </table>
        <a class="button" href="editar.php?id=<?php echo $_GET['id'] ?>">Editar</a>
        <a class="button" href="selectTabla.php">Volver</a>

        <?php else: ?>
        <p>0 results</p>
        <?php endif; ?>
        <?php $conn->close(); ?>
    </body>
</html>