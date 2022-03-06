<?php
    include_once "inc/funk.php";
?>
<?php
  if (isset($_POST["login"])) {
    login($_POST['email'],$_POST['password']);
  }
?>

<html>

<head>

  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="signin.css">
  

  <title>Sign in</title>
</head>

<body>
  <div class="main" id="form1">
    <p class="sign" align="center">Sign in</p>
    <form class="form1" method="POST" action="">
    <input class="un " type="text" name="email" align="center" id="username" placeholder="Email">
    <input class="un" type="password" name="password" id="password" align="center" placeholder="Password">
    <input class="submit" type="submit"  name="login" value="Submit">

    <h4>Don't you have an account?<a href="form3.php">Sign up</a></h4>


  </div>
  <div class="clear"></div>
  <div class="errors"></div>  
  </form>
<!--<script src="signin.js"></script>--> 
</body>

</html>