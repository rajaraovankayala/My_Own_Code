<?php
/**
 * Created by PhpStorm.
 * User: Rajarao.Vankayala
 * Date: 4/10/2018
 * Time: 11:23 AM
 */
?>

<label>Upload successfully </label>
<?php foreach($upload_data as $item=>$value)
{
    echo $item.":".$value;
}
?>