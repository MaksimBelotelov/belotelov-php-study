<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 2.1</title>
</head>
<body>
    <h1>Convert Celsius to Fahrenheit</h1>
    
    <p> Write a program that reads a Celsius degree in a
        double value from the console, then converts it to Fahrenheit, and displays the
        result.</p>

    <form method='post'>
        <label>Enter a degree in Celsius:</label><br />
        <input type='text' name='input_line' /><br />
        <input type='submit' value='Convert' />
    </form>
    <br />
    
    <?php
        if (!empty($_POST)) {
            $celsium = $_POST['input_line'];
            $farenheit = (9 / 5) * $celsium + 32;

            echo "$celsium Celsius is $farenheit Fahrenheit";
        }
    ?>
    
</body>
</html>

