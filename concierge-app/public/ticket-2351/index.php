<!DOCTYPE html>
<html>
    <?php include('../../private/html/header.html'); ?>
    <body>
        <header>
            CLEAN STREET
        </header>
        <?php include("../../private/html/nav.html"); ?>
        <main class="ticket">
            <h1>TICKET</h1>
            <div class="top-link">
                <a href="../inbox">« inbox</a>
            </div>
            <div class="details">
                <span class="datum-tijd" style="float: right">21:38</span>
                <h2 style="font-size: 2em">LEEG.NU</h2>
                <p>WOK2GO (Damstraat)</p>
                <img src="http://careace.net/wp-content/uploads/2010/09/map-google.gif" style="width: 100%; height: 200px">
                <div class="opmerking" style="margin-top: 20px">
                    AUTOMATISCH MELDING LEEG.NU: Bak vol
                </div>
                <div class="updates" style="margin-top: 20px">
                    <h2>Updates: geen</h2>
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