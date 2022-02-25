<?php
    include_once "inc/funk.php";
?>
<?php
  if (isset($_POST["login"])) {
    login($_POST['email'],$_POST['password']);
  }
?>
<!DOCTYPE html>
<html>

<head>

  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="form3.css">
  

  <title>Sign up</title>
</head>

<body>
  <div class="main">
    <p class="sign" align="center">Sign up</p>
    <form class="form1" id="form1">
      <input class="un"type="text" name="name" id="name" placeholder="Name">
      <input class="un"type="text" name="surname" id="surname" placeholder="Surname">
      <input class="un " type="text" name="username" id="username"  placeholder="Username">
      <input class="un" type="password" name="password" id="password"   placeholder="Password">
      <input class="un" type="email" name="email" id="email"   placeholder="Your email">
      <input type="submit" class="submit" align="center" value="Sign Up">
      
    
      <h4>Already have an account?<a href="signin.php">Sign in</a></h4>
       
   
    </div>
     <div class="clear"></div>
     <div class="errors"></div>
    </form>
    <script type="text/javascript" src="form3.js"></script>
</body>

</html>