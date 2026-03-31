<?php
class User {
    public $firstName;
    public $lastName;
    public $phone;
    public $address;

    public function __construct($firstName, $lastName, $phone, $address) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->phone = $phone;
        $this->address = $address;
    }

    public function getData() {
        return "Hello my name is " . $this->firstName . " " . $this->lastName . "<br>
                My phone number is: " . $this->phone . "<br>
                And my address: " . $this->address;
    }
}

$user = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = new User(
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['phone'],
        $_POST['address']
    );
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form OOP</title>

    <style>
        body {
            font-family: Arial;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
        background-color: #f9f9f9;
        padding: 30px 40px;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
        text-align: center;
        width: 100%;
        max-width: 600px; 
        }

        input, textarea {
        width: 100%;        
        padding: 12px;
        margin-top: 5px;
        margin-bottom: 12px;
        }

        textarea {
            height: 100px;
        }

        input[type="submit"] {
            background-color: blue;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: darkblue;
        }

        button {
            background-color: red;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        button:hover {
            background-color: darkred;
        }
    </style>

</head>
<body>

<div class="container">

<h2>Form Data</h2>

<form method="POST">
    First Name:<br>
    <input type="text" name="first_name" required><br>

    Last Name:<br>
    <input type="text" name="last_name" required><br>

    Phone Number:<br>
    <input type="text" name="phone" required><br>

    Address:<br>
    <textarea name="address" required></textarea><br>

    <input type="submit" value="Submit">
</form>

<hr>

<?php
if ($user != null) {
    echo "<p>" . $user->getData() . "</p>";
?>
    <form method="GET">
        <button type="submit">Reset</button>
    </form>
<?php
}
?>

</div>

</body>
</html>