<!DOCTYPE html>
<html>
<head>
    <title>Form Input</title>
</head>
<body>

<h2>Form Data</h2>

<form action="result.php" method="POST">

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

</body>
</html>