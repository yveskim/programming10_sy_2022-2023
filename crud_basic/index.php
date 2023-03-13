<?php 
require_once 'db_connect.php';




if(isset($_POST['submit_student'])){
    $name = $_POST['student_name'];
    $age = $_POST['student_age'];
    $gender = $_POST['student_gender'];
    $bday = $_POST['student_birthday'];

    $query = "INSERT INTO student_tbl(`name`, `gender`, `age`, `bday`) VALUES('$name', '$age', '$gender', '$bday')";

    if ($conn->query($query) === TRUE) {
        header('location: view_student.php');
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }

  
      
    $conn->close();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 1 Q2</title>
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
    <center><h1>STUDENTS</h1></center>
    <hr>
    <form id="student_form" action="index.php" method="post">
        <div class="row">
            <div class="col-md-12">
                <label for="">Name</label>
                <input class="form-control" type="text" name="student_name">
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <label for="">Age</label>
                <input class="form-control" type="text" name="student_age">
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <label for="">Gender</label>
                <select name="student_gender" class="form-control">
                    <option value="">-</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <label for="">Birthday</label>
                <input class="form-control" type="date" name="student_birthday">
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <a class="btn btn-info" href="view_student.php" style="width: 100%;">View Students</a>
            </div>
            <div class="col-md-6">
                <input class="btn btn-primary" type="submit" name="submit_student" value="Submit Form" style="width: 100%;">
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