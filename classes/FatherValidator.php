<?php

//Class used to validate the user input
class FatherValidator{

private $data; //User input
private $skus; //Existing skus in the database to compare to the user input
private $errors = []; //Array of errors to be outputted if there are any
//Class constructor that takes the user input and Skus from the database
public function __construct($post_data,$sku_database){
$this->data = $post_data;
$this->skus = $sku_database;
}
//The main method of the validator class that calls all the validator methods
public function validateForm(){
$this->validateSku();
$this->validateName();
$this->validatePrice();
$this->validateType();

if($this->data['form'] == 'Book'){
$this->validateWeight();    
}else if($this->data['form'] == 'DVD-Disc'){
$this->validateSize();   
}else if($this->data['form'] == 'Furniture'){
$this->validateHeight();
$this->validateWidth();
$this->validateLength();
}
return $this->errors;
}
//Validates if the form type is chosen or not
private function validateType(){
    $val = $this->data['form'];
    if($val == 'Choose...'){
        //Adds error to the error array
        $this->addError('selectType','Please select a product type');
    } 
}
//Checks the uniqueness and validity of the SKU inputted by the user
private function validateSku(){
    //Trims the input
    $val = trim($this->data['SKU']);
    if(empty($val)){
        //Adds error to the error array
        $this->addError('SKU','SKU field cannot be empty');
    } else {
        if(!preg_match('/^[a-zA-Z0-9]*$/', $val)){
            //Adds error to the error array
            $this->addError('SKU', 'SKU field must only contain numbers and letters');
        }
      }
      //Checks the uniqueness of the user inputted SKU
     foreach($this->skus as $skuz){
        foreach($skuz as $skux){
          if($val == $skux){
              //Adds error to the error array
            $this->addError('SKU','SKU is taken');
          }  
        }
    }
}
//Validates if the price field
private function validatePrice(){
    //Trims the input
    $val = trim($this->data['Price']);
    //Checks if input is empty
    if(empty($val)){
        //Adds error to the error array
        $this->addError('Price','Price field cannot be empty');
    } else {
        //Checks if the input is valid
        if(!preg_match('/^[0-9]*$/', $val)){
            //Adds error to the error array
            $this->addError('Price', 'Price field must only contain numbers');
        }
    }
}

private function validateName(){
    //Trims the input
    $val = trim($this->data['Name']);
    //Checks if input is empty
    if(empty($val)){
        //Adds error to the error array
        $this->addError('Name','Name field cannot be empty');
    } else {
        //Checks if the input is valid
        if(!preg_match('/^[a-zA-Z\s]*$/', $val)){
            //Adds error to the error array
            $this->addError('Name', 'Name field must only contain letters');
        }
    }
}

private function validateWeight(){
    //Trims the input
    $val = trim($this->data['Weight']);
    //Checks if input is empty
    if(empty($val)){
        //Adds error to the error array
        $this->addError('Weight','Weight field cannot be empty');
    } else {
        //Checks if the input is valid
        if(!preg_match('/^[0-9]*$/', $val)){
            //Adds error to the error array
            $this->addError('Weight', 'Weight field must only contain numbers');
        }
    }
}

private function validateSize(){
    //Trims the input
    $val = trim($this->data['Size']);
    //Checks if input is empty
    if(empty($val)){
        //Adds error to the error array
        $this->addError('Size','Size field cannot be empty');
    } else {
        //Checks if the input is valid
        if(!preg_match('/^[0-9]*$/', $val)){
            //Adds error to the error array
            $this->addError('Size', 'Size field must only contain numbers');
        }
    }
}

private function validateHeight(){
    //Trims the input
    $val = trim($this->data['Height']);
    //Checks if input is empty
    if(empty($val)){
        //Adds error to the error array
        $this->addError('Height','Height field cannot be empty');
    } else {
        //Checks if the input is valid
        if(!preg_match('/^[0-9]*$/', $val)){
            //Adds error to the error array
            $this->addError('Height', 'Height field must only contain numbers');
        }
    }
}

private function validateWidth(){
    //Trims the input
    $val = trim($this->data['Width']);
    //Checks if input is empty
    if(empty($val)){
        //Adds error to the error array
        $this->addError('Width','Width field cannot be empty');
    } else {
        //Checks if the input is valid
        if(!preg_match('/^[0-9]*$/', $val)){
            //Adds error to the error array
            $this->addError('Width', 'Width field must only contain numbers');
        }
    }
}

private function validateLength(){
    //Trims the input
    $val = trim($this->data['Length']);
    //Checks if input is empty
    if(empty($val)){
        //Adds error to the error array
        $this->addError('Length','Length field cannot be empty');
    } else {
        //Checks if the input is valid
        if(!preg_match('/^[0-9]*$/', $val)){
            //Adds error to the error array
            $this->addError('Length', 'Length field must only contain numbers');
        }
    }
}

//Method which is used to add errors to an error array to display to the user
private function addError($key, $val){
$this->errors[$key] = $val;
}

}
?>