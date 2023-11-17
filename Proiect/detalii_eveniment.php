<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalii Eveniment</title>
</head>
<body>
<h1>Detalii Eveniment</h1>

<?php
// Conectare la baza de date și interogare pentru a obține detalii despre eveniment
// (implementarea conexiunii și interogării depinde de structura bazei tale de date)
// Vom presupune aici utilizarea funcțiilor mysqli
$conn = new mysqli('localhost', 'root', '', 'my_db');

if ($conn->connect_error) {
    die("Conexiunea la baza de date a eșuat: " . $conn->connect_error);
}

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id_eveniment = $_GET['id'];
    $sql = "SELECT * FROM events WHERE id = $id_eveniment";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<p><strong>Nume Eveniment:</strong> " . $row['nume_eveniment'] . "</p>";
        echo "<p><strong>Descriere Eveniment:</strong> " . $row['descriere_eveniment'] . "</p>";
        echo "<p><strong>Data Eveniment:</strong> " . $row['data_eveniment'] . "</p>";
        echo "<p><strong>Ora Eveniment:</strong> " . $row['ora_eveniment'] . "</p>";
    } else {
        echo "Evenimentul nu există.";
    }
} else {
    echo "ID eveniment invalid.";
}

$conn->close();
?>
</body>
</html>