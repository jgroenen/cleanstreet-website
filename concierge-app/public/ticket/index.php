<?php 

    $id = array_pop(array_values(array_filter(explode("/", $_SERVER["REQUEST_URI"]))));

    $data = json_decode(file_get_contents("../../private/json/tickets.json"), true);
    $tickets = $data["tickets"];
    $ticket = $tickets[$id];
    
    $ticket["maps"] = "https://maps.googleapis.com/maps/api/staticmap?center="
        . $ticket["latitude"] . ","
        . $ticket["longitude"] . "&size=400x200&zoom=19";
    
?>
<!DOCTYPE html>
<html>
    <?php include('../../private/html/head.html'); ?>
    <body>
        <main class="ticket details">
            <h1>TICKET</h1>
            <div class="top-link">
                <a href="../inbox" class="close">✖</a>
            </div>
            <div class="details">
<?php if ($ticket["foto"]) { ?>
                <a href="<?=$ticket["foto"]?>">
                    <div class="header-image" style="background-image: url(<?=$ticket["foto"]?>)"></div>
                </a>
                <a href="<?=$ticket["maps"]?>">
                    <img src="<?=$ticket["maps"]?>" style="width: 100px; height: 100px; margin: -80px 0 0 20px; border-bottom: 2px solid #aaa">
                </a>
<?php } else { ?>
                <a href="<?=$ticket["maps"]?>">
                    <div class="header-image" style="background-image: url(<?=$ticket["maps"]?>)"></div>
                </a>
                <a href="<?=$ticket["avatar"]?>">
                    <img src="<?=$ticket["avatar"]?>" style="width: 100px; height: 100px; margin: -80px 0 0 20px; border-bottom: 2px solid #aaa">
                </a>
<?php } ?>
                <h2><?=$ticket["categorie"]?></h2>
                <p>WOK2GO (Damstraat)</p>
                <div class="opmerking" style="margin-top: 20px">
                    AUTOMATISCH MELDING LEEG.NU: Bak vol
                </div>
                <div class="updates" style="margin-top: 20px">
                    <h2>Updates</h2>
                    <div>aangemaakt <span class="datum-tijd">10:31</span></div>
                </div>
                <div class="acties" id="acties" style="display: none" onclick="var el = document.getElementById('acties'); el.style.display = el.style.display === 'none' ? 'block' : 'none';">
                    <ul>
                        <li>+FOTO</li>
                        <li>+OPMERKING</li>
                        <li>+ONDERNEMER</li>
                        <li>+LOCATIE</li>
                        <li>+BELLEN</li>
                        <li>TICKET SLUITEN</li>
                        <li>annuleren</li>
                    </ul>
                </div>
            </div>
            <div class="actie" onclick="var el = document.getElementById('acties'); el.style.display = el.style.display === 'none' ? 'block' : 'none';">+</div>
        </main>
    </body>
</html>