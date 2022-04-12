<?php
    include 'includes/connection.php';
    session_start();
?> 

<?php include 'includes/header.php'; ?>
<body>
    <?php include 'includes/navbar.php'; ?>
    <div class="d-flex">
        <?php include 'includes/sidebar.php'; ?>

        <div class="container d-flex-column flex-3">
            <h1 class="mt-4 text-center fs-1">Download Notes</h1>
            <table class="mt-4">
                <thead>
                <tr>
                    <th class="fs-5">Title</th>
                    <th class="fs-5">Description</th>
                    <th class="fs-5">Department</th>
                    <th class="fs-5">Type</th>
                    <th class="fs-5">Uploaded By</th>
                    <th class="fs-5"></th>
                </tr>
                </thead>

                <tbody class="text-center">

                <?php
                    $sql_query = "SELECT * FROM uploads";
                    $result = mysqli_query($conn, $sql_query);

                    if($result) {
                        while($row = mysqli_fetch_assoc($result)) {
                            $title = $row['title'];
                            $description = $row['description'];
                            $department = $row['department'];
                            $type = $row['type'];
                            $uploaded_by = $row['uploaded_by'];
                            $upload_name = $row['upload_name'];
                            
                            echo "<tr>";
                            echo "<td>$title</td>";
                            echo "<td>$description</td>";
                            echo "<td>$department</td>";
                            echo "<td>$type</td>";
                            echo "<td>$uploaded_by</td>";
                            echo "<td><a href='uploads/$upload_name' target='_blank'>View </a></td>";
                        }
                    }
                ?>

                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
