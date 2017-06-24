<!DOCTYPE html>
<html>
    <?php include('../../private/html/header.html'); ?>
    <body>
        <header>
            CLEAN STREET
        </header>
        <?php include("../../private/html/nav.html"); ?>
        <main class="telefoonboek">
            <h1>TELEFOONBOEK</h1>
            <div class="top-link">
            </div>
            <ul>
                <!-- LOOP OVER TELEFOONBOEK ITEMS (contacten) -->
                <li>
                    <div class="item contact">
                        <img src="http://oogopnederland.nl/wijkbijduurstede/wp-content/uploads/sites/26/2014/12/007-copy3.jpg">
                        <div class="info">
                            <p style="float: right; margin: 10px"><a class="phone-button" href="tel:0612345678">📞</a></p>
                            <h2>Grofvuil</h2>
                            <p>wo-do 10 tot 11, ophalen grofvuil</p>
                            <p>contact: Jan Petersen</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item contact">
                        <img src="http://www.grootsneek.nl/wp-content/uploads/2016/06/controle-snoeproute.jpg">
                        <div class="info">
                            <p style="float: right; margin: 10px"><a class="phone-button" href="tel:0612345678">📞</a></p>
                            <h2>Handhaving en toezicht direct</h2>
                            <p>Opruimen van verkeerd geplaatst</p>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="acties" id="acties" style="display: none" onclick="var el = document.getElementById('acties'); el.style.display = el.style.display === 'none' ? 'block' : 'none';">
                <ul>
                    <li>+CONTACT</li>
                    <li>annuleren</li>
                </ul>
            </div>
            <div class="actie" onclick="var el = document.getElementById('acties'); el.style.display = el.style.display === 'none' ? 'block' : 'none';">+</div>
        </main>
    </body>
</html>