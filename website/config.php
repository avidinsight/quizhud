<?php
// quizHUD website configuration script

//ini_set('display_errors', '1');
//error_reporting(2047);

unset($CFG);
$CFG = new stdClass();


// Main name and subtitle of the website (displayed in the heading of all pages)
$CFG->sitename = 'quizHUD';
$CFG->sitesubtitle = 'Educational tool for Second Life &reg;';

// Default title for each page (appears in browser window header).
// Should normally be overridden by individual pages.
$CFG->pagetitle = 'quizHUD';
// Default description and keyword meta data
$CFG->pagedescription = 'The quizHUD is a free, open source, educational tool for Second Life, which is integrated with an external website to help you deliver context-sensitive educational material, and to administer quizzes, and surveys.';
$CFG->pagekeywords = 'quizhud, quiz, hud, second life, second, life, sl, educational, heads up display, hoap, html on a prim';


// Paths to the website: browse and disk paths
$CFG->wwwroot = 'http://quizhud.avid-insight.co.uk';
$CFG->dirroot = '/var/www/vhosts/avid-insight.co.uk/subdomains/quizhud/httpdocs';


// Relative path to the stylesheet documents (numeric array)
// Note that ALL of these are included!
$CFG->styles[] = 'default.css';


// Main navigation pages
// (each key is the name in the menu, and each value is the relative path)
$CFG->navigation['Home'] = 'index.php';
$CFG->navigation['About'] = 'about.php';
$CFG->navigation['Demo Videos'] = 'demo.php';
$CFG->navigation['Documentation'] = 'docs.php';
$CFG->navigation['Get quizHUD'] = 'get.php';
$CFG->navigation['Contact Us'] = 'contact.php';

// Identifies the 'current' page by name (key into the navigation array above).
// This is a default value, and should be customized by individual pages.
$CFG->currentpage = 'Home';


// A menu structure which will be printed in the footer.
// Should be an associative array.
// Each key is the name of a menu, and each value is a numeric array of entries.
// This can be overridden by individual pages.
$CFG->footermenu = array();


// Copyright data to be displayed in the footer
$CFG->copyrightstartyear = 2008; // First year of copyright
$CFG->copyrightattribution = '<a href="http://peter.avid-insight.co.uk/" title="Click here to visit the webmaster\'s website.">Peter R. Bloomfield</a>';



// Include our library functionality
require_once($CFG->dirroot.'/lib.php');


?>
