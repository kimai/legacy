# FAQ

Falls diese kurze FAQ deine Frage nicht klären kann oder Du mehr wissen willst, dann melde Dich bei GitHub und erstelle ein [Support Issue](https://github.com/kimai/kimai/issues).

**Wann wird die nächste Version veröffentlicht?**

Das Kimai Projekt wird von den Entwicklern in Ihrer Freizeit programmiert. Da dies kein kommerzielles Projekt ist, können wir der Weiterentwicklung leider nicht immer so viel Zeit widmen, wie wir es gerne würden.

* * *

**Kann ich meine Zeitdaten sichern?**

Der einfachste Weg ein Backup der Kimai Datenbank anzufertigen ist die Nutzung eines MySQL Backup Tools. Da wären z.B. die Export Funktion von phpMyAdmin, das Tool MySQL Commander oder phpMyBackupPro.

* * *

**Wieso kann ich keine Zeiten eintragen, die vor dem Installationszeitpunkt liegen?**

"...ich habe das Problem, das ich keine Zeiten nachtragen kann, die älter als dem Installationsdatum sind. Ich würde gerne die Daten seit Beginn 02/09 eingeben. Jedoch wird mir im Dateselector das Installationsdatum angezeigt, sodass ich nicht erkennen kann, ob der ältere Eintrag übernommen worden ist. In der Datenbank finde ich den Eintrag."

Der Tag, an dem der Kimai-Kalender beginnt, lässt sich per Konfigurationsdatei nachträglich einstellen. Öffnen Sie dazu die Datei [kimai]/include/vars.php und verändern Sie folgenden Teil:

Von ```$kga['calender_start'] = "";``` zu ```$kga['calender_start'] = "31/12/2008";```

* * *

**Ich kann nur einen Teil der Zeiteinträge für einen Zeitraum sehen, aber nicht alle**

Die Anzahl der angezeigten Datensätze ist standardmäßig auf 100 limitiert. Sie können diese Begrenzung unter Einstellungen (im Headerbereich neben dem Logout-Button) ändern.

* * *

**Kann ich mich am Projekt beteiligen?**

Wenn Du Interesse daran hast, Mitglied des Teams zu werden, melde Dich bitte zuerst bei GitHub an. Dank GitHub kannst Du uns jederzeit Pull-Requests zukommen lassen, auch die anderen Team-Mitglieder arbeiten so. Wenn Du viel beiträgst, nehmen wir Dich gerne in die Team Liste und die Liste der offiziellen Contributor auf :)

Wir suchen dringend jemanden, der gerne Dokumentation schreibt. Gute Englischkenntnisse sind Voraussetzung. Am liebsten native.

Du bist super in CSS und brauchst unbedingt etwas, womit Du Langeweile todschlagen kannst? Melde Dich, wir freuen uns über Mitstreiter die etwas von Frontend-Arbeiten verstehen.

* * *

**Kann ich meine Einträge als Stundenzettel anzeigen/ausdrucken - z.B. "gruppiert nach Projekten und Tätigkeiten" oder "Alle Einträge für Kunde XYZ für die Zeit vom xx bis xx"?**

In der aktuellen Beta-Version können die Einträge über die normale Benutzeroberfläche angezeigt werden, und es können PDFs erzeugt werden. Wenn Sie einen Zeitraum im oberen Teil des Fensters gewählt haben, werden ihnen in der Benutzeroberfläche nur Zeiten bzw. Summen für diesen Zeitraum angezeigt. Eine weitere Anzeigemöglichkeit ist die für bestimmte Tage (tragen Sie dafür einfach den gleichen Tag in 'von' und 'bis' feld ein).

Es gibt in der 'Friendly Hacks' Sektion bereits ein paar Extensions, die dieses Problem angehen.

Natürlich ist geplant, dass Kimai in Zukunft selbst Reports erstellen kann. Aber leider dauert die Entwicklung seine Zeit - gerade wenn man 'nebenbei' noch einen Vollzeit-Job hat ....

* * *

**Ich möchte Beta-Tester werden. Wo bekomme ich die aktuelle Kimai-Version?**

Der Beta-Test der neuesten Entwickler Version läuft kontinuierlich, unser Team ist zu klein um alles alleine zu schaffen. Bei Interesse meldet Euch bitte bei GitHub.

Du kannst entweder die Online Demo verwenden (siehe Webseite) oder noch besser: Du clonst dir den aktuellen develop branch von GitHub und testest diesen.
