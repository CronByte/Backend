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
