<!DOCTYPE html>
<html>
    <?php include('../../private/html/head.html'); ?>
    <body>
        <?php include('../../private/html/header.html'); ?>
        <?php include("../../private/html/nav.html"); ?>
        <main class="ondernemers">
            <ul>
<?php

    $data = json_decode(file_get_contents("../../private/json/ondernemers.json"), true);
    $ondernemers = $data["ondernemers"];
    foreach ($ondernemers as $ondernemer) {
        
?>
                <li>
                    <div class="item ondernemer">
                        <div>
                            <img src="<?=$ondernemer["foto"]?>">
                        </div>
                        <div class="info">
                            <h2><a href="<?=$ondernemer["url"]?>"><?=$ondernemer["naam"]?></a></h2>
                            <p><?=$ondernemer["adres"]?></p>
                            <p><?=$ondernemer["contact"]?></p>
                            <p>
<?php

    foreach ($ondernemer["bakken"] as $bak) {

?>
                                <span class="bak"><?=$bak["nummer"]?></span>
<?php
        
    } // foreach

?>
</p>
                        </div>
                        <div>
                            <a class="phone-button" href="tel:<?=$ondernemer["telefoon"]?>"></a>
                        </div>
                    </div>
                </li>
<?php

    } // foreach
    
?>
            </ul>
            <a class="actie" href="../ondernemer-add">+</a>
        </main>
    </body>
</html>