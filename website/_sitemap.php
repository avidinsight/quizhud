<?php
// Dynamic sitemap page.
// Automatically adds pages in standard navigation menu.
// Additional pages can be added by calling "add_page()" with the relative URL from the site root.

@ini_set('display_errors', 0);
@include_once('config.php');
// Be sure the inclusion worked
if (!isset($CFG)) exit();

// Determine the siteroot WITHOUT the leading http
$siteroot = '';
global $siteroot;
$pos = strpos($CFG->wwwroot, '://');
if ($pos === false) $siteroot = $CFG->wwwroot;
else $siteroot = substr($CFG->wwwroot, $pos + 3);

// Outputs a sitemap entry for a page.
//  $path = relative path to the page to output
function add_page($path)
{
    global $siteroot;
    echo $siteroot.'/'.$path."\n";
}

// Go through each page in the navigation menu
if (is_array($CFG->navigation)) {
    foreach ($CFG->navigation as $nav) {
        add_page($nav);
    }
}

// Add any additional pages here.
// E.g.:
//  add_page("mypage.php");
?>