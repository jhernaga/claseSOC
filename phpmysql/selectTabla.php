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

        $sql = "SELECT id, firstname, lastname FROM MyGuests";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) : ?>
            <table>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th></th>
            </tr>
            <?php while($row = $result->fetch_assoc()): ?>
            <tr>                
                <td><a href="usuario.php?id=<?php echo $row['id']; ?>"><?php echo $row["id"]; ?></a></td>
                <td><?php echo $row["firstname"]." ".$row["lastname"]; ?></td>
                <td><a onclick="return confirm('Realmente queires borrar?')" href="eliminar.php?id=<?php echo $row['id']; ?>">Borrar</a></td>
                <td><a href="editar.php?id=<?php echo $row['id']; ?>">Editar</a></td>
            </tr>
            <?php endwhile; ?>
        </table>
        <p>Usuarios: <?php echo $result->num_rows; ?> </p>

        <?php else: ?>
            <p>0 results</p>
        <?php endif; ?>
        <?php $conn->close(); ?>
        
    </body>
</html>