<?php 
include 'includes/autoloader.php';

//If the delete button is pressed checked-off product list is passed over to the controller
if( isset($_POST['delete']) ){
    $skus = $_POST;
    $newdeleter = new Contr();
    $newdeleter->deleteSku($skus);
    header('Location: index.php');
}

//Creating view class to display data from database
$newbook = new View();
$books = $newbook->showBook();
$discs = $newbook->showDisc();
$furnitures = $newbook->showFurniture();

?>

<!DOCTYPE html>
<html lang="en">

<!-- Fetching header -->
<?php include('templates/header.php') ?>

<br/>

<!-- Making a form to check the checkboxes for deletion -->
<form name = "delete" id = "delete" method="POST" action="index.php">

<!-- Creating cards for books -->
<div class = "container">
    <div class = "row">
    <?php  foreach($books as $book) {?>
    <div class="col-md-6 col-lg-3">
        <div class="card text-center">
        <!-- Creating checkboxes for mass delete action -->
        <input type="checkbox" class="check-input" name = "<?php echo htmlspecialchars($book['SKU'])?>" value = "<?php echo htmlspecialchars($book['SKU'])?>" >       
        <img src="templates/images/book.png" class="img img1">      
        <div class="card-body"> 
            <h6 class = "s0"><?php echo htmlspecialchars($book['SKU'])?></h6>
            <h6 class = "s1"><?php echo htmlspecialchars($book['Name'])?></h6>
            <h6 class = "s0"><?php echo htmlspecialchars($book['Price']) . '$'?></h6>
            <h6 class = "s0"><?php echo htmlspecialchars($book['Weight']) . 'KG'?></h6>
        </div>
        </div>
    </div>
    <?php   } ?>
    </div>
</div>
    </br>

<!-- Creating cards for discs -->
<div class = "container">
    <div class = "row">
    <?php  foreach($discs as $disc) {?>
    <div class="col-md-6 col-lg-3">
        <div class="card text-center">
        <!-- Creating checkboxes for mass delete action -->
        <input type="checkbox" class="check-input" name = "<?php echo htmlspecialchars($disc['SKU'])?> " value = "<?php echo htmlspecialchars($disc['SKU'])?>">       
        <img src="templates/images/disc.png" class="img img2">   
        <div class="card-body">
            <h6 class = "s0"><?php echo htmlspecialchars($disc['SKU'])?></h6>
            <h6 class = "s1"><?php echo htmlspecialchars($disc['Name'])?></h6>
            <h6 class = "s0"><?php echo htmlspecialchars($disc['Price']) . '$'?></h6>
            <h6 class = "s0"><?php echo htmlspecialchars($disc['Size']) . 'MB'?></h6>
        </div>
        </div>
    </div>
    <?php   } ?>
    </div>
</div>
</br>

<!-- Creating cards for furnitures -->
<div class = "container">
    <div class = "row">
    <?php  foreach($furnitures as $furniture) {?>
    <div class="col-md-6 col-lg-3">
        <div class="card text-center">
        <!-- Creating checkboxes for mass delete action -->
        <input type="checkbox" class="check-input" name = "<?php echo htmlspecialchars($furniture['SKU'])?>" value = "<?php echo htmlspecialchars($furniture['SKU'])?>">       
        <img src="templates/images/furniture.png" class="img img3">     
        <div class="card-body">
            <h6 class = "s0"><?php echo htmlspecialchars($furniture['SKU'])?></h6>
            <h6 class = "s1"><?php echo htmlspecialchars($furniture['Name'])?></h6>
            <h6 class = "s0"><?php echo htmlspecialchars($furniture['Price']) . '$'?></h6>
            <h6 class = "s0"><?php echo htmlspecialchars($furniture['Height']) . 'x' . htmlspecialchars($furniture['Width']) . 'x' . htmlspecialchars($furniture['Length'])?></h6>
        </div>
        </div>
    </div>
    <?php  } ?>
    </div>
</div>
</br>
</form>

<!-- Fetching Footer -->
<?php include('templates/footer.php') ?>

</html>