<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name='viewport' content='width=320,initial-scale=1,user-scalable=0'>
        <link href="reset.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
        <style>
            body {
                font-size: 100%;
                line-height: 1.4em;
                background-color: #112D5C;
                color: #FFFFFF;
                font-family: "Open Sans";
            }
            header .cleanstreet-logo {
                margin-left: auto;
                margin-right: auto;
            }
            header {
                text-align: center;
            }
            h1 {
                font-size: 2em;
                line-height: 1em;
                font-weight: 900;
                margin: 40px 0;
            }
            h2 {
                font-size: 1.4em;
                font-weight: 700;
                margin-top: 20px;
                color: #ADEA33;
            }
            section {
                margin: 10px;
            }
            p {
                margin-top: 10px;
            }
            .bestellen {
                display: block;
                padding: 0 40px;
                background: #ADEA33;
                border: 0;
                border-radius: 10px;
                font-size: 2em;
                color: #112D5C;
                height: 3em;
                text-decoration: none;
                line-height: 3em;
                text-align: center;
                margin: 20px auto;
            }
        </style>
        <style>
            .cleanstreet-logo {
                font-family: Oswald;
                font-weight: 900;
                font-size: 2.4em;
                text-transform: uppercase;
                text-align: center;
                width: 230px;
                margin: 40px;
                line-height: 1.2em;
            }
            .cleanstreet-logo .merk {
                background-color: #112D5C;
                color: #ADEA33;
                border-radius: 10px 10px 0 0;
                border-top: 2px solid #FFFFFF;
                border-left: 2px solid #FFFFFF;
                border-right: 2px solid #FFFFFF;
            }
            .cleanstreet-logo .merk span {
                color: #FFFFFF;
            }
            .cleanstreet-logo .locatie {
                background-color: #ADEA33;
                color: #112D5C;
                border-radius: 0 0 10px 10px;
                border-bottom: 2px solid #FFFFFF;
                border-left: 2px solid #FFFFFF;
                border-right: 2px solid #FFFFFF;
            }
        </style>
        <style>
            @media screen and (max-width: 480px) {
                /*void*/
            }
        </style>
    </head>
    <body>
        <div class="nederland-schoon-banner">
            <?php include('logo-schoon.html'); ?>
        </div>
        <header>
            <h1>Bak bestellen</h1>
            <div class="cleanstreet-logo">
                <div class="merk"><span>Clean</span> Street</div>
                <div class="locatie">Damstraat</div>
            </div>
        </header>
        <main>
            <section>
                <p>U wilt meehelpen. Dat stellen wij zeer op prijs. Daarom krijgt u van ons een bak.</p>
            </section>
            <section>
                <h1>Dit zijn de voordelen</h1>
                <h2>Wij legen de bak</h2>
                <p>U zet de bak 's ochtends buiten en 's avonds binnen. Dat is alles.</p>
                <h2>Een schone stoep</h2>
                <p>Rondom de bak rapen we ook zwerfvuil op. Dat scheelt u weer werk.</p>
            </section>
            <?php include('meerinfo.html'); ?>
        </main>
    </body>
</html>