<?php 
    if(isset($_POST['id']) && !empty($_POST['id'])) {
        require_once "./config.php";
        $id = $_POST['id'];
        $sql = "DELETE FROM cars WHERE id = {$id}";
        $result = mysqli_query($db , $sql);
        
        echo mysqli_error($db);
        echo json_encode($id);
        mysqli_close($db);
    }
?>

