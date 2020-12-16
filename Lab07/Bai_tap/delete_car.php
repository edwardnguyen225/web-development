<?php
include('header.php');
?>

<?php
if (isset($_POST['id']) && !empty($_POST['id'])) {
   require_once "./mysql_connect.php";
   $id = $_POST['id'];
   $query = "DELETE FROM cars WHERE id = {$id}";
   $response = mysqli_query($dbc, $query);

   if (!$response) {
      echo "Couldn't delete record<br />";
      echo mysqli_error($dbc);
   } else {
      mysqli_close($dbc);
      echo "RESPONSE: $response<br>";
      header("Location: ./index.php");
   }
}
?>

   <div>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
         <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
         <p>Are you sure to delete it</p>
         <input type="submit" class="btn btn-danger" value="Yes">
         <a href="./index.php" class="btn">No</a>
      </form>
   </div>
</body>

</html>