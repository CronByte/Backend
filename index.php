<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Decompiled - A Tech Podcast!</title>
		<link href="d/assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="d/assets/css/mediaelementplayer.min.css" rel="stylesheet" />
		<link href="d/assets/css/magnific-popup.css" rel="stylesheet" />
		<link href="d/assets/css/style.css" rel="stylesheet" />
		<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" />
		<meta name="theme-color" content="#fff" />
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" />
		<meta name="author" content="CronByte" />
		<meta name="keywords" content="Podcast,Tech,Best Podcast,Tech Podcast,Decompiled" />
		<meta name="description" content="Decompiled! Indigenous Podcast for Engineers, students makers & entrepreneurs. Tune In, listen real life experiences & stay on edge with evolving technology world." />
		<meta property="og:locale" content="en" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="Decompiled - A Tech Podcast" />
		<meta property="og:description" content="Decompiled! Indigenous Podcast for Engineers, students makers & entrepreneurs. Tune In, listen real life experiences & stay on edge with evolving technology world." />
		<meta property="og:url" content="https://www.decompiled.in/" />
		<meta property="og:site_name" content="Decompiled" />
		<meta property="og:image" content="http://beta.decompiled.in/assets/img/logo/xlogo.png.pagespeed.ic._oIgWkuu4L.png" />
		<meta name="twitter:card" content="summary_large_image" />
		<meta name="twitter:site" content="decompiled_pod" />
		<meta name="twitter:creator" content="decompiled_pod" />
		<meta name="twitter:title" content="Decompiled - A Tech Podcast" />
		<meta name="twitter:description" content="Decompiled! Indigenous Podcast for Engineers, students makers & entrepreneurs. Tune In, listen real life experiences & stay on edge with evolving technology world." />
		<meta name="twitter:domain" content="https://www.decompiled.in/" />
		<meta name="twitter:image" content="http://beta.decompiled.in/assets/img/logo/xlogo.png.pagespeed.ic._oIgWkuu4L.png" />
		<link rel="icon" href="assets/img/logo/logo.png" />
		<link rel="shortcut icon" href="assets/img/logo/logo.png" />
	</head>




















<?php
############################################################
# PODCAST GENERATOR
#
# Created by Alberto Betella and Emil Engler
# http://www.podcastgenerator.net
# 
# This is Free Software released under the GNU/GPL License.
############################################################
session_start();
require 'core/include.php';

echo "hello cvam here ";

generateRSS();
$episodes = getEpisodes(null);
// Backwards comp
$link = str_replace('?', '', $config['link']);
$link = str_replace('=', '', $link);
$link = str_replace('$url', '', $link);

if(strtolower($config['max_recent']) != 'all') {
    $episodes = array_slice($episodes, 0, $config['max_recent']);
}

$splitted_episodes = array_chunk($episodes, intval($config['episodeperpage']));
$episode_chunk = null;
if(isset($_GET['page'])) {
    $episode_chunk = $splitted_episodes[intval(($_GET['page']) - 1)];
}
else {
    $episode_chunk = $splitted_episodes[0];
}

// Some translation strings
$more = _('More');
$download = _('Download');
$editdelete = _('Edit/Delete (Admin)');
$categories = _('Categories');

$buttons = getButtons('./');
require $config['theme_path']."index.php";
?>



<!-- FOOOOOOOOOOOOOOTER -->
<footer class="footer">
	<section class="section-positive">
		<div class="container">
			<div class="row mt-70 mb-30">
				<div class="col-sm-4 mb-40">
					<h2 class="title-separator white">Lastest Episodes</h2>
					<ul class="footer-complement">
						<li>
							<a href="/episodes/season1/episode2.html">Episode 02 - Talking GSoC and Opensource <span><br> With Prakhar and Vipul</span></a>
						</li>
						<li>
							<a href="./episodes/season1/episode1.html">Episode 01 - Why this is the best time to get into tech? <span><br> With Girish Sarwal</span></a>
						</li>
					</ul>
				</div>
				<div class="col-sm-4 mb-40">
					<h2 class="title-separator white">Donate Us</h2>
					<ul class="footer-complement">
						<li>
							<a href="">Soon.</a>
						</li>
					</ul>
				</div>
				<div class="col-sm-4 mb-40">
					<h2 class="title-separator white">We are social</h2>
					<ul class="social-list">
						<li class="social-item"><a href="https://www.twitter.com/decompiled_pod" target="_blank"><i class="fa fa-twitter"></i></a></li>
						<li class="social-item"><a href="https://www.instagram.com/decompiled_pod" target="_blank"><i class="fa fa-instagram"></i></a></li>
						<li class="social-item"><a href="https://www.facebook.com/groups/decompiled.pod" target="_blank"><i class="fa fa-facebook"></i></a></li>
						<li class="social-item"><a href="https://feeds.buzzsprout.com/257871.rss" target="_blank"><i class="fa fa-rss"></i></a></li>
						<li class="social-item"><a href="https://soundcloud.com/user-607028135" target="_blank"><i class="fa fa-soundcloud"></i></a></li>
						<li class="social-item"><a href="index.html#" target="_blank"><i class="fa fa-music"></i></a></li>
						<li class="social-item"><a href="https://www.youtube.com/channel/UC-aGua5oA3n-XQXN-teKYKA" target="_blank"><i class="fa fa-youtube"></i></a></li>
						<li class="social-item"><a href="https://open.spotify.com/episode/0qnDwHvUlz45mYWcCx4PH4?si=ny7T_waDQ0yMFurcFF7exw" target="_blank"><i class="fa fa-spotify"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section class="footer-credits">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 footer-logo">
					<h1 class="logo_footer"><a href="index.html"><img itemprop="logo" src="assets/img/logo/logo.png" title="Decompiled! Indigenous Podcast for Engineers, students makers & entrepreneurs. Tune In, listen real life experiences & stay on edge with evolving technology world. " alt="Decompiled!" /></a></h1>
				</div>
				<div class="col-sm-6 text-right">
					<br>
					CronByte &copy; 2019 All rights reserved.
				</div>
			</div>
		</div>
	</section>
</footer>
<script src="d/assets/js/jquery-1.11.min.js"></script>
<script src="d/assets/js/modernizr.js"></script>
<script src="d/assets/js/bootstrap.min.js"></script>
<script src="d/assets/js/mediaelement-and-player.min.js"></script>
<script src="d/assets/js/magnific-popup.min.js"></script>
<script src="d/assets/js/validate.min.js"></script>
<script src="d/assets/js/placeholder.min.js"></script>
<script src="d/assets/js/main.js"></script>
</body>
</html>
