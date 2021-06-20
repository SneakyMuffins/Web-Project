<!-- Furniture form -->

<div class="form-group col-md-6 col-lg-5">
 <label class="col-sm-2 col-form-label">Height:</label>
 <input class="form-control <?php echo (isset($errors['Height'])) ? "is-invalid " : "";?>" type="text" name="Height" placeholder="Height" value = "<?php echo htmlspecialchars($_POST['Height'] ?? '') ?>">
 <small class="invalid-feedback"> <?php echo $errors['Height'] ?? '' ?> </small>
 <br/>
 <label class="col-sm-2 col-form-label">Width:</label>
<input class="form-control <?php echo (isset($errors['Width'])) ? "is-invalid " : "";?>" type="text" name="Width" placeholder="Width" value = "<?php echo htmlspecialchars($_POST['Width'] ?? '') ?>">
<small class="invalid-feedback"> <?php echo $errors['Width'] ?? '' ?> </small>
 <br/>
 <label class="col-sm-2 col-form-label">Length:</label>
 <input class="form-control <?php echo (isset($errors['Length'])) ? "is-invalid " : "";?>" type="text" name="Length" placeholder="Length" value = "<?php echo htmlspecialchars($_POST['Length'] ?? '') ?>">
 <small class="invalid-feedback"> <?php echo $errors['Length'] ?? '' ?> </small>
 <br/>
</div>