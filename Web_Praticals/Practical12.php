<!--Write a PHP program to check if a number is prime or not.-->

<?php
// Function to check if a number is prime
function isPrime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

// Get the number from user input or set a default value
$number = isset($_GET['number']) ? intval($_GET['number']) : 29;
$primeStatus = isPrime($number) ? "is a prime number." : "is not a prime number.";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Prime Number Checker</title>
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
<h2>Prime Number Checker</h2>
<hr>
<h3>Check if a Number is Prime:</h3>
<form method="GET" action="">
<p style="font-size:18px; font-weight:bold;">
    Enter a number<input type="number" name="number">
    <input type="submit" value="Check">
</p>
</form>
<p style="font-size:18px; font-weight:bold;">
    The number <?php echo $number; ?> <?php echo $primeStatus; ?>
</p>
</body>
</html>