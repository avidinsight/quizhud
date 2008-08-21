<?php
// quizHUD website "About" page

require_once('config.php');

$CFG->pagetitle = 'quizHUD :: Contact Us';
$CFG->currentpage = 'Contact Us';

require_once('_page_header.php');

?>


<?php start_single_column('Contact Us'); ?>
<p>
 If you have any questions or problems regarding quizHUD, then please feel free to contact us.
 The current maintainer of the project is Peter R. Bloomfield, whose email address is listed below.
 (It is shown as an image. If you cannot see the image, then you can contact Peter through his personal website, linked in the page footer).
</p>

<p style="text-align:center;">
 <br/>
 <img src="images/email_peter.jpg" width="373" height="43" alt="peter's email address" />
</p>
<?php end_single_column(); ?>


<p>&nbsp;</p>


<?php
require_once('_page_footer.php');
?>
