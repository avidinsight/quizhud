<?php
// quizHUD website index page

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


<h1 style="text-align:center;"><br/>News</h1>

<?php start_single_column("Website Online"); ?>
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
