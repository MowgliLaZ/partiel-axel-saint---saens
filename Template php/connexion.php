<?php

if (isset($_POST['enregistrer'])){

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$age=$_POST['age'];
  
$sql="INSERT INTO template php (nom, prenom, age)
      VALUES('$nom','$prenom', '$age')";
$result=mysqli_query($conn, $sql);
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
     <link rel="stylesheet" href="assets/bootstrap.min.css">
     <link rel="stylesheet" href="assets/all.min.css">
	<title>Home</title>
</head>
<body background="">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">société general</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="inscription.php">inscription</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
	<form action="" method="post">
       <div class="container-fluid">
       	  <div class="p-4  mx-auto shadow rounded" style="width:100%; max-width:340px; margin-top: 50px;">
       	  	 <input type="text" class="my-2 form-control" placeholder="Nom" name="nom">
       	  	 <input type="text" class="my-2 form-control" placeholder="Prénom" name="prenom">
				  <input type="age" class="my-2 form-control" placeholder="age" name="age">
				
       	   
       	  	 <button class=" btn btn-primary" type="submit" name="enregistrer">Enregistrer</button>
       	  </div>
		
       </div>
	   </form>
	   <script src="assets/bootstrap.bundle.min.js"></script>
    <script src="assets/bootstrap.min.js"></script>
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>
</html> 