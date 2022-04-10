<?php
    include 'connection.php';

    if(isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // $sql_query = "SELECT * FROM `users` WHERE email='$email' AND password='$password'";
        $sql_query = "SELECT * FROM `users` WHERE email='$email'";
        $result = mysqli_query($conn, $sql_query);
        // if(!$result) {
        //     echo "Error";
        // }
        if(mysqli_num_rows($result) == 1) {
            while($row = mysqli_fetch_assoc($result)) {
                if(password_verify($password, $row['password'])) {
                    session_start();
                    $_SESSION['isLoggedIn'] = true;
                    $_SESSION['username'] = $row['name'];
                    header("location: index.php");
                } else {
                    echo "<script>alert('Invalid Credentails')</script>";
                }
            }
        } else {
            echo "<script>alert('Invalid Credentails')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
    <form class="loginWrapper" method="post">
        <h2 class="loginHeading">Login</h2>
        <div class="loginInputWrapper">
            <input type="email" placeholder="Email" name="email" />
            <input type="password" placeholder="Password" name="password" />
        </div>
        <div class="loginActionWrapper">
            <button type="submit" name="login">Login</button>
            <p>Don't have an account?  <a href="signup.php">Sign Up</a></p>
        </div>
    </form>
</body>
</html>