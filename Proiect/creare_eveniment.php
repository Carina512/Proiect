<?php
// Verificăm dacă s-a trimis formularul
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conectare la baza de date
    $conn = new mysqli('localhost', 'root', '', 'my_db');

    // Verificare conexiune la baza de date
    if ($conn->connect_error) {
        die("Conexiunea la baza de date a eșuat: " . $conn->connect_error);
    }

    // Preluare date din formular
    $nume_eveniment = $_POST['nume_eveniment'];
    $descriere_eveniment = $_POST['descriere_eveniment'];
    $data_eveniment = $_POST['data_eveniment'];
    $ora_eveniment = $_POST['ora_eveniment'];

    // Inserare date în baza de date
    $sql = "INSERT INTO events (nume_eveniment, descriere_eveniment, data_eveniment, ora_eveniment) VALUES ('$nume_eveniment', '$descriere_eveniment', '$data_eveniment', '$ora_eveniment')";

    if ($conn->query($sql) === TRUE) {
        echo "Eveniment creat cu succes!";

        // Redirecționare către afișarea evenimentelor
        header("Location: afisare_eveniment.php");
        exit();
    } else {
        echo "Eroare la crearea evenimentului: " . $conn->error;
    }

    // Închidere conexiune la baza de date
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creare Eveniment</title>
</head>
<body>
<h1>Creare Eveniment</h1>

<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
    <label for="nume_eveniment">Nume Eveniment:</label>
    <input type="text" name="nume_eveniment" required><br>

    <label for="descriere_eveniment">Descriere Eveniment:</label>
    <textarea name="descriere_eveniment" required></textarea><br>

    <label for="data_eveniment">Data Eveniment:</label>
    <input type="date" name="data_eveniment" required><br>

    <label for="ora_eveniment">Ora Eveniment:</label>
    <input type="time" name="ora_eveniment" required><br>

    <input type="submit" value="Creează Eveniment">
</form>
</body>
</html>