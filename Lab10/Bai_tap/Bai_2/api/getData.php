<?php
    require_once("config.php");
    $sql = 'SELECT * FROM cars';
    $result = mysqli_query($db,$sql);

    $json = [];
    while($row = $result->fetch_assoc()) {
        $json[] = $row;
    }

    $data['data'] = $json;

    echo json_encode($data);
    mysqli_close($db);
?>