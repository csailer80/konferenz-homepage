<!doctype html>
<html lang="de">

<head>
	<?php include "../inc/meta.inc"; ?>

	<base href="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>">
	<title>Hochverfügbare PostGIS-Cluster auf Kubernetes – FOSSGIS 2020</title>

	<link rel="stylesheet" href="./css/normalize.css">
	<link rel="stylesheet" href="./css/base.css">
	<link rel="stylesheet" href="./css/print.css" media="print">
</head>

<body id="programm">
	<?php include "../inc/header.inc"; ?>

        <!-- This file was generated by a script. Do not edit this file in Git,
             edit contents in Pretalx, regenerate the PHP files and commit them
             in the Git repository of the website. -->
        <p><a href="programm/freitag.php#session_HZ8XES">&#9668;&#9668; zurück zum Programm</a> </p>
        <h2 class='abstract-title'>Hochverfügbare PostGIS-Cluster auf Kubernetes</h2>
        <section>
            <p>
                                <span class='abstract-speakers'>Felix Kunde</span></p>
                            <p><span class='abstract-time-heading'>Zeit: </span>Freitag 13. März 09:00 Uhr<br><span class='abstract-room-heading'>Ort: </span>HS Rundbau</p>

            
            <p>Container-basierte IT-Infrastrukturen sind bereits seit einigen Jahren in Mode und werden im Zuge von Cloud-basierten Irgendwas-as-a-service Anwendungen immer mehr zum Standard. Für die Orchestrierung von Hunderten von Containern verwenden die meisten derzeit Kubernetes von der Cloud Native Computing Foundation (CNCF) - kurz K8s. K8s umfasst mittlerweile ein recht großes Ökosystem für das Aufsetzen und automatische Skalieren von Webdiensten, wofür es ursprünglich von Google entwickelt wurde. Zunehmend wird es aber auch für zustandsorientierte Dienste wie Datenbanken genutzt. Nun sind Datenbankserver eine etwas komplexere Geschichte als Microservices. Alleine deren Administration ist meist sehr spezifisch. Deshalb existiert bei K8s dafür keine Standardressource, sondern es müssen Benutzer-definierte Operatoren erstellt werden.</p>
<p>Für PostgreSQL/PostGIS-Nutzer ist die Auswahl noch überschaubar: Es gibt einen Operator und ein Docker-Image von Crunchy Data sowie von Zalando. Letzteres wird im Vortrag näher vorgestellt, gepaart mit Erfahrungsberichten aus dem DBaaS Tagesgeschäft: Wie wird Ausfallsicherheit geschaffen? Wie funktioniert ein hochverfügbares PostGIS mit Patroni? Welche Backup- und Recovery Strategien werden genutzt? Was ist bei Versionsupdates? Wie wird der Produktivbetrieb überwacht? Wie werden Entwickler-Teams zu eigenen DBAs? Was kann da überhaupt schiefgehen?</p>
        </section>


	<?php include "../inc/footer.inc"; ?>

</body>

</html>