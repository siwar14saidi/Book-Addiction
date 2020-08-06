<?php
session_start();

if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {
    if (isset($_SESSION['is_admin']) && !empty($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1)
        header('location:../admin/index.html');
    else
        header('location:profile.php');
}
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
    <title>Login</title>
</head>

<body>

<div class="container-login100">
<div class="wrap-login100">
            <form class="login100-form validate-form" method="POST" action="../controllers/userController.php?event=login">
        
                    <?php if (isset($_GET['register']) && !empty($_GET['register']) && $_GET['register'] == 'true') { ?>
                    <div class="row">
                        <div class="col">
                            <div class="alert alert-success">You are registred successfulllllyyy ! </div>
                        </div>
                    </div>
                <?php } ?>

                <?php if (isset($_GET['error']) && !empty($_GET['error']) && $_GET['error'] == 'true') { ?>
                    <div class="row">
                        <div class="col">
                            <div class="alert alert-danger">Email or/and password incorrect(s) ! </div>
                        </div>
                    </div>
                <?php } ?>

                <?php if (isset($_GET['logout']) && !empty($_GET['logout']) && $_GET['logout'] == 'true') { ?>
                    <div class="row">
                        <div class="col">
                            <div class="alert alert-info">Logged Out ! </div>
                        </div>
                    </div>
                <?php } ?>

                <?php if (isset($_GET['login']) && !empty($_GET['login']) && $_GET['login'] == 'false') { ?>
                    <div class="row">
                        <div class="col">
                            <div class="alert alert-danger">You are not loggedIn ! </div>
                        </div>
                    </div>
                <?php } ?>
          
		
	
					<span  class="font2 login100-form-title p-b-43">
						Login to continue
					</span>
					
		
  <div class="form-group">
    <label class="font3" for=" exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp"  class="font3  form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label class="font3" for=" exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    <a href="register.php" class="font2" style="color: #000; margin-left: 25rem;">signe up</a>
  </div>

				
					<div class="container-login100-form-btn">
						<button class="font2 login100-form-btn">
							Login
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