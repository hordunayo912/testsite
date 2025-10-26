<?php
include 'connect.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['passwords']; // from form input named "passwords"

    // ✅ Corrected SQL query (column name = password)
    $sql = "INSERT INTO crud (name, email, mobile, password) 
            VALUES ('$name', '$email', '$mobile', '$password')";
    
    $result = mysqli_query($conn, $sql);
    
    if ($result) { 
        echo "Data inserted successfully!";
    } else {
        die("Error: " . mysqli_error($conn));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0 ">
  <link rel ="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
  <title>CRUD Operation</title>
</head>
<body>
  <div class="container my-5">
    <form method="post">
      <div class="form-group mb-3">
        <label>Name</label>
        <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off" required>
      </div>

      <div class="form-group mb-3">
        <label>Email</label> 
        <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off" required>
      </div>

      <div class="form-group mb-3">
        <label>Mobile</label>
        <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="off" required>
      </div>

      <div class="form-group mb-3">
        <label>Password</label>
        <input type="password" class="form-control" placeholder="Enter your password" name="passwords" required>
      </div>

      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
  </div>
</body>
</html>
