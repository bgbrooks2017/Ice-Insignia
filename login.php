<!DOCTYPE HTML>


<html>
<head>
  <title>Player 1 Loggin</title>
  <link rel = "stylesheet" href = "login.css">

</head>
<body id="p1">
  <h1>Player 1 Login</h1>
  <div id = "p1Login">

      <form method="post" action="login.php">
        <h2>Login:</h2>
        Username: <br>
        <input type="text" name ="username"><br>
        Password: <br>
        <input type="password" name ="password"><br>
        <input type="submit" value="Login!">
    </form>
    <a href="logout.php">Logout</a>
  </div>
  <div id = "p1Register">
    <form method="post" action="login.php">
      <h2>Register:</h2>
      First Name: <br>
      <input type="text" name ="firstName"><br>
      Last Name: <br>
      <input type="text" name ="lastName"><br>
      Email: <br>
      <input type="text" name ="email"><br>
      Username: <br>
      <input type="text" name ="username"><br>
      Password: <br>
      <input type="password" name ="password"><br>
      <input type="submit" value="Register!">


    </form>
  </div>
</body>
<?php
  session_start();

  $username = "user";
  $password = "password";

  if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    header("Location: success.php");
  }
  if (isset($_POST['username'])&& isset($_POST['password'])){
    if ($_POST['username']==$username && $_POST['password']==$password){
      $_SESSION['loggedin']=true;
      header("Location: success.php");
    }
  }
?>

</html>
