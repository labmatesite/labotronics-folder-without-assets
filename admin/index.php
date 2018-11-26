<?php
require_once("header.php");
if($_POST['field'] && $_POST['type'] !== ""){
    $column_name = $_POST['field'];
    $column_type = $_POST['type'];     
    $stmt = $mysqli->prepare('ALTER TABLE `products` ADD `'.$column_name.'` '.$column_type.' NOT NULL AFTER `features`'); 
    if ($stmt->execute()) {
        echo "Column Added";
    }else{
        throw new Exception('Statement could not prepare on get_all ' . $mysqli->error);
    }
}
?>

<br><br><br>index
<h1>Add Field In Product Table : </h1>
<form method="POST" action=""> 
    <label>Field Name</label>
    <input type="text" name="field" id="field" required><br>
    <label>Fiels Data Type</label>
    <input type="text" name="type" id="type" required> <small> ( All In Caps )</small><br>
    <input type="submit" value="Add Field">
</form>

<?php
require_once("footer.php");
