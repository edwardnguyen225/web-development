<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Bai 5 - PHP Calculator</title>
</head>

<body>
   <form action="#" method="post">
      <h1>PHP Calculator</h1>
      <div>
         <label for="first_number">First number</label>
         <input type="number" id="first_number" name="first_number">
      </div>
      <div>
         <label for="operator">Select operator</label>
         <select id="operator" name="operator" class="form-control">
            <option value="+">&plus;</option>
            <option value="-">&minus;</option>
            <option value="*">&times;</option>
            <option value="/">&divide;</option>
            <option value="^-1">^-1</option>
         </select>
      </div>
      <div>
         <label for="second_number">Second number</label>
         <input type="number" id="second_number" name="second_number">
      </div>
      <button type="submit">Give me the result</button>
   </form>

   <h3>The result is:
      <?php
      $first_number = $second_number = 0;
      if (isset($_POST['first_number'])) {
         $first_number = $_POST['first_number'];
      }
      if (isset($_POST['second_number'])) {
         $second_number = $_POST['second_number'];
      }
      if (isset($_POST['operator'])) {
         $operator = $_POST['operator'];
      }

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $first_number = (float)$first_number;
         $second_number = (float)$second_number;
         switch ($operator) {
            case '+':
               echo ($first_number + $second_number);
               break;
            case '-':
               echo ($first_number - $second_number);
               break;
            case '*':
               echo ($first_number * $second_number);
               break;
            case '/':
               echo ($first_number / $second_number);
               break;
            case '^-1':
               echo (1 / $first_number);
               break;
         }
      }
      ?>
   </h3>
   </form>
</body>

</html>