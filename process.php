<?php
require "db.php";

// collect
$name = $_POST['full_name'];
$email = $_POST['email'];
$dept = $_POST['department'];
$mat = $_POST['matric_number'];

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<p class='error'>Invalid email format!</p>";
    echo "<a href='index.php'>Go Back</a>";
    exit;
}

// insert
$sql = "INSERT INTO student_records (full_name,email,department,matric_number)
        VALUES ('$name','$email','$dept','$mat')";

if (mysqli_query($conn, $sql)) {
    $msg = "Student Registered Successfully!";
} else {
    $msg = "Error: " . mysqli_error($conn);
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Result</title>
    <style>
        body {
            font-family: sans-serif;
            background: #f0fdf4;
            text-align: center;
            padding: 40px;
        }

        h2 {
            color: #16a34a;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #2563eb;
        }
    </style>
</head>

<body>
    <h2><?php echo $msg; ?></h2>
    <a href="index.php">Add Another</a> |
    <a href="view.php">View Students</a>
</body>

</html>