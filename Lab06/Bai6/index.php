<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   <title>Bai 6 - Registration</title>
</head>

<body>
   <form class="container" method="post">
      <div class="form-row justify-content-center">
         <h4>Form Registration</h4>
      </div>
      <div class="form-row">
         <div class="form-group col-md-6">
            <label for="inputFirstName">First Name</label>
            <input type="text" id="first_name" class="form-control" name="first_name">
         </div>
         <div class="form-group col-md-6">
            <label for="inputLastName">LastName</label>
            <input type="text" id="last_name" class="form-control" name="last_name">
         </div>
      </div>
      <div class="form-group">
         <label for="inputEmail">Email</label>
         <input type="text" id="email" class="form-control" name="email">
      </div>
      <div class="form-group">
         <label for="inputPassword">Password</label>
         <input type="password" id="password" class="form-control" name="password">
      </div>
      <div class="form-row">
         <div class="form-group col-md-4">
            <label>Birthday</label>
         </div>
      </div>
      <div class="form-row">

         <div class="form-group col-md-4">
            <select name="date" id="date" class="form-control" name="date">
               <option selected>Day...</option>
            </select>
         </div>
         <div class="form-group col-md-4">
            <select name="month" id="month" class="form-control" name="month">
               <option selected>Month...</option>
            </select>
         </div>
         <div class="form-group col-md-4">
            <select name="year" id="year" class="form-control" name="year">
               <option selected>Year...</option>
            </select>
         </div>
      </div>
      <div class="form-group">
         <label for="inputCountry">Country</label>
         <select name="country" id="country" class="form-control" name="country">
            <option selected>Choose...</option>
            <option>Vietnam</option>
            <option>Australia</option>
            <option>United States</option>
            <option>India</option>
            <option>Other</option>
         </select>
      </div>
      <div class="form-group">
         <label for="inputGender">Gender</label>
         <br>
         <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="male" value="male">
            <label class="form-check-label" for="inlineRadio1">Male</label>
         </div>
         <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="female" value="female">
            <label class="form-check-label" for="inlineRadio2">Female</label>
         </div>
         <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="no" value="no">
            <label class="form-check-label" for="inlineRadio2">Không xác định</label>
         </div>
      </div>
      <div class="form-group">
         <label for="inputAbout">About</label><br>
         <textarea rows=5 class="form-control" id="about" name="about"></textarea>
      </div>
      <div class="form-row justify-content-center">
         <button type="submit" id="submit" name="submit_btn" class="btn btn-primary" style="margin-right: 2rem;">Submit</button>
         <button type="submit" id="reset" class="btn btn-secondary">Reset</button>
      </div>
   </form>

   <?php
   if (!isset($_SESSION)) {
      session_start();
      session_unset();
   }

   function phpAlert($msg)
   {
      echo "<h4>ALERT: " . $msg . "</h4>";
   }

   $gender = '';

   if (isset($_POST['first_name'])) {
      $first_name = $_POST['first_name'];
   }

   if (isset($_POST['last_name'])) {
      $last_name = $_POST['last_name'];
   }

   if (isset($_POST['email'])) {
      $email = $_POST['email'];
   }

   if (isset($_POST['password'])) {
      $password = $_POST['password'];
   }

   if (isset($_POST['date'])) {
      $date = $_POST['date'];
   }

   if (isset($_POST['month'])) {
      $month = $_POST['month'];
   }

   if (isset($_POST['year'])) {
      $year = $_POST['year'];
   }

   if (isset($_POST['country'])) {
      $country = $_POST['country'];
   }

   if (isset($_POST['gender'])) {
      $gender = $_POST['gender'];
   }

   if (isset($_POST['about'])) {
      $about = $_POST['about'];
   }

   if (isset($_POST['submit_btn'])) {
      if (strlen($first_name) < 2 || strlen($first_name) > 30) {
         phpAlert("First name from 2-30 character");
      } else if (strlen($last_name) < 2 || strlen($last_name) > 30) {
         echo ("Last name from 2-30 character");
      } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         echo ("Email is not correct format");
      } else if (strlen($password) < 2 || strlen($password) > 30) {
         echo ("Password from 2-30 character");
      } else if ($date == "Day...") {
         echo ("Choose day");
      } else if ($month == "Month...") {
         echo ("Choose month");
      } else if ($year == "Year...") {
         echo ("Choose year");
      } else if ($country == "Choose...") {
         echo ("Choose country");
      } else if ($gender == '') {
         echo ("Choose gender");
      } else if (strlen($about) > 10000) {
         echo ("Max character of About is 10000");
      } else {
         echo ("Complete");
      }
   }
   ?>
</body>
<script>
   date = document.querySelector("#date")
   month = document.querySelector("#month")
   year = document.querySelector("#year")


   const createDate = () => {
      for (let i = 1; i <= 31; i++) {
         let node = document.createElement("option")
         let textNode = document.createTextNode(i)
         node.appendChild(textNode)
         node.value = i
         date.appendChild(node)
      }

      for (let i = 1; i <= 12; i++) {
         let node = document.createElement("option")
         let textNode = document.createTextNode(i)
         node.appendChild(textNode)
         node.value = i
         month.appendChild(node)
      }

      for (let i = 1900; i <= 2100; i++) {
         let node = document.createElement("option")
         let textNode = document.createTextNode(i)
         node.appendChild(textNode)
         node.value = i
         year.appendChild(node)
      }
   }

   createDate()
</script>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>