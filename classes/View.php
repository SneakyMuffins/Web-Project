<?php

//View part of the MVC model
class View extends Products{

//Calls the getBook method from the Products class
public function showBook(){
    return $results = $this->getBook();
}

//Calls the getDisc method from the Products class
public function showDisc(){
    return $results = $this->getDisc();
}

//Calls the getFurniture method from the Products class
public function showFurniture(){
   return $results = $this->getFurniture();
}

//Calls the getSKU method from the Products class
public function showSKU(){
    return $results = $this-> getSKU();
}

}
?>