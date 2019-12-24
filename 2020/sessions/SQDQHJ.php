<!doctype html>
<html lang="de">

<head>
	<?php include "../inc/meta.inc"; ?>

	<base href="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>">
	<title>QGIS - A SPARQLing Unicorn? Eine Einführung in Linked Open Geodata zur Integration von RDF in QGIS Plugins – FOSSGIS 2020</title>

	<link rel="stylesheet" href="./css/normalize.css">
	<link rel="stylesheet" href="./css/base.css">
	<link rel="stylesheet" href="./css/print.css" media="print">
</head>

<body id="programm">
	<?php include "../inc/header.inc"; ?>

        <!-- This file was generated by a script. Do not edit this file in Git,
             edit contents in Pretalx, regenerate the PHP files and commit them
             in the Git repository of the website. -->
        <p><a href="programm/donnerstag.php#session_SQDQHJ">&#9668;&#9668; zurück zum Programm</a> <a href="sessions/lightning_talks_2.php">&#9668; zurück zur Session</a></p>
        <h2 class='abstract-title'>QGIS - A SPARQLing Unicorn? Eine Einführung in Linked Open Geodata zur Integration von RDF in QGIS Plugins</h2>
        <section>
            <p>
                <span class='abstract-sessiontype'>Lightning Talk</span> von                <span class='abstract-speakers'>Florian Thiery, Timo Homburg</span></p>
                            <p><span class='abstract-time-heading'>Zeit: </span>Donnerstag 12. März 12:10 Uhr<br><span class='abstract-room-heading'>Ort: </span>HS Weismannhaus</p>

            
            <p>Die Linked Open Data Cloud bietet seit vielen Jahren große Datenrepositorien im WWW an, die für verschiedene Zwecke von unterschiedlichen Communities genutzt werden können. Die Stärke von Linked Open Data (LOD) ist hierbei die Verknüpfung von Informationen aus unterschiedlichsten dezentral gehosteten Wissensdomänen. Für die Geoinformatik haben sich beispielsweise community-basierende Datenrepositorien wie <a href="http://wikidata.org">Wikidata</a>, <a href="http://linkedgeodata.org">LinkedGeoData</a> oder <a href="https://wiki.dbpedia.org">DBpedia</a> gebildet. Zudem bieten Gazetteer-Repositorien wie <a href="https://www.geonames.org">Geonames</a> oder <a href="https://pleiades.stoa.org">Pleiades</a> für den zeitgeschichtlichen Raum, aber auch administrative Provider wie der <a href="https://data.ordnancesurvey.co.uk">Ordnance Survey UK</a> und <a href="http://data.geohive.ie">Ordnance Survey Ireland</a>, ihre Geodaten als LOD an. Leider haben all diese Ressourcen in der Geo-Community bisher leider nur niederrangige Bedeutung erlangt. Den Grund dafür sehen wir in einem nicht vorhandenen Support von GIS Applikationen für die Verarbeitung von LOD. <em>Triplestores</em> und <em>SPARQL</em> werden zur Zeit weder von <em>GIS</em> Software, <em>GeoServer</em> Implementierungen oder <em>OGC</em>-Services unterstützt. Die Linked Data Serialisierung <a href="https://geojson.org/geojson-ld/">GeoJSON-LD</a> birgt zwar aufgrund einiger noch offener Issues Herausforderungen, wird allerdings nicht oft wie seine ‘unsemantische Schwester’ <em>GeoJSON</em>, in Applikationen genutzt. Genau hier setzt das <a href="https://plugins.qgis.org/plugins/sparqlunicorn">SPARQLing Unicorn QGIS Plugin</a> an, welches die Ausführung von Linked Data Anfragen in (Geo)SPARQL an ausgewählte Triplestores und geofähigen SPARQL Endpoints ermöglicht. Die Ergebnisse werden in GeoJSON Layer konvertiert, sodass sie direkt in QGIS nutzbar sind. Für die Zukunft soll das <em>SPARQLing Unicorn Plugin</em> mit extrahierten Konzepten ausgewählter Ontologien Benutzern die Möglichkeit bieten, einfache Abfragen wie “Gib mir alle Flughäfen in BOUNDINGBOX mit direkt verbundenen Relationen” oder “Gib mir alle Flughäfen in LAND_X” automatisch zu generieren und somit das Laden dynamischer Inhalte der Datenrepositorien erleichtern. Es ist erwünscht, dass die Geocommunity aktiv an der (Weiter-)Entwicklung des Plugins teilnimmt und so die Welt der LOD im Geokontext weiter bekannt macht. Dazu steht der Quellcode frei auf <a href="https://github.com/sparqlunicorn/sparqlunicornGoesGIS">Github</a> zur Erweiterung zur Verfügung. Der Vortrag gibt einen Einstieg in die Modellierung von Linked Open (Geo-)Data, in die Abfragesprache SPARQL, deren Erweiterung GeoSPARQL, bestehende (Geo-)Ressourcen in der Linked Open Data Cloud, sowie die Funktionsweise des <em>SPARQLing Unicorn QGIS Plugins</em>, dessen zukünftige Erweiterungen und aktuelle Entwicklungen in der Erweiterung der jeweiligen Standards. Das Unicorn freut sich auf Mithilfe aus der Geo-Community!</p>
        </section>


	<?php include "../inc/footer.inc"; ?>

</body>

</html>