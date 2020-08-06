<?php

class Book{
    public $username;
    public $price;
    public $category;
     public $image;
    





    function insert()
    {
        $base = connect_to_db();
    
        $requette = "INSERT INTO addbooks VALUES (null,'$this->username','$this->price','$this->category','$this->image');";

        $rowInserted = $base->exec($requette);

        if ($rowInserted == 1) {
            header('location:../admin/add_book.php');
        } else {
            echo "SQL Error !";
        }
    }
    function delete()
    {
        $base = connect_to_db();
      
        $requette = "DELETE from  addbooks where id=$this->id;";
      
        $rowDeleted = $base->exec($requette);
    
        if ($rowDeleted == 1) {
            header('location:../admin/add_book.php');
        } else {
            echo "SQL Error !";
        }
    }


    function edit(){
        $base = connect_to_db();

        $requette = "UPDATE addbooks set 
         name='$this->username',
        price=$this->price,
        category=$this->category,
          image='$this->image' 
        ";


        $rowUpdated = $base->exec($requette) or die(print_r($base->errorInfo(), true));;
        if ($rowUpdated == 1) {
            header('location:../admin/add_book.php');
        }else {
            echo "SQL Error !";
        }
    }
}

?>