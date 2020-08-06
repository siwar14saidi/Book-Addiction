
<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>profile</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  
  <link rel="stylesheet" href="../cssviews/bootstrap.css">
 
  <link rel="stylesheet" href="../cssviews/index.css">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/colors/color-74c9be.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Megrim&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Cairo:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Cairo:wght@200;600&display=swap" rel="stylesheet">
  <!-- =======================================================
    Template Name: Marco
    Template URL: https://templatemag.com/marco-bootstrap-agency-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
 <!--navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="font" href="#">BOOK ADDICTION</a>
        <a class="font">
        <?php
                      
                      foreach($_SESSION as $email)
                      {
                      print"$email";
                      }
                                              ?>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav ml-auto">
           
                <li class="nav-item">
               
                    <a class="font nav-link" href="shopingcart.html">shooping card
                        <span id="shopcartnbr"  class="badge badge-pill badge-primary">0</span>
                    </a>
                    <a  class="font dropdown-item" href="../controllers/userController.php?event=logout">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
               
                </li>
            </ul>
        </div>
        
                    
    </nav>
    <!--end navigation-->
    
  <div id="headerwrap">
    <div class="container">
      <div class="row centered">
        <div class="col-lg-8 col-lg-offset-2 mt">
          <h1 class="font animation slideDown">books addiction</h1>
         
        </div>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /headerwrap -->
  <div class="container">
    <div class="row mt centered ">
      <div class="col-lg-4 col-lg-offset-4">
        <h3 class="font">BOOKS</h3>
        <hr>
      </div>
      
    </div>
 
    <div class="container">
        <div class="row">




        <div class="col-lg-3">
            
                <div class="list-group">
                    <a href="#" class="font2 
                    list-group-item list-group-item-action active" onclick="filterBooks('all')">Tous les livres</a>
                     
        <?PHP   
                                       $server = "localhost";
                                       $database = "book";
                                       $username = "root";
                                       $password = "";
                                       $mysqli = new mysqli($server, $username, $password, $database);
                                   
                                    $query = "SELECT * FROM  category ";
                                    
              
                                    if ($result = $mysqli->query($query)) {
                                        while ($row = $result->fetch_assoc()) {?> 
                                        
            <!--./col-lg-3-->
          
                    <a href="#" class="list-group-item list-group-item-action" onclick="filterBooks('<?php echo''.$row["name"].'' ; ?>')"><?php echo''.$row["name"].'' ;}} ?></a>
                </div>
            </div>
            
            <!--col-lg-9-->
            <div class="col-lg-9">
                <div class="row my-4">
                    
                

                <?PHP   
                                       $server = "localhost";
                                       $database = "book";
                                       $username = "root";
                                       $password = "";
                                       $mysqli = new mysqli($server, $username, $password, $database);
                                   
                                    $query = "SELECT * FROM  addbooks ";
                                    
              
                                    if ($result = $mysqli->query($query)) {
                                        while ($row = $result->fetch_assoc()) {?> 
                                        
    <div class="allBooks <?php echo''.$row['category'].'';  ?> col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
           
                        
                                      
              <?php echo' <img class="card-img-top" src="../controllers/uploads/'.$row['image'].'" alt="Card image cap"> ';?>
            </a>

            <div class="card-body">
                <?PHP 
                echo'
                <h4 class="font2 card-title"><a href="">'.$row["name"].'</a></h4>
                <h5> <span class="font3 sold1">'.$row["price"].'</span>$</h5>
            ';
                ?>
                </div>
            <div class="card-footer">
            <a class="btn btn-secondary text-white btn-block" data-toggle="modal" data-target="#exampleModal"  onclick="addtocart('<?php  echo''.$row['name'].''; ?>')" href="#">add to cart</a>
            </div>
            <?php
            echo'
            </div>
         
            </div>';
                                        }
                                    }
?>

      
                             

     <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">shopping card</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="modal-body">
        
        </div>
        <div class="modal-footer">
          <button type="button" class="font2 btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="font2 btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>



















    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
        <script src="js/profile.js"></script>
</body>

</html>