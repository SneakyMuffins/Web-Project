<!-- Book form -->

<div class="form-group col-md-6 col-lg-5">
 <label class="col-sm-2 col-form-label">Weight:</label>
 <input class="form-control <?php echo (isset($errors['Weight'])) ? "is-invalid " : "";?>" type="text" name="Weight" placeholder="Weight in KG" value = "<?php echo htmlspecialchars($_POST['Weight'] ?? '') ?>">
 <small class="invalid-feedback"> <?php echo $errors['Weight'] ?? '' ?> </small>
</div>
<br/>