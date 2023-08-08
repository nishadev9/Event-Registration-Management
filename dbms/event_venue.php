<?php
include_once 'db_con.php';
 $sql = "SELECT place , COUNT(eid) FROM (SELECT place from venue UNION ALL select event_id 
 from events where events.event_id=venue.eid) as count ";
 $result = mysqli_query($con, $sql);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>count</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:500px;">  
                <h3 >Count</h3><br />                 
                <div class="table-responsive">  
                     <table class="table table-striped">  
                          <tr>  
                               <th>Event Id</th>  
                               <th>Count</th>
                          </tr>  
                          <?php  
                          if(mysqli_num_rows($result) > 0)  
                          {  
                               while($row = mysqli_fetch_array($result))  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["place"];?></td>  
                               <td><?php echo $row['count']; ?></td>
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
