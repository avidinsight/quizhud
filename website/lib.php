<?php
// Library file for quizHUD website
// (provides various automated functionality)
// Does not need to be included directly - done automatically by config script.


///// SINGLE COLUMN DATA /////
// Usage:
//  1. Call "start_single_column(..)"
//  2. Output your content
//  3. Call "end_single_column(..)"


// Start a new single-column content box.
//  $title = the title to display at the top of the box
//  $id = an ID tag for the box (optional)
//  $style = additional stylesheet information (optional)
function start_single_column($title, $id=null, $style=null)
{
    // Start the box
    echo '<div class="wide-post"';
    if (!empty($id)) echo " id=\"{$id}\" ";
    if (!empty($style)) echo " style=\"{$style}\" ";
    echo ">\n";
    // Display the title
    echo "<h1 class=\"title\">{$title}</h1>\n";
    // Start the entry itself
    echo '<div class="entry">';
}

// End a single-column content box.
//  $date = the date of posting (optional)
//  $author = the author of the item (optional)
function end_single_column($date='', $author='')
{
    // Append extra info if provided
    if (!empty($date) && !empty($author)) {
        echo '<p>&nbsp;</p><p class="links">';
        if (!empty($date)) echo "<span class=\"date\" title=\"Date on which this information was posted\">{$date}</span>&nbsp;&nbsp;&nbsp;&nbsp;";
        if (!empty($author)) echo "<span class=\"author\" title=\"Author of this information\">{$author}</span>&nbsp;&nbsp;&nbsp;&nbsp;";
        echo "</p>\n";
    }
    
    // Close the entry and the box
    echo "</div>\n";
    echo "<div class=\"bottom\"></div>\n";
    echo "</div>\n";
}



///// TWO COLUMN DATA /////
// Usage:
//  1. Call "start_two_columns()"
//  2. Output first column content
//  3. Call "start_second_column()"
//  4. Output second column content
//  5. Call "end_two_columns()"


// Start a two-column content box
//  $title = the title for the first column
function start_two_columns($title)
{
    // Start the two column layout
    echo "<div class=\"two-columns\">\n";
    // Start the first column, and add its title
    echo " <div class=\"column-one\">\n";
    echo "  <h2 class=\"title\">{$title}</h2>\n";
    // Start the entry
    echo "  <div class=\"entry\">\n";
}

// Start the second column
//  $title = the title for the second column
function start_second_column($title)
{
    // Close the first column entry and column box
    echo "  </div>\n";
    echo " </div>\n";
    // Start the second column and add its title
    echo " <div class=\"column-two\">\n";
    echo "  <h2 class=\"title\">{$title}</h2>\n";
    // Start the entry
    echo "  <div class=\"entry\">\n";
}

// End a two-column layout
function end_two_columns()
{
    // End the second column entry and column box
    echo "  </div>\n";
    echo " </div>\n";
    // End the two columns layout box
    echo "</div>\n";
}


///// SUB MENU /////

// Adds a series of vertical menus at the bottom of the page.
// This should only be called ONCE per page.
// Parameter $menus should be an associative array.
// Each key should be the title of a menu,
//  and each value should be a numeric array of entries.
function print_sub_menu($menus)
{
    // Start the submenu box and list
    echo "<div id=\"submenu\">\n";
    if (is_array($menus) && count($menus) > 0) {
        echo "<ul>";
    
        // Go through each menu
        foreach ($menus as $menutitle => $menuentries) {
            // Start this menu
            echo "<li><h2>{$menutitle}</h2><ul>\n";
        
            // Go through each menu entry
            foreach ($menuentries as $entry) {
                echo "<li>{$entry}</li>\n";
            }
        
            // End this menu
            echo "</ul></li>\n";
        }
        echo "</ul>";
    }
    
    // End the submenu box/list
    echo "<div style=\"clear: both;\">&nbsp;</div></div>\n";
}



?>
