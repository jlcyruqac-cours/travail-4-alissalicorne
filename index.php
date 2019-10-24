<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../static/style.css">
        <title>HTML5</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $(function () {
                $(document).ready(function () {
                    $("#TXT_Date").datepicker({
                        dateFormat: 'yy-mm-dd',
                        showOn: "button",
                        buttonImage: "../static/dropdown.png",
                        buttonImageOnly: false,
                        buttonText: "Select date"
                    });
                });
            });
        </script>
		<script language="javascript">
			function fct_Afficher_Horoscpe() {
				var prenom = document.getElementById("TXT_Prenom").value;
				var nom = document.getElementById("TXT_Nom").value;
				var date = document.getElementById("TXT_Date").value;
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
					document.getElementById("texte_horoscope").innerHTML = this.responseText;
					}
				};
				xhttp.open("POST", "templates/horoscope.php", true);
				xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				xhttp.send("prenom=" + prenom + "&nom=" + nom + "&date=" + date);
			}
		</script>
    </head>
    <body class="body1">
        <div class="container">
            <br><br><br><br>
			<form id="FRM_Formulaire" name="FRM_Formulaire" method="post" target="_self">
                <table class="table1">
                    <tr>
                        <td><p>Prenom</p></td>
                        <td>
                            <div class="form-group">
                                <label class="sr-only" for="TXT_Prenom">Prenom</label>
                                <input type="text" class="form-control" id="TXT_Prenom" name="TXT_Prenom" placeholder="Prenom">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><p>Nom</p></td>
                        <td>
                            <div class="form-group">
                                <label class="sr-only" for="TXT_Nom">Nom</label>
                                <input type="text" class="form-control" id="TXT_Nom" name="TXT_Nom" placeholder="Nom">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><p>Date</p></td>
                        <td>
                            <div class="form-group">
                                <label class="sr-only" for="TXT_Date">Date</label>
                                <input type="text" class="form-control" id="TXT_Date" name="TXT_Date" placeholder="Date" readonly="readonly">
                            </div>
                        </td>
                    </tr>
                </table>
                <br>
                <input type="button" class="btn btn-default center-block" onclick="fct_Afficher_Horoscpe();" value="Voir mon horoscope">
			</form>
			<br>
			<p id="texte_horoscope"></p>
            <img src="../static/licorne.png" alt="Licorne">
        </div>
    </body>
</html>