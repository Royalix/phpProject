<?php
require("ListeDeRencontres.php");
$listeR = new ListeDeRencontres();
$listeR->listeRencontres();



?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css">
		<title>Liste des rencontres</title>
	</head>

	<body>
		<?php $menu = 2; include("menu.php");?>
		<div class="tableau">
			<table id="tableindex">
				<tr class="entete">
					<td>Adversaire</td>
					<td>Résultat</td>
					<td>Score</td>
					<td>Lieu</td>
					<td>Date</td>
				</tr>
				<?php
				$listeR = $listeR->getListeRencontres();
				foreach ($listeR as $rencontre) {
					echo "<tr class=\"corp\">".
							"<td><a href=\"profilRencontre.php?id=".$rencontre->getId()."\">".$rencontre->getAdversaire()."</a></td>".
							"<td><a href=\"profilRencontre.php?id=".$rencontre->getId()."\">".$rencontre->getVictoire()."</a></td>".
							"<td><a href=\"profilRencontre.php?id=".$rencontre->getId()."\">".$rencontre->getScore()."</a></td>".
							"<td><a href=\"profilRencontre.php?id=".$rencontre->getId()."\">".$rencontre->getLieu()."</a></td>".
							"<td><a href=\"profilRencontre.php?id=".$rencontre->getId()."\">".$rencontre->getDateheure()."</a></td>".
						"</tr>";
				}
				?>
			</table>
		</div>
			<a id="boutonaddr" href=ajoutrencontre.php> <div class="addr"> Ajouter Rencontre </div> </a>
	</body>
</html>
