<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>

<body>
    <?php
    $names = fix_name("john", "doe", "smith");
    echo "$names[0] $names[1] $names[2]";
    echo "<br>";
    function fix_name($name1, $name2, $name3) {
       $name1 = ucfirst(strtolower($name1));
       $name2 = ucfirst(strtolower($name2));
       $name3 = ucfirst(strtolower($name3));
       return array($name1, $name2, $name3);
    }
    ?>
</body>

</html>