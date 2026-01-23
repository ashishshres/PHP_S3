<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>document</title>
</head>

<body>
    <?php
    // open file for reading
    $file = fopen("users.csv", "r");

    // check if the file was opened successfully
    if ($file) {
        // start the table with a border
        echo "<table border='1'>";

        // read and display the heading row
        if ($data = fgetcsv($file, 1000, ",")) {
            echo "<tr>";
            // loop through each header cell and display it
            foreach ($data as $header) {
                echo "<th>";
                echo $header;
                echo "</th>";
            }
            echo "</tr>";
        }

        // read and display the remaining data rows
        while ($data = fgetcsv($file, 1000, ",")) {
            echo "<tr>";
            // loop through each data cell and display it
            foreach ($data as $desc) {
                echo "<td>";
                echo $desc;
                echo "</td>";
            }
            echo "</tr>";
        }
        // end the table
        echo "</table>";

        // close the file after reading
        fclose($file);
    } else {
        // display an error message if the file could not be opened
        echo "error opening csv file";
    }
    ?>
</body>

</html>