<?php
    require_once("./config.php");
    $id = $year = 0;
    $name = '';
    $err_id = $err_name = $err_year = '';
    if($_SERVER["REQUEST_METHOD"] == "POST"){


        if(isset($_POST['id']) && !empty($_POST['id'])) {
            $input = $_POST['id'];
            if(!ctype_digit($input)) {
                $err_id = "Please input valid id";
            } else {
                $id = $input;
            }
        }

        if(isset($_POST['name']) && !empty($_POST['name'])) {
            $input = $_POST['name'];
            if(strlen($input) < 5 || strlen($input) > 40) {
                $err_name = "Please input valid name with length in range 5-40";
            }else {
                $name = $input;
            }
        }

        if(isset($_POST['year']) && !empty($_POST['year'])) {
            $input = $_POST['year'];
            if($input < 1990 || $input > 2015) {
                $err_year ="Please input valid year in range 1990-2015";
            } else {
                $year = $input;
            }
        }

        if(empty($err_id) && empty($err_name) && empty($err_year)) {

            $sql = "INSERT INTO cars VALUES('$id', '$name', '$year');";
            $result = mysqli_query($db , $sql);

            $sql = "SELECT * FROM cars Order by id desc LIMIT 1"; 
            $result = mysqli_query($db , $sql);
            $data = $result->fetch_assoc();
            echo json_encode($data);

            echo mysqli_error($db);
            mysqli_close($db);
        }

    }

?>