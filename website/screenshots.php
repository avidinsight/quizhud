<?php
// quizHUD website "About" page

require_once('config.php');

$CFG->pagetitle = 'quizHUD :: Screenshots';
$CFG->currentpage = 'Screenshots';

require_once('_page_header.php');

?>


<?php start_single_column('Screenshots'); ?>
<p>
 Below is a collection of screenshots from various parts of the quizHUD,
 in-world and in the web-interface. Click each image to see it full-size.
</p>
<?php end_single_column(); ?>

<p>&nbsp;</p>

<div style="text-align:center;">
 <table border="0" style="margin-left:auto; margin-right:auto;">
  <tr>
   <td>
    <a href="screenshots/quizhud_screenshot_band.png" title="Click here for full-size">
     <img src="screenshots/tn_quizhud_screenshot_band.png" alt="Explore mode" />
    </a>
   </td>

   <td>
    <a href="screenshots/quizhud_interface_page_guitar.png" title="Click here for full-size">
     <img src="screenshots/tn_quizhud_interface_page_guitar.png" alt="Editing an Explore page" />
    </a>
   </td>
  </tr>

  <tr>
   <td style="padding:0px 12px;"><a href="screenshots/quizhud_screenshot_band.png" title="Click here for full-size">Browsing the band in 'Explore' mode</a></td>

   <td style="padding:0px 12px;"><a href="screenshots/quizhud_interface_page_guitar.png" title="Click here for full-size">Editing the 'Explore' mode page about the electric guitar</a></td>
  </tr>


  <tr><td style="padding-top:32px;" colspan="2">&nbsp;</td></tr>


  <tr>
   <td>
    <a href="screenshots/quizhud_screenshot_quiz_drumkit.png" title="Click here for full-size">
     <img src="screenshots/tn_quizhud_screenshot_quiz_drumkit.png" alt="Quiz mode" />
    </a>
   </td>

   <td>
    <a href="screenshots/quizhud_interface_quiz_drumkit.png" title="Click here for full-size">
     <img src="screenshots/tn_quizhud_interface_quiz_drumkit.png" alt="Editing a quiz question" />
    </a>
   </td>
  </tr>
  <tr>
   <td style="padding:0px 12px;"><a href="screenshots/quizhud_screenshot_quiz_drumkit.png" title="Click here for full-size">Attempting a quiz question</a></td>

   <td style="padding:0px 12px;"><a href="screenshots/quizhud_interface_quiz_drumkit.png" title="Click here for full-size">Editing a quiz question about a drumkit</a></td>
  </tr>
 </table>
</div>

<p>&nbsp;</p>


<?php
require_once('_page_footer.php');
?>
