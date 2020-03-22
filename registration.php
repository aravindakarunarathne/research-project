<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registrations</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="header">
            <h2>Register</h2>
        </div>

        <form action="registration.php" method="post">

            <div>
                <label for="username">Username:</label>
                <input type="text" name="username" placeholder="Enter your username" required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" placeholder="Enter your email" required>
            </div>

            <div>
                <label for="password">Password:</label>
                <input type="password" name="password_1" placeholder="Enter your password" required>
            </div>

            <div>
                <label>Confirm password:</label>
                <input type="password" name="password_2" placeholder="Type password again" required>
            </div>
            <button type="submit" name="reg_user">Submit</button>

<p>Already a user?<a href="login.php"><b> Log In</b></a></p>

        </form>
    </div>

</body>

</html>

<?php
/*username
email
password
confirm password */
    ?>
