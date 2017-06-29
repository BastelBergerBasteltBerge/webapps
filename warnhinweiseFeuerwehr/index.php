<!doctype html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Warnhinweise</title>
	<link rel="stylesheet" href="../css/haupt.css">
	<meta http-equiv="refresh" content="60">
  </head>
  <body>
	<header>
		Warnhinweise
	</header>
	<main>
		<article>
        <?php
          $xml = simplexml_load_file("http://www.stadt-koeln.de/externe-dienste/rss/warnhinweise-rss.php?kat=1");
          echo "<h2>" . $xml->channel->title . "</h2>";
          echo "<p><b>" . $xml->channel->description . "</b></p>";
          echo "<p><i style='color:red;'>Hier fehlt der Inhalt der Meldung. Bitte einbauen, sobald eine Meldung vorliegt:</i><br /><code>";
		  print_r ($xml);
		  echo "</code></p>";
		  echo "<p><i>Stand: " . $xml->channel->lastBuildDate . "</i></p>";
        ?>
		</article>
	</main>
	<footer>
    <p>Quelle: Stadt Köln. <a
      rel="license"
      title="Link zu Copyrightinformationen für die Daten."
      href="http://www.stadt-koeln.de/politik-und-verwaltung/presse/nachrichten-fuer-ihre-seite-rss-newsfeed">Nutzungsbedingungen</a>
	   <a
	  rel="source"
	  title="Quelldatei der Medlungen."
	  href="http://www.stadt-koeln.de/externe-dienste/rss/warnhinweise-rss.php?kat=1">RSS-Feed</a>
	</p>
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
