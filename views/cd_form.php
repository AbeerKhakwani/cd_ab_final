<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
	<title>Form Enter new Cd</title>
</head>
<body>
<div class="container">

	<h2>Enter a New cd </h2>
<form  action="/entered" method="post">
  <div class="form-group">
    <label for="image">Enter Image</label>
    <input type="text" name="image" class="form-control" id="image" placeholder="Enter Image">
  </div>
  <div class="form-group">
    <label for="title">Enter title</label>
    <input type="text" name="title" class="form-control" id="title" placeholder="Enter title">
  </div>
  <div class="form-group">
    <label for="artist">Enter artist</label>
    <input type="text" name="artist" class="form-control" id="artist" placeholder="Enter artist">
  </div>
   <div class="form-group">
    <label for="price">Enter price</label>
    <input type="text" name="price" class="form-control" id="price" placeholder="Enter price">
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
</form></div>







</body>
</html>