<?php
    include 'includes/connection.php';

    if(isset($_POST['signup'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        if($password == $confirm_password) {
            $sql_exist_query = "SELECT * FROM users WHERE email='$email'";
            $result = mysqli_query($conn, $sql_exist_query);
            if(mysqli_num_rows($result) > 0) {
                echo "<script>alert('email already exists')</script>";
            } else {
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                $sql_query = "INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES (NULL, '$name', '$email', '$hashed_password')";
        
                if(mysqli_query($conn, $sql_query) == true) {
                    echo "<script>alert('User Registered Successfully!')</script>";
                } else {
                    echo "<script>alert('Error in registering the user')</script>";
                }
            }

        } else {
            echo "<script>alert('Password and Confirm Password does not match')</script>";
        }
    }
?>

<?php include 'includes/header.php'; ?>
<body>
    <form class="loginWrapper" method="post">
        <h2 class="loginHeading">Sign Up</h2>
        <div class="loginInputWrapper">
            <input type="text" placeholder="Name" name="name" />
            <input type="email" placeholder="Email" name="email" />
            <input type="password" placeholder="Password" name="password" />
            <input type="password" placeholder="Confirm Password" name="confirm_password" />
        </div>
        <div class="loginActionWrapper">
            <button type="submit" name="signup">Sign Up</button>
            <p>Already have an account?  <a href="login.php">Log In</a></p>
        </div>
    </form>
</body>
</html>