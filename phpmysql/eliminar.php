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

        $sql = "DELETE FROM MyGuests WHERE id=".$_GET['id'];
        $result = $conn->query($sql);
        ?>
        <p>Dato borrado</p>
        
        <?php $conn->close(); 
        header('Location: selectTabla.php');
        
        ?>
        
    </body>
</html>