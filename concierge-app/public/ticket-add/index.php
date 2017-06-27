<!DOCTYPE html>
<html>
    <?php include('../../private/html/head.html'); ?>
    <body>
        <main class="ticket details">
            <h1>NIEUW TICKET</h1>
            <div class="top-link">
                <a href="../inbox" class="close">✖</a>
            </div>
            <div class="details" style="position: relative">
                <div style="display: none">
                    <input name="datum" type="text" value="<?php echo date("Y/m/d"); ?>"></input><br>
                    <input name="tijd" type="text" value="<?php echo date("H:i:s"); ?>"></input><br>
                    <input name="latitude" id="latitude" type="text" value=""></input><br>
                    <input name="longitude" id="longitude" type="text" value=""></input><br>
                    <input name="foto" id="foto" type='file' accept="image/*" capture="image" />
                    <select name="categorie" id="categorie">
                        <option>VRAAG</option>
                        <option>AANVRAAG</option>
                        <option>GROFVUIL</option>
                        <option>HUISVUIL</option>
                        <option>PLAATSING</option>
                        <option>ANDERS</option>
                    </select>
                </div>
                <style>
                    .input {
                        line-height: 5rem;
                        border-bottom: 1px solid silver;
                        margin: 0 1rem;
                        color: #777;
                        padding-left: 0.5rem;
                    }
                    .input img {
                        width: 2rem;
                        height: 2rem;
                        vertical-align: middle;
                        background: gray;
                        margin-right: 0.5rem;
                    }
                    .input .foto,
                    .input .maps {
                        width: 100%;
                        height: auto;
                    }
                    .input.foto,
                    .input.maps {
                        padding: 0;
                    }
                    textarea {
                        height: 6rem;
                        font-size: 1rem;
                        font-family: sans-serif;
                        -webkit-box-sizing: border-box;
                        -moz-box-sizing: border-box;
                        box-sizing: border-box;
                        width: calc(100% - 2rem);
                        margin: 1rem 1rem 0;
                        border: 0;
                        border-bottom: 1px solid silver;
                        padding: 0.5rem;
                    }
                </style>
                <div class="input" onclick="foto(this)"><img src="../img/Icon_Foto.svg">Neem een foto</div>
                <div class="input" onclick="categorie(this)"><img src="../img/Icon_Opmerking.svg">Selecteer het soort overlast</div>
                <textarea placeholder="Omschrijf het probleem"></textarea>
                <div class="input" onclick="alert('popover ondernemer zoek/filter/select')"><img src="../img/Icon_Ondernemers.svg">Selecteer een ondernemer</div>
                <div class="input" onclick="locatie(this)"><img src="../img/Icon_Locatie.svg">Voeg een locatie toe</div>
            </div>
            <a class="actie" href="../ticket/1"><img src="../img/Icon_Check.svg"></a>
        </main>
        <script>
            function categorie(el) {
                alert('popover categorie select/add');
            }
            
            function foto(el) {
                var inputEl = document.getElementById('foto');
                inputEl.onchange = function () {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        el.classList.add("foto");
                        el.innerHTML = "<img class='foto' src='" + e.target.result + "'>";
                    };
                    reader.readAsDataURL(inputEl.files[0]);
                };
                inputEl.click();
            }
        
            function locatie(el) {
                navigator.geolocation.getCurrentPosition(function (position) {
                    document.getElementById('latitude').value = position.coords.latitude;
                    document.getElementById('longitude').value = position.coords.longitude;
                    var maps = "https://maps.googleapis.com/maps/api/staticmap?center="
                        + position.coords.latitude + ","
                        + position.coords.longitude + "&size=400x200&zoom=19";
                    el.classList.add("maps");
                    el.innerHTML = "<img \
                        class='maps'\
                        src='" + maps + "'\
                        onclick=\"alert(\'popover location picker\')\"\
                    >";
                });
            }
        </script>
    </body>
</html>