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

</br></br>
<div class="container">
<h1 class="text-center text-white bg-dark">Email id with profile</h1>
<form class="" action="uplode.php" method="post" enctype="multipart/form-data">
<div class="form-group">
<label class="control-label" for="email">Email *</label>
<input type="email" name="email" value="" class="form-control" placeholder="Enter email">
</div>
<div class="form-group">
<label class="control-label" for="num">Number *</label>
<input type="text" name="number" id="num" class="form-control" placeholder="Enter contect number">
</div>
<div class="form-group">
<label class="control-label" for="file">Image *</label>
<input type="file" name="image1" value="" class="form-control">
</div>
<div class="form-group">
<button type="submit" name="submit" value="submit" class="from-control">Submit
</div>
</form>
</div>
</body>
</html>