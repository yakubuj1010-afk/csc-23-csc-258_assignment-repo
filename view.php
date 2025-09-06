<?php
require "db.php";
$result = mysqli_query($conn, "SELECT * FROM student_records");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Students List</title>
    <style>
        body {
            font-family: sans-serif;
            background: #f9fafb;
            padding: 20px;
        }

        h2 {
            color: #333;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 600px;
            background: #fff;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        th {
            background: #f3f4f6;
        }

        a {
            display: inline-block;
            margin-top: 15px;
            text-decoration: none;
            color: #2563eb;
        }
    </style>
</head>

<body>
    <h2>Registered Students</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Department</th>
            <th>Matric</th>
            <th>Action</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo htmlspecialchars($row['full_name']); ?></td>
                <td><?php echo htmlspecialchars($row['email']); ?></td>
                <td><?php echo htmlspecialchars($row['department']); ?></td>
                <td><?php echo htmlspecialchars($row['matric_number']); ?></td>
                <td>
                 <a href="delete.php?id=<?php echo $row['id']; ?>"
                 onclick="return confirm('Delete this student?');">Delete</a>
                </td>

            </tr>
        <?php endwhile; ?>
    </table>
    <a href="index.php">← Back to Form</a>
</body>

</html>