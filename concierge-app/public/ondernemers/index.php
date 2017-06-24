<!DOCTYPE html>
<html>
    <?php include('../../private/html/header.html'); ?>
    <body>
        <header>
            CLEAN STREET
        </header>
        <?php include("../../private/html/nav.html"); ?>
        <main class="ondernemers">
            <h1>ONDERNEMERS</h1>
            <div class="top-link"></div>
            <ul>
                <!-- LOOP OVER ONDERNEMERSLIJST ITEMS (ondernemers) -->
                <li>
                    <div class="item ondernemer">
                        <img src="https://media-cdn.tripadvisor.com/media/photo-s/0d/7d/0f/d4/wok2go-stockton-heath.jpg">
                        <div class="info">
                            <p style="float: right; margin: 10px"><a class="phone-button" href="tel:0612345678">📞</a></p>
                            <h2><a href="../ondernemer-41231">WOK2GO</a></h2>
                            <p>Damstraat 129</p>
                            <p>Jan Gerritsen</p>
                            <p><span class="bak">9182</span> <span class="bak">8123</span></p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item ondernemer">
                        <img src="http://mcdonaldsrestaurant.nl/_img/uploads/restaurants/1138/134662397153409.jpg">
                        <div class="info">
                            <p style="float: right; margin: 10px"><a class="phone-button" href="tel:0612345678">📞</a></p>
                            <h2>McDonnalds</h2>
                            <p>Damstraat 129</p>
                            <p>Jan Gerritsen</p>
                            <p class="aantekening">→ wil geen bak</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item ondernemer">
                        <img src="http://www.mcdonaldsamsterdam.nl/userfiles/image/vestiging/1011/a293ac47640a19a4ae642355609b5770.jpg">
                        <div class="info">
                            <p style="float: right; margin: 10px"><a class="phone-button" href="tel:0612345678">📞</a></p>
                            <h2>KFC</h2>
                            <p>Damstraat 129</p>
                            <p>Jan Gerritsen</p>
                            <p><span class="bak">5532</span></p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item ondernemer">
                        <img src="https://media-cdn.tripadvisor.com/media/photo-s/07/6c/94/8f/caption.jpg">
                        <div class="info">
                            <p style="float: right; margin: 10px"><a class="phone-button" href="tel:0612345678">📞</a></p>
                            <h2>ICEBAK</h2>
                            <p>Damstraat 129</p>
                            <p>Jan Gerritsen</p>
                            <p><span class="bak">6412</span></p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item ondernemer">
                        <img src="https://media-cdn.tripadvisor.com/media/photo-s/0d/7d/0f/d4/wok2go-stockton-heath.jpg">
                        <div class="info">
                            <p style="float: right; margin: 10px"><a class="phone-button" href="tel:0612345678">📞</a></p>
                            <h2>WONKAWORLD</h2>
                            <p>Damstraat 129</p>
                            <p>Jan Gerritsen</p>
                            <p><span class="bak">1323</span></p>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="acties" id="acties" style="display: none" onclick="var el = document.getElementById('acties'); el.style.display = el.style.display === 'none' ? 'block' : 'none';">
                <ul>
                    <li><a href="../ondernemer">+ONDERNEMER</a></li>
                    <li>annuleren</li>
                </ul>
            </div>
            <div class="actie" onclick="var el = document.getElementById('acties'); el.style.display = el.style.display === 'none' ? 'block' : 'none';">+</div>
        </main>
    </body>
</html>