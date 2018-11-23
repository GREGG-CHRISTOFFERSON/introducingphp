<?php 
/* This program displays the copyright years.  It takes a 
 starting year as an argument.  If provided, it will display
 the start year to current year as yyyy-yy if the start year
 is less than the current year.  Otherwise, it will display 
 the current year only as yyyy. */ 
function gec_copyrightYears($startYr = '') {
    // if startYr is greater than current year, return current year
    if ($startYr >= date("Y")) {
        return ('<p>&copy ' . date("Y") . '</p>');
    }
    // get current year and format as 2 digits if start year provided
    if ($startYr) {
        $currentYr = date("y");
    }
    // otherwise, format as four digits and return
    else {
        return ('<p>&copy ' . date("Y") . '</p>');
    }
    // return start year as 4 digits - current year as 2 digits
    /* @var $currentYr type */
    return ('<p>&copy ' . $startYr . '-' . $currentYr . '</p>' );
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Copyright Challenge</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php echo gec_copyrightYears('2015'); ?> 
    </body>
</html>
