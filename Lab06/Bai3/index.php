<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Bai 3</title>
</head>

<body>
   <?php
   echo "<h2>Odd numbers from 0 to 100</h2>";

   echo ("<h3>Using For loop</h3>");
   for ($i = 0; $i <= 100; $i++) {
      if ($i % 2 != 0) {
         echo $i . "</br>";
      }
   }

   echo "<hr>";
   echo ("<h3>Using While loop</h3>");
   $i = 0;
   while ($i <= 100) {
      if ($i % 2 != 0) {
         echo $i . "</br>";
      }
      $i++;
   }
   ?>
</body>

</html>