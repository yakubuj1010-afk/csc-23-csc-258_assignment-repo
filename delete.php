<?php
require "db.php";

// get the id from the query string
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

if ($id > 0) {
    $sql = "DELETE FROM student_records WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        $msg = "Student deleted.";
    } else {
        $msg = "Delete failed: " . mysqli_error($conn);
    }
} else {
    $msg = "Invalid ID.";
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Delete Result</title>
    <style>
        body {
            font-family: sans-serif;
            background: #fef2f2;
            text-align: center;
            padding: 40px;
        }

        h2 {
            color: #dc2626;
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
    <a href="view.php">Back to List</a>
</body>

</html>