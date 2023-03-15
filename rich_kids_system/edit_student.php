<?php 

require_once "connect_db.php";

if(isset($_GET['student_id'])){

  $sid = $_GET['student_id'];
  
   $query = "SELECT * FROM student_tbl WHERE stud_id = '$sid'";
   
    $result = $conn->query($query);
    $row = $result->fetch_row();
}


if(isset($_POST['update_student'])){
    $student_id = $_POST['student_id'];
    $student_name = $_POST['student_name'];
    $student_age = $_POST['student_age'];
    $student_gender = $_POST['student_gender'];
    $student_bday = $_POST['student_birthday'];
    
    $sql = "UPDATE `student_tbl` SET `name`='$student_name', `age` = $student_age, `gender` = '$student_gender',  `bday` = '$student_bday' WHERE `stud_id` = '$student_id'";

    if ($conn->query($sql) === TRUE) {
        $message = "Record updated successfully";
        header("location: view_student.php?message=.'$message'");
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
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
    <center><h1>EDIT STUDENT</h1></center>
    <hr>
    <form id="student_form" action="edit_student.php" method="post">
        <input class="form-control" type="hidden" name="student_id" value="<?php echo $row[0]?>">
        <div class="row">
            <div class="col-md-12">
                <label for="">Name</label>
                <input class="form-control" type="text" name="student_name" value="<?php echo $row[1]?>">
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <label for="">Age</label>
                <input class="form-control" type="text" name="student_age" value="<?php echo $row[2]?>">
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <label for="">Gender</label>
                <select name="student_gender" class="form-control">
                    <?php if($row[3] == "Male"): ?>
                        <option value="">-</option>
                        <option value="Male" selected>Male</option>
                        <option value="Female">Female</option>
                        <?php endif; ?>
                    <?php if($row[3] == "Female"): ?>
                        <option value="">-</option>
                        <option value="Male">Male</option>
                        <option value="Female" selected>Female</option>
                    <?php endif; ?>
                </select>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <label for="">Birthday</label>
                <input class="form-control" type="date" name="student_birthday" value="<?php echo $row[4]?>">
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <a class="btn btn-info" href="view_student.php" style="width: 100%;">View Students</a>
            </div>
            <div class="col-md-6">
                <input class="btn btn-primary" type="submit" name="update_student" value="Update Form" style="width: 100%;">
            </div>
        </div>
    </form>

    
</body>

<script>

</script>




</html>