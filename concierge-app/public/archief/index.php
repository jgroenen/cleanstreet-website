<!DOCTYPE html>
<html>
    <?php include('../../private/html/header.html'); ?>
    <body>
        <main class="archief details">
            <h1>ARCHIEF</h1>
            <div class="top-link">
                <a href="../inbox" class="close">✖</a>
            </div>
            <ul>
<?php

    $data = json_decode(file_get_contents("../../private/json/tickets.json"), true);
    $tickets = array_filter($data["tickets"], function ($ticket) {
        return $ticket["acties"][0]["omschrijving"] === "gesloten";
    });
    foreach ($tickets as $ticket) {
    
?>
    <li>
        <div class="item ticket">
            <img src="<?= $ticket["foto"] ?>">
            <div class="info">
                <h2><a href="<?= $ticket["url"] ?>"><?= $ticket["categorie"] ?></a></h2>
                <span class="datum-tijd"><?= $ticket["tijd"] ?></span><br>
                <span class="label" style="float: right"><?= $ticket["bron"] ?></span>
                <p><?= $ticket["ondernemer"] ?></p>
                <p><?= $ticket["adres"] ?></p>
                <p><?= $ticket["opmerking"] ?></p>
                <p class="laatste-actie">→  <?= $ticket["acties"][0]["omschrijving"] ?><span><?= $ticket["acties"][0]["tijd"] ?></span></p>
            </div>
        </div>
    </li>
<?php

    } // foreach

?>
            </ul>
<?php

    if (!count($tickets)) {
        
?>
    <p style="margin: 1rem">Geen tickets in archief.</p>
<?php
        
    }
    
?>
        </main>
    </body>
</html>