<?php
/*
// No need for this stuff... using a custom YouTube player instead!


// Define an array of videos
//  [id] = (title, embedcode)
$videos = array();
$videos['inworlddemo'] = array('In-World Demo', '');
$videos['webdemo'] = array('Web-Interface Demo', '');
$videos['install'] = array('Installation Tutorial', '');
$videos['promo'] = array('Promo Video', '');

// Define our default video
$defaultvideo = 'inworlddemo';
// If a video was requested by GET parameter, then use it
$currentvideo = '';
if (isset($_GET['video'])) $currentvideo = $_GET['video'];
if (!array_key_exists($currentvideo, $videos)) $currentvideo = $defaultvideo;
*/

// quizHUD website "Demo Videos" page

require_once('config.php');

$CFG->pagetitle = 'quizHUD :: Demo Videos';
$CFG->currentpage = 'Demo Videos';

require_once('_page_header.php');

?>

<div style="text-align:center;">
<object width="746" height="413"><param name="movie" value="http://www.youtube.com/cp/vjVQa1PpcFNUB87jnj3g64dpLOfIHgOaq7MHV1ppslw="></param><embed src="http://www.youtube.com/cp/vjVQa1PpcFNUB87jnj3g64dpLOfIHgOaq7MHV1ppslw=" type="application/x-shockwave-flash" width="746" height="413"></embed></object>
</div>

<p>&nbsp;</p>

<?php start_single_column('Demo Videos'); ?>
<p>
All our demo videos are hosted courtesy of <a href="http://www.youtube.com/" title="Click here to visit YouTube.">YouTube</a>.
You can either use the player above to look through our existing videos, or search YouTube for "quizHUD".
</p>

<?php end_single_column(); ?>

<p>&nbsp;</p>

<?php
require_once('_page_footer.php');
?>
