<?php
require_once "../configdb/db_connector.php";
require_once "../models/categorymodel.php";
if (isset($_GET['event']) || !empty($_GET['event'])) {

    $event = $_GET['event'];

    switch ($event) {
        case 'add':

            $book = new Book();

            $book->username= $_POST['username'];
       
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
                   
                    $book->edit();
                break;
                default:
                echo "<h1 style='color:red'>Invalid Action !</h1>";
                break;
            }
        
  
} else {
    echo "<h1 style='color:red'>You Are not allowed !</h1>";
}


?>