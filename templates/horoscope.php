<!DOCTYPE html>
<html lang="fr">
    <head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../static/style2.css">
		<title>HTML5</title>
		<?php
			$Prenom = $_POST["prenom"];
			$Nom = $_POST["nom"];
			$Date = $_POST["date"];
		?>
	</head>
	<body class="body2">
		<?php if($Prenom =="" || $Nom == "" || $Date == "") { ?>
			<table class="table_oups">
		<?php		if($Prenom =="") { ?>				
				<tr>
					<td><p class="gros_texte_noir">
						<?php echo "Oups! Veuillez entrer un prenom."; ?></p>
					</td>
				</tr>
				<?php }
					if($Nom =="") { ?>
				<tr>
					<td><p class="gros_texte_noir">
						<?php echo "Oups! Veuillez entrer un nom."; ?></p>
					</td>
				</tr>
				<?php } if($Date =="") { ?>
				<tr>
					<td><p class="gros_texte_noir">
						<?php echo "Oups! Veuillez choisir une date."; ?></p>
					</td>
				</tr>
				<?php } ?>
			</table>
		<?php } else {
			$Le_Signe = fct_signe($Date);
			$La_Description = fct_description($Le_Signe);
			$Limage = fct_image($Le_Signe);
		?>
			<table class="table2">
				<tr>
					<td><p class="gros_texte">
						Bonjour <?php echo $Prenom; ?> <?php echo $Nom; ?>. Votre signe astrologique est: <?php echo $Le_Signe; ?></p>
					</td>
				</tr>
				<tr>
					<td><p class="gros_texte">
						Votre avenir:</p>
					</td>
				</tr>
				<tr>
					<td><p class="petit_texte">
						<?php echo $La_Description; ?></p>
					</td>
				</tr>
			</table>
		<?php } ?>
			<br>
			<img src=<?php echo $Limage; ?> alt="image ici">
		<?php
			function fct_signe($Date_Complete) {
				$SplitDate = explode("-", $Date_Complete);
				$MoisJour = $SplitDate[1].$SplitDate[2];
				$Signe = "";
				if ($MoisJour >= "0321" && $MoisJour <= "0420") {
					$Signe = "Belier";
				} else {
					if ($MoisJour >= "0421" && $MoisJour <= "0520") {
						$Signe = "Taureau";
					} else {
						if ($MoisJour >= "0521" && $MoisJour <= "0621") {
							$Signe = "Gemeaux";
						} else {
							if ($MoisJour >= "0622" && $MoisJour <= "0722") {
								$Signe = "Cancer";
							} else {
								if ($MoisJour >= "0723" && $MoisJour <= "0822") {
									$Signe = "Lion";
								} else {
									if ($MoisJour >= "0823" && $MoisJour <= "0922") {
										$Signe = "Vierge";
									} else {
										if ($MoisJour >= "0923" && $MoisJour <= "1022") {
											$Signe = "Balance";
										} else {
											if ($MoisJour >= "1023" && $MoisJour <= "1122") {
												$Signe = "Scorpion";
											} else {
												if ($MoisJour >= "1123" && $MoisJour <= "1221") {
													$Signe = "Sagittaire";
												} else {
													if (($MoisJour >= "1222" && $MoisJour <= "1231") || ($MoisJour >= "0101" && $MoisJour <= "0120")) {
														$Signe = "Capricorne";
													} else {
														if ($MoisJour >= "0121" && $MoisJour <= "0218") {
															$Signe = "Verseau";
														} else {
															if ($MoisJour >= "0219" && $MoisJour <= "0320") {
																$Signe = "Poisson";
															} else {
																$Signe = "Erreur";
															}
														}
													}
												}
											}
										}
									}
								}
							}
						}
					}
				}
				return $Signe;
			}

			function fct_description($Signe) {
				$Description = "";
				switch ($Signe) {
					case "Belier":
						$Description = "La vie vous apportera malheur: un belier foncera sur vous comme une voiture a 100km/h fonce dans un mur.";
						break;
					case "Taureau":
						$Description = "La vie vous apportera malheur: un taureau foncera sur vous comme une voiture a 100km/h fonce dans un mur.";
						break;
					case "Gemeaux":
						$Description = "Vous n'avez pas gagne de Prix Gemeaux. Vous etes simplement de signe Gemeaux. D'ailleurs, vous n'en gagnerez jamais.";
						break;
					case "Cancer":
						$Description = "Vous mourrez du cancer. Si on se fie a la tendance du 21e siecle, en effet.";
						break;
					case "Lion":
						$Description = "Vous avez aime le film Le Roi Lion? Eh bien vous finirez comme Mufassa: Mort d'une chute, pousse par un membre de votre famille.";
						break;
					case "Vierge":
						$Description = "La virginite, c'est la purete. La vie vous demande de procreer pour populer la Terre. La vie vous reserve un avenir impur.";
						break;
					case "Balance":
						$Description = "Vous vous balancerez doucement dans une balancoire. Mais tout le monde s'en balance.";
						break;
					case "Scorpion":
						$Description = "Vous irez bientot visiter un pays chaud. Un scorpion vous piquera et vous tuera.";
						break;
					case "Sagittaire":
						$Description = "Les gens de signe Sagitaire: S'agit-il de se taire?";
						break;
					case "Capricorne":
						$Description = "Les gens de signe Capricorne sont de grands copieurs: Un capricorne ressemble a un belier, mais ce signe existe deja! Vous manquez cruellement d'originalite.";
						break;
					case "Verseau":
						$Description = "Vous etes un grand gaspilleur: les gens de signe Verseau sont ceux qui versent de l'eau sur la neige pour la faire fondre ou qui arrosent leur asphalte: Mort a vous.";
						break;
					case "Poisson":
						$Description = "Les gens de signe Poisson ne s'attendent a nul autre que de pecher du poisson lorsqu'ils vont a la pêche.";
						break;
					default:
						$Description = "Erreur";
				}
				return $Description;
			}

			function fct_image($Signe) {
				$Image = "";
				switch ($Signe) {
					case "Belier":
						$Image = "https://cdn.radiofrance.fr/s3/cruiser-production/2018/03/29fa4466-483c-4be8-b761-e1d084c6c195/870x489_gettyimages-686331982_2.jpg";
						break;
					case "Taureau":
						$Image = "https://lvdneng.rosselcdn.net/sites/default/files/dpistyles_v2/ena_16_9_extra_big/2018/10/08/node_464640/39779073/public/2018/10/08/B9717179125Z.1_20181008080815_000%2BGJ9C6DCHU.2-0.jpg?itok=SlowXxnl";
						break;
					case "Gemeaux":
						$Image = "https://academie.ca/dist/img/prixgemeaux/logo-footer.png";
						break;
					case "Cancer":
						$Image = "https://www.info-radiologie.ch/metastase-cerebral-poumon/fullsize/metastase-cerebral-_1_fs.jpg";
						break;
					case "Lion":
						$Image = "http://cdn.24.co.za/files/Cms/General/d/5470/79958d58e26a45fa8bfb87e6ed155e18.jpg";
						break;
					case "Vierge":
						$Image = "https://www.viergemiraculeuse.com/wp-content/uploads/2014/03/72cdb965.jpg";
						break;
					case "Balance":
						$Image = "https://www.point2vente.com/1165-thickbox_default/balance-kern-fob-balance-poids-prix.jpg";
						break;
					case "Scorpion":
						$Image = "https://frontiersinblog.files.wordpress.com/2019/06/frontiers-in-ecology-and-evolution-scorpion-venom.jpg";
						break;
					case "Sagittaire":
						$Image = "https://terreurterreur.files.wordpress.com/2014/02/centaure.jpg";
						break;
					case "Capricorne":
						$Image = "https://cdn.pixabay.com/photo/2017/08/20/12/06/capricorn-2661507_960_720.jpg";
						break;
					case "Verseau":
						$Image = "https://udesdurable.files.wordpress.com/2013/04/logo-recto-verso.png";
						break;
					case "Poisson":
						$Image = "https://mediasv6.truffaut.com/Articles/jpg/0048000/48412_001_350.jpg";
						break;
					default:
						$Image = "https://i.pinimg.com/originals/f8/45/76/f8457627650bb706f11bc97f9c931e56.jpg";
				}
				return $Image;
			}
		?>
	</body>
</html>