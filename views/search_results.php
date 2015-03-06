<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

	<title>You entered a new Cd</title>

</head>
<body>
	<h1>Here are the cd's that match your results</h1>

	<div class="container">
       
<div class="row">
  <div class="col-xs-6">  


  {%  for cd in cds%}	

    <img class="thumbnail" src="{{cd.getCoverArt}}" />
                          <h3>{{ cd.getTitle}}</h3>
                          <p>{{ cd.getArtist}}</p>
                          <p>{{ cd.getPrice}}</p>

  {%  endfor %}
     
      
  </div>
  <form  action="/" type="post">
  <div class="form-group">
      <button type="submit" class="btn btn-default">Go home to see all CD's</button>
  </form>

</div>

</body>
</html>