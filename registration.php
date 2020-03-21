<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registrations</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <h2>Register</h2>
        </div>

        <form action="registration.php" method="post">

            <div>
                <label>username</label>
                <input type="text" name="username" placeholder="Enter your username">
            </div>
            <div>
                <label>email</label>
                <input type="text" name="email" placeholder="Enter your email">
            </div>

            <div>
                <label>password</label>
                <input type="password" name="password" placeholder="Enter your password">
            </div>

            <div>
                <label>confirm password</label>
                <input type="password" name="confirm password" placeholder="Type password again">
            </div>



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
