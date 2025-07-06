<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>

<body>
    <?php
    Translate::lookup();
    class Translate {
        const ENGLISH = 0;
        const SPANISH = 1;

        static function lookup() {
            echo self::SPANISH;
        }
    }
    
    ?>
</body>

</html>