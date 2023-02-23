<?php

    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $food = $_POST['food'];

    $person = Array (
        "name" => $name,
        "gender" => $gender,
        "food" => $food
    );
        
    //open or read json data
    $data_results = file_get_contents('json_data/data.json');
    $tempArray = json_decode($data_results);

    //append additional json to json file
    $tempArray[] = $person;
    $jsonData = json_encode($tempArray);

    //write json to file
    if (file_put_contents('json_data/data.json', $jsonData)){
        echo "JSON file created successfully...";
        // echo json_encode($jsonData);
    }else{
        echo "Oops! Error creating json file...";
    } 
?>