
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/navbar.css">
	<link rel="stylesheet" href="style.css" >
   
  
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<title>Kidsitter</title>
	    
	
	<style>
	     input{
			 margin: 10px;
			 
      }
	  </style>
</head>

<body>
    <div class="topbar">
        <div class="logo">
            <img src="./img/logo.svg" alt="">
        </div>
        <button>Log out</button>
    </div>
    <div class="navbg">
        <div class="nav">
            <a class="link link-active flex-center" href="#">Jobs</a>
            <a class="link flex-center" href="#">Interviews</a>
            <a class="link flex-center" href="#">BabySitter</a>
            <a class="link flex-center" href="#">Payment</a>
            <a class="link flex-center" href="#">Babyfood</a>
            <a class="link flex-center" href="#">My Profile</a>
        </div>
    </div>










<body> 
      <center>
      <div class="main">
	  <form action="insert.php" method ="POST" enctype="multipart/form-data">
	  <label for="">Name:</label>
	  <input type="text" name="name"> <br>
	  <label for="">Price:</label>
	    <input type="text" name="price" id=""> <br>
		<label for="">Image:</label>
		<input type="file" name="image" id=""> <br>
		 <button name="upload">Upload</button>
		
 </form>
 </div>
 </center>
 
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Price </th>
      <th scope="col">Image</th>
	  <th scope="col">Delete<th>
	  <th scope="col">update <th>
   </tr>
  </thead>
  <tbody>
      <?php
     include 'config.php';
	 $sql="SELECT * FROM `tblcard`";
	 $pic = mysqli_query($con, $sql);
	 while($row = mysqli_fetch_array($pic)){
            echo "
	             <tr>
	                 <td>$row[Id]</td> 
		             <td>$row[Name]</td>
			         <td>$row[Price]</td>
		 	         <td><img src='$row[Image]' Width ='200px' height='200px'></td>
			         <td><a href='delete.php? Id=$row[Id]' class ='btn btn-danger'>Delete</a></td>
				     <td><a href='update.php? Id=$row[Id]' class ='btn btn-danger'>Update</a></td>
			        </tr>
		        ";
	 }
	?>
  </tbody>
</table>
</body> 

</html> 
      