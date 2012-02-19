<?php
// quizHUD website "About" page

require_once('config.php');

$CFG->pagetitle = 'quizHUD :: Documentation';
$CFG->currentpage = 'Documentation';

require_once('_page_header.php');

?>


<?php start_single_column('quizHUD Documentation'); ?>
<p>
As with many open source projects, documentation tends to be the last thing to get done... or indeed, it never gets done.
There's a readme file with the software download though. Hopefully that's enough to get you started!
</p>
<?php end_single_column(); ?>


<p>&nbsp;</p>


<?php
require_once('_page_footer.php');
?>
