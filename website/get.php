<?php
// quizHUD website "About" page

require_once('config.php');

$CFG->pagetitle = 'quizHUD :: Get quizHUD';
$CFG->currentpage = 'Get quizHUD';

require_once('_page_header.php');

?>


<?php start_single_column('Get quizHUD Objects'); ?>
<p>
The Second Life objects for the quizHUD can be obtained free on the SL Marketplace:
</p>

<p style="text-align:center; font-size:18pt; font-weight:bold;">
 <a href="https://marketplace.secondlife.com/p/quizHUD/3189616" title="Click here to get the in-world quizHUD tools">
  Marketplace
 </a>
</p>

<p>
 You will receive the boxed items in-world. The main parts are the HUD (which users wear), and the Manager Object, which the land-owner must setup and leave in-world.
</p>
<?php end_single_column(); ?>


<p>&nbsp;</p>


<?php start_single_column('Download quizHUD Software', null, null, false); ?>
<p>
 Before you can create your own quizHUD learning activities for your students, you will need to download and install the software on a webserver.
 You will need a webserver with PHP4 or higher and MySQL 4 or higher.
 (It <i>is</i> possible to install on your own desktop computer, but firewalls and network security will often prevent the quizHUD objects in Second Life from being able to access it, so a proper webserver is recommended).
</p>

<p style="text-align:center; font-weight:bold; font-size:18pt;">
 <a href="http://quizhud.googlecode.com/files/quizhud-1.1.zip" title="Click here to download our latest release">quizhud-1.1.zip</a> 
</p>
<?php end_single_column(); ?>


<p>&nbsp;</p>
<p>&nbsp;</p>


<h1 style="text-align:center; margin-bottom:12px;">For Developers:</h1>

<?php start_single_column('Source Code Checkout', null, null, false); ?>
<p>
 The download link above contains all the source code, but you can also get an SVN checkout:
</p>

<p style="text-align:center; font-size:18pt; font-weight:bold;"> 
 <a href="http://code.google.com/p/quizhud/source/checkout" title="Click here to visit the GoogleCode site">GoogleCode repository</a>
</p>

<?php end_single_column(); ?>


<p>&nbsp;</p>


<?php
require_once('_page_footer.php');
?>
