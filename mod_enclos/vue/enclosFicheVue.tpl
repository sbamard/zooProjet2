<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>{$titre|upper}</title>
        <link href="https://fonts.googleapis.com/css2?family=Muli:ital@0;1&display=swap" rel="stylesheet"> 

		<link rel="icon" type="image/png" href="public/images/logo.png" />
		<link href="public/css/bootstrap.min.css" rel="stylesheet">
		<link href="public/css/style.css" rel="stylesheet">

	</head>
	<body>

            <div class="container-fluid">
		{include file ='public/menu.tpl'}
                    <div class="row">
                        <div class="col-md-4 space">
                            <a href="index.php?gestion=Enclos"><img src="public/images/logo.png" ></a>
                        </div>
                        <div class="col-md-6 space">
                            <h3>{$titreGestion}</h3>
                        </div>
                        <div class="col-md-2 space">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8 col-md-offset-2">
                            <p {if $leEnclos->getMessageErreur() neq ''} class="pos-messageErreur" {/if}>
				{$leEnclos->getMessageErreur()}
                            </p>
                            </div>
                    </div>							
                    <div  class="row">
			<!-- ICI LES DONNES, LE FORMULAIRE (LA FICHE !) -->
			<div id="tableau" class="col-md-offset-2 col-md-8 col-md-offset-2 space">
                            <form action="index.php?gestion=Enclos" method="post" novalidate="">
				<input type="hidden" name="gestion" value="enclos">
				<input type="hidden" name="action" value="{$action}">
                                    {if $action neq 'ajouter'}
					<div class="form-group">
                                            Identifiant : 
                                            <input class="form-control" id="enc_ide" name="enc_ide" type="text" value="{$leEnclos->getEnc_ide()}" readonly>
					</div>
                                    {/if}
                                        <div class="form-group">
                                            Nom <sup>(*)</sup> :
                                            <strong>    
						<input class="form-control" id="enc_nom" name="enc_nom" type="text" value="{$leEnclos->getEnc_nom()}"  {$comportement} required="required">
                                            </strong>
                                        </div>
                                         <div class="form-group">
                                            Race : 
                                            <input class="form-control" id="ani_rac" name="ani_rac" type="text" value="{$leEnclos->getAni_rac()}">
					</div> 
                                       
                                        <div class="form-group">
                                            <div class="col-md-11">
						<input type="button"  class="btn btn-warning btn-sm" onclick='location.href = "index.php?gestion=Enclos"' value="Retour">
                                            </div>
                                            {if $action neq 'consulter'}
                                                <div class="col-md-1">
                                                    <input type="submit" class="btn btn-warning btn-sm" value="{$action|capitalize}">
                                                </div>
                                            {/if}
					</div>
                             </form>
			</div>
                    </div>
                {include file='public/piedPage.tpl'}
            </div>

		<script src="public/js/jquery.min.js"></script>
		<script src="public/js/bootstrap.min.js"></script>
		<script src="public/js/scriptsAnimal.js"></script>
	</body>
</html>