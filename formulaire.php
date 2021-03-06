<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="utf-8" />
	<link href="css/styly.css" rel="stylesheet" />
	<title>SAINT PAUL DU TERRAY</title>
</head>

<body class="body">

<main class="main">

	<header-null class="header-null">
		<header class="header">
			<h1>SAINT PAUL DU TERRAY</a></h1>
			<menu-null class="menu-null">
				<div class="menu">
					<a href="#" class="menu_link">Index</a>
					<a href="#" class="menu_link">Manifestation</a>
					<a href="#" class="menu_link">Facturation</a>
					<a href="#" class="menu_link">Contact</a>
				</div>
			</menu-null>
		</header>
	</header-null>

	<noscreen/>

		<left class="left">
			<h2>Madame, Monsieur,</h2>
			<p>
				Votre enfant va partir durant l'année scolaire en classe de découverte.
				<br />Une participation financière par enfant va prochainement vous être demandée.
				<br /><br />Cette année le conseil municipal a décidé d'instaurer trois types de réductions
				et un plafonnement à 100 Euros par enfant.
			</p>
			<br />
			<ul>
				<li>Réduction de 10% si le Quotient Familial est inférieur à 500 Euros</li>
				<li>Réduction de 20 % pour famille de 2 enfants</li>
				<li>Réduction de 40 % pour famille de 3 enfants ou plus</li>
			</ul>
		</left>

	<noscreen/>

		<right class="right">
			<form action="controleurSimulation.php" method="GET" id="simulation">
                <br />
                <label for="nom">Nom de famille : </label>
                <br />
                <input type="text" name="nom"/>
                <br /><br />
                <label for="nbEnfant">Nombre d'enfants au sein de la famille : </label>
                <br />
                <input type="number" name="nbEnfant"/>
                <br /><br />
                <label for="nbEnfantPartant">Nombre d'enfants partant en séjour : </label>
                <br />
                <input type="number" name="nbEnfantPartant"/>
                <br /><br />
                <label for="quotient">Quotient familial : </label>
                <br />
                <input type="number" name="quotient"/>
                <br /><br />
                <label for="sejour" >Choisir le séjour : </label>
                <br/>
                <select size="1" id="sejour" name="sejour" >
                    <?php
                    foreach ($sejours as $sejour) {
                        
                    $idSejour =   $sejour->getSejNo();
                    $IntituleSejour =   $sejour->getSejIntitule();
                    ?>  
                    <option value="<?php echo $idSejour?>"><?php echo $IntituleSejour?></option>    
                    <?php
                    }
                    ?>
                </select>
                <br /><br />
                <input type="submit" value="Valider"/>
            
            </form>
		</right>
</main>

		<footer class="footer">
			Copyright &copy; 2016 Saint paul du terray
		</footer>


</body>

</html> 
