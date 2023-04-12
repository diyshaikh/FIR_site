<?php  
 include ("db_connect.php");
 $sql = mysqli_query($connect, " SELECT * FROM victim_data "); 
 ?>
 <!DOCTYPE html>  
 <html>  

      <head>   
           <title>First Information Report</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <link rel="stylesheet" href="joining.css">
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
<!-- Bootstrap CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<!-- Font Awesome CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
<style>

		.button-container {
			display: flex;
			justify-content: center;
			align-items: center;
			margin-top: 0px;
		}

		.btn {
  background-color: #4ca2cd; /* Green */
  border: none;
  color: white;
  width: 300px; /* Fixed width */
  height: 50px; /* Fixed height */
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 10px;
  position: relative;
  top: -10px;
  cursor: pointer;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

		.btn:hover {
			background-color: #3e8e41; /* Darker green */
		}
	</style>
</style>
           <title>First Information Report</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body class="body">  
           <br />  <div class="div0">
          
          <div>
           <div class="container" style="width:700px;">  
                <h1 align="">First Information Report</h1><br />                 
                <div class="table-responsive">  
                     <table class="table table-striped">  
                          <tr>  
                               <th>FIR number</th>
                               <th>Victim's Name</th>  
                               <th>Place of crime</th>  
                               <th>Statement of victim</th>  
                               <th>District</th>
                          </tr>  
                          
                          <?php
                          
      if(mysqli_num_rows($sql) > 0){
      while($fetch_message = mysqli_fetch_assoc($sql)){
      
   ?><tr>  
    <td><?php echo $fetch_message["Victim_FIR"];?></td>  
   <td><?php echo $fetch_message["Name"];?></td>  
   <td><?php echo $fetch_message["Place"];?></td>  
   <td><?php echo $fetch_message["Statement"]; ?></td>
   <td><?php echo $fetch_message["District"];?></td> 



  
</tr>  
                          <?php  
                               }  
                          }  

                          ?>  
                     </table> 

                     <div class="button-container">
          <button class="btn" onclick="window.location.href='victim.html'">Add </button>
          <button class="btn" onclick="window.location.href='update.php'">Update</button>
          <button class="btn" onclick="window.location.href='joining.php'">Complete FIR</button>

          <button class="btn" onclick="window.location.href='delete_vic.php'">Delete Victim</button>
          <button class="btn" onclick="window.location.href='delete_cri.php'">Delete Criminal</button>

	</div>
                </div>  
           </div>  
           <br />  
      </body>  
 </html>
