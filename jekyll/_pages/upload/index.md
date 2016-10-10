---
title: Hochladen der Einsatzpläne
hide-nav: true
image: banner/upload.png
date: 09.10.2016
---

Hi Alex,

hier bitte den neuen Einsatzplan hochladen <i class="fa fa-smile-o"></i>

<form action="upload.html.php" method="post" enctype="multipart/form-data">
	<div class="control-group form-group">
		<div class="controls">
			<label>Einsatzplan (pdf)</label>
			<input type="file" class="form-control" id="pdf" name="pdf" required="required">
		</div>
	</div>
	<div class="control-group form-group">
		<div class="controls">
			<label>Einsatzplan (xls)</label>
			<input type="file" class="form-control" id="excel" name="excel" required="required">
		</div>
	</div>
	<div id="success"></div>
	<!-- For success/fail messages -->
	<button type="submit" class="btn btn-primary" name="submit">Hochladen</button>
</form>

Anmerkung: bei jedem Abschicken bekomme ich eine E-Mail.
