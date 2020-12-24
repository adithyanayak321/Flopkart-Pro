<!DOCTYPE html>
<html lang="en">
<head>
  <title>Flopkart Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>

	<!-- NAVBAR SECTION -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  	<div class="container">
    <a class="navbar-brand" href="">Flopkart</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="">Action</a></li>
            <li><a class="dropdown-item" href="">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
   	 </div>
  	 </div>   <!-- End of container div -->
</nav>	  <!-- End of Navigation bar -->


<!--  CONTAINER  -->

<div class="container">
  <?php
  $item= $_REQUEST["src"];
  if($item=="item1"){
    echo "		<div class=\"prod_name\"></div>
        <div class=\"prod_img\"></div>
        <div class=\"prod_price\"></div>";
  }
  else if($item=="item2"){
    echo "		<div class=\"prod_name\"></div>
        <div class=\"prod_img\"></div>
        <div class=\"prod_price\"></div>";
  }
  else if($item=="item3"){
    echo "		<div class=\"prod_name\"></div>
        <div class=\"prod_img\" style=\"background: url('images/Iphone_XII_Pro.png') no-repeat;\"></div>
        <div class=\"prod_price\"></div>";
  }
  else if($item=="item4"){
    echo "		<div class=\"prod_name\"></div>
    		<div class=\"prod_img\" style=\"background: url('images/Iphone_XII_MD.png') no-repeat;\"></div>
    		<div class=\"prod_price\"></div>";
  }
  else if($item=="item5"){
    echo "		<div class=\"prod_name\"></div>
        <div class=\"prod_img\"></div>
        <div class=\"prod_price\"></div>";
  }
  else if($item=="item6"){
    echo "		<div class=\"prod_name\"></div>
        <div class=\"prod_img\"></div>
        <div class=\"prod_price\"></div>";
  }
  else if($item=="item7"){
    echo "		<div class=\"prod_name\"></div>
        <div class=\"prod_img\"></div>
        <div class=\"prod_price\"></div>";
  }
  else if($item=="item8"){
    echo "		<div class=\"prod_name\"></div>
        <div class=\"prod_img\"></div>
        <div class=\"prod_price\"></div>";
  }
  else if($item=="item9"){
    echo "		<div class=\"prod_name\"></div>
        <div class=\"prod_img\"></div>
        <div class=\"prod_price\"></div>";
  }
  else if($item=="item10"){
    echo "		<div class=\"prod_name\"></div>
        <div class=\"prod_img\"></div>
        <div class=\"prod_price\"></div>";
  }
  else if($item=="item11"){
    echo "		<div class=\"prod_name\"></div>
        <div class=\"prod_img\"></div>
        <div class=\"prod_price\"></div>";
  }
  ?>

</div>

<!--  CONTAINER  -->


<!-- FOOTER -->
<footer>
	<br>
	<div class="footer">
		Contact us:
	</div>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-4 tiles">
				<a href="https://www.instagram.com/gamanjaiin/">
					<div class="icons-1"></div>
				</a>
			</div>
			<div class="col-xs-12 col-sm-4 tiles">
				<a href="https://github.com/gamanjain/">
					<div class="icons-2"></div>
				</a>
			</div>
			<div class="col-xs-12 col-sm-4 tiles">
				<a href="">
					<div class="icons-3"></div>
				</a>
			</div>
		</div>
	</div>
</footer>

<!-- END OF FOOTER -->

</body>
