<?php
require_once "../configdb/db_connector.php";
require_once "../models/bookmodel.php";
if (isset($_GET['event']) || !empty($_GET['event'])) {

    $event = $_GET['event'];

    switch ($event) {
        case 'add':

            $book = new Book();

            $book->username    = $_POST['username'];
            $book->price    = $_POST['price'];
            $book->category   = $_POST['category'];
           
            //image
            $info = pathinfo($_FILES['image']['name']);
            $ext = $info['extension']; // get the extension of the file
            $newname = generateRandomString(). '.' . $ext;
            $target = 'uploads/'.$newname;
            move_uploaded_file( $_FILES['image']['tmp_name'], $target);
            $book->image = $newname;
            $book->insert();
            break;

            case 'delete':
              
                $book = new Book();
                
                $book->id = $_GET['idbook'];
                $book->delete();
             
    
                break;
        
                case 'edit':            
               
                    $book = new Book();
                    $book->username    = $_POST['username'];
                    $book->price    = $_POST['price'];
                    $book->category   = $_POST['category'];
                   
                    //image
                    $info = pathinfo($_FILES['image']['name']);
                    $ext = $info['extension']; // get the extension of the file
                    $newname = generateRandomString(). '.' . $ext;
                    $target = 'uploads/'.$newname;
                    move_uploaded_file( $_FILES['image']['tmp_name'], $target);
                    $book->image = $newname;
                    $book->edit();
                break;
                default:
                echo "<h1 style='color:red'>Invalid Action !</h1>";
                break;
            }
        
  
} else {
    echo "<h1 style='color:red'>You Are not allowed !</h1>";
}

function generateRandomString($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


?>