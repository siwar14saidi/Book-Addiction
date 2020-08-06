<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Megrim&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Cairo:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Cairo:wght@200;600&display=swap" rel="stylesheet">
    <title>Register</title>
</head>

<body>

<div class="container-login100">
<div class="wrap-login100">
<form class="login100-form validate-form" method="POST" action="../controllers/userController.php?event=register">
        
          
		
	
					<span  class="font2 login100-form-title p-b-43">
					REGISTER
					</span>
					
		
  <div class="form-group">
    <label class="font3" for=" exampleInputEmail1">Firstname</label>
    <input type="text" name="firstname" class="form-control"  >
  
  </div>
  <div class="form-group">
    <label class="font3" for=" exampleInputEmail1">Lastname</label>
    <input type="text" name="lastname" class="form-control"  >
  
  </div>
  <div class="form-group">
    <label class="font3" for=" exampleInputEmail1">email</label>
    <input type="email" name="email" class="form-control"  >
  
  </div>
 

  <div class="form-group">
    <label class="font3" for=" exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" >

  </div>

				
					<div class="container-login100-form-btn">
						<button class="font2 login100-form-btn">
					register
						</button>
					</div>
					

				</form>

				<div class="login100-more" style="background-image: url('../images/b.jpg');">
				</div>
			</div>
		</div>
	</div>
	
	


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="../js/login.js"></script>
    <script src="./js/result.js"></script>
</body>

</html>