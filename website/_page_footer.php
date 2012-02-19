<?php
print_sub_menu($CFG->footermenu);
?>
<div id="footer">
	<p>
    
    Copyright &copy;
    <?php
        // Output the website copyright info.
        echo $CFG->copyrightstartyear;
        // Output the current year too, if later than start year
        if (empty($CFG->copyrightendyear)) $CFG->copyrightendyear = (int)date('Y');
        if ($CFG->copyrightendyear > $CFG->copyrightstartyear) echo '-',$CFG->copyrightendyear;
        echo ' ',$CFG->copyrightattribution;
    ?>
    <br/><br/>
    
    Design by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>  
    &nbsp;&bull;&nbsp; Icons by <a href="http://www.famfamfam.com/">FAMFAMFAM</a>
    <br/>
    
    <a href="http://www.secondlife.com/" title="Click here to visit the official Second Life website">Second Life&reg;</a> is a registered trademark of Linden Labs&reg; (all rights reserved)
    
    </p>
    
</div>
</body>
</html>