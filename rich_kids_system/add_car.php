<?php 

require_once "connect_db.php";

if(isset($_POST['submit_car'])){
   $car_name = $_POST['car_name'];
   $car_type = $_POST['car_type'];
   $color = $_POST['color'];
   $model = $_POST['model'];

   $date = date('Y-m-d');

   $query = "INSERT INTO cars_tbl(`car_name`, `car_type`, `color`, `model`, `date_acquired`) VALUES('$car_name', '$car_type', '$color', '$model', '$date')";
   
   if ($conn->query($query) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $query . "<br>" . $conn->error;
  }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rich Kids System</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">  
    <script src="jquery/jquery-3.6.1.min.js"></script>  
    <style>
        form{
            padding: 0 20% 0 20%;
        }
    </style>
</head>
<body>
    <br>
    <center><h1>ADD CAR</h1></center>
    <hr>
    <form id="car_form" action="add_car.php" method="post">
        <div class="row">
            <div class="col-md-12">
                <label for="">Car Name</label>
                <input class="form-control" type="text" name="car_name">
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <label for="">Type</label>
                <input class="form-control" type="text" name="car_type">
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <label for="">Color</label>
                <select name="color" class="form-control">
                    <option value="">-</option>
                    <option value="Red">Red</option>
                    <option value="Blue">Blue</option>
                    <option value="Green">Green</option>
                    <option value="Yellow">Yellow</option>
                    <option value="Black">Black</option>
                </select>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <label for="">Model</label>
                <input class="form-control" type="text" name="model">
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <a class="btn btn-info" href="view_cars.php" style="width: 100%;">View Car</a>
            </div>
            <div class="col-md-6">
                <input class="btn btn-primary" type="submit" name="submit_car" value="Submit Form" style="width: 100%;">
            </div>
        </div>
    </form>

    
</body>

<script>
    // $(document).ready(function(){
    //     $('#student_form').submit(function(event){
    //         event.preventDefault();
    //         $.ajax({
    //             url: 'save_student.php',
    //             type: 'post',
    //             data: $('#student_form').serialize(),
    //             success: function(data){
    //                 console.log(data);
    //                 window.location.href = "view_student.php"
    //             },
    //             error: function(err){
    //                 console.log(err);
    //             },
    //             complete: function(){
                    
    //             }
    //         })
    //     })
    // })
</script>




</html>