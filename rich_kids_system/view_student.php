<?php 
    require_once "connect_db.php";

    $query = "SELECT * FROM student_tbl";

    $result = $conn->query($query);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">  
    <script src="jquery/jquery-3.6.1.min.js"></script>  
    <title>Document</title>
</head>
<body>
    <br>
    <div class="container">
        <a href="index.php" class="btn btn-primary">ADD NEW STUDENT</a>
        <div class="row">
            <div class="col-md-12">
                <center><h2>Students List</h2></center>
            </div>
        </div><hr>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
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
                                <td><?php echo $res['stud_id'] ?></td>
                                <td><?php echo $res['name'] ?></td>
                                <td><?php echo $res['age'] ?></td>
                                <td><?php echo $res['gender'] ?></td>
                                <td><?php echo $res['bday'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>