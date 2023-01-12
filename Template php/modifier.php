<html>
<head>
	<link rel="stylesheet" href="../style.css" />
</head>
<body>
<?php
        $color = 'white';
 
        require('../config.php');
        
        if(isset($_POST['valider']))
        {
         $username=$_POST['username'];
         
        $sql ="SELECT email,type FROM utilisateurs WHERE username='".$username."'";
        echo $sql;
        $result= mysqli_query($conn,$sql) or die (mysqli_error());
    $row = $result->fetch_assoc() ;
    $username = $row['username'];
 
        }
        /*else if (isset($_POST['modifier']))
        {
                
        $sql ="UPDATE utilisateur SET email = '".$email."', type = '".$type."' WHERE username='".$username."'";
        $result= mysqli_query($conn,$sql) or die (mysqli_error());
    $row = $result->fetch_assoc() ;
    $email = $row['email'];
        $type = $row['type'];
 
        }*/
?>
		<form id = "formEdit" class="box" action="" method="post" name="modifier">
		<h1 class="box-title">Modifier utilisateur</h1>
 
		</br><input type="text" class="box-input" name="username" value="" placeholder="Nom d'utilisateur" />
 
		<input type="submit" class="box-button" id="form" name="valider" value="OK"/></br>
 
		</br><input type="text" class="box-input" name="email" placeholder="Email" />
 
		<div class="input-group">
			<select class="box-input" name="type" id="type" >
				<option value="" disabled selected>Type</option>
				<option value="admin">Admin</option>
				<option value="user">User</option>
			</select>
		</div>
 
		<input type="submit" name="modifier" value="Modifier" class="box-button" />
 
		<p class="box-register">Revenir à la page liste capteur <a href="home.php">Cliquez ici</a></p>
		</form>
 
</body>
</html>