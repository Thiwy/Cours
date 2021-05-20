
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
					<a href="index.php" class="menu_link">Index</a>
					<a href="index.php" class="menu_link">Manifestation</a>
					<a href="index.php" class="menu_link">Facturation</a>
					<a href="index.php" class="menu_link">Contact</a>
				</div>
			</menu-null>
		</header>
	</header-null>


<h2>Simulation de coût d'un voyage pour un enfant : </h2>

<p>Famille <?php echo $maSimulation->nom;?> avec 
<?php echo $maSimulation->nbEnfant;?> enfant(s) et un quotient familial de <?php echo $maSimulation->quotient;?> €<br />
<?php echo $maSimulation->nbEnfantPartant;?> enfant(s) partant en <?php echo $nomSejour;?> : </p>

<p>Prix brut du séjour individuel : <?php echo $maSimulation->prixSejour;?> €<br />
Réduction sur quotient familial : <?php echo $maSimulation->reducQuotient;?> €<br />
Réduction famille avec <?php echo $maSimulation->nbEnfant;?> enfant(s) : <?php echo $maSimulation->reducEnfant;?> €</p>

<p>Sous total : <?php echo $maSimulation->sousTotal;?> €</p>
<br />
<b>Net à payer après plafonnement : <?php echo $maSimulation->prixTotalEnfant;?> €</b>
<br /><br /><br />


<p>Remarque : vous devrez payer un total de <?php echo $maSimulation->prixTotalEnfant;?> * <?php echo $maSimulation->nbEnfantPartant;?> = <?php echo $maSimulation->prixTotal;?> €


</main>

		<footer class="footer">
			Copyright &copy; 2016 Saint paul du terray
		</footer>


</body>

</html> 
