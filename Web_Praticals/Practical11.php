<!--Write a PHP program to display today's date in DD-MM-YYYY format.-->

<?php
// Get today's date
$today = date("d-m-Y");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Today's Date</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #2e2e2e;
            color: #f0f0f0;
        }
        h2 {
            color: #0056b3;
        }
        hr {
            border: 1px solid #ccc;
        }
    </style>    
</head>
<body>
<h2>Today's Date</h2>
<hr>
<h3>Date in DD-MM-YYYY Format:</h3>
<p style="font-size:18px; font-weight:bold;">
    <?php echo $today; ?>   
</p>
</body>
</html>