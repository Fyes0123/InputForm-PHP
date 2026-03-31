<?php
$firstName = "";
$lastName = "";
$phone = "";
$address = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Input</title>

    <style>
        body {
            font-family: Arial;
            padding: 20px;
        }

        input, textarea {
            width: 300px;       /* lebar */
            padding: 10px;      /* tinggi */
            margin-top: 5px;
            margin-bottom: 10px;
        }

        textarea {
            height: 100px;      /* tinggi khusus alamat */
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
    </style>

</head>

<body>

<h2>Form Data</h2>

<form method="POST">

    First Name:<br>
    <input type="text" name="first_name" required><br><br>

    Last Name:<br>
    <input type="text" name="last_name" required><br><br>

    Phone Number:<br>
    <input type="text" name="phone" required><br><br>

    Address:<br>
    <textarea name="address" required></textarea><br><br>

    <input type="submit" value="Submit">

</form>

<hr>

<?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
    Hello my name is <?php echo $firstName . " " . $lastName; ?><br>
    My phone number is: <?php echo $phone; ?><br>
    And my address: <?php echo $address; ?>
<?php } ?>

</body>
</html>