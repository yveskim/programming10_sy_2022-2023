<?php 
    require_once "connect_db.php";

    if(isset($_GET['message'])){
        echo $_GET['message'];
    }

    if(isset($_GET['car_id'])){
        $car_id = $_GET['car_id'];

        $sql = "DELETE FROM cars_tbl WHERE car_id = '$car_id'";

        if($conn->query($sql) === TRUE){
            echo "data deleted successfully";
        }else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }


    $query = "SELECT * FROM cars_tbl";

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
    <title>Cars</title>
</head>
<body>
    <br>
    <div class="container">
        <a href="add_car.php" class="btn btn-primary">ADD NEW CAR</a>
        <div class="row">
            <div class="col-md-12">
                <center><h2>Cars List</h2></center>
            </div>
        </div><hr>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Car Name</th>
                            <th>Car Type</th>
                            <th>Color</th>
                            <th>Model</th>
                            <th>Date Acquired</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($result as $res): ?>
                            <tr>
                                <td><?php echo $res['car_id'] ?></td>
                                <td><?php echo $res['car_name'] ?></td>
                                <td><?php echo $res['car_type'] ?></td>
                                <td><?php echo $res['color'] ?></td>
                                <td><?php echo $res['model'] ?></td>
                                <td><?php echo $res['date_acquired'] ?></td>
                                <td><a href="edit_car.php?car_id=<?php echo $res['car_id'] ?>">Edit</a>&nbsp;|&nbsp;
                                    <a href="view_cars.php?car_id=<?php echo $res['car_id'] ?>" style="color:red;">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>