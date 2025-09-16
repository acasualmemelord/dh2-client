<?php

if ((substr($_SERVER['REMOTE_ADDR'],0,11) === '69.164.163.') ||
		(substr(@$_SERVER['HTTP_X_FORWARDED_FOR'],0,11) === '69.164.163.')) {
	die('website disabled');
}

/********************************************************************
 * Header
 ********************************************************************/

function ThemeHeaderTemplate() {
	global $panels;
?>
<!DOCTYPE html>
<html><head>

	<meta charset="utf-8" />

	<title><?php if ($panels->pagetitle) echo htmlspecialchars($panels->pagetitle).' - '; ?>Pok&eacute;mon Showdown</title>

<?php if ($panels->pagedescription) { ?>
	<meta name="description" content="<?php echo htmlspecialchars($panels->pagedescription); ?>" />
<?php } ?>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" />
	<link rel="stylesheet" href="//localhost/style/font-awesome.css?0.0543185883961832" />
	<link rel="stylesheet" href="//191.101.232.116/theme/panels.css?0.2114377521240831" />
	<link rel="stylesheet" href="//191.101.232.116/theme/main.css?0.3671015977112777" />
	<link rel="stylesheet" href="//localhost/style/battle.css?0.24242154780578518" />
	<link rel="stylesheet" href="//localhost/style/replay.css?0.6190698135440187" />
	<link rel="stylesheet" href="//localhost/style/utilichart.css?0.5350676963834011" />

	<!-- Workarounds for IE bugs to display trees correctly. -->
	<!--[if lte IE 6]><style> li.tree { height: 1px; } </style><![endif]-->
	<!--[if IE 7]><style> li.tree { zoom: 1; } </style><![endif]-->

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-26211653-1']);
		_gaq.push(['_setDomainName', 'pokemonshowdown.com']);
		_gaq.push(['_setAllowLinker', true]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head><body>

	<div class="pfx-topbar">
		<div class="header">
			<ul class="nav">
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//191.101.232.116/?0.9875123399778623"><img src="//191.101.232.116/images/pokemonshowdownbeta.png?0.21173659060841832" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.08793018594445523">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9521165876852873">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//191.101.232.116/ladder/?0.24293289848689192">Ladder</a></li>
				<li><a class="button nav-last" href="//191.101.232.116/forums/?0.9705714238699037">Forum</a></li>
			</ul>
			<ul class="nav nav-play">
				<li><a class="button greenbutton nav-first nav-last" href="http://play.pokemonshowdown.com/">Play</a></li>
			</ul>
			<div style="clear:both"></div>
		</div>
	</div>
<?php
}

/********************************************************************
 * Footer
 ********************************************************************/

function ThemeScriptsTemplate() {
?>
	<script src="//localhost/js/lib/jquery-1.11.0.min.js?0.6127492611317851"></script>
	<script src="//localhost/js/lib/lodash.core.js?0.8762826346760564"></script>
	<script src="//localhost/js/lib/backbone.js?0.5568832093976406"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3377608324747414"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//localhost/js/lib/jquery-cookie.js?0.6747428720173407"></script>
	<script src="//localhost/js/lib/html-sanitizer-minified.js?0.7979066625983771"></script>
	<script src="//localhost/js/battle-sound.js?0.7549128093408621"></script>
	<script src="//localhost/config/config.js?0.31235411900727494"></script>
	<script src="//localhost/js/battledata.js?0.34728775467392214"></script>
	<script src="//localhost/data/pokedex-mini.js?0.24410535833899072"></script>
	<script src="//localhost/data/pokedex-mini-bw.js?0.27821780817443886"></script>
	<script src="//localhost/data/graphics.js?0.9036181709220841"></script>
	<script src="//localhost/data/pokedex.js?0.5186559132639503"></script>
	<script src="//localhost/data/items.js?0.51463101812224"></script>
	<script src="//localhost/data/moves.js?0.2192396220496875"></script>
	<script src="//localhost/data/abilities.js?0.5534999622845764"></script>
	<script src="//localhost/data/teambuilder-tables.js?0.14816731982167997"></script>
	<script src="//localhost/js/battle-tooltips.js?0.19547600780518581"></script>
	<script src="//localhost/js/battle.js?0.030905969465520267"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
