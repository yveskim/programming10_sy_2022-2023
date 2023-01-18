<?php 
    if(ISSET($_POST['student_name'])){

        $name = $_POST['student_name'];
        $age = $_POST['student_age'];
        $gender = $_POST['student_gender'];
        $birthday = $_POST['student_birthday'];
        
        $student = array(
            "name" => $name,
            "age" => $age,
            "gender" => $gender,
            "birthday" => $birthday
        );

        $student_data = json_encode($student);
        $data_result = file_put_contents('students.json', $student_data);

        if($data_result){
            echo "save successful";
        }else{
            echo "Failed to save data";
        }
    }
?>