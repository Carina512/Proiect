<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Preia datele din formular
    $event_name = isset($_GET['event_name']) ? $_GET['event_name'] : '';
    $contact = isset($_GET['Contact']) ? $_GET['Contact'] : '';
    $location = isset($_GET['locatie_eveniment']) ? $_GET['locatie-eveniment'] : '';
    $event_info = isset($_GET['event_info']) ? $_GET['event_info'] : '';
    $time = isset($_GET['time']) ? $_GET['time'] : '';

    // Crează un fișier HTML nou cu informațiile primite
    $page_content = "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='utf-8'>
            <title>$event_name</title>
        </head>
        <body>
            <h1>$event_name</h1>
            <p><strong>Contact și Locație:</strong> $contact, $location</p>
            <p><strong>Informații despre eveniment:</strong><br>$event_info</p>
            <p><strong>Data și Ora:</strong> $time</p>
        </body>
        </html>
    ";

    // Salvează conținutul într-un fișier nou
    $file_name = strtolower(str_replace(' ', '_', $event_name)) . '.html';
    file_put_contents($file_name, $page_content);

    // Redirecționează către pagina nou creată
    header("Location: $file_name");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>My Example</title>

    <!-- CSS -->
    <style>
        .myForm {
            font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
            font-size: 0.8em;
            width: 800px;
            height:500px;
            padding: 1em;
            border: 1px solid #ccc;
            margin:100px 500px 100px 300px;
        }

        .myForm * {
            box-sizing: border-box;
        }

        .myForm fieldset {
            border: none;
            padding: 0;
        }

        .myForm legend,
        .myForm label {
            padding: 0;
            font-weight: bold;
        }

        .myForm label.choice {
            font-size: 0.9em;
            font-weight: normal;
        }

        .myForm input[type="text"],
        .myForm input[type="tel"],
        .myForm input[type="email"],
        .myForm input[type="datetime-local"],
        .myForm select,
        .myForm textarea {
            display: block;
            width: 100%;
            border: 1px solid #ccc;
            font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
            font-size: 0.9em;
            padding: 0.3em;
        }

        .myForm textarea {
            height: 100px;
        }

        .myForm button {
            padding: 1em;
            border-radius: 0.5em;
            background: #eee;
            border: none;
            font-weight: bold;
            margin-top: 1em;
        }

        .myForm button:hover {
            background: #ccc;
            cursor: pointer;
        }
    </style>

</head>
<body>

<form class="myForm" method="get" enctype="application/x-www-form-urlencoded" action="index.php">

    <p>
        <label>Nume Eveniment
            <input type="text" name="event_name" required>
        </label>
    </p>

    <p>
        <label>Contact si Locatie eveniment
            <input type="tel" name="Contact">
            <input type="text" name="locatie-eveniment">
        </label>
    </p>

    <p>
        <label>Informatii despre eveniment
            <textarea name="event_info" cols="6" rows="3"></textarea>
        </label>
    </p>

    <p>
        <label>Data si ora evenimentului
            <input type="datetime-local" name="time" required>
        </label>
    </p>


    <p><button>Submit</button></p>

</form>

</body>
</html>