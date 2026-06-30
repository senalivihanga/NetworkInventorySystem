<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Network Inventory System</title>

<link rel="stylesheet" href="css/style.css">

<script src="js/validation.js"></script>

</head>

<body>

<div class="login-container">

    <h1>Network Device Inventory System</h1>

    <form action="authenticate.php"
          method="POST"
          onsubmit="return validateForm()">

        <label>Username</label>

        <input
        type="text"
        id="username"
        name="username"
        placeholder="Enter Username">

        <label>Password</label>

        <input
        type="password"
        id="password"
        name="password"
        placeholder="Enter Password">

        <button type="submit">

            Login

        </button>

    </form>

</div>

</body>
</html>