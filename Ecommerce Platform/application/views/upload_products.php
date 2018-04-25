<?php
/**
 * Created by PhpStorm.
 * User: Dinesh.Grandhi
 * Date: 4/13/2018
 * Time: 3:09 PM
 */
?>
<!DOCTYPE html>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<h3>Product Uploads</h3>
<hr />

<div style="color:red">
	<?php echo validation_errors(); ?>
  <?php if(isset($error)){print $error;}?>
</div>
<?php echo form_open_multipart('Product_upload/do_upload');?>
<div class="container">
<div class="row">
<div class="col-sm-6">
  <div class="form-group">
  <label for="pic_title">Product category:</label>
      <select class="form-control" name="category-type">
          <option value="Men">Men</option>
          <option value="Women">Women</option>
          <option value="Kids">Kids</option>
          <option value="Home_Living">Home & Living</option>
      </select>
  </div>
  <div class="form-group">
        <label for="pic_title">Product Sub-category:</label>
      <select class="form-control" name="sub_category">
          <option value="Shirts">Shirts</option>
          <option value="T-Shirts">T-shirts</option>
          <option value="Casual Shirts">Casual Shirts</option>
          <option value="Formal-Shirts">Formal-Shirts</option>
          <option value="Sweaters">Sweaters</option>
          <option value="Sweat-Shirts">Sweat-Shirts</option>
          <option value="Jackets">Jackets</option>
          <option value="Blazers">Blazers</option>
          <option value="Tops">Tops</option>
          <option value="Shrugs">Shrugs</option>
          <option value="Jeans">Jeans</option>
          <option value="Coats">Coats</option>
          <option value="Track-Pants">Track-Pants</option>
          <option value="Indian-Wear">Indian-Wear</option>
          <option value="Shorts">Shorts</option>
          <option value="Ethnic wear">Jeans</option>
          <option value="Mats">Mats</option>
          <option value="Bed Sheets">Bed Sheets</option>
      </select>
  </div>
  <div class="form-group">
    <label for="pic_desc">Product Description:</label>
    <textarea name="description" class="form-control" ></textarea>
  </div>
  <div class="form-group">
    <label for="pic_title">Product Quantity:</label>
    <input type="number" class="form-control" name="quantity" >
  </div>
  <div class="form-group">
    <label for="pic_title">Product Price*:</label>
    <input type="number" class="form-control" name="price" >
  </div>
  <div class="form-group">
    <label for="pic_file">Product Image*:</label>
    <input type="file" name="filename" class="form-control" >
  </div>
  <a href="<?=base_url();?>" class="btn btn-warning">Back</a>
  <button type="submit" class="btn btn-success">Upload</button>
</form>
</div>
</div>
</div>
</body>
</html>
