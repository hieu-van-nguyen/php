<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>

<body>
    <?php
    $user = new User("John Doe", "password123");
    print_r($user);
    echo "<br>";
    echo User::get_user();
    class User {
        public $name;
        public $password;

        public function __construct($name, $password) {
            $this->name = $name;
            $this->password = $password;
        }

        public function greet() {
            return "Hello, my name is " . $this->name . " and my password is " . $this->password . ".";
        }

        function save_user() {
            echo "User saved successfully!";
        }

        static function get_user() {
            return "User retrieved successfully!";
        }
    }
    ?>
</body>

</html>