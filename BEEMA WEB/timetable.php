<!DOCTYPE html>

<!-- Print multiplication Table.php -->

<html lang="en">

<head>

<meta charset="utf-8">

<title>multiplication table</title>

</head>

<body>

<?php

// Simple Computation

$size = 20;

echo '<marquee><pre>';

for ($row = 1; $row <= $size; ++$row) {

for ($col = 1; $col <= $size; ++$col) {

printf('%10d', $row * $col);

}

echo '<br>';

}


echo '</marquee></pre>'

?>

</body>

</html>