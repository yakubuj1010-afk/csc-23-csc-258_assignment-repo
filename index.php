<?php /* simple form */ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Register Student</title>
    <style>
      /* Simple modern card look */
body{
  font-family: "Segoe UI", Arial, sans-serif;
  background: linear-gradient(135deg,#38bdf8,#0ea5e9 40%,#0f172a);
  min-height:100vh;
  display:flex;
  justify-content:center;
  align-items:center;
  margin:0;
}

h2{
  text-align:center;
  color:#0f172a;
  margin-bottom:1rem;
}

form{
  background:#ffffff;
  padding:2rem 2.5rem;
  border-radius:1rem;
  width:300px;
  box-shadow:0 8px 25px rgba(0,0,0,0.2);
}

label{
  display:block;
  margin-top:1rem;
  font-size:0.9rem;
  font-weight:600;
  color:#374151;
}

input{
  width:100%;
  padding:0.6rem 0.75rem;
  margin-top:0.3rem;
  border:1px solid #cbd5e1;
  border-radius:0.5rem;
  font-size:0.95rem;
  transition:border 0.2s, box-shadow 0.2s;
}

input:focus{
  outline:none;
  border-color:#38bdf8;
  box-shadow:0 0 0 2px rgba(56,189,248,0.3);
}

button{
  width:100%;
  margin-top:1.5rem;
  padding:0.75rem;
  font-size:1rem;
  background:linear-gradient(90deg,#0ea5e9,#38bdf8);
  color:#fff;
  border:0;
  border-radius:0.5rem;
  cursor:pointer;
  transition:opacity 0.2s;
}

button:hover{
  opacity:0.9;
}

a{
  display:block;
  margin-top:1rem;
  text-align:center;
  text-decoration:none;
  color:#0ea5e9;
  font-weight:600;
}

a:hover{
  text-decoration:underline;
}
    </style>
</head>

<body>
    <div class="container">
        <h2>Student Registration</h2>
        <form action="process.php" method="post">
            <label>Full Name:</label>
            <input type="text" name="full_name" required>

            <label>Email:</label>
            <input type="email" name="email" required>

            <label>Department:</label>
            <input type="text" name="department" required>

            <label>Matric Number:</label>
            <input type="text" name="matric_number" required>

            <button type="submit">Save</button>
        </form>

        <a href="view.php">View Students</a>
    </div>
</body>

</html>