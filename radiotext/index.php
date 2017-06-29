<!doctype html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Bastelbergers Radiotext-Info</title>
	<link rel="stylesheet" href="../css/haupt.css">
	<meta http-equiv="refresh" content="10">
  </head>
  <body>
	<header>
		Radiotext-Info
	</header>
	<main>
		<article>
			<p>
			<?php
				$xmlFileName = "http://babe.gacrux.uberspace.de/app/radiotext/wdr.xml";
				$dc = "http://purl.org/dc/elements/1.1/";
				$xmlFile = simplexml_load_file("$xmlFileName");
				foreach($xmlFile->item as $child) {
					echo "<dt><b>" . $child->children($dc)->title . "</b></dt>";
					echo "<dd>" . utf8_encode(file_get_contents($child->children($dc)->relation)) . "</dd>";
					}
			?> 
			</p>
		</article>
	</main>
	<footer>
		<a href="https://zorngiebel.wordpress.com/author/derbastelberger/" title="Homepage des Autors.">Berge bastelt Bastelberger</a><br />
		Version: 0.5.1 &bull; 
		<a 
			rel="license" 
			title="Link zu Copyrightinformationen. (CC:BY)"
			href="http://creativecommons.org/licenses/by/4.0/">
		&copy; CC:BY
		</a>
	</footer>
  </body>
</html>