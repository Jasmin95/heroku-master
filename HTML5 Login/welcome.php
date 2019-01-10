<?php
   include('session.php');
   
   
   $user_check = $_SESSION['login_user'];
   $sql = "SELECT data,ora,valoregli FROM valori WHERE username = '$user_check'";
      $result = mysqli_query($db,$sql);
	 



      
?>

<html">
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Welcome <?php echo $login_session; ?></h1> 
	
	 <h1>Valori <br>
	 <?php while ($row = $result->fetch_assoc()) {
    $id1 =  implode('- ',$row);
	echo "valore = " . $id1 . "<br />";
	
	
} ?>
</h1> 
	  
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   
</html>