<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Bai 4</title>
</head>
<style>
   table {
      border-collapse: collapse;
   }

   td {
      border: 1px solid #000;
      background-color: yellow;
      padding: 0.5rem;
      text-align: center;
      width: 1.5rem;
   }
</style>

<body>
   <table>
      <?php for ($i = 1; $i <= 7; $i++) { ?>
         <tr>
            <?php for ($j = 1; $j <= 7; $j++) { ?>
               <td>
                  <?php
                  echo ($i * $j) ?>
               </td>
            <?php } ?>
         </tr>
      <?php } ?>
   </table>
</body>

</html>