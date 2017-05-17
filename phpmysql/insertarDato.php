<html>
    <head>
        <title>Pruebas</title>
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

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('jordi', 'h', 'jhg_bcn@yahoo.es')";

if ($conn->query($sql) === TRUE) {
	 $last_id = $conn->insert_id;
    echo "New record created successfully ".$last_id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

    </body>
</html>