# tt-schiri

Dieses Repository enthält die Webseite der Schiedsrichter des Berliner Tischtennisverbands (BeTTV):

	www.tt-schiri.de

Die Webseite wird mit Jekyll erstellt, im Repository sind sowohl die Quellen als auch die generierten Webseiten enthalten.

Alle im Web veröffentlichten Versionen sind im master-Branch zu finden und werden mit Datum-Tags versehen.

Die Seiten nutzen SymLinks, um Dateien nicht doppelt zu halten und die Webseiten etwas unabhängiger von den konkreten Informationen.
Das heißt, die Übersetzung ist nur auf einem Rechner möglich, auf dem die Ziele aller SymLinks genau so vorhanden sind.

## Autoren

- Ekkart Kleinod
	- github: [ekleinod](https://github.com/ekleinod)
	- E-Mail: <schiri@ekkart.de>
- Tobias Kantusch
	- github: [tkantusch](https://github.com/tkantusch)
	- E-Mail: <tobiaskantusch@online.de>

## Mitmachen

Wer Fehler in den Webseiten findet, etwas verbessern will oder mitmachen möchte, hat vier Möglichkeiten:

1. Mail an einen Autor
2. Issue in github eröffnen
3. forken und pull request erstellen
4. direkt als Autor eingetragen werden

## Neue Saison

Was muss alles am Anfang einer neuen Saison getan werden?

- Downloads → verlinken und Datum in downloads.yml setzen
- Einsatzinformationen
	- Aufwandsentschädigung
- OSR-Berichte
	- Namenkonvention
	- Berichtsempfänger
- Ansprechpartner

## Benutzte Dinge

- Jekyll
	- statischer Webseitengenerator
	- <https://jekyllrb.com/>
- Modern-Business-Template
	- bootstrap-Template
	- <https://github.com/BlackrockDigital/startbootstrap-modern-business.git>
- Bootstrap
	- Framework für responsive Webseiten
	- <https://getbootstrap.com/>
- Font Awesome
	- Icon-Font
	- <http://fontawesome.io/>
- jQuery
	- JavaScript-Bibliothek
	- <https://jquery.com/>
- jekyll-mb
	- Modern-Business-Template für jekyll
	- <https://github.com/ekleinod/jekyll-mb>

## Git-Repository

Das Git-Repository ist strukturiert wie im Branching-Modell von http://nvie.com/posts/a-successful-git-branching-model/ vorgeschlagen.
Das bedeutet, es gibt immer die folgenden drei Branches:

1. `master` - fertige Versionen
2. `develop` - Synchronisierungbranch
3. `feature/work` - Hauptarbeitsbranch

Zusätzlich können folgende Branches auftauchen:

- `feature/*` - Features
- `release/*` - Release-Synchronisierung
- `hotfix/*` - Fehlerbehebung

## Rechtliches

Copyright 2016-2016 Ekkart Kleinod <schiri@ekkart>

Die Webseiten und jeglicher dazugehöriger Code bzw. Icons stehen, sofern sie selbst erstellt wurden, unter der Lizenz:

Creative-Commons-Lizenz Namensnennung - Nicht-kommerziell - Weitergabe unter gleichen Bedingungen 4.0 International

http://creativecommons.org/licenses/by-nc-sa/4.0/deed.de

Laienhaft zusammengefasst: die selbsterstellten Dinge können verwendet werden, wenn die Autoren genannt werden und die Weitergabe ebenfalls unter gleicher Lizenz erfolgt.
Die Nutzung darf nicht kommerziell sein, ist eine kommerzielle Nutzung erwünscht, müssen die Autoren gefragt werden, die entscheiden ob und unter welchen Bedingungen eine kommerzielle Nutzung erlaubt ist.
