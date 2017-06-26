<!DOCTYPE html>
<html>
    <?php include('../../private/html/header.html'); ?>
    <body>
        <header>
            CLEAN STREET
        </header>
        <?php include("../../private/html/nav.html"); ?>
        <main class="archief">
            <h1>ARCHIEF</h1>
            <ul>
                <!-- LOOP OVER INBOX ITEMS (afgehandelde meldingen (eigen, leeg.nu, ...), ongevlagde notities) -->
                <li>
                    <div class="item melding">
                        <img src="https://s3-us-west-2.amazonaws.com/slack-files2/bot_icons/2017-05-30/190042693285_48.png">
                        <div class="info">
                            <h2>LEEG.NU</h2>
                            <span class="datum-tijd">21:38</span><br>
                            <span class="label" style="float: right; background: #aaa">bak vol</span>
                            <p>Volle bak bij Wok 2 Go</p>
                            <p>Damstraat 128</p>
                            <p class="laatste-actie">→ afgehandeld <span>10:31</span></p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item melding">
                        <img src="https://s3-us-west-2.amazonaws.com/slack-files2/bot_icons/2017-05-30/190042693285_48.png">
                        <div class="info">
                            <h2>LEEG.NU</h2>
                            <span class="datum-tijd">21:38</span><br>
                            <span class="label" style="float: right; background: #aaa">bak vol</span>
                            <p>Volle bak bij Wok 2 Go</p>
                            <p>Damstraat 128</p>
                            <p class="laatste-actie">→ afgehandeld <span>10:31</span></p>
                        </div>
                    </div>
                </li>
            </ul>
        </main>
    </body>
</html>