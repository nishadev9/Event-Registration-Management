<?php 
session_start();

if isset(isset($_SESSION['username']) && isset($_SESSION['role'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <div>
          <?php if ($_SESSION['role'] == 'admin'){?>
               <div>
               <a href="post_event.php" class="admin">ADMIN</a>
               </div>
          <?php } ?>
     </div>
     <div>
          <?php if ($_SESSION['role'] == 'user'){?>
               <div>
               <a href="register.php" class="user">USER</a>
               </div>
          <?php } ?>
     </div>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>