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
                <div style="display: none">
                    <input name="datum" type="text" value="<?php echo date("Y/m/d"); ?>"></input><br>
                    <input name="tijd" type="text" value="<?php echo date("H:i:s"); ?>"></input><br>
                    <input name="latitude" id="latitude" type="text" value=""></input><br>
                    <input name="longitude" id="longitude" type="text" value=""></input><br>
                </div>
                <img style="width: 100%" id="maps" src="">
                <br>
                <textarea placeholder="Wat is het probleem?" autofocus></textarea>
                <br>
                <img src="" alt="+" style="width: 100px; height: 100px; margin: 1px solid silver">
                <img src="" alt="+" style="width: 100px; height: 100px; margin: 1px solid silver">
                <img src="" alt="+" style="width: 100px; height: 100px; margin: 1px solid silver">
            </div>
            <a class="actie" href="../ticket/1"><img src="../img/Icon_Check.svg"></a>
        </main>
        <script>
            (function () {
                
                navigator.geolocation.getCurrentPosition(function (position) {
                    document.getElementById('latitude').value = position.coords.latitude;
                    document.getElementById('longitude').value = position.coords.longitude;
                    document.getElementById('maps').src = "https://maps.googleapis.com/maps/api/staticmap?center="
                        + position.coords.latitude + ","
                        + position.coords.longitude + "&size=400x200&zoom=19";
                });
                
            })();
        </script>
    </body>
</html>