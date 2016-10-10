---
title: Hochladen der Einsatzpläne - Ergebnis
hide-nav: true
image: banner/upload.png
date: 09.10.2016
---

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
