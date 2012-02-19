<?php
// quizHUD website "About" page

require_once('config.php');

$CFG->pagetitle = 'quizHUD :: Contact Us';
$CFG->currentpage = 'Contact Us';

require_once('_page_header.php');

?>


<?php start_single_column('Contact Us'); ?>
<p>
 I'm sorry we cannot respond to any requests for support, bug-fixes, or further development of the quizHUD project.
</p>
<?php end_single_column(); ?>


<p>&nbsp;</p>


<?php
require_once('_page_footer.php');
?>
