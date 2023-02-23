<?php 
    $data_results = file_get_contents('json_data/data.json');
    echo json_encode($data_results);
?>