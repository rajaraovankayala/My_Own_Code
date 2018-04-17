<?php
/**
 * Created by PhpStorm.
 * User: Rajarao.Vankayala
 * Date: 4/10/2018
 * Time: 10:32 AM
 */
?>

<?php echo form_open_multipart('product_upload/do_upload');?>
<?php // echo $error; ?>
<label>File type:jpg|jpeg|png</label><br/><br/>
<label>Category type:</label>
<select name="category-type">
    <option value="Men">Men</option>
    <option value="Women">Women</option>
    <option value="Kids">Kids</option>
    <option value="Home_Living">Home & Living</option>
</select><br/><br/>
<label>Sub Category</label>
<select name="sub_category">
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
    <option value="Coats">Coasts</option>
</select><br/><br/>
<label>Upload Image</label>
<input type="file" name="filename" size="20"/><br/>
<input type="submit" value="upload"/>
</form>





