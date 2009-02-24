<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Original design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Radiance
Description: Fixed-width design for blogs and small websites.
Version    : 1.0
Released   : 20071007

Customized and generally butchered by Peter R. Bloomfield for the quizHUD project! :-)

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<title><?php echo $CFG->pagetitle; ?></title>

<meta name="keywords" content="<?php echo $CFG->pagekeywords; ?>" />
<meta name="description" content="<?php echo $CFG->pagedescription; ?>" />
<link rel="icon" type="image/png" href="<?php echo $CFG->wwwroot; ?>/favicon.png"/>

<?php
if (is_array($CFG->styles)) {
    foreach ($CFG->styles as $stylesheet) {
        echo "<link href=\"{$CFG->wwwroot}/{$stylesheet}\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />";
    }
}
?>
</head>

<body>
<!-- start header -->
<div id="logo">
	<h1><a href="<?php echo $CFG->wwwroot; ?>" title="Click here to return to the site homepage"><?php echo $CFG->sitename; ?></a></h1>
	<p><?php echo $CFG->sitesubtitle; ?></p>
</div>
<div id="menu">
	<ul>
    <?php
        // Go through each navigation page in our configuration
        foreach ($CFG->navigation as $navname => $navpage) {
            // Set the class of the item, depending on whether or not it is current
            if ($navname == $CFG->currentpage) echo '<li class="current_page_item">';
            else echo '<li>';
            // Output the rest of the item
            $link = '';
            if (strpos($navpage, 'http') === 0) $link = $navpage;
            else $link = $CFG->wwwroot.'/'.$navpage;
            echo "<a href=\"{$link}\" title=\"Click here to visit the {$navname} page\">{$navname}</a></li>\n";
        }
    ?>
	</ul>
</div>
<hr />
<!-- end header -->
