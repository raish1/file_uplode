<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<h1 class="text-center text-white bg-dark">Registred with profile</h1>
<div class="table-responsive">
<table class="table tabel-bordered table-striped table-hover text-center">
<thead class="bg-dark text-white">
<a href="index.php" class="btn btn-info text-right" role="button">Login page</a>  
    <th>Id</th>
    <th>Email</th>
    <th>Number</th>
    <th>Image</th>
</thead>
<tbody>
  <?php
  $filename=$fileerror=$filetmp=$filecheck=$fileextstore=$number=$files="";
  require"db.php";
  if(isset($_POST['submit'])){
	 $email = $_POST['email'];
	 $number = $_POST['number'];
     $files = $_FILES['image1'];
     //print_r($files);exit();//
	$filename=$files['name'];
	$fileerror=$files['error'];
	$filetmp = $files['tmp_name'];
	$fileext = explode(".",$filename);
	$filecheck = strtolower(end($fileext));
	$fileextstore = array('png','jpg','jpeg');
    if(in_array($filecheck,$fileextstore)){
		$destination ='uplode/'.$filename;
        move_uploaded_file($filetmp,$destination);
    $sql = "INSERT INTO img_uplode( `email`, `number`, `image`) 
           VALUES('$email','$number','$destination')";
     $query=mysqli_query($conn,$sql);
        		
	$sql_disply = "SELECT*FROM img_uplode";
	$query_disply = mysqli_query($conn,$sql_disply);
	//$row = mysqli_num_rows($query_disply);
	while($result=mysqli_fetch_array($query_disply)){
	?>
     <tr>
	    <td><?php echo $result['id'];?></td>
	    <td><?php echo $result['email'];?></td>
	    <td><?php echo $result['number'];?></td>
	    <td><img src="<?php echo $result['image'];?>" height="100px" width="100px"></td>
	 </tr>



	<?php
	}
	
  } 	  
}
?> 
  
  
  
</tbody>
</table>
</div>
</body>
</html>