<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        <?php include 'css/display.css'; ?>
    </style>
    <title>Insert Users</title>
</head>
<body>

    <!-- Main Container -->
    <div class="main-container container py-5 px-3">
        <h1 class="bg-warning text-center pt-2 pb-3 px-2 mb-5">All Student's Info</h1>

        <table class="bg-dark text-light mx-auto">

            <tr>
                <th class="bg-warning text-dark">ID</th>
                <th class="bg-warning text-dark">Fullname</th>
                <th class="bg-warning text-dark">Semester</th>
            </tr>

            <?php
                include 'connection.php';

                $sql = "SELECT * FROM students";
                $result = $conn->query($sql);

                if ($result->num_rows == 0) {
                    echo '<h5 class="bg-danger text-light text-center p-2 mt-5">No Data Found</h5>';
                } else {
                    while($row = $result->fetch_assoc()) {
            ?>

            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['fullname'] ?></td>
                <td><?php echo $row['semester'] ?></td>
            </tr>

            <?php
                    }
                }

                $conn->close();
            ?>        
        </table>

        <a class="btn-link" href="<?php echo $site; ?>/index.php">
            <button type="button" class="btn btn-danger">Insert New Student</button>
        </a>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>