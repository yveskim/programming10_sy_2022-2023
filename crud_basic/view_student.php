<?php 
require_once 'db_connect.php';


    $query = "SELECT * FROM student_tbl";

    $result = $conn->query($query);
    // if ($result->num_rows > 0) {
    //     while($row = $result->fetch_assoc()) {
    //         echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    //     }
    // } else {
    //     echo "0 results";
    // }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Student</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">  
    <script src="jquery/jquery-3.6.1.min.js"></script>  
    <style>
        .container{
            margin-top: 5rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row"><div class="col-md-12"><a href="index.php" class="btn btn-primary">Add New Student</a></div></div>
        <div class="row">
            <div class="col-md-12">
                <center>
                    <h1>Student List</h1>
                </center>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-stripped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Birthday</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($result as $res): ?>
                            <tr>
                                <td><?= $res['stud_id'] ?></td>
                                <td><?= $res['name'] ?></td>
                                <td><?= $res['age'] ?></td>
                                <td><?= $res['gender'] ?></td>
                                <td><?= $res['bday'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  
</body>
</html>