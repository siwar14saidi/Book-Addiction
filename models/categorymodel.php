<?php

class Book{
    public $username;
  
    





    function insert()
    {
        $base = connect_to_db();
    
        $requette = "INSERT INTO category VALUES (null,'$this->username');";

        $rowInserted = $base->exec($requette);

        if ($rowInserted == 1) {
            header('location:../admin/addcategory.php');
        } else {
            echo "SQL Error !";
        }
    }
    function delete()
    {
        $base = connect_to_db();
      
        $requette = "DELETE from  category where id=$this->id;";
      
        $rowDeleted = $base->exec($requette);
    
        if ($rowDeleted == 1) {
            header('location:../admin/addcategory.php');
        } else {
            echo "SQL Error !";
        }
    }


    function edit(){
        $base = connect_to_db();

        $requette = "UPDATE category set 
         name='$this->username', 
        ";


        $rowUpdated = $base->exec($requette) or die(print_r($base->errorInfo(), true));;
        if ($rowUpdated == 1) {
            header('location:../admin/addcategory.php');
        }else {
            echo "SQL Error !";
        }
    }
}

?>