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



<?php start_single_column('', null, "text-align:center;color:#600;", true); ?>
<h2>Please Note</h2><br/>
<p style="font-size:120%;">
This project is no longer being maintained.
</p>


<?php end_single_column(); ?>

<p>&nbsp;</p>
<p>&nbsp;</p>


<?php start_single_column('', null, null, false); ?>
<h1>Welcome!</h1><br/>
<p style="font-size:120%; text-align:justify;">
<img src="images/quizhud_screenshot_1.jpg" style="float:right; margin-left:12px; border:solid 1px black;" alt="quizHUD screenshot" title="A screenshot showing the quizHUD object in Second Life" />
The quizHUD is a free, open source educational tool for Second Life.
It primarily consists of a HUD (heads up display) object which you 'wear' on your user interface in Second Life,
and separate website software which you use to administer the system.
Using the website software, you can create informative webpages which can be viewed on the quizHUD,
and setup quizzes and surveys. You can also monitor users' attempts at quizzes through the web-interface.
</p>


<?php end_single_column(); ?>

<p>&nbsp;</p>




<h1 style="text-align:center;" id="news"><br/>News</h1>

<?php start_single_column("That's all folks!", null, null, false); ?>
<p>
 I'm sorry to say that I will not be supporting or developing quizHUD any further, and that the in-world demo is now unavailable (it's actually been offline for quite some time).
 Sorry for any inconvenience. You are still very welcome to get the source code though, although please note that the technology is rather out of date now!
</p>
 
</p>
 Very many thanks to everybody who has been interested in quizHUD. I hope a few people have found it interesting or useful!
</p>

<?php end_single_column('19th February 2012', 'Peter R. Bloomfield'); ?>

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


<?php start_single_column("Publication and Discussion", null, null, false); ?>
<p>
 The quizHUD research so far has now been published in the 
  <a href="http://cis.paisley.ac.uk/research/journal/vol13.htm" title="Click here to visit the journal">Computing and Information Systems Journal 13(1)</a>,
  at the University of the West of Scotland.
 You can view a PDF of the quizHUD article itself:
  "<a href="http://www.avid-insight.co.uk/publications/immersive_learning_and_assessment_with_quizhud.pdf" title="Click here to open a PDF file of the paper">Immersive Learning and Assessment with quizHUD</a>", by Peter R. Bloomfield and Daniel Livingstone.
</p>

<p>
 We also now have a
  <a href="http://www.sloodle.org/moodle/mod/forum/view.php?id=1120" title="Click here to visit the discussion forum">discussion forum</a>
 available on the main SLOODLE website, which you are welcome to use to ask for help or suggest ideas.
</p>
<?php end_single_column('24th February 2009', 'Peter R. Bloomfield'); ?>

<p>&nbsp;</p>


<?php start_single_column("Software Release", null, null, false); ?>
<p>
 At last, you are able to download the quizHUD software and install it yourself!
 Take a look at our <a href="get.php" title="Click here to get the quizHUD tools">Get quizHUD</a> page,
 and go down to the 'Download quizHUD Software' section, to get all the details.
</p>

<p>
 Happy quizzing!
</p>
<?php end_single_column('29th August 2008', 'Peter R. Bloomfield'); ?>

<p>&nbsp;</p>

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
