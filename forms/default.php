<!-- Default form -->

<div class="row">

<div class="form-group col-md-6 col-lg-5">
 <label class="col-sm-2 col-form-label">SKU:</label>
    
 <input class="form-control <?php echo (isset($errors['SKU'])) ? "is-invalid " : "";?> " type="text" name="SKU" placeholder="SKU" value = "<?php echo htmlspecialchars($_POST['SKU'] ?? '')  ?>">
 <small class="invalid-feedback"> <?php echo $errors['SKU'] ?? '' ?> </small>

</div> 

 <div class="form-group col-md-6 col-lg-5">
 <label class="col-sm-2 col-form-label">Name:</label>
 <input class="form-control <?php echo (isset($errors['Name'])) ? "is-invalid " : "";?>" type="text" name="Name" placeholder="Name" value = "<?php echo htmlspecialchars($_POST['Name'] ?? '') ?>">
 <small class="invalid-feedback"> <?php echo $errors['Name'] ?? '' ?> </small>
</div>

</div>

<div class="row">

 <div class="form-group col-md-6 col-lg-5">
 <label class="col-sm-2 col-form-label">Price:</label>
 <input class="form-control <?php echo (isset($errors['Price'])) ? "is-invalid " : "";?>" type="text" name="Price" placeholder="Price in dollars" value = "<?php echo htmlspecialchars($_POST['Price'] ?? '') ?>">
 <small class="invalid-feedback"> <?php echo $errors['Price'] ?? '' ?> </small>
</div>
 <!-- The last row div is closed off in the add.php page -->