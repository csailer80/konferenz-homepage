<!doctype html>
<html lang="de">

<head>
	<?php include "../inc/meta.inc"; ?>

	<base href="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>">
	<title>Entwicklung des Berliner Radverkehrs anhand von öffentlich gemachten Verkehrszähldaten – FOSSGIS 2020</title>

	<link rel="stylesheet" href="./css/normalize.css">
	<link rel="stylesheet" href="./css/base.css">
	<link rel="stylesheet" href="./css/print.css" media="print">
</head>

<body id="programm">
	<?php include "../inc/header.inc"; ?>

        <!-- This file was generated by a script. Do not edit this file in Git,
             edit contents in Pretalx, regenerate the PHP files and commit them
             in the Git repository of the website. -->
        <p><a href="programm/donnerstag.php#session_BJSHXE">&#9668;&#9668; zurück zum Programm</a> </p>
        <h2 class='abstract-title'>Entwicklung des Berliner Radverkehrs anhand von öffentlich gemachten Verkehrszähldaten</h2>
        <section>
            <p>
                                <span class='abstract-speakers'>Simon Metzler</span></p>
                            <p><span class='abstract-time-heading'>Zeit: </span>Donnerstag 12. März 10:30 Uhr<br><span class='abstract-room-heading'>Ort: </span>HS Weismannhaus</p>

            <p class='abstract-novideo'><img class="abstract-novideo-img" src="./img/novideo-dark.svg" height="25" alt="ohne Videoaufzeichnung"> Dieser Programmbeitrag wird nicht aufgezeichnet.</p>
            <p>Durch eine IFG-Anfrage konnten insgesamt etwa 20.000 einzelne Querschnitts- und Knotenpunktszählungen, die im Auftrag des Senats bzw. der Verkehrslenkung in den vergangenen Jahrzehnten erhoben worden sind, nutzbar gemacht werden. Obwohl sich das Format im Laufe der Zeit etwas verändert hat und sie nicht georeferenziert sind, ergeben sich einige schöne Erkenntnisse und mögliche Analysen.</p>
<p>Im Vortrage möchte ich auf die Entwicklung des Berliner Radverkehrs eingehen. Da dieser in den vergangenen Jahren eine enorme Entwicklung durchmachte und ich diese gerne einmal quantifizieren wollte. In den Zählungen wurden oft sowohl der Rad- als auch der Kfz-Verkehr erfasst, so lässt sich pro Zählort quasi ein Model Split ermitteln und dessen Entwicklung über die Zeit beschreiben.
Dafür habe entstand eine kleine Anwendung, wo sich die Entwicklung je Postleitzahl bzw. je Zählort nachvollziehen lässt: https://vizsim.github.io/BerlinTrafficCounts/map_change_cycling_share_berlin_jsonChart_onClick.html</p>
<p>Das gesamte Projekt inkl. durchsuchbare Tabelle mit den Rohdaten ist hier:
https://github.com/vizsim/BerlinTrafficCounts</p>
<h5>Ergebnisse</h5>
<p>Zunächst muss gesagt werden, dass die Ergebnisse mit Vorsicht genossen werden müssen, da aufgrund von unterschiedlichen Einflüssen wie bspw. Wetter oder Baustellen teils große Schwankungen zu beobachten sind. Dennoch lassen sich eindeutige Trends erkennen. Einerseits sind die Ergebnisse wie erwartet, also sehr starke Steigerungen des Radverkehrsanteils in der Innenstadt und zum Stadtrand hin Stagnation bis leichte Abnahme des Radverkehrsanteils. Andererseits ist die Höhe der Steigerungen vielerorts doch bemerkenswert. So nimmt das Wachstum des Radverkehrs in der Innenstadt (z.B. Mitte, Kreuzberg) aktuell dem Kfz-Verkehrsanteil jedes Jahr etwa 1 Prozentpunkt am Verkehrsauskommen ab. Konkret bedeutet das, dass bspw. an der Oberbaumbrücke noch vor 20 Jahren nur etwa jedes 10. Fahrzeug ein Fahrrad war, mittlerweile ist etwa jedes 3. Fahrzeug ein Fahrrad. Oder Am Herrmannplatz war vor 15 Jahren nur etwa jedes 20. Fahrzeug ein Fahrrad, heute jedes 5. Bemerkenswert ist, dass dieses Wachstum vielerorts auch ohne entsprechenden infrastrukturellen Anpassungen erzielt wurde.</p>
<h5>Umsetzung</h5>
<p>Die Daten wurden über eine IFG-Anfrage über fragdenstaat.de beschafft. Die Datenaufbereitung und Visualisierung wurde mit Python (folium, altair) realisiert. Die verwendeten Vektordaten stammen von OSM, die Basemap der Anwendung basiert ebenso auf OSM. Die Rohdaten wurden von der Verkehrlenkung Berlin in der Lizenz CC BY-SA 3.0 DE veröffentlicht und können entsprechend frei genutzt werden. Alle verwendeten Skripte befinden sich im angegebenen github repository.</p>
<h5>Fazit</h5>
<p>Verkehrszähldaten sind meist mit öffentlichen Geldern erhobene Daten, die aber selten (maschinenlesbar, unaggregiert) veröffentlicht werden. Dies ist bedauerlich, denn wie in diesem Beispiel gesehen, lassen sich die Daten ganz gut nutzen um aktuelle Entwicklungen im Verkehr zu erkennen. Die Erkenntnisse könnten politischen Entscheidungsträgern helfen Entscheidungen zu treffen und ggf. nötigen Maßnahmen ggü. der Öffentlichkeit besser zu erklären zu können.</p>
        </section>


	<?php include "../inc/footer.inc"; ?>

</body>

</html>