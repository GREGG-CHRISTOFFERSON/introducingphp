<!-- This page dynamically displays a multiplication table -->
<?php $num_columns = 16; // number of columns in table ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Challenge: using loops</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Multiplication Table</h1>
<table>
    <tr>
        <th>&nbsp;</th>
        <?php
        // create the table column headers
        for ($i = 1; $i < $num_columns + 1; $i++) :
           echo "<th>$i</th>";
        endfor;
        ?>
    </tr>
        <?php
        // create the table rows
        for ($i = 1; $i < $num_columns + 1; $i++) :
            echo '<tr>' .
                    "<th>$i</th>";
            // create the table columns for each row        
            for ($j = 1; $j < $num_columns + 1; $j++) :
                echo '<td>' . $i * $j . '</td>';
            endfor;
            echo '</tr>';
        endfor;
        ?>
   </table>
</body>
</html>