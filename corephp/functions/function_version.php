<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>

<body>
    <?php
    if (function_exists('array_combine')) {
        echo "The function 'array_combine' is available in this PHP version.";
    } else {
        echo "The function 'array_combine' is not available in this PHP version.";
    }
    ?>
</body>

</html>