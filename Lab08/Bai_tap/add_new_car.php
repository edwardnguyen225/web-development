<?php
require_once("./mysql_connect.php");
$id = $_GET['next_id'];
$year = 0;
$name = '';
$err_msg = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

   if (isset($_POST['id']) && !empty($_POST['id'])) {
      $input = $_POST['id'];
      if (!ctype_digit($input)) {
         $err_msg = "Please input valid id";
      } else {
         $id = $input;
      }
   }

   if (isset($_POST['name']) && !empty($_POST['name'])) {
      $input = $_POST['name'];
      if (strlen($input) < 5 || strlen($input) > 40) {
         $err_msg = "Please input name having length between 5-40";
      } else {
         $name = $input;
      }
   }

   if (isset($_POST['year']) && !empty($_POST['year'])) {
      $input = $_POST['year'];
      if ($input < 1990 || $input > 2015) {
         $err_msg = "Please input year between 1990-2015";
      } else {
         $year = $input;
      }
   }

   if (empty($err_msg)) {

      $query = "INSERT INTO cars VALUES('$id', '$name', '$year');";
      $response = mysqli_query($dbc, $query);

      if (!$response) {
         echo "Couldn't add new record<br />";
         echo mysqli_error($dbc);
      } else {
         mysqli_close($dbc);
         header("Location: ./index.php");
      }
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./assets/css/styles.css">
   <title>Add new car</title>
</head>

<body>
   <h1>Lab 08 - AJAX JQUERY</h1>

   <div>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
         <h2>Add new record to table <em>cars</em></h2>
         <div>
            <label for="id">ID:</label>
            <input type="number" name="id" required>
         </div>
         <div> <label for="name">Name:</label>
            <input type="text" name="name" required minlength="5" maxlength="40">
         </div>
         <div>
            <label for="Year">Year</label>
            <input type="number" name="year" min="1990" max="2015" required>
         </div>
         <div>
            <input type="submit" class="btn btn-primary">
            <a href="./index.php" class="btn btn-secondary">Cancel</a>
         </div>
         <p><?php echo $err_msg ?></p>
      </form>
   </div>

</body>

</html>