 <!DOCTYPE html>
<html lang ="en">
<head>
      
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content ="IE=edge">
      <meta name="viewport" content ="width=device-width,initial-scale=1.0">
      
	    
		<title> Document </title> 
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"  crossorigin="anonymous">
	  <style>
	     input{
			 margin: 10px;
			 
		 }
	  </style>
   	  
</head>
<body> 
<?php

 include 'config.php'; 
 
 $ID = $_GET['Id']; 
 $sql="SELECT * FROM `tblcard` WHERE Id = $ID";
 $Record= mysqli_query($con , $sql );
 $data = mysqli_fetch_array($Record);
 
?>
  <center>
	  <div class="main">
      <form action="" method="POST" enctype="multipart/form-data">
      <label for ="">Name:</label>
	  
      <input type ="text" value= "<?php echo $data['Name']?>" name="name"><br>
	  
      <label for ="">Price:</label>
      <input type ="text" value="<?php echo $data['Price']?>" name="price" id= ""><br>
      <label for ="">Image:</label>
	  <td><input type ="file" name="image"  value="<?php  echo $data['Image'] ?>"><img src="<?php echo $data['Image']?>"  Width ='200px' height='200px' alt="" </td><br>
 	  <input type="hidden" name="Id"  value="<?php echo $data['Id'] ?>">
	  <button type="submit" name="update" class ='btn btn-danger m=2'>update</button>
	</form>
  </div>
	
	 </center>
	 <!--updatecode-->
	 
</body>
</html>
 