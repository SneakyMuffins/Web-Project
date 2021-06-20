<!-- DVD-disc form -->

<div class="form-group col-md-6 col-lg-5">
 <label class="col-sm-2 col-form-label">Size:</label>
 <input class="form-control <?php echo (isset($errors['Size'])) ? "is-invalid " : "";?>" type="text" name="Size" placeholder="Size in MB" value = "<?php echo htmlspecialchars($_POST['Size'] ?? '') ?>"> 
 <small class="invalid-feedback"> <?php echo $errors['Size'] ?? '' ?> </small>
</div>