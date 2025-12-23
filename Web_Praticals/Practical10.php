<!--Write a PHP program to keep track of the number of visitors visiting the webpage and to display this count of visitors, with proper headings.-->

<?php
// File to store visitor count
$filename = "counter.txt";

// If file does not exist, create it and set count to 0
if (!file_exists($filename)) {
    file_put_contents($filename, 0);
}

// Read the current count
$count = file_get_contents($filename);

// Increment the count
$count++;

// Save the updated count back to file
file_put_contents($filename, $count);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Visitor Counter</title>
</head>

<body>

<h2>Website Visitor Counter</h2>
<hr>

<h3>Total Number of Visitors:</h3>
<p style="font-size:18px; font-weight:bold;">
    <?php echo $count; ?>
</p>

</body>
</html>