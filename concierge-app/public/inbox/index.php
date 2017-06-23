<!DOCTYPE html>
<html>
    <?php include('../../private/html/header.html'); ?>
    <body>
        <header>
            CLEAN STREET
        </header>
        <?php include("../../private/html/nav.html"); ?>
        <main class="inbox">
            <h1>INBOX</h1>
            <div style="height: 2rem">
                <a href="../archief" style="color: #aaa; line-height: 2rem; margin-left: 1rem">« archief bekijken</a>
            </div>
            <ul>
                <!-- LOOP OVER INBOX ITEMS (niet afgehandelde meldingen (eigen, leeg.nu, ...), gevlagde notities) -->
                <li>
                    <div class="item melding">
                        <img src="https://s3-us-west-2.amazonaws.com/slack-files2/bot_icons/2017-05-30/190042693285_48.png">
                        <div class="info">
                            <h2>LEEG.NU</h2>
                            <span class="datum-tijd">21:38</span>
                            <p>Volle bak bij Wok 2 Go</p>
                            <p>Damstraat 128</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item notitie">
                        <img src="http://orig07.deviantart.net/91df/f/2008/076/4/9/notepad_by_freestock.jpg">
                        <div class="info">
                            <h2>NOTITIE</h2>
                            <p>Vraag van WOK2GO over ophaaltijden grofvuil. Navragen.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item melding">
                        <img src="https://s3-us-west-2.amazonaws.com/slack-files2/bot_icons/2017-05-30/190042693285_48.png">
                        <div class="info">
                            <h2>LEEG.NU</h2>
                            <span class="datum-tijd">21:38</span>
                            <p>Volle bak bij Wok 2 Go</p>
                            <p>Damstraat 128</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item notitie">
                        <img src="http://cdn.sleutelstad.nl/wp-content/uploads/2016/06/grofvuil.jpg">
                        <div class="info">
                            <h2>EIGEN MELDING</h2>
                            <span class="datum-tijd">21:38</span>
                            <p>Grofvuil op straat.</p>
                            <p>Damstraat 128</p>
                            <p class="laatste-actie">→ handhaving gebeld <span>10:31</span></p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item notitie">
                        <img src="https://s3-us-west-2.amazonaws.com/slack-files2/bot_icons/2017-05-30/190042693285_48.png">
                        <div class="info">
                            <h2>LEEG.NU</h2>
                            <span class="datum-tijd">21:38</span>
                            <p>Volle bak bij Wok 2 Go (Damstraat 23)</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item notitie">
                        <img src="http://orig07.deviantart.net/91df/f/2008/076/4/9/notepad_by_freestock.jpg">
                        <div class="info">
                            <h2>NOTITIE</h2>
                            <p>Nieuwe jassen. Navragen bij Hilde.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item notitie">
                        <img src="http://orig07.deviantart.net/91df/f/2008/076/4/9/notepad_by_freestock.jpg">
                        <div class="info">
                            <h2>NOTITIE</h2>
                            <p>Wok 2 Go Damstraat wil nog een bak.</p>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="acties" id="acties" style="display: none; opacity: 0.9">
                <ul>
                    <li>+MELDING</li>
                    <li>+NOTITIE</li>
                </ul>
            </div>
            <div class="actie" onclick="var el = document.getElementById('acties'); el.style.display = el.style.display === 'none' ? 'block' : 'none';">+</div>
        </main>
    </body>
</html>