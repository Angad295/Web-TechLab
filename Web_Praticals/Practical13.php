<!--Create a HTML page that contains a textbox, submit/reset button. Write a PHP program to display this information and also store it into a text file.-->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input from the form
    $userInput = htmlspecialchars($_POST['userInput']);

    // Store the input into a text file
    $file = 'user_input.txt';
    file_put_contents($file, $userInput . PHP_EOL, FILE_APPEND);
}
?>
<!DOCTYPE html>
<html>
<head>  
    <title>User Input Display</title>
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
<h2>User Input Form</h2>
<hr>
<form method="POST" action="">
    <label for="userInput">Enter some information:</label><br><br>
    <input type="text" id="userInput" name="userInput" required>
    <br><br>
    <input type="submit" value="Submit">
    <input type="reset" value="Reset">
</form>
<?php
if (isset($userInput)) {
    echo "<h3>You entered:</h3>";
    echo "<p style='font-size:18px; font-weight:bold;'>$userInput</p>";
}
?>
</body>
</html>