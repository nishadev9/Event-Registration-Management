<?php
include_once 'db_con.php';
 $sql = "SELECT  user_id,username FROM users  INTERSECT SELECT  user_id,username FROM registration  ";  
 $result = mysqli_query($con, $sql);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>confirmation</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:500px;">  
                <h3 >Confirmation page</h3><br />                 
                <div class="table-responsive">  
                     <table class="table table-striped">  
                          <tr>  
                               <th>User Id</th>  
                               <th>Username</th> 
                          </tr>  
                          <?php  
                          if(mysqli_num_rows($result) > 0)  
                          {  
                               while($row = mysqli_fetch_array($result))  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["user_id"];?></td>  
                               <td><?php echo $row["username"]; ?></td>
                          </tr>  
                          
                          <?php  
                               }  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
           <br />  
      </body>  
 </html>  
