<?php
include 'includes/autoloader.php';

//If the form has been submitted validate the fields and save the info to the database
if(isset($_POST['defaultForm'])){

//retrieving skus from the database to compare with the user inputted sku in order to make sure its unique
$newskus = new View();
$skus = $newskus->showSKU();

//validate entries by passing over new data to the validator class
$validation = new FatherValidator($_POST,$skus);
$errors = $validation->validateForm();

//save data to db if validation phase is passed
 if(empty($errors)){
//Enter the data in the different tables
if($_POST['form'] == 'Book'){
    $newbook = new Contr();
    $newbook->createBook($_POST);
  }else if($_POST['form'] == 'DVD-Disc'){
    $newbook = new Contr();
    $newbook->createDisc($_POST);
  }else if($_POST['form'] == 'Furniture'){
    $newbook = new Contr();
    $newbook->createFurniture($_POST);
  }
      header('Location: index.php');
      }
}
?>

<!DOCTYPE html>
<html lang="en">

<!-- Fetching header -->
<?php include('templates/header.php') ?>

<br/>
 <h2>Add a product</h2>

<!-- Formtypes and the selected form -->
<?php
     $formTypes = array("Choose..."=>"forms/fake.php",
                        "DVD-Disc"=>"forms/disc.php",
                        "Book"=>"forms/book.php",
                        "Furniture"=>"forms/furniture.php");

     $selectedForm = isset($_POST["form"])?$_POST["form"]:"Choose...";
?>

<!-- Generates selectable options && Make unique form -->
<div class ="container form-container">
  <form class="form" name= 'defaultForm' method='POST'>
      <?php include('forms/default.php') ?>
   <div class="form-group col-md-6 col-lg-5">
   <label class=" col-form-label">Select Product Type:</label>
    <select class="custom-select mr-sm-2 <?php echo (isset($errors['selectType'])) ? "is-invalid " : "";?>" name='form' onchange = 'document.forms["defaultForm"].submit();'>
          <?php foreach($formTypes as $label=>$form): ?>
            <option class="form-control" value="<?=$label ?>" <?= $selectedForm == $label? 'selected="selected"': ''; ?> required> <?=$label ?> </option>
          <?php endforeach; ?>
    </select>
    <small style = "color: #d12a2a"> <?php echo $errors['selectType'] ?? '' ?> </small>
    </div>
<br/>
<!-- includes the selected form type -->
<?php include ($formTypes[$selectedForm]); ?>
</div>
  <input class="btn btn-primary mb-2" type = "submit" name = "defaultForm" value = "submit"> 
</form>
</div>

<!-- Fetching Footer -->
<?php include('templates/footer.php') ?>

</html>