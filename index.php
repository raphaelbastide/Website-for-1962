<?php

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/lib.php';
require_once __DIR__ . '/markdown.php';

if (!file_exists(__DIR__. '/cache/README.md')) {
  cache_all();
}

$readme = file_get_contents(__DIR__. '/cache/README.md');
$piece = file_get_contents(__DIR__ . '/cache/PIECE');
$contributors = file_get_contents(__DIR__ . '/cache/CONTRIBUTORS');
?>
<!doctype html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>1962 — Versioned physical sculptures</title>
	<meta name="description" content="1962 is a group physical sculptures based on Git and initiated by Raphaël Bastide">
	<link rel="stylesheet" media="all" href="css/main.css">
	<link rel="stylesheet" type="text/css" media="print" href="css/print.css" />
	<link rel="shortcut icon" href="css/img/favicon.gif" type="image/x-icon" />
	<link href="https://github.com/raphaelbastide/1962/commits/master.atom" rel="alternate" title="Recent commits for 1962" type="application/atom+xml" /><body>
	<header>
		<div class="titles">
			<h1>1962</h1>
			<h2>Versioned physical sculptures</h2>
			<nav role="navigation" class="menu">
				<button class="textboxes">About</button>
			</nav>
		</div>
		<div id="viewbox">
			<canvas id="view" width="150" height="800"></canvas>
		</div>
	</header>
	<div class="main-content">
	<div class="page-break"></div>
	<div id="tree" class="contentbox">
		<div class="inner">
			<!-- <div class="vbox branch1" id="v0_9_i">
				<img width="200" title="1962 v0.9_i" alt="1962 v0.9_i" src="img/0_9_i.jpg" />
				<ul class="caption">
					<li class="version">version: 0.9_imal-2013</li>
					<li class="date">date: 2013-01-26</li>
					<li class="code">code: <a href="https://github.com/raphaelbastide/1962/tree/v0.8_imal-2013">on GitHub</a></li>
					<li class="visit">visit: <a href="http://raphaelbastide.com/revisables/">Révisable 1</a></li>
				</ul>
			</div>
			<div class="vbox" id="v0_9">
				<img width="200" title="1962 v0.9" alt="1962 v0.9" src="img/0_9.jpg" />
				<ul class="caption">
					<li class="version">version: 0.9</li>
					<li class="date">date: 2013-01-26</li>
					<li class="code">code: <a href="https://github.com/raphaelbastide/1962/tree/v0.8">on GitHub</a></li>
				</ul>
			</div> -->
			<div class="vbox branch1" id="v0_8_1_c">
				<img width="200" title="1962 v0_8_1_c" alt="1962 v0_8_1_c" src="img/0_8_1_c.jpg" />
				<p class="caption">v0.8.1.chaumont-2013<br/><a href="http://www.cig-chaumont.com/fr/cig/page/festival-international-de-laffiche-et-du-graphisme/expositions/panorama">coming soon</a></p>
			</div>
			<div class="vbox" id="v0_8_1">
				<img width="200" title="1962 v0_8_1" alt="1962 v0_8_1" src="img/0_8_1.jpg" />
				<ul class="caption">
					<li class="version">version: 0.8.1</li>
					<li class="date">date: 2013-02-19</li>
					<li class="code">code: <a href="https://github.com/raphaelbastide/1962/tree/v0.8.1">on GitHub</a></li>
				</ul>
			</div>
			<div class="vbox" id="v0_8">
				<img width="200" title="1962 v0.8" alt="1962 v0.8" src="img/0_8.jpg" />
				<ul class="caption">
					<li class="version">version: 0.8</li>
					<li class="date">date: 2013-01-26</li>
					<li class="code">code: <a href="https://github.com/raphaelbastide/1962/tree/v0.8">on GitHub</a></li>
				</ul>
			</div>
			<div class="vbox branch1" id="v0_7_b">
				<img width="200" title="1962 v0_7_brussels-2013" alt="1962 v0_7_brussels-2013" src="img/0_7_brussels-2013.jpg" />
				<ul class="caption">
					<li class="version">version: v0.7.brussels-2013</li>
					<li class="date">date: 2013-02-28</li>
					<li class="code">code: <a href="https://github.com/raphaelbastide/1962/tree/v0.7.brussels-2013">on GitHub</a></li>
					<li class="visit">visit: <a href="http://raphaelbastide.com/branch/">BRANCH</a></li>
				</ul>
			</div>
			<div class="vbox" id="v0_7">
				<img width="200" title="1962 v0.7" alt="1962 v0.7" src="img/0_7.jpg" />
				<ul class="caption">
					<li class="version">version: 0.7</li>
					<li class="date">date: 2012-08-08</li>
					<li class="code">code: <a href="https://github.com/raphaelbastide/1962/tree/v0.7">on GitHub</a></li>
				</ul>
			</div>
			<div class="vbox" id="v0_6">
				<img width="200" title="1962 v0.6" alt="1962 v0.6" src="img/0_6.jpg" />
				<ul class="caption">
					<li class="version">version: 0.6</li>
					<li class="date">date: 2012-07-12</li>
					<li class="code">code: <a href="https://github.com/raphaelbastide/1962/tree/v0.6">on GitHub</a></li>
				</ul>
			</div>
			<div class="vbox" id="v0_5">
				<img width="200" title="1962 v0.5" alt="1962 v0.5" src="img/0_5.jpg" />
				<ul class="caption">
					<li class="version">version: 0.5</li>
					<li class="date">date: 2012-07-03</li>
					<li class="code">code: <a href="https://github.com/raphaelbastide/1962/tree/v0.5">on GitHub</a></li>
				</ul>
			</div>
			<div class="vbox" id="v0_4">
				<img width="200" title="1962 v0.4" alt="1962 v0.4" src="img/0_4.jpg" />
				<ul class="caption">
					<li class="version">version: 0.4</li>
					<li class="date">date: 2012-06-08</li>
					<li class="code">code: <a href="https://github.com/raphaelbastide/1962/tree/v0.4">on GitHub</a></li>
				</ul>
			</div>
			<div class="vbox" id="v0_3">
				<img width="200" title="1962 v0.1" alt="1962 v0.3" src="img/0_3.jpg" />
				<ul class="caption">
					<li class="version">version: 0.3</li>
					<li class="date">date: 2012-05-24</li>
					<li class="code">code: <a href="https://github.com/raphaelbastide/1962/tree/v0.3">on GitHub</a></li>
				</ul>
			</div>
			<div class="vbox" id="v0_2">
				<img width="200" title="1962 v0.2" alt="1962 v0.2" src="img/0_2.jpg" />
				<ul class="caption">
					<li class="version">version: 0.2</li>
					<li class="date">date: 2012-05-18</li>
					<li class="code">code: <a href="https://github.com/raphaelbastide/1962/tree/0.2">on GitHub</a></li>
				</ul>
			</div>
			<div class="vbox" id="v0_1">
				<img width="200" title="1962 v0.1" alt="1962 v0.1" src="img/0_1.jpg" />
				<ul class="caption">
					<li class="version">version: 0.1</li>
					<li class="date">date: 2012-04-17</li>
					<li class="code">code: <a href="https://github.com/raphaelbastide/1962/tree/v0.1">on GitHub</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="page-break"></div>
	<div id="textboxes" class="contentbox">
		<div class="readme textbox">
			<?php echo markdown($readme); ?>
		</div>
		<div class="piece textbox">
			<h2>Current state of the PIECE file</h2>
			<pre><?php echo markdown($piece); ?></pre>
		</div>
		<div class="contributors textbox">
			<h2>Contributors</h2>
			<pre><?php echo $contributors ?></pre>
		</div>
		<footer>
			<h2>About this website</h2>
			<p>Version: <a href="https://github.com/raphaelbastide/Website-for-1962/">2.0</a><br/>
			Design: <a href="http://raphaelbastide.com">Raphaël Bastide</a><br/>
			Typefaces: <a href="https://github.com/ms-studio/karmilla">Karmilla</a>, <a href="https://github.com/adobe/source-code-pro">Source Code Pro</a></p>
		</footer>
	</div>
	<div class="frame"></div>
	<script src="js/libs/jquery-1.9.1.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/libs/jquery-migrate-1.2.1.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/libs/jquery.jsPlumb-1.4.0-all-min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/libs/jquery.ba-throttle-debounce.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/libs/jquery.fracs-0.11.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/libs/jquery.outline-0.11.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/script.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-26267672-3']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
</body>
</html>
