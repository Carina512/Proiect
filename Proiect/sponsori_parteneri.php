<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parteneri și Sponsori</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: rgb(234, 248, 188);
        }

        h1 {
            text-align: center;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        }

        .sponsor-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-top: 20px;
        }

        .sponsor {
            width: 200px;
            margin: 10px;
            text-align: center;
        }

        .sponsor img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <h1>Parteneri și Sponsori</h1>

    <div class="sponsor-container">

        <?php
        // Definim un array asociativ cu informații despre sponsori
        $sponsori = array(
            "aqua" => array("nume" => "Aqua Carpatica", "imagine" => "s&p/aqua.jpg"),
            "bt" => array("nume" => "Banca Transilvania", "imagine" => "s&p/bt.jpg"),
            "casino" => array("nume" => "Centrul de Cultură Urbană - Casino", "imagine" => "s&p/casino.jpg"),
            "ccs" => array("nume" => "Casa de Cultura a Studenților „Dumitru Fărcaș”", "imagine" => "s&p/ccs.jpg"),
            "cinemafp" => array("nume" => "Cinema Florin Piersic", "imagine" => "s&p/cinemafp.jpg"),
            "lays" => array("nume" => "Lays", "imagine" => "s&p/lays.jpg"),
            "lidl" => array("nume" => "Lidl", "imagine" => "s&p/lidl.jpg"),
            "pepsi" => array("nume" => "Pepsi", "imagine" => "s&p/pepsi.jpg"),
            "radisson" => array("nume" => "Radisson", "imagine" => "s&p/radisson.jpg"),
            "victoria" => array("nume" => "Cinema Victoria", "imagine" => "s&p/victoria.jpg")
            // Adaugă mai mulți sponsori aici, după același model
        );

        // Iterăm prin array-ul de sponsori și generăm HTML-ul corespunzător
        foreach ($sponsori as $key => $sponsor) {
            echo '<div class="sponsor">';
            echo '<img src="' . $sponsor["imagine"] . '" alt="' . $sponsor["nume"] . '">';
            echo '</div>';
        }
        ?>

    </div>
</body>
</html>
