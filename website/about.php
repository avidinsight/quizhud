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
The quizHUD began life in early 2008, as a demonstration of how Second Life's HTML-on-a-prim ('HOAP') capabilities
could be controlled to provide a unique experience for each user.
This was developed further to add a quiz element, and finally a full integration with separate website software was created,
allowing the content and quizzes to be adminsitered remotely.
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
<p>
The following individuals have contributed to the development of quizHUD:
</p>
<ul>
 <li>
  <a href="http://peter.avid-insight.co.uk" title="Click here to visit Peter's website">Peter R. Bloomfield</a>
  <i>(SL: <a href="http://pedro.avid-insight.co.uk" title="Click here to visit Pedro's website">Pedro McMillan</a>)</i>
 </li>
 
 <li>Clement Ramel <i>(SL: Pidtwicky Acker)</i></li>
 
 <li>Daniel Livingstone <i>(SL: Buddy Sprocket)</i></li>
 
</ul>
<?php start_second_column("Supported by..."); ?>
<p>
We wish to thank the following organisations for their support:
</p>
<ul>
 <li>
  <a href="http://www.uws.ac.uk" title="Click here to visit the University's website">
   University of the West of Scotland
  </a>
 </li>
 
 <li>
  <a href="http://www.eduserv.org.uk" title="Click here to visit Eduserv's website">
   Eduserv
  </a>
 </li>
 
 <li>
  <a href="http://www.sloodle.org" title="Click here to visit the Sloodle project website">
   Sloodle
  </a>
 </li>
 
 <li>
  <a href="http://www.virtualba.co.uk" title="Click here to visit virtuALBA's website">
   virtuALBA
  </a>
 </li>
</ul>
<?php end_two_columns(); ?>




<p>&nbsp;</p>


<?php
require_once('_page_footer.php');
?>