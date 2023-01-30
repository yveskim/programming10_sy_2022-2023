<?php 
    $data_results = file_get_contents('students.json');
    echo json_encode($data_results);
?>