---
title: OSR-Berichte
---

Zu jedem Spiel, das Ihr als OSR leitet, ist ein OSR-Bericht zu erstellen.
Auf dieser Seite sind alle Informationen zusammengefasst, die dafür nötig sind.


## Kurzanleitung

Folgende Schritte sind für einen korrekten OSR-Bericht vorzunehmen:

1. OSR-Bericht des DTTB herunterladen ([Anleitung](#download))
2. OSR-Bericht korrekt benennen ([Anleitung](#name))
3. OSR-Bericht ausfüllen ([Anleitung](#fill))
4. OSR-Bericht abspeichern ([Anleitung](#save))
5. OSR-Bericht per Mail versenden ([Anleitung und Adressen](#send))

## OSR-Bericht des DTTB herunterladen {#download}

Ladet den für die Spielklasse passenden OSR-Bericht herunter.

{% include downloads.html tag='osr-berichte' %}

Speichert den OSR-Bericht am besten auf die Festplatte und füllt ihn dort aus.
Wenn der OSR-Bericht direkt im Browser geöffnet wird, geht zurück, klickt den Link mit der rechten Maustaste an und wählt "Ziel speichern unter".

In anderen Worten: "Bei mir selbst erscheint die gleiche Meldung [...] Allerdings bestätige ich dann rechts oben nochmal das Öffnen und wähle den Adobe-Reader aus. Dann öffnet sich der OSR-Bericht."


## OSR-Bericht korrekt benennen {#name}

Benennt den heruntergeladenen Bericht bitte nach folgendem Namensschema:

	"OSR"_Nennung der Spielklasse_Damen/Herren_Spielnummer_Begegnung.pdf

Beispiele:

	OSR_BL_Da1_05_Eastside-Böblingen.pdf
	OSR_BL_He3_03_Hertha-Seligenstadt.pdf
	OSR_RL_DaNord_01_Füchse-Göttingen.pdf
	OSR_RL_HeNord_02_Düppel-Tündern.pdf
	OSR_OL_DaNordOst_12_Neukölln-Ahrensberg.pdf
	OSR_OL_HeNordOst_13_Spandau-Sasel.pdf

## OSR-Bericht ausfüllen {#fill}

Beim Ausfüllen des OSR-Berichts gibt es zwei Phasen:

1. Daten erheben (beim Spiel)
2. Daten in PDF-Formular übertragen (am Computer)

Da ich selten einen Computer beim Spiel dabeihabe, drucke ich für jedes Spiel einen OSR-Bericht aus, den ich während des Spiels ausfülle.
Diese Daten übernehme ich dann zu Hause in den Computer.

Am Computer öffnet Ihr die PDF-Datei mit dem Acrobat Reader.
Es gibt zwar gute und kostenlose Alternativen zum Adobe Reader (siehe [Wikipedia](https://de.wikipedia.org/wiki/Liste_von_PDF-Software)) mit diesen funktionieren die neuen Formulare jedoch nicht immer.
*PDFXChangeViewer* soll funktionieren.

Nachdem Ihr die PDF-Datei geöffnet habt, tragt Ihr die Daten des Spiels in das Formular ein.

Um sicherzugehen, dass Ihr die Eintragungen abspeichern und wieder laden können, tragt zunächst nur wenige Daten ein, z.B. die Heimmannschaft.
Speichert die Datei ab und schließt den PDF-Reader.
Öffnet jetzt die gespeicherte PDF-Datei.
Wenn die Heimmannschaft immer noch eingetragen ist, funktioniert das Speichern.
Wenn nicht, verwendet einen anderen PDF-Reader.

Das Formular ist relativ gut aufgebaut, daher nur ein paar wichtige Punkte, die oft falsch eingetragen werden:

- Spielnummer nicht vergessen {% include download.html file='einsatzinformationen/BeTTV_Einsatzplan.pdf' title='Einsatzplan (pdf)' %} bzw. {% include download.html file='einsatzinformationen/BeTTV_Einsatzplan.xls' title='Einsatzplan (xls)' %}
- elektronisches Zählgerät in der Box: wirklich nur, wenn in der Box welche vorhanden waren, es ist nicht der Gesamtspielstandsanzeiger gemeint
- OSR-Lizenz ankreuzen
- Mannschaftsführer namentlich eintragen
- Kreuz bei "Gastverein hat das Trikot gewechselt..." nur dann setzen (ja oder nein), wenn die Trikots gleichfarbig waren. Im Normalfall hier also kein Kreuz (weder bei ja noch bei nein) setzen.
- Schläger müssen vor dem Spiel überprüft werden (Sichtprüfung)
- Messgerätprüfung nur, wenn man eins hat
- bei den Gründen für Karten: genaue Angabe, also nicht nur "Unsportlichkeit", sondern "Treten gegen den Tisch"

## OSR-Bericht abspeichern {#save}

Jetzt speichert den OSR-Bericht ab. Da Ihr das oben schon getestet haben, sollten Bericht und Daten gespeichert sein.
Ihr könnt das überprüfen, indem Ihr das Dokument schließt und wieder öffnet.
Jetzt müssen die eingetragenen Daten noch vorhanden sein.

Prüft bitte, ob die Daten nach einmal Programm schließen und wieder öffnen noch sichtbar sind, damit Ihr keinen leeren OSR-Bericht verschickt.


## OSR-Bericht per E-Mail versenden {#send}

Der OSR-Bericht muss innerhalb von 48 Stunden an den jeweiligen Staffelleiter und an den VSRO (Ekkart Kleinod) versendet werden.

Prüft noch einmal, ob alle Daten eingetragen sind (einfach noch einmal durchlesen oder noch besser: jemandem zum Durchlesen geben).

Jetzt sendet den OSR-Bericht an alle Empfänger, wie das genau geschieht, hängt von Eurem PDF-Reader und Eurem Mailprogramm ab, so dass es schwierig ist, eine allgemeine Anleitung zu geben.
Grundsätzlich verfasst Ihr eine neue E-Mail, tragt die E-Mailempfänger ein, hängt den OSR-Bericht an und schickt die E-Mail ab.

{% for league in site.data.osr-recipients %}

### {{ league.title }}

{% for recipient in league.recipients %}- {{ recipient.name }}: [{{ recipient.mail }}](mailto:{{ recipient.mail }})
{% endfor %}

{% endfor %}
