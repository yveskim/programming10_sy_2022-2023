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

        //open or read json data
        $student_data = file_get_contents('students.json');//access the json data file
        $tempArray = json_decode($student_data);//create a temporary array and store the current student data from json file

        //append additional json to json file
        $tempArray[] = $student;//append the new student array to data of current student from json file
        $jsonData = json_encode($tempArray);//conver to combined data to new jsonData variable

        //write json to file json file
        if (file_put_contents('students.json', $jsonData)){
            echo "JSON file created successfully...";
            // header("location : view_student.php");
        }else{
            echo "Oops! Error creating json file...";
        } 

       
    }
?>