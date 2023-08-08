<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN</title>
        <link rel="stylesheet" type="text/css" href="login.css">
        <style>
    body{
background-image: url(evm.jpg);
background-repeat: no-repeat;
background-size:cover;
        

}`
    </style>
    </head>
    <body>
        
        <form action="loginn.php" method="post">
            <h2>LOGIN</h2>
            <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	    <?php } ?>
            <label><b>Name</b></label>
            <input type="text" name="username" placeholder="User Name">
            <label><b>password</b></label></b>
            <input type="password" name="password" placeholder="password">
            <label>User Type:</label>
          <select name="role">
               <option selected value="user">User</option>
               <option value="admin">Admin</option>
          </select>
            <b>
            <button type="submit">LOGIN</button>
            </b>
            <a href="signup.php" class="sup">Create an account</a>
        </form>     
    </body>
</html>