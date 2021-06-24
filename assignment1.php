<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>assignment1</title>
</head>
<body>
    <h2>Array Sum Function</h2>
    <?php
        $nums = array(2, 15, 34, 78);
        var_dump ($nums);
        $numSum = array_sum ($nums);
        echo "<br>";
        echo "The sum of the numbers is " . $numSum;

    ?>
</body>
</html>