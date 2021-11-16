

  
<!DOCTYPE html>
<html>
<head>
	<title>Donor Dashboard</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" >
	<link rel="stylesheet" type="text/css" href="./dash.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet"> 
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Josefin+Sans&display=swap" rel="stylesheet"> 
</head>

<body>
<center>
<div class="header">
	<h2 class="title" >FOOD-AID Donor Dashboard</h2>

<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])): ?>
      <div class="error success">
        <h3>
          <?php 
              echo $_SESSION['success'];
              unset($_SESSION['success']);
          ?>
        </h3>
        
      </div>
    <?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION["username"])): ?>
    	<span class="greet"><p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p> </span>
    	 <button type="button" class="btn btn-default"><a href="dashboard.php?logout='1'" style="color: white">logout</a></button>
    <?php endif ?>
    <button type="button" class="btn btn-success">Donate</button>
</div>
</div>
</center>
<br>
<div class="container">
  <div class="jumbotron">
    <h1 style="font-family: 'Abril Fatface', cursive;">Recent Donations</h1>
    <p>All your Success Donations will be updated here with lovely pictures!</p>
  </div>
  
	

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  	
</body>
</html>