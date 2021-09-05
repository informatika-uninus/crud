<?php
   include 'connection.php';

   if(isset($_POST['save'])) {
        $fullname = $_POST['fullname'];
        $id = $_POST['id'];
        $semester = $_POST['semester'];

        $sql = "INSERT INTO students(id, fullname, semester)
                VALUES('$id', '$fullname', '$semester')";

        if (!($conn->query($sql) === TRUE)) {
            header("Location: $site/index.php?msg=$conn->error");
        } else {
            header("Location: $site/index.php?msg=Successfully Inserted");
        }
   }

    if(!empty($_GET['msg']))
        echo '<h5 class="bg-success text-light text-center p-2 mt-5">' . $_GET['msg'] . '</h5>';

   $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        <?php include 'css/index.css'; ?>
    </style>
    <title>Insert Users</title>
</head>
<body>
    
    <!-- Main Container -->
    <div class="main-container container py-5 px-3">

        <h1 class="bg-warning text-center pt-2 pb-3 px-2 mb-5">Insert Student Info</h1>

        <form method="POST" class="bg-dark text-light py-5 px-4">
            <div class="mb-3">
                <label for="fullname" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="fullname" name="fullname">
            </div>
            <div class="mb-3">
                <label for="id" class="form-label">Student ID</label>
                <input type="text" class="form-control" id="id" name="id">
            </div>
            <div class="mb-5">
                <label for="semester" class="form-label">Semester</label>
                <input type="text" class="form-control" id="semester" name="semester">
            </div>      
            <button type="submit" name="save" class="btn btn-warning px-5">Submit</button>
        </form>

        <a class="btn-link" href="/php-crud-app/display.php">
            <button type="button" class="btn btn-danger">View All The Student</button>
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>