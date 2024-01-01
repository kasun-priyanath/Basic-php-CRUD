<?php
    include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <button type="button" class="btn btn-info my-5 text-light">
            <a href="user.php" class="text-light" style="text-decoration: none;">Add User</a>
        </button>

        <table class="table" style="border-radius: 10px; background-color: #f2f2f2;">
            <thead>
                <tr>
                    <th scope="col">Serial number</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM crud";
                    $results = mysqli_query($con, $sql);

                    if ($results) {
                        while ($row = mysqli_fetch_assoc($results)) {
                            $id = $row["id"];
                            $name = $row["name"];
                            $email = $row["email"];
                            $mobile = $row["mobile"];
                            $password = $row["password"];

                            echo '<tr>
                                    <th scope="row">' . $id . '</th>
                                    <td>' . $name . '</td>
                                    <td>' . $email . '</td>
                                    <td>' . $mobile . '</td>
                                    <td>' . $password . '</td>
                                    <td> <button type="button" class="btn btn-info text-light">
                                    <a href="update.php?updateid='.$id.'" class="text-light" style="text-decoration: none;">Update</a>
                                    </button>
                                    <button type="button" class="btn btn-danger text-light">
                                    <a href="delete.php?deleteid='.$id.'" class="text-light" style="text-decoration: none;">Delete</a>
                                    </button>
                                    </td>
                                  </tr>';
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
