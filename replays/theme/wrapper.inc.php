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
	<link rel="stylesheet" href="//localhost/style/font-awesome.css?0.06440242447257893" />
	<link rel="stylesheet" href="//191.101.232.116/theme/panels.css?0.5853461562033593" />
	<link rel="stylesheet" href="//191.101.232.116/theme/main.css?0.8197846806010165" />
	<link rel="stylesheet" href="//localhost/style/battle.css?0.34472967510419217" />
	<link rel="stylesheet" href="//localhost/style/replay.css?0.24615415493995219" />
	<link rel="stylesheet" href="//localhost/style/utilichart.css?0.5582065478182383" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//191.101.232.116/?0.5899578513968331"><img src="//191.101.232.116/images/pokemonshowdownbeta.png?0.9166976154326154" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.030901131341747767">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7134153078796359">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//191.101.232.116/ladder/?0.7866548859332043">Ladder</a></li>
				<li><a class="button nav-last" href="//191.101.232.116/forums/?0.9797001504590142">Forum</a></li>
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
	<script src="//localhost/js/lib/jquery-1.11.0.min.js?0.12228550616706202"></script>
	<script src="//localhost/js/lib/lodash.core.js?0.3656721972501549"></script>
	<script src="//localhost/js/lib/backbone.js?0.8215735631532612"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5209989597467737"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//localhost/js/lib/jquery-cookie.js?0.9206633253528049"></script>
	<script src="//localhost/js/lib/html-sanitizer-minified.js?0.9098362355645633"></script>
	<script src="//localhost/js/battle-sound.js?0.691894018215681"></script>
	<script src="//localhost/config/config.js?0.43894173655031143"></script>
	<script src="//localhost/js/battledata.js?0.5774650958286085"></script>
	<script src="//localhost/data/pokedex-mini.js?0.4939095517512879"></script>
	<script src="//localhost/data/pokedex-mini-bw.js?0.09465598576789147"></script>
	<script src="//localhost/data/graphics.js?0.2839663247463282"></script>
	<script src="//localhost/data/pokedex.js?0.39513077851411205"></script>
	<script src="//localhost/data/items.js?0.258411578692362"></script>
	<script src="//localhost/data/moves.js?0.8427368331422453"></script>
	<script src="//localhost/data/abilities.js?0.2507788937829958"></script>
	<script src="//localhost/data/teambuilder-tables.js?0.1193546694719212"></script>
	<script src="//localhost/js/battle-tooltips.js?0.6362819654723075"></script>
	<script src="//localhost/js/battle.js?0.8855354035612513"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
