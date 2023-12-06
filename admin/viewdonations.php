<?php
session_start();
include '../config.php';


?>
<!DOCTYPE>
<html>
<head>

<title>Blood Request</title>
       <link rel = "icon" href =  
"images/logo.png" 
        type = "image/x-icon"> 
  <style type="text/css">
  body{
  	 background-color: skyblue;
  }
<!-- /*  body{

  	color:black;
    background-image:url("seamless.jpg");
    text-align: center;
    font-size:10px;
    
  	}




div
{
	position:relative;
	left:7cm;

}

table, td, th {  
  border: 5px solid black;
  text-align: center;
  font-size:20px;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th{
	
	font-size: 24px;
	color:blue;
	font-style: bold;
} 
td {
  padding: 20px;
}
h1{

	color:black;
	font-size:30px;
}
</style>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>
<p style="text-align:center;font-size:60px;font-family:cursive;color:black;background-color: blue;color: white; border-radius:0.5px">Blood Bank Management System</p>
 <center><section id="main-content">
      <section class="wrapper">
				<div class="row">     
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> All Donation Details </h4>
	                  	  	  <hr>
                              <thead style="background-color: blue; color: white;">
                              <tr>
                                  <th>Id</th>
                                  <th class="hidden-phone"> Name</th>
                                  <th> Age</th>
                                  <th> Bloodgroup</th>
                                  <th>City</th>
                                  <th>Phone</th>
                                  <th>Gender </th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php 
                              
                              $ret=mysqli_query($con,"select * from donate");
							  $cnt=1;
							  while($row=mysqli_fetch_array($ret))
							  {?>
                              <tr>
                              <td><?php echo $cnt;?></td>
                                  <td><?php echo $row['fullname'];?></td>
                                  <td><?php echo $row['age'];?></td>
                                  <td><?php echo $row['bloodgroup'];?></td>
                                  <td><?php echo $row['city'];?></td>
                                  <td><?php echo $row['phno'];?></td> 
                                  <td><?php echo $row['gender'];?></td> 
                              </tr>
                              <?php $cnt=$cnt+1; }?>
                             
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
		</section>
	</div>
</div>
	<footer class="footer-distributed">
 <center>
 	<br>
 	<br>
  <a href="adminhome.php"style="color:black;font-size: 20px;" class="btn btn-primary">Back to home</a>
 	 
                
                <br>
                <br>
 </center>
            
               
               



               

</body>
</html>
