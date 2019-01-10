<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $username = mysqli_real_escape_string($db,$_POST['username']);
      $password = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT username FROM utenti WHERE username = '$username' and password = '$password'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     // $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");
         $_SESSION['login_user'] = $username;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>

<html>
   
   <head>
      <title>Login Page</title>
	  <meta http-equiv="content-type" content="text/html" charset="utf-8" />
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<meta name="description" content="" >
		
      <link rel="StyleSheet" href="artboard_1_copy.css" />
	  
	  <style> 
input[type=text] {
  width: 90%;
  padding: 0px 0px;
  margin: 0px;
  margin-top: 18px;
  margin-left: 25px;
 
  box-sizing: border-box;
  border: white;
  background:rgba(249,248,249,255)
}
input[type=password] {
  width: 90%;
  padding: 0px 0px;
  margin: 0px;
  margin-top: 18px;
  margin-left: 25px;
 
  box-sizing: border-box;
  border: white;
  background:rgba(249,248,249,255)
}
button[type=submit] {
	color: transparent;
	background-color: transparent;
	border: 0px;
  width: 100%;
  padding: 8px 0px;
  margin-bottom: 50px;
 
  margin-left: 15px;
 padding-bottom: 25%;
  
}
#login_ek1 {
	
	top: 8px;
	left: 145px;
	width: 69px;
	height: 35px;
	font-family: DIN;
	font-size:35px;
	text-align: center;
	color:#f9f9f9;
}



</style>
    
 
   </head>
   
   <body>
	<div id="content-container" >
			<div id="_bg__artboard_1"  ></div>

			<div id="base"  >
				<div id="rectangle_1"  ></div>

			</div>

			<div id="arealogin"  >
				<div id="rectangle_2"  ></div>

			</div>

			<div id="camposuperiore"  >
				<div id="rectangle_3"  ></div>

			</div>
<div id="bandainferiore"  >
				<img src="skins/path_1.png" id="path_1" />

			</div>
			
			

      <div align = "center">
        <!-- <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
			  

			
			   
			   
               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
              <!-- <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>-->
					
            </div>
				
         </div> 
		
		 <form action = "" method = "post">
		 <div id="campouser"  >
				<div id="rectangle_4"  ></div>
				<div id="rectangle_5"  ><input type = "text" name = "username"/></div>

			</div>

			<div id="campopassword"  >
				<div id="rectangle_5"  ><input type = "password" name = "password"/></div>

			</div>




<div id="login"  >

				<div id="group_2"  >
					<div id="rectangle_6"  ></div>
					<div id="login_ek1" >
						Login<button type="submit">Login</button>
					</div>

				</div>

			</div>
</form>
			<div id="user"  >
				<div id="username" >
					Username
				</div>

			</div>

			<div id="password"  >
				<div id="password_ek1" >
					Password
				</div>

			</div>
		<div id="remember"  >
				<div id="remember_me" >
					Remember me
				</div>

			</div>

			<div id="quadratino"  >
				<div id="rectangle_7"  ></div>

			</div>

			<div id="forgot"  >
				<div id="forgot_your_password_" >
					Forgot your password?
				</div>

			</div>
<div id="goccia"  >

				<div id="group_4"  >
						<img src="skins/group_3.png" id="group_3" />

					</div>

			</div>






		
      </div>

	  
	  
	  
   </body>
</html>