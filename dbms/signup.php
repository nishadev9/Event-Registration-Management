<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<style>
    .login-input{
            width: 25%;
            height: 50%;
            padding: 12px 20 px;
            margin:8px 0;
            box-sizing:border-box;
        }
        login-input:focus{
            background-color: lightblue;
        }
       
    body{
background-image: url(evm.jpg);
background-repeat: no-repeat;
background-size:cover;
        

}
    
    </style>
<body>
<?php
    require('db_con.php');
    if (isset($_REQUEST['user_id'])) 
    {
        $user_id    = stripslashes($_REQUEST['user_id']);
        
        $username = stripslashes($_REQUEST['username']);
        
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $age    = stripslashes($_REQUEST['age']);
        $age    = mysqli_real_escape_string($con, $age);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $contact = stripslashes($_REQUEST['contact']);
        $contact = mysqli_real_escape_string($con, $contact);  
        $role = stripslashes($_REQUEST['role']);
        $role = mysqli_real_escape_string($con, $role);    
        


        $query    = "INSERT into `users` (user_id,username, password, email,age,contact,role)
                     VALUES ('$user_id','$username', '$password', '$email','$age','$contact','$role')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
                }
            } else {
        ?>
            <form class="form" action="" method="post">
                <h1 class="login-title">Sign up</h1>
                <input type="text" class="login-input" name="user_id" placeholder="user_id" required /><br/>
                <input type="text" class="login-input" name="username" placeholder="Username" required /><br/>
                <input type="text" class="login-input" name="email" placeholder="Email Adress"/></br>
                <input type="number" class="login-input" name="age" placeholder="age"/><br/>
                <input type="password" class="login-input" name="password" placeholder="Password"/><br/>
                <input type="number" class="login-input" name="contact" placeholder="Contact"/><br/>
                <label>User Type:</label>
                <select name="role">
                    <option selected value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
                <input type="submit" name="submit" value="Register" class="login-button">
                <p class="link"><a href="login.php">Click to Login</a></p> 
            </form>
        <?php
            }
        ?>
        </body>
        </html>







