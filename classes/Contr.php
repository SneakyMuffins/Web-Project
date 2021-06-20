<?php

//Controller part of the MVC model
class Contr extends Products{

//Calls the Setbook method from the Products class
public function createBook($enteredinfo){
    $this->setBook($enteredinfo);
}

//Calls the SetDisc method from the Products class
public function createDisc($enteredinfo){
    $this->setDisc($enteredinfo);
}

//Calls the SetFurniture method from the Products class
public function createFurniture($enteredinfo){
    $this->setFurniture($enteredinfo);
}

//Calls the deleteSkuz method from the Products class
public function deleteSku($enteredinfo){
    $this->deleteSkuz($enteredinfo);
}

}
?>