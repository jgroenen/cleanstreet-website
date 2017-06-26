<!DOCTYPE html>
<html>
    <?php include('../../private/html/header.html'); ?>
    <body>
        <main class="ticket details">
            <h1>TICKET</h1>
            <div class="top-link">
                <a href="../inbox" class="close">✖</a>
            </div>
            <div class="details">
                <span class="datum-tijd" style="float: right">21:38</span>
                <h2 style="font-size: 2em">EIGEN TICKET</h2>
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