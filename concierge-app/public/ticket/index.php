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
            <h1><?=$ticket["acties"][0]["omschrijving"] === "gesloten" ? "GESLOTEN" : "OPEN"?> TICKET</h1>
            <div class="top-link">
<?php if ($ticket["acties"][0]["omschrijving"] === "gesloten") { ?>
                <a href="../archief" class="close">✖</a>
<?php } else { ?>
                <a href="../inbox" class="close">✖</a>
<?php } ?>
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
                <p class="ondernemer"><?=$ticket["ondernemer"]?></p>
                <div class="opmerking" style="margin-top: 20px">
                    <?=$ticket["opmerking"]?>
                </div>
                <div class="updates" style="margin-top: 20px">
                    <style>
                        h2 {
                            margin: 1rem;
                            font-size: 1.4em;
                        }
                        .ondernemer,
                        .opmerking {
                            margin: 1rem;
                        }
                        .update {
                            width: 96%;
                            margin: 1rem auto;
                            background: #ddc;
                            line-height: 1.4em;
                        }
                        .update p {
                            padding: 1rem 0 1rem 2%;
                        }
                        .update .datum-tijd {
                            float: right;
                            margin-right: 1rem;
                        }
                        .update img {
                            width: 100%;
                        }
                    </style>
                    <h2>Updates</h2>
<?php foreach ($ticket["acties"] as $actie) { ?>
                    <div class="update">
                        <p><?=$actie["omschrijving"]?><span class="datum-tijd"><?=$actie["tijd"]?></span></p>
<?php if ($actie["foto"]) { ?>
                        <img src="<?=$actie["foto"]?>">
<?php } ?>
                    </div>
<?php } ?>
                </div>
                <div class="acties" id="acties" style="display: none" onclick="var el = document.getElementById('acties'); el.style.display = el.style.display === 'none' ? 'block' : 'none';">
                    <ul>

<?php if ($ticket["acties"][0]["omschrijving"] === "gesloten") { ?>
                        <li>TICKET HEROPENEN</li>
                        <li>annuleren</li>
<?php } else { ?>
                        <li>FOTO</li>
                        <li>OPMERKING</li>
                        <!--
                        <li>+ONDERNEMER</li>
                        <li>+LOCATIE</li>
                        -->
                        <li>BELLEN</li>
                        <li>TICKET SLUITEN</li>
                        <li>annuleren</li>
<?php } ?>
                    </ul>
                </div>
            </div>
            <div class="actie" onclick="var el = document.getElementById('acties'); el.style.display = el.style.display === 'none' ? 'block' : 'none';">≡</div>
        </main>
    </body>
</html>