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
	<link rel="stylesheet" href="//localhost/style/font-awesome.css?0.5940672128971107" />
	<link rel="stylesheet" href="//191.101.232.116/theme/panels.css?0.04284416500946042" />
	<link rel="stylesheet" href="//191.101.232.116/theme/main.css?0.3966132362459449" />
	<link rel="stylesheet" href="//localhost/style/battle.css?0.2660746776435574" />
	<link rel="stylesheet" href="//localhost/style/replay.css?0.8672734496953509" />
	<link rel="stylesheet" href="//localhost/style/utilichart.css?0.18664690377866555" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//191.101.232.116/?0.23265704990382052"><img src="//191.101.232.116/images/pokemonshowdownbeta.png?0.6318632017478032" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8100425401064466">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7694186765722002">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//191.101.232.116/ladder/?0.20972731620503549">Ladder</a></li>
				<li><a class="button nav-last" href="//191.101.232.116/forums/?0.7745806234938606">Forum</a></li>
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
	<script src="//localhost/js/lib/jquery-1.11.0.min.js?0.6583278604995215"></script>
	<script src="//localhost/js/lib/lodash.core.js?0.3474484934423854"></script>
	<script src="//localhost/js/lib/backbone.js?0.8202644742685599"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.28129574705237625"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//localhost/js/lib/jquery-cookie.js?0.6469203514916111"></script>
	<script src="//localhost/js/lib/html-sanitizer-minified.js?0.9684213523076803"></script>
	<script src="//localhost/js/battle-sound.js?0.9848560906999215"></script>
	<script src="//localhost/config/config.js?0.05947923884375417"></script>
	<script src="//localhost/js/battledata.js?0.7794828660149069"></script>
	<script src="//localhost/data/pokedex-mini.js?0.5613690945387937"></script>
	<script src="//localhost/data/pokedex-mini-bw.js?0.0632746629620613"></script>
	<script src="//localhost/data/graphics.js?0.4192087598315344"></script>
	<script src="//localhost/data/pokedex.js?0.3395265552836453"></script>
	<script src="//localhost/data/items.js?0.9981454323208181"></script>
	<script src="//localhost/data/moves.js?0.6942957755241634"></script>
	<script src="//localhost/data/abilities.js?0.6483508254193375"></script>
	<script src="//localhost/data/teambuilder-tables.js?0.49440198151231995"></script>
	<script src="//localhost/js/battle-tooltips.js?0.7179972439293354"></script>
	<script src="//localhost/js/battle.js?0.35884160665390863"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
