<?php
    session_start();
    if(!isset($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] != true) {
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="home.css">
    <title>Notes Management App</title>
</head>

<body>
    <nav class="navbar d-flex justify-space-between px-4">
        <div class="left d-flex align-items-center justify-content-center flex-5 flex-gap-2">
            <img src="./assets/logo.png" alt="logo" />
            <a href="#">
                <h1 class="fs-3">Notes Management App</h1>
            </a>
        </div>

        <div class="middle d-flex align-items-center justify-content-center flex-6 flex-gap-4">
            <a href="#" class="link fs-5">Home</a>
            <a href="#" class="link fs-5">About</a>
            <a href="#" class="link fs-5">SGPA Calculator</a>
            <a href="#" class="link fs-5">Upload/Download Notes</a>
        </div>

        <div class="right flex-1 d-flex align-items-center justify-content-center">
            <a href="logout.php">Logout</a>
        </div>
    </nav>

    <section class="main-section d-flex">
        <div class="main-section-left flex-6 d-flex align-items-center justify-content-center">
            <h1 class="fs-1 text-center">Managing Notes made Simpler...</h1>
        </div>

        <div class="main-section-right flex-6 d-flex align-items-center justify-content-center">
            <img src="./assets/welcome.svg" alt="welcome" class="welcome-image">
        </div>
    </section>

    <section class="card-section">
        <h2 class="text-center fs-2">Our Services</h2>
        <div class="container d-flex align-items-center justify-content-space-between py-4">
            <div class="card p-3">
                <img src="./assets/calculator.svg" alt="calculator" class="card-img">
                <div class="card-body">
                    <h4 class="card-title fs-5">Upload Notes</h4>
                    <div class="card-text">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur, dolores
                    </div>
                </div>
                <div class="card-actions">
                    <button class="btn btn-primary">Calculate SGPA</button>
                </div>
            </div>
            <div class="card p-3">
                <img src="./assets/calculator.svg" alt="calculator" class="card-img">
                <div class="card-body">
                    <h4 class="card-title fs-5">Download Notes</h4>
                    <div class="card-text">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur, dolores
                    </div>
                </div>
                <div class="card-actions">
                    <button class="btn btn-warning">Calculate SGPA</button>
                </div>
            </div>
            <div class="card p-3">
                <img src="./assets/calculator.svg" alt="calculator" class="card-img">
                <div class="card-body">
                    <h4 class="card-title fs-5">SGPA Calculator</h4>
                    <div class="card-text">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur, dolores
                    </div>
                </div>
                <div class="card-actions">
                    <button class="btn btn-danger">
                        <a href="sgpa.html">Calculate SGPA</a>
                    </button>
                </div>
            </div>
        </div>

    </section>
</body>

</html>