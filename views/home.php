<html>
<head>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

	<title>CD's in store</title>
</head>
<body>
	
<div class="container">
	<h1>Here are all the Cd's in store</h1>
<div class="row">


  <div class="col-xs-6">{% for cd in cds %}
                         <img class="thumbnail" src="{{cd.getCoverArt}}" />
                          <h3>{{ cd.getTitle}}</h3>
                          <p>{{ cd.getArtist}}</p>
                          <p>{{ cd.getPrice}}</p>
                        {% endfor %}
  </div>
     
</div>


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