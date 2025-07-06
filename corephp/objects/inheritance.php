<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>

<body>
    <?php
    $sub = new Subscriber();

    $sub->name = "John Doe";
    $sub->email = "john@example.com";
    $sub->phone = "123-456-7890";
    $sub->password = "securepassword";

    $sub->display();

    class ParentClass {
        public $name;
        public $password;

        function save_user() {
            echo "User saved: " . $this->name;
        }
    }

    class Subscriber extends ParentClass {
        public $phone, $email;

        function display() {
            echo "Name: $this->name <br>";
            echo "Password: $this->password <br>";
            echo "Email: $this->email <br>";
            echo "Phone: $this->phone <br>";
        }
    }    
    ?>
</body>

</html>