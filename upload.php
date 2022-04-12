<?php
    include 'includes/connection.php';
    session_start();

    if(isset($_POST['upload'])) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $department = $_POST['department'];
        $username = $_SESSION['username'];

        $file_name = $_FILES['file']['name'];
        $ext = pathinfo($file_name, PATHINFO_EXTENSION);

        $file_temp = $_FILES['file']['tmp_name'];
        $file_size = $_FILES['file']['size'];
        $new_file_name = date('dmy') . time() . $file_name;


        if($file_size > 10485760) {
            echo "<script>alert('File too large to upload. Maximum allowed size is 10MB')</script>";
        } else {
            $sql_query = "INSERT INTO `uploads` (`id`, `upload_name`, `title`, `description`, `type`, `uploaded_by`, `department`, `date`) VALUES (NULL, '$new_file_name', '$title', '$description', '$ext', '$username', '$department', current_timestamp())";
            if(mysqli_query($conn, $sql_query)) {
                move_uploaded_file($file_temp, 'uploads/' . $new_file_name);
                echo "<script>alert('File uploaded')</script>";
            } else {
                echo "<script>console.log('Something went wrong')</script>";
            }
        }
    }
?> 

<?php include 'includes/header.php'; ?>
<body>
    <?php include 'includes/navbar.php'; ?>
    <div class="d-flex">
        <?php include 'includes/sidebar.php'; ?>

        <form class="container d-flex-column flex-3" method="post" enctype="multipart/form-data">
            <h1 class="mt-4 text-center fs-1">Upload Document</h1>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control" required />
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" name="description" id="description" class="form-control" required />
            </div>
            <div class="mb-3">
                <label for="department" class="form-label">Description</label>
                <select name="department" id="department" class="form-control" required>
                    <option value="Computer Science & Engineering">Computer Science & Engineering</option>
                    <option value="Information Science & Engineering">Information Science & Engineering</option>
                    <option value="Electronics and Communication Engineering">Electronics and Communication Engineering</option>
                    <option value="Electrical and Electronics Engineering">Electrical and Electronics Engineering</option>
                    <option value="Electronics and Telecommunication Engineering">Electronics and Telecommunication Engineering</option>
                    <option value="Mechanical Engineering">Mechanical Engineering</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="file">
                    Select File 
                    <span style="color:#dc3545;">(allowed file type: 'pdf','doc','ppt','txt','zip' | allowed maximum size: 10 mb )</span>
                </label><br>
                <input type="file" id="file" name="file" required /> 
            </div>
    
            <button type="submit" class="btn btn-primary" name="upload">Upload</button>
    
        </form>
    </div>
</body>
</html>
