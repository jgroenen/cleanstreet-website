<!DOCTYPE html>
<html>
    <?php include('../../private/html/head.html'); ?>
    <body>
        <main class="archief details">
            <h1>TICKET ARCHIEF</h1>
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
            <div>
<?php if ($ticket["foto"]) { ?>
                <a href="<?= $ticket["foto"] ?>">
                    <img src="<?= $ticket["foto"] ?>">
                </a>
<?php } else { ?>
                <img src="<?= $ticket["avatar"] ?>">
<?php } ?>
            </div>
            <div class="info">
                <h2><a href="<?= $ticket["url"] ?>"><?= $ticket["categorie"] ?></a></h2>
                <h3><?= $ticket["ondernemer"] ?></h3>
                <p><?= $ticket["adres"] ?></p>
                <p><?= $ticket["opmerking"] ?></p>
                <p class="laatste-actie">→  <?= $ticket["acties"][0]["omschrijving"] ?><span><?= $ticket["acties"][0]["tijd"] ?></span></p>
            </div>
            <div>
                <!-- LABEL KLEUREN REGISTREREN? -->
                <span class="label" <?= $ticket["bron"] === "LEEG.NU" ? "style='background: #ffcc24; color: #000'" : "" ?>><?= $ticket["bron"] ?></span><br>
                <span class="datum-tijd"><?= $ticket["tijd"] ?></span>
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