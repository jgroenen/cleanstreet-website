<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name='viewport' content='width=320,initial-scale=1,user-scalable=0'>
        <link href="reset.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
        <style>
            form {
                font-size: 2em;
                text-align: center;
                line-height: 1.4em;
                padding-top: 20px
            }
            form input {
                font-size: 1em;
                width: 4em;
                margin: 40px 0;
            }
            form button {
                display: block;
                padding: 0 40px;
                background: #ADEA33;
                border: 0;
                border-radius: 10px;
                font-size: 1em;
                color: #112D5C;
                height: 2em;
                text-decoration: none;
                line-height: 2em;
                text-align: center;
                margin: 20px auto;
            }
            body {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="nederland-schoon-banner">
            <?php include('logo-schoon.html'); ?>
        </div>
        <main>
            <section>
                <form method="post">

                    Bak nummer:<br>
                    <input type="number" name="baknummer"><br>

                    <button>Bak legen</button>

                </form>
            </section>
        </main>
    </body>
</html>
<?php

ini_set("error_reporting", E_ALL);
ini_set("display_errors", 1);

if ($_SERVER["REQUEST_METHOD"] !== "POST") die("voer een baknummer in");

$baknummer = (int) $_POST["baknummer"];

if (!$baknummer) die("voer een baknummer in");

$json = file_get_contents("https://heelenschoon.datalabamsterdam.nl/ondernemersbakken/index.json");
$bakken = json_decode($json);
$kenmerken = array_map(function ($bak) {
    return $bak->kenmerk;
}, $bakken);
$bakken = array_combine($kenmerken, $bakken);

if (!array_key_exists($baknummer, $bakken)) die("onbekende bak");

$bak = $bakken[$baknummer];

include("private_vars.php");

$adres = str_replace(" ", "+", "{$bak->onderneming->straat}+{$bak->onderneming->nummer}+Amsterdam"); //FIXME + naam onderneming?

$geo = $bak->onderneming->geoPoint; //FIXME geoPoint naar (lat,lng) format

if (!$geo) {
    $json = file_get_contents("http://maps.google.com/maps/api/geocode/json?address={$adres}");
    $r = json_decode($json);
    $r = reset($r->results);
    $geo = "{$r->geometry->location->lat},{$r->geometry->location->lng}";
}

$static_maps_link = "https://maps.googleapis.com/maps/api/staticmap?size=300x300&maptype=roadmap&zoom=19&markers=color:red%7C{$geo}";
$search_link = "https://www.google.nl/maps/search/{$adres}/"; //FIXME geo?

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, [
    "payload" => json_encode([
        "icon_url" => "http://i.imgur.com/SsKhwxv.png",
        "username" => "LEEG.NU",
        "channel" => "#leegnu",
        "attachments" => [
            [
                "image_url" => $static_maps_link,
                "title" => "LEEG.NU: Bak {$bak->kenmerk} (klik voor route)",
                "text" => "{$bak->onderneming->naam} {$bak->onderneming->straat} (Bak {$bak->kenmerk})",
                "title_link" => $search_link 
            ]
        ]
    ])
]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_exec($ch);
curl_close($ch);

