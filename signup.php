<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
include 'header.php'; 
?>

<form class="form" action="control_signup.php" method="post">
<label for="username">Username: </label>
<input type="text" id="username" name="username"/><br>

<label for="email">email: </label>
<input type="email" id="email" name="email"/><br>

<label for="password">Password: </label>
<input type="password" id="passwords" name="passwords"/><br>

<label for="confirm_password">Verify password: </label>
<input type="password" id="confirm_passwords" name="confirm_passwords"/><br>

<label for="account_type">Account type:</label>
<select id="account_type" name="account_type" class="account_type">
    <option value="Buyer">Buyer</option>
    <option value="Seller">Seller</option>
</select>
<input type="submit" value="signup"  class="submit-btn"/>
</form>

</body>
</html>