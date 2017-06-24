<!DOCTYPE html>
<html>
    <?php include('../../private/html/header.html'); ?>
    <body>
        <header>
            CLEAN STREET
        </header>
        <?php include("../../private/html/nav.html"); ?>
        <main class="ondernemer">
            <h1>ONDERNEMER</h1>
            <div class="top-link">
                <a href="../ondernemers">« ondernemers</a>
            </div>
            <div class="details">
                <h2 style="font-size: 2em">WOK2GO</h2>
                <p>Damstraat 129</p>
                <img src="http://careace.net/wp-content/uploads/2010/09/map-google.gif" style="width: 100%; height: 200px">
                <p style="float: right; margin: 1rem">
                    <a class="phone-button" href="tel:0612345678">📞</a>
                </p>
                <p>Jan Gerritsen</p>
                <p><span class="bak">9182</span> <span class="bak">8123</span></p>
                <div class="aantekening" style="margin-top: 20px; color: #aaa">
                    (geen aantekening)
                </div>
                <div class="tickets" style="margin-top: 20px">
                    <h2>Openstaande tickets: geen</h2>
                </div>
                <div class="acties" id="acties" style="display: none" onclick="var el = document.getElementById('acties'); el.style.display = el.style.display === 'none' ? 'block' : 'none';">
                    <ul>
                        <li>+BAK</li>
                        <li>+TICKET</li>
                        <li><a href="../ondernemer-edit-41231">WIJZIGEN</a></li>
                        <li>annuleren</li>
                    </ul>
                </div>
            </div>
            <div class="actie" onclick="var el = document.getElementById('acties'); el.style.display = el.style.display === 'none' ? 'block' : 'none';">+</div>
        </main>
    </body>
</html>