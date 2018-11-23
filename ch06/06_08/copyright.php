<?php function gec_copyrightYears($startYr = '') {
    // if startYr is greater than current year, return current year
    if ($startYr >= date("Y")) {
        return ('<p>&copy ' . date("Y") . '</p>');
    }
    // check if a start year was provided and save
    // get current year and format as 2 digits if start year
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
        <?php echo gec_copyrightYears('2017'); ?> 
    </body>
</html>
