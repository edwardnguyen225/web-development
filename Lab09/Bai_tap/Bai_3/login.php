<?php
include('./header.php');
?>

<form action="info.php" method="post">
   <h1>Login</h1>
   <p>
      <label for="username">Username</label>
      <input type="text" name="username" id="username" required>
   </p>

   <p>
      <label for="password">Password</label>
      <input type="password" name="password" id="password" required>
   </p>

   <button type="submit">Login</button>
</form>

<p>Incase you don't know username and password, here it is</p>
<p>Username: groot - Password: groot</p>
</body>

</html>