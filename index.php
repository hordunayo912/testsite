<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h2>List of Clients</h2>
        <a class="btn btn-primary mb-3" href="/testsite/create.php" role="button">Add Client</a>
        
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>address</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "test";

                // Create Connection
                $con = new mysqli($servername, $username, $password, $database);

                // Check connection
                if ($con->connect_error) {
                    die("Connection failed: " . $con->connect_error);
                }

                // Read all rows from database table
                $sql = "SELECT * FROM client";
                $result = $con->query($sql);

                // Check if query executed
                if (!$result) {
                    die("Invalid query: " . $con->error);
                }

                // Read data from each row
                while ($row = $result->fetch_assoc()) {
                    echo "
                    <tr>
                        <td>{$row["id"]}</td>
                        <td>{$row["Name"]}</td>
                        <td>{$row["email"]}</td>
                        <td>{$row["phone"]}</td>
                        <td>{$row["address"]}</td>
                        <td>{$row["date"]}</td>
                        <td>
                            <a class='btn btn-primary btn-sm' href='/testsite/edit.php?id={$row["id"]}'>Edit</a>
                            <a class='btn btn-danger btn-sm' href='/testsite/delete.php?id={$row["id"]}'>Delete</a>
                        </td>
                    </tr>
                    ";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
