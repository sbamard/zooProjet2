<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{*<?php /* ICI UN TITRE */ echo $this->titre; ?>*}{$titre|upper}</title>
        <link href="https://fonts.googleapis.com/css2?family=Muli:ital@0;1&display=swap" rel="stylesheet">

        <link href="public/css/bootstrap.min.css" rel="stylesheet">
        <link href="public/css/style.css" rel="stylesheet">

        <link rel="icon" type="image/png" href="public/images/logo.png" />
        <link href="public/css/evo-calendar.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>

        <div class="container-fluid">
            {include file='public/menu.tpl'}

            <div class="row">
                <!-- ICI LE TABLEAU DE BORD -->
                <div class="col-md-12">

                    <h2 id="title-accueil" class="space">
                        Intranet du Zoo Disii
                    </h2>
                </div>
                <div id="evoCalendar">
                </div>
            </div>

            {include file = 'public/piedPage.tpl'}

        </div>

        <script src="public/js/jquery.min.js"></script>
        <script src="public/js/bootstrap.min.js"></script>
        <script src="public/js/scripts.js"></script>
        <script src="public/js/jquery.js" type="text/javascript"></script>
        <script src="public/js/evo-calendar.js" type="text/javascript"></script>


    </body>
</html>
