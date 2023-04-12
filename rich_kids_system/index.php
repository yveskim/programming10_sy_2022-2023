<?php 

require_once "connect_db.php";

if(isset($_POST['submit_student'])){
   $name = $_POST['student_name'];
   $age = $_POST['student_age'];
   $gender = $_POST['student_gender'];
   $birthday = $_POST['student_birthday'];

   $query = "INSERT INTO student_tbl(`name`, `age`, `gender`, `bday`) VALUES('$name', $age, '$gender', '$birthday')";
   
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
        .full-size{
            width: 100%;
        }
    </style>
</head>
<body>
    <br>
    <center><h1>RICH KIDS SYSTEM</h1></center>
    <hr>
    
    <div class="row">
        <div class="col-md-2">
            <a href="view_student.php" class="btn btn-primary full-size">view student</a>
        </div>
        <div class="col-md-2">
            <a href="view_cars.php" class="btn btn-info full-size">view cars</a>
        </div>
    </div>
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