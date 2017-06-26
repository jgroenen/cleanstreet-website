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
<?php if (mt_rand() % 2) { ?>
                <a href="http://cdn.sleutelstad.nl/wp-content/uploads/2016/06/grofvuil.jpg">
                    <div class="header-image" style="background-image: url(http://cdn.sleutelstad.nl/wp-content/uploads/2016/06/grofvuil.jpg)"></div>
                </a>
                <a href="http://careace.net/wp-content/uploads/2010/09/map-google.gif">
                    <img src="http://careace.net/wp-content/uploads/2010/09/map-google.gif" style="width: 100px; height: 100px; margin: -80px 0 0 20px; border-bottom: 2px solid #aaa">
                </a>
                <h2>GROFVUIL</h2>
<?php } else { ?>
                <a href="http://careace.net/wp-content/uploads/2010/09/map-google.gif">
                    <div class="header-image" style="background-image: url(http://careace.net/wp-content/uploads/2010/09/map-google.gif)"></div>
                </a>
                <a href="https://s3-us-west-2.amazonaws.com/slack-files2/bot_icons/2017-05-30/190042693285_48.png">
                    <img src="https://s3-us-west-2.amazonaws.com/slack-files2/bot_icons/2017-05-30/190042693285_48.png" style="width: 100px; height: 100px; margin: -80px 0 0 20px; border-bottom: 2px solid #aaa">
                </a>
                <h2>VOLLE BAK</h2>
<?php } ?>
                
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