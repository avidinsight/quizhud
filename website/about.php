<?php
// quizHUD website "About" page

require_once('config.php');

$CFG->pagetitle = 'quizHUD :: About';
$CFG->currentpage = 'About';

require_once('_page_header.php');

?>


<?php start_single_column('About quizHUD'); ?>
<p>
<img src="images/manager_screenshot_1.jpg" style="float:right; margin-left:12px; border:solid 1px black;" alt="quizHUD screenshot" title="A screenshot showing the quizHUD 'Manager' object in Second Life" />
The quizHUD began life in early 2008, as a demonstration how Second Life's HTML-on-a-prim ('HOAP') capabilities
could be controlled to provide a unique experience for each user.
This was developed further to add a quiz element, and finally a full integration with separate website software was created,
allowing of the content and quizzes to adminsitered remotely.
The core features of quizHUD were completed in August 2008.
</p>

<p>
Development has taken place at the
<a href="http://www.uws.ac.uk/" title="Click here to visit the university's official website.">University of the West of Scotland</a>.
</p>

<p style="font-weight:bold;">
The source code for quizHUD is made freely available under the
<a href="http://www.gnu.org/copyleft/gpl.html" title="Click here to read more about our source code license">GNU General Public License</a>.
</p>
<?php end_single_column(); ?>

<p>&nbsp;</p>

<?php start_two_columns("Developers"); ?>
<ul>
 <li>Peter R. Bloomfield <i>(SL: Pedro McMillan)</i></li>
 <li>Clement Ramel <i>(SL: Pidtwicky Acker)</i></li>
 <li>Daniel Livingstone <i>(SL: Buddy Sprocket)</i></li>
</ul>
<?php start_second_column("Supported by..."); ?>
<p>
We wish to thank the following organisations for their support:
</p>
<ul>
 <li>University of the West of Scotland</li>
 <li>Eduserv</li>
 <li>Sloodle</li>
</ul>
<?php end_two_columns(); ?>




<p>&nbsp;</p>


<?php
require_once('_page_footer.php');
?>