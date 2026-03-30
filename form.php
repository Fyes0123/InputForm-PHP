<?php
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
    <h2>Data Anda</h2>

    First Name: <?php echo $firstName; ?><br>
    Last Name: <?php echo $lastName; ?><br>
    Phone Number: <?php echo $phone; ?><br>
    Address: <?php echo $address; ?><br>
<?php } ?>

</body>
</html>