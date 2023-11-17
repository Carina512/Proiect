<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Numele Evenimentului"; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            text-align: center;
        }

        h1 {
            font-size: 2em;
        }

        #description {
            margin-top: 20px;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        
        }

        .button {
            padding: 10px 20px;
            font-size: 1em;
        }

        .button img {
            max-width: 100%; /* Face ca imaginea să nu depășească lățimea containerului */
            height: auto;
            display: block;
            margin: 0 auto;
            max-height: 100px; /* Adaugă această linie pentru a limita înălțimea imaginii */
        }

        .admin-button {
            order: -1; /* Schimbă ordinea butonului de administrator la stânga */
        }
    </style>
</head>
<body>

    <h1><?php echo "Numele Evenimentului"; ?></h1>

    <p id="description"><?php echo "Bla bla bla, descriere ca am să scriu eu mai târziu."; ?></p>

    <div class="button-container">
    <a href="locatie.php" class="button" target="_blank">
            <img src="imaginelocatie.jpg" alt="Locatie">
        <p>Locatie</p>
    </a>

     <a href="speakeri.php" class="button" target="_blank">
            <img src="speakers.jpg" alt="Speakers">
        <p>Speakers</p>
     </a>
    <a href="sponsori_parteneri.php" class="button" target="_blank">
    <img src="handshake.jpg" alt="Handshake">
        <p>Parteneri & Sponsori</p>
    </a>
    </div>

    <div class="button-container">
        <a href="administrator.php" class="button admin-button"  target="_blank">Administrator</a>
        <a href="registration.php" class="button"  target="_blank" >Achizitie Bilet</a>
    </div>

</body>
</html>
