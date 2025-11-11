<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Times Table Generator</title>
</head>
<body>

<h1>Times Table Generator</h1>

<form method="get">
    <label for="n">Enter a number:</label>
    <input type="number" name="n" id="n" required>
    <button type="submit">Generate</button>
</form>

<hr>

<?php
if (isset($_GET['n'])) {
    $n = (int)$_GET['n'];

    echo "<h2>Times Table for $n (1 to 15)</h2>";

    for ($i = 1; $i <= 15; $i++) {
        $result = $n * $i;
        echo "$i x $n = $result <br>";
    }
}
?>

</body>
</html>
