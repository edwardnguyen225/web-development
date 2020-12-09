<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./assets/css/styles.css">
   <title>Bai tap PHP MySQL</title>
</head>

<body>
   <h1>Lab 07 - PHP MySQL</h1>

   <h2>List of all records in table <em>cars</em></h2>

   <div>
      <a href="./add_new_car.php" class="btn">Add new car</a>
   </div>


   <?php
   require_once("./mysql_connect.php");
   $dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
      or die('Could not connect to MySQL: ' .
         mysqli_connect_error());

   $query = "SELECT id, name, year FROM cars";
   $response = @mysqli_query($dbc, $query);

   if ($response) {

      echo "<div>";
      echo '<table align="left"
      cellspacing="5" cellpadding="8">

      <tr><td align="center"><b>ID</b></td>
      <td align="center"><b>Name</b></td>
      <td align="center"><b>Year</b></td>
      <td colspan="2" align="center"><b>Action</b></td></tr>';

      while ($row = mysqli_fetch_array($response)) {

         echo '<tr>';
         echo '<td align="center">' . $row['id'] . '</td>
               <td align="center">' . $row['name'] . '</td>
               <td align="center">' . $row['year'] . '</td>
               <td align="center"><a href="update_car.php?id=' . $row['id'] . '" class="btn">Update</a></td>
               <td align="center"><a href="delete_car.php?id=' . $row['id'] . '" class="btn btn-danger">Delete</a></td>';
         echo '</tr>';
      }

      echo '</table>';
      echo '</div>';
   } else {

      echo "Couldn't issue database query<br />";

      echo mysqli_error($dbc);
   }

   mysqli_close($dbc);
   ?>
</body>

</html>