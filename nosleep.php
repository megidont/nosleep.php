<?php

//configuration options:

	$protocol = "http://";
	$vidsrc = "/nosleep.mp4";
	$explainer = "/nosleepexplanation.php";

	$fallback = "The invisible no-sleep video failed to load, leading to this obtrusive text.";

//end configuration options

	$onchrome = str_contains(strtolower($_SERVER['HTTP_USER_AGENT']), strtolower("chrom"));
	$muted = $onchrome? "" : "MUTED";

	$nosleep = <<<NOSLEEP
	<VIDEO SRC="$vidsrc" WIDTH="0" HEIGHT="0" LOOP $muted AUTOPLAY>$fallback</VIDEO>
	NOSLEEP;

	$builturl = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'] . "?" . $_SERVER['QUERY_STRING'];

	$parsedurl = parse_url($builturl);

	$togglelink = $builturl . (($parsedurl['query'] == NULL) ? "?SLEEP=true" : "&SLEEP=true");
	$newstate = "allow";
	$disclaimer = $onchrome? "(If your device is still idling to sleep, please enable audio playback in your browser's settings for this site.)<BR><BR>" : "";

	$newquery = "";

	if(isset($_GET['SLEEP'])){

		$parsedqueries = parse_url($builturl, PHP_URL_QUERY);
		$queries = array();
		parse_str($parsedqueries, $queries);
		if(isset($queries['SLEEP'])){

			unset($queries['SLEEP']);

		}
		$newquery = http_build_query($queries);

		$nosleep = "";
		$togglelink = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'] . "?" . $newquery;
		$newstate = "disallow";
		$discliamer = "";

	}

?>

<?=$nosleep?>
This page utilizes some fun and silly magic to keep your browser window awake.<BR><BR>
<?=$disclaimer?>
Click <A HREF="<?=$togglelink?>">here</A> to <?=$newstate?> sleep!<BR><BR>
For more information, see <A HREF="<?=$explainer?>">this page</A>!<BR>
