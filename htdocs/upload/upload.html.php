<!DOCTYPE html>
<html lang="en">

	<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="Internetseiten der Schiedsrichterinnen und Schiedsrichter des BeTTV">
	<meta name="author" content="" />

	<title>Hochladen der Einsatzpläne - Ergebnis | Die Schiedsrichterinnen und Schiedsrichter des BeTTV</title>

	<!-- Bootstrap Core CSS -->
	<link href="/css/bootstrap-3.3.6.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="/css/modern-business.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="/css/font-awesome-4.6.3.min.css" rel="stylesheet" type="text/css">

	<!-- Eigenes CSS -->
	<link href="/css/local.css" rel="stylesheet">

</head>


	<body>

		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Menü ausklappen</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="http://www.tt-schiri.de/index.html">Startseite</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				
					
						<li class="dropdown">
							<a href="" class="dropdown-toggle" data-toggle="dropdown">Einsatzinformationen<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="/einsatzinformationen/index.html">Einsatzinformationen</a></li>
								
									<li><a href="/einsatzinformationen/osr-berichte.html">OSR-Berichte</a></li>
								
									<li><a href="/einsatzinformationen/belaglisten.html">Belaglisten</a></li>
								
							</ul>
						</li>
					
				
					
						<li ><a href="/personen.html">Ansprechpartner</a></li>
					
				
					
						<li ><a href="/schiri-werden.html">Schiri werden</a></li>
					
				
					
						<li class="dropdown">
							<a href="" class="dropdown-toggle" data-toggle="dropdown">Termine<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="/termine/index.html">Termine</a></li>
								
									<li><a href="/termine/veranstaltungsorte.html">Veranstaltungsorte</a></li>
								
							</ul>
						</li>
					
				
					
						<li ><a href="/regeln/index.html">Regeln</a></li>
					
				
					
						<li ><a href="/downloads.html">Downloads</a></li>
					
				
					
						<li ><a href="/impressum.html">Impressum</a></li>
					
				
			</ul>
		</div>
	</div>
</nav>


		<div class="container">

			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Hochladen der Einsatzpläne - Ergebnis
						
					</h1>
					

				</div>
			</div>

			
	<!-- Image Header -->
	<div class="row">
			<div class="col-lg-12">
					<img class="img-responsive" src="/img/banner/upload.png" alt="Bild für Hochladen der Einsatzpläne - Ergebnis">
			</div>
	</div>



			<hr />

			<div class="row">
	<div class="col-lg-12">
				<p>Dann wollen wir mal...</p>

<h2>PDF-Datei</h2>

<?php
$upload_dir = "uploads/";
$download_name = "../downloads/einsatzplaene/BeTTV_Einsatzplan.";
$error = false;
?>

<?php
$upload_file = $upload_dir . basename($_FILES["pdf"]["name"]);
$file_type = pathinfo($upload_file, PATHINFO_EXTENSION);
$download_file = $download_name . $file_type;

if (isset($_POST["submit"])) {

	$isOK = ($file_type === "pdf");

	if ($isOK) {

		if (move_uploaded_file($_FILES["pdf"]["tmp_name"], $upload_file)) {
			echo '<div class="alert alert-success"><strong>Erfolg!</strong> Die Datei wurde hochgeladen.</div>';

			if (copy($upload_file, $download_file)) {
				echo '<div class="alert alert-success"><strong>Erfolg!</strong> Die Datei wurde in den Download-Ordner kopiert.</div>';
			} else {
				echo '<div class="alert alert-danger"><strong>Fehler!</strong> Beim Kopieren in den Download-Ordner ist ein Fehler aufgetreten.</div>';
			}
		} else {
			echo '<div class="alert alert-danger"><strong>Fehler!</strong> Beim Hochladen ist ein Fehler aufgetreten.</div>';
			$error = true;
		}

	} else {
		echo '<div class="alert alert-danger"><strong>Fehler!</strong> Die Datei ist keine gültige PDF-Datei und wurde abgelehnt.</div>';
		$error = true;
	}

} else {
	echo '<div class="alert alert-danger"><strong>Fehler!</strong> submit nicht gesetzt.</div>';
	$error = true;
}
?>

<h2>Excel-Datei</h2>

<?php
$upload_file = $upload_dir . basename($_FILES["excel"]["name"]);
$file_type = pathinfo($upload_file, PATHINFO_EXTENSION);
$download_file = $download_name . $file_type;

if (isset($_POST["submit"])) {

	$isOK = ($file_type === "xls");

	if ($isOK) {

		if (move_uploaded_file($_FILES["excel"]["tmp_name"], $upload_file)) {
			echo '<div class="alert alert-success"><strong>Erfolg!</strong> Die Datei wurde hochgeladen.</div>';

			if (copy($upload_file, $download_file)) {
				echo '<div class="alert alert-success"><strong>Erfolg!</strong> Die Datei wurde in den Download-Ordner kopiert.</div>';
			} else {
				echo '<div class="alert alert-danger"><strong>Fehler!</strong> Beim Kopieren in den Download-Ordner ist ein Fehler aufgetreten.</div>';
			}
		} else {
			echo '<div class="alert alert-danger"><strong>Fehler!</strong> Beim Hochladen ist ein Fehler aufgetreten.</div>';
			$error = true;
		}

	} else {
		echo '<div class="alert alert-danger"><strong>Fehler!</strong> Die Datei ist keine gültige Excel-Datei und wurde abgelehnt.</div>';
		$error = true;
	}

} else {
	echo '<div class="alert alert-danger"><strong>Fehler!</strong> submit nicht gesetzt.</div>';
	$error = true;
}

mail("schiri@ekkart.de", "Upload Schiriseiten", "Upload Einsatzpläne: " . (($error) ? "erfolglos" : "erfolgreich"));

?>

<p><a href="index.html">Zurück zum Hochladen</a></p>

	</div>
</div>


			<hr />

			<footer>
				<div class="row">
					<div class="col-lg-12">
						<p>
							Letzte Änderung: 9. Oktober 2016,
							Ekkart Kleinod
						</p>
					</div>
				</div>
			</footer>

		</div>

		<!-- jQuery -->
		<script src="/js/jquery-2.2.0.min.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="/js/bootstrap-3.3.6.min.js"></script>

	</body>

</html>
