<?php

//Model part of the MVC model
abstract class Products extends Dbc{
    
    protected function getBook(){
        //SQL query that fetches the book table
        $sql = "SELECT SKU,Name,Price,Weight FROM book";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([]);

        //Returns the book table to display later
        $results = $stmt->fetchAll();
        return $results;
    }

    protected function getDisc(){
        //SQL query that fetches the disc table
        $sql = "SELECT * FROM disc";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([]);

        //Returns the disc table to display later
        $results = $stmt->fetchAll();
        return $results;
    }

    protected function getFurniture(){
        //SQL query that fetches the furniture table
        $sql = "SELECT * FROM furniture";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([]);

        //Returns the furniture table to display later
        $results = $stmt->fetchAll();
        return $results;
    }

    protected function getSKU(){
        //SQL query that fetches SKU's from all tables
        $sql = "SELECT SKU FROM book UNION SELECT SKU FROM disc UNION SELECT SKU FROM furniture;";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([]);

        //Returns the SKU's to validate later in the validator class
        $results = $stmt->fetchAll();
        return $results;
    }    

    protected function setBook($enteredinfo){
        //SQL query that inserts the user input data into the book table
        $sql = "INSERT INTO book(SKU, Name, Price, Weight) VALUES (?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$enteredinfo['SKU'],$enteredinfo['Name'],$enteredinfo['Price'], $enteredinfo['Weight'] ]);


  
    }

    protected function setDisc($enteredinfo){
        //SQL query that inserts the user input data into the disc table
        $sql = "INSERT INTO disc(SKU, Name, Price, Size) VALUES (?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$enteredinfo['SKU'],$enteredinfo['Name'],$enteredinfo['Price'], $enteredinfo['Size'] ]);


  
    }

    protected function setFurniture($enteredinfo){
        //SQL query that inserts the user input data into the furniture table
        $sql = "INSERT INTO furniture(SKU, Name, Price, Height, Width, Length) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$enteredinfo['SKU'],$enteredinfo['Name'],$enteredinfo['Price'], $enteredinfo['Height'], $enteredinfo['Width'], $enteredinfo['Length'] ]);


  
    }

    protected function deleteSkuz($enteredinfo){
        $skus = $enteredinfo;
        //Takes each Sku from the array and executes a set of SQL queries with it
        foreach($skus as $sku){
            //SQL query that deletes a product from the books table if it has the SKU from the current iteration
            $sql = "DELETE FROM book WHERE SKU = '$sku'";
                $stmt = $this->connect()->prepare($sql);
                $stmt->execute();
            //SQL query that deletes a product from the disc table if it has the SKU from the current iteration
            $sql = "DELETE FROM disc WHERE SKU = '$sku'";
                $stmt = $this->connect()->prepare($sql);
                $stmt->execute();
            //SQL query that deletes a product from the furniture table if it has the SKU from the current iteration
                $sql = "DELETE FROM furniture WHERE SKU = '$sku'";
                $stmt = $this->connect()->prepare($sql);
                $stmt->execute();
            
            }
    }

}
?>

