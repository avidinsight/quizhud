<?php
// quizHUD website index page

// Should we show all news items?
$showallnews = false;
if (!empty($_GET['showallnews']) && $_GET['showallnews'] == 'true') $showallnews = true;

require_once('config.php');

$CFG->pagetitle = 'quizHUD :: Home';
$CFG->currentpage = 'Home';

require_once('_page_header.php');

?>


<?php start_single_column(''); ?>
<h1>Welcome!</h1>
<p style="font-size:120%; text-align:justify;">
<img src="images/quizhud_screenshot_1.jpg" style="float:right; margin-left:12px; border:solid 1px black;" alt="quizHUD screenshot" title="A screenshot showing the quizHUD object in Second Life" />
The quizHUD is a free, open source educational tool for Second Life.
It primarily consists of a HUD (heads up display) object which you 'wear' on your user interface in Second Life,
and separate website software which you use to administer the system.
Using the website software, you can create informative webpages which can be viewed on the quizHUD,
and setup quizzes and surveys. You can also monitor users' attempts at quizzes through the web-interface.
</p>

<p style="font-weight:bold;">
Please note: the quizHUD is not quite ready for general use yet.
Downloads will be made available very soon!
</p>

<?php end_single_column(); ?>


<h1 style="text-align:center;" id="news"><br/>News</h1>

<?php start_single_column("In-World Tools", null, null, false); ?>
<p>
 If you mosey over to our <a href="get.php" title="Click here to get the quizHUD tools">Get quizHUD</a> section,
 you will see that the in-world objects are now available. Click on there link there to teleport to the location in Second Life,
 where you can try out the demo, or get objects to setup the quizHUD yourself.
</p>

<p>
 Let us know what you think!
</p>
<?php end_single_column('22nd August 2008', 'Peter R. Bloomfield'); ?>

<p>&nbsp;</p>


<?php
// By default, stop here and show a link for "more"
if (!$showallnews) {
    echo <<<XXXEODXXX
 <p style="text-align:center; font-size:140%; font-weight:bold;">
  <a href="index.php?showallnews=true#news" title="Click here to read all the news items">More News...</a>
 </p>
XXXEODXXX;

    require_once('_page_footer.php');
    exit();
}
?>


<?php start_single_column("Repository and Video", null, null, false); ?>
<p>
Day 1, and already we've got 2 newsworthy updates!
</p>

<p>
Our <a href="http://code.google.com/p/quizhud/source/checkout" title="Click here to visit our GoogleCode repository">GoogleCode repository</a>
is now setup, and the code available in the "trunk" folder. You are welcome to check it out and give it a try, although please note that it is not entirely polished yet! The corresponding objects will be made available in SL very very soon... hopefully within 24 hours.
</p>

<p>
The first demo video is also up on <a href="http://www.youtube.com/" title="Click here to visit YouTube">YouTube.com</a>. You can view it, and all our future videos, on our <a href="demo.php" title="Click here to view our demo video page.">Demo Videos</a> page.
</p>

<p>More soon!</p>
<?php end_single_column('21st August 2008', 'Peter R. Bloomfield'); ?>

<p>&nbsp;</p>

<?php start_single_column("Website Online", null, null, false); ?>
<p>
We are pleased to get this website online, to show you the upcoming quizHUD features.
Please bear with us while the remaining issues are ironed-out to ensure you have a pleasant
installation and setup experience with the quizHUD. :)
</p>

<p>
We will shortly also be transferring the source code to a GoogleCode repository,
from which you will be able to check-out the full source using a Subversion (SVN) client.
</p>
<?php end_single_column('21st August 2008', 'Peter R. Bloomfield'); ?>

<p>&nbsp;</p>


<?php
require_once('_page_footer.php');
?>
