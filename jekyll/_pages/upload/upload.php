---
title: Hochladen der Einsatzpläne - Ergebnis
hide-nav: true
image: banner/upload.png
date: 09.10.2016
---

Dann wollen wir mal...

## PDF-Datei

<?php
$target_dir = "uploads/";

$target_file = $target_dir . basename($_FILES["pdf"]["name"]);
$fileType = pathinfo($target_file, PATHINFO_EXTENSION);

if (isset($_POST["submit"])) {

	$isOK = ($fileType === "pdf");

	if ($isOK) {

		if (move_uploaded_file($_FILES["pdf"]["tmp_name"], $target_file)) {
			echo '<div class="alert alert-success"><strong>Erfolg!</strong> Die Datei wurde hochgeladen.</div>';
		} else {
			echo '<div class="alert alert-danger"><strong>Fehler!</strong> Beim Hochladen ist ein Fehler aufgetreten.</div>';
		}

	} else {
		echo '<div class="alert alert-danger"><strong>Fehler!</strong> Die Datei ist keine gültige PDF-Datei und wurde abgelehnt.</div>';
	}

}
?>

## Excel-Datei

<?php
$target_dir = "uploads/";

$target_file = $target_dir . basename($_FILES["excel"]["name"]);
$fileType = pathinfo($target_file, PATHINFO_EXTENSION);

if (isset($_POST["submit"])) {

	$isOK = ($fileType === "xls");

	if ($isOK) {

		if (move_uploaded_file($_FILES["excel"]["tmp_name"], $target_file)) {
			echo '<div class="alert alert-success"><strong>Erfolg!</strong> Die Datei wurde hochgeladen.</div>';
		} else {
			echo '<div class="alert alert-danger"><strong>Fehler!</strong> Beim Hochladen ist ein Fehler aufgetreten.</div>';
		}

	} else {
		echo '<div class="alert alert-danger"><strong>Fehler!</strong> Die Datei ist keine gültige Excel-Datei und wurde abgelehnt.</div>';
	}

}
?>
