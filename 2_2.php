<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 2.2</title>
</head>
<body>
    <h1>Compute the volume of a cylinder</h1>
    <p>Write a program that reads in the radius
    and length of a cylinder and computes the area and volume</p>

    <form method='post' >
        <label>Enter the radius and length of a cylinder:</label><br />
        <input name='input_radius_string'><br />
        <label>Enter the length of a cylinder:</label><br />
        <input name='input_length_string'><br />
    </form>

    <?php
        $radius = $_POST['input_radius_string'];
        $length = $_POST['input_length_string'];
        $area = $radius ** 2 * M_PI;
        $volume = $area * $length;

        echo "The area is $area";
        echo "The volume is $volume";
    ?>


</body>
</html>