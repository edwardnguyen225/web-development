<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Bai 2</title>
</head>

<body>
   <?php
   function func($num)
   {
      $var = $num % 5;
      switch ($var) {
         case 0:
            echo ("Hello");
            break;
         case 1:
            echo ("How are you?");
            break;
         case 2:
            echo ("I’m doing well, thank you");
            break;
         case 3:
            echo ("See you later");
            break;
         case 4:
            echo ("Good-bye");
            break;
      }
   }

   echo "For i in range (0,10), we got</br>";
   for ($i = 0; $i < 10; $i++) {
      echo "i = " . $i . " ---> ";
      func($i);
      echo "</br>";
   }
   ?>
</body>

</html>