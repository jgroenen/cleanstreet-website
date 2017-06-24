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
            <div class="top-link">
                <a href="../archief">« archief bekijken</a>
            </div>
            <ul>
                <!-- LOOP OVER INBOX ITEMS (niet afgehandelde tickets) -->
                <li>
                    <div class="item ticket">
                        <img src="https://s3-us-west-2.amazonaws.com/slack-files2/bot_icons/2017-05-30/190042693285_48.png">
                        <div class="info">
                            <h2>LEEG.NU</h2>
                            <span class="datum-tijd">21:38</span><br>
                            <span class="label" style="float: right">bak vol</span>
                            <p>WOK2GO (Damstraat)</p>
                            <p>Damstraat 128</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item ticket">
                        <img src="http://orig07.deviantart.net/91df/f/2008/076/4/9/notepad_by_freestock.jpg">
                        <div class="info">
                            <h2>EIGEN TICKET</h2><br>
                            <span class="label" style="float: right">vraag</span>
                            <p>WOK2GO (Damstraat)</p>
                            <p>ophaaltijden grofvuil onduidelijk</p>
                            <p class="laatste-actie">→ Hilde gebeld <span>10:31</span></p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item ticket">
                        <img src="http://cdn.sleutelstad.nl/wp-content/uploads/2016/06/grofvuil.jpg">
                        <div class="info">
                            <h2>EIGEN TICKET</h2>
                            <span class="datum-tijd">21:38</span><br>
                            <span class="label" style="float: right">grofvuil</span>
                            <p>Damstraat</p>
                            <p class="laatste-actie">→ handhaving gebeld <span>10:31</span></p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item ticket">
                        <img src="https://s3-us-west-2.amazonaws.com/slack-files2/bot_icons/2017-05-30/190042693285_48.png">
                        <div class="info">
                            <h2>LEEG.NU</h2>
                            <span class="datum-tijd">21:38</span><br>
                            <span class="label" style="float: right">bak vol</span>
                            <p>EASY (Damstraat)</p>
                            <p>Damstraat 82</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item ticket">
                        <img src="http://orig07.deviantart.net/91df/f/2008/076/4/9/notepad_by_freestock.jpg">
                        <div class="info">
                            <h2>EIGEN TICKET</h2><br>
                            <span class="label" style="float: right">aanvraag</span>
                            <p>WAKKIEWOK (Damstraat)</p>
                            <p>wil een bak</p>
                            <p class="laatste-actie">→ afleverafspraak woensdag 3 april 9:00 <span>9/4/17 10:31</span></p>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="acties" id="acties" style="display: none" onclick="var el = document.getElementById('acties'); el.style.display = el.style.display === 'none' ? 'block' : 'none';">
                <ul>
                    <li>+TICKET</li>
                    <li>annuleren</li>
                </ul>
            </div>
            <div class="actie" onclick="var el = document.getElementById('acties'); el.style.display = el.style.display === 'none' ? 'block' : 'none';">+</div>
        </main>
    </body>
</html>