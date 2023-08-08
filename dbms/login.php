<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <style>
    body{
background-image: url(evm.jpg);
background-repeat: no-repeat;
background-size:cover;
        

}
    </style>
    
</head>

<body>
<?php
    require('db_con.php');
    session_start();
    if (isset($_POST['user_id'])) {
        $username = stripslashes($_REQUEST['username']);    
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $role= stripslashes($_REQUEST['role']);
        $role = mysqli_real_escape_string($con, $role);

        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='$password)' ";
                      $result = mysqli_query($con, $query) or die(mysql_error());
                      $rows = mysqli_num_rows($result);
                      if ($rows == 1) {
                          $_SESSION['username'] = $username;
                            
                          
                      } else {
                          echo "<div class='form'>
                                <h3>Incorrect Username/password.</h3><br/>
                                <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                                </div>";
                      }
                  } else {
              ?>
                  <form class="form" method="post" name="login">
                      <h1 class="login-title">Login</h1>
                      <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/><br/>
                      <input type="password" class="login-input" name="password" placeholder="Password"/><br/>
                      
                      <a class="btn btn-primary btn-sm" href="home_1.php">LOGIN AS ADMIN</a><br/>
                      <a class="btn btn-primary btn-sm" href="home_2.php">LOGIN AS USER</a>
                      <p class="link"><a href="signup.php">New signup</a></p>
                </form>
              <?php
                  }
              ?>
              </body>
              </html>