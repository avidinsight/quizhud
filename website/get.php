<?php
// quizHUD website "About" page

require_once('config.php');

$CFG->pagetitle = 'quizHUD :: Get quizHUD';
$CFG->currentpage = 'Get quizHUD';

require_once('_page_header.php');

?>


<?php start_single_column('Get quizHUD Objects'); ?>
<p>
The Second Life objects for the quizHUD can be obtained from our site in-world.
We are currently residing on the <abbr title="virtuALBA is owned by the University of the West of Scotland">virtuALBA</abbr> sim,
where you can try out a demo, or get the objects for your own personal use.
</p>

<p style="text-align:center; font-size:140%;">
 <a href="secondlife://virtuALBA/106/247/24" title="Click here to teleport to our site on virtuALBA">
  Teleport Now
 </a>

<h3>NOTE: Tools are not quite available yet. Very very soon though!</h3>
</p>
<?php end_single_column(); ?>


<p>&nbsp;</p>


<?php start_single_column('Download quizHUD Software'); ?>
<p>
 Before you can use your own quizHUD, you will need to download and install the software on a webserver.
 You will need a webserver with PHP4 or higher and MySQL 4 or higher.
 (It <i>is</i> possible to install on your own desktop computer, but firewalls and network security will often prevent the quizHUD objects Second Life from being able to access it, so a proper webserver is recommended).
</p>

<p>
 Download packages will soon be hosted on our <b><a href="http://code.google.com/p/quizhud/downloads/list" title="Click here to visit the downloads section of our GoogleCode site">GoogleCode site</a></b>. Stay tuned!
</p>
<?php end_single_column(); ?>


<p>&nbsp;</p>
<p>&nbsp;</p>


<h1 style="text-align:center; margin-bottom:12px;">For Developers:</h1>

<?php start_single_column('Source Code Checkout'); ?>
<p>
 Since quizHUD is programmed in LSL and PHP, everything is distributed as source code anyway, so our regular download is even if you simply want to browse the source code.
 However, if you would like the obtain an SVN checkout of the source code, which can be easily updated anytime, then you can do so from our 
 <a href="http://code.google.com/p/quizhud/source/checkout" title="Click here to visit the GoogleCode site">GoogleCode repository</a>.
</p>

<p>
 If you would like to contribute to the project, then please <a href="contact.php" title="Click here to contact us">contact us</a>.
 Please be aware that this is a free and open source project, so we cannot offer payment to any developers, and we cannot offer training in how to program PHP or LSL.
</p>
<?php end_single_column(); ?>


<p>&nbsp;</p>


<?php
require_once('_page_footer.php');
?>
