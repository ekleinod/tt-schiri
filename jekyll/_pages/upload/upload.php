---
title: Hochladen der Einsatzpläne - Ergebnis
hide-nav: true
image: banner/upload.png
date: 17.09.2017
---

<p>Dann wollen wir mal...</p>

<?php

	$uploads = array(
									 array(
												 'id' => 'swpdf',
												 'title' => 'PDF-Datei (sw)',
												 'type_ext' => 'pdf',
												 'type_title' => 'PDF-Datei'
												 ),
									 array(
												 'id' => 'pdf',
												 'title' => 'PDF-Datei (bunt)',
												 'type_ext' => 'pdf',
												 'type_title' => 'PDF-Datei'
												 ),
									 array(
												 'id' => 'excel',
												 'title' => 'Excel-Datei',
												 'type_ext' => 'xls',
												 'type_title' => 'Excel-Datei'
												 ),
									 );

	$maillog = '';

	$upload_dir = "uploads/";

	foreach ($uploads as $upfile) {

		$error = false;

		echo sprintf('<h2>%s</h2>', $upfile['title']);
		$maillog .= sprintf("# %s\n\n", $upfile['title']);

		$upload_file = $upload_dir . basename($_FILES[$upfile['id']]['name']);
		$file_type = pathinfo($upload_file, PATHINFO_EXTENSION);

		$maillog .= sprintf("Dateiname: %s\n", basename($_FILES[$upfile['id']]['name']));
		$maillog .= sprintf("Ziel (upload): %s\n\n", $upload_file);

		if (isset($_POST["submit"])) {

			$isOK = ($file_type === $upfile['type_ext']);

			if ($isOK) {

				if (move_uploaded_file($_FILES[$upfile['id']]["tmp_name"], $upload_file)) {
					echo '<div class="alert alert-success"><strong>Erfolg!</strong> Die Datei wurde hochgeladen.</div>';
					$maillog .= "**Erfolg!** Die Datei wurde hochgeladen.\n";
				} else {
					echo '<div class="alert alert-danger"><strong>Fehler!</strong> Beim Hochladen ist ein Fehler aufgetreten.</div>';
					$maillog .= "**Fehler!** Beim Hochladen ist ein Fehler aufgetreten.\n";
					$error = true;
				}

			} else {
				echo sprintf('<div class="alert alert-danger"><strong>Fehler!</strong> Die Datei ist keine gültige %s und wurde abgelehnt.</div>', $upfile['type_title']);
				$maillog .= sprintf("**Fehler!** Die Datei ist keine gültige %s und wurde abgelehnt.\n", $upfile['type_title']);
				$error = true;
			}

		} else {
			echo '<div class="alert alert-danger"><strong>Fehler!</strong> submit nicht gesetzt.</div>';
			$maillog .= "**Fehler!** submit nicht gesetzt.\n";
			$error = true;
		}

		$maillog .= "\n";

	}

	mail('schiri@ekkart.de', sprintf('%s Upload Schiriseiten', ($error) ? 'Erfolgloser' : 'Erfolgreicher'), $maillog);

?>

<p><a href="index.html">Zurück zum Hochladen</a></p>
