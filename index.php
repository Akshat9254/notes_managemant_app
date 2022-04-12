<?php
    session_start();
    if(!isset($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] != true) {
        header('location: login.php');
    }
?>

<?php include 'includes/header.php'; ?>

<body>
    <?php include 'includes/navbar.php'; ?>

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
                    <button class="btn btn-primary">
                        <a href="upload.php">Upload Notes</a>
                    </button>
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
                    <button class="btn btn-warning">
                        <a href="download.php">Download Notes</a>
                    </button>
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
                        <a href="sgpa.php">Calculate SGPA</a>
                    </button>
                </div>
            </div>
        </div>

    </section>

    <?php include 'includes/footer.php'; ?>
</body>

</html>