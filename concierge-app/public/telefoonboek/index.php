<!DOCTYPE html>
<html>
    <?php include('../../private/html/head.html'); ?>
    <body>
        <?php include('../../private/html/header.html'); ?>
        <?php include("../../private/html/nav.html"); ?>
        <main class="telefoonboek">
            <ul>
<?php

    $data = json_decode(file_get_contents("../../private/json/telefoonboek.json"), true);
    $contacten = $data["telefoonboek"];
    foreach ($contacten as $contact) {
        
?>
                <li>
                    <div class="item contact">
                        <div>
                        <img src="<?=$contact["foto"]?>">
                        </div>
                        <div class="info">
                            <h2><?=$contact["naam"]?></h2>
                            <p><?=$contact["opmerking"]?></p>
                            <p>contact: <?=$contact["contact"]?></p>
                        </div>
                        <div>
                            <a class="phone-button" href="tel:<?=$contact["telefoon"]?>"></a>
                        </div>
                    </div>
                </li>
<?php

    } // foreach
    
?>
            </ul>
            <div class="acties" id="acties" style="display: none" onclick="var el = document.getElementById('acties'); el.style.display = el.style.display === 'none' ? 'block' : 'none';">
                <ul>
                    <li>+CONTACT</li>
                    <li>annuleren</li>
                </ul>
            </div>
            <div class="actie" onclick="var el = document.getElementById('acties'); el.style.display = el.style.display === 'none' ? 'block' : 'none';">+</div>
        </main>
    </body>
</html>