<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bakery";

//CREATE Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());

}
else{
	echo "";
}
?>
<?php 
if(isset($_POST["submit"])){
    $user1_name=$_POST['user1_name'];
    $user_email=$_POST['user_email'];
    $user_num=$_POST['user_num'];
    $review=$_POST['review'];
    $sql="INSERT INTO review_name(user1_name,user_email,user_num,review) VALUES('$user1_name','$user_email','$user_num','$review')";
		$result=mysqli_query($conn,$sql);
		if($result){
			echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>successfully added!</strong>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
		}
	}

?>
<?php include("includes/header.php") ?>
  <?php include("includes/nav.php") ?>


<body>
<form action=""  method=post >
<link rel="stylesheet" type="text/css" href="feedback.css">
<div class="form-row">
<div align="center" class="column ">
	  	<div class="col-md-3"></div>
  

      <div  class="col-md-6">
          
  
                 
          <style>
body{
background-image:url("b.jpg");
}
</style>
<div  class="card"  style="width: 60rem;">
          <form>
         
         

          <div class="card-body">
  
  
         
  
                 
                 
                 
                 <h2  align="center" style="color:green" class="card-title">Your Feedback Is Important</h2>
                 
                 
  <h4 align="center"style="color:red">User name:</h4>
<h4 align="center"style="color:red"><input type="text" class="form-control" name="user1_name" ><br><br></h4>
<h4 align="center"style="color:red">User Email:</h4>
<h4 align="center"style="color:red"><input type="text" class="form-control" name="user_email"><br><br></h4>
<h4 align="center"style="color:red">User Phone number:</h4>
<h4 align="center"style="color:red"><input type="digit" class="form-control" name="user_num"><br><br></h4>
<h4 align="center"style="color:red">Review:</h4>
<h1 align="center"style="color:red">
<form action="/action_page.php">
<textarea rows="6" cols="30" input type="text" class="form-control" name="review" required>
</textarea>

</form></h1>
 
                
<h4 align="center"style= "color:red"><button type="submit" class="btn btn-primary " name="submit" id="submit">Sign in</button></h4>
</form>
                  </body>
                  </p>

</form>

                  
                 
                </div>
</div>
         </div>  
                
     </div> 
 
             
               
                
            
                
    
<?php include("includes/footer.php") ?>
