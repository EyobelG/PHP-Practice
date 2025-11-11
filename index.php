<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Times Table Generator</title>
</head>
<body>
    <?php
    // 1. Get a number from the query string with a key of "n".
    // We check if 'n' is set to prevent an undefined index notice.
    if (isset($_GET['n'])) {
        // We use (int) to ensure the value is treated as a number for calculation.
        $n = (int)$_GET['n'];
        
        echo "<h1>Times Table for $n (1 to 15)</h1>";
        
        // 2. Create a times table for n from 1 up to 15.
        // The for loop handles the multiplication from i=1 up to i=15.
        for ($i = 1; $i <= 15; $i++) {
            $result = $n * $i;
            
            // Output the result in the specified format: 1 x 3 = 3
            echo "$i x $n = $result <br>";
        }
    } else {
        // Display a message if 'n' is missing, guiding the user on how to use the script.
        echo "<h1>Error</h1>";
        echo "<p>Please provide a number for 'n' in the URL query string.</p>";
        echo "<p>Example: <strong>times.php?n=3</strong></p>";
    }
    ?>
</body>
</html>