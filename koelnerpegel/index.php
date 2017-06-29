<!doctype html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Kölner Pegel</title>
	<link rel="stylesheet" href="../css/haupt.css">
	<meta http-equiv="refresh" content="300">
  </head>
  <body>
	<header>
		Kölner Pegel
	</header>
	<main>
		<article>
      <span style="text-align:center; ">
        <?php
          $xml = simplexml_load_file("http://www.stadt-koeln.de/interne-dienste/hochwasser/pegel_ws.php");
          echo "<p><img src='http://www.stadt-koeln.de/images/hochwasser/" . $xml->Grafik ."' alt='Abbildung Pegel'><br />";
          echo "<span style=font-size:300%; '><b>" . $xml->Pegel . "</b></span></p>";
          echo "<p><i>Stand: " . $xml->Datum . "; " . $xml->Uhrzeit . "Uhr</i></p>";
        ?>
			</span>
		</article>
	</main>
	<footer>
    <p>Quelle: Stadt Köln/<a
      rel="license"
      title="Link zu Copyrightinformationen für die Daten."
      href="https://www.offenedaten-koeln.de/dataset/pegelstand-stadt-k%C3%B6ln">Offene Daten
    </a></p>
		<a
      href="https://zorngiebel.wordpress.com/author/derbastelberger/"
      title="Homepage des Autors.">
      Berge bastelt Bastelberger
    </a><br />
		Version: 0.1.3 &bull;
		<a
			rel="license"
			title="Link zu Copyrightinformationen der Web-App. (CC:BY)"
			href="http://creativecommons.org/licenses/by/4.0/">&copy; CC:BY
		</a>
	</footer>
  </body>
</html>
