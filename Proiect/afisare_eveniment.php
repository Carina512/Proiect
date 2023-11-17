<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afișare Evenimente</title>
</head>
<body>
<h1>Afișare Evenimente</h1>
<a class="login-button" href="login.php">Login</a>
<?php
// Conectare la baza de date și interogare pentru a obține toate evenimentele
// (implementarea conexiunii și interogării depinde de structura bazei tale de date)
// Vom presupune aici utilizarea funcțiilor mysqli
$conn = new mysqli('localhost', 'root', '', 'my_db');

if ($conn->connect_error) {
    die("Conexiunea la baza de date a eșuat: " . $conn->connect_error);
}

$sql = "SELECT * FROM events";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<p><a href='detalii_eveniment.php?id=" . $row['id'] . "'>" . $row['nume_eveniment'] . "</a></p>";
    }
} else {
    echo "Nu există evenimente.";
}

$conn->close();
?>
</body>
</html>