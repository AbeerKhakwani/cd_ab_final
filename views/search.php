<html>
<head>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

	<title>Search Cds by artist</title>
</head>
<body>

<div class="container">
	<h1>Here are all the Cd's in store</h1>

<form  action="/search_results" method="get">
  <div class="form-group">
    <label for="search">Enter Artist Name</label>
    <input type="text" name="search" class="form-control" id="search" placeholder="Search">
  </div>  
  <button type="submit" class="btn btn-default">Submit</button>
</form>




<form  action="/enter_form" type="get">
  <div class="form-group">
      <button type="submit" class="btn btn-default">Add new CD's to the store</button>
</form>

<form id="form_id" action="/delete" method="post">
            <button type="submit">Clear List</button>
        </form>

        <form id="form_id" action="/search" method="get">
            <button type="submit">Search Cd's By artist</button>
        </form>
</div>


</div>











</body>
</html>