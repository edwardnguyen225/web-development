<?php
include('header.php');
?>

<?php
require_once("./mysql_connect.php");
$year = 0;
$name = '';
$err_msg = '';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id']) && !empty($_GET['id'])) {
   $id = $_GET['id'];
   $sql_select = "SELECT * FROM cars WHERE id = {$id}";
   $result = mysqli_query($dbc, $sql_select);
   $row = mysqli_fetch_array($result);
   $name = $row['name'];
   $year = $row['year'];
   echo mysqli_error($dbc);
   mysqli_close($dbc);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $id = $_POST['id'];

   if (isset($_POST['name']) && !empty($_POST['name'])) {
      $input = $_POST['name'];

      if (strlen($input) < 5 || strlen($input) > 40) {
         $err_msg = "Please input valid name with length in range 5-40";
      } else {
         $name = $input;
      }
   }

   if (isset($_POST['year']) && !empty($_POST['year'])) {
      $input = $_POST['year'];

      if ($input < 1990 || $input > 2015) {
         $err_msg = "Please input valid year in range 1990-2015";
      } else {
         $year = $input;
      }
   }

   if (empty($err_msg)) {

      $query = "UPDATE cars SET name='$name',year='$year' WHERE id='$id';";
      $response = mysqli_query($dbc, $query);

      if (!$response) {
         echo "Couldn't update record<br />";
         echo mysqli_error($dbc);
      } else {
         mysqli_close($dbc);
         header("Location: ./index.php");
      }
   }
}
?>

   <div>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
         <h2>Update car's information</h2>
         <div>
            <label>ID:</label>
            <input type="number" name="id" id="id" readonly value="<?php echo $row['id']; ?>">
         </div>
         <div>
            <label for="name">Name:</label>
            <input type="text" name="name" minlength="5" maxlength="40" required value="<?php echo $name; ?>">
         </div>
         <div>
            <label for="Year">Year</label>
            <input type="number" name="year" min="1990" max="2015" required value="<?php echo $year; ?>">
         </div>
         <input type="submit" class="btn btn-primary btn-success" Value="Update">
         <a href="./index.php" class="btn btn-noDecor">Cancel</a>
         <p><?php echo $err_msg ?></p>
      </form>
   </div>
</body>

</html>