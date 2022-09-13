<?php 
  $x=$_REQUEST['x'] ?? "";
  $y=$_REQUEST['y'] ?? "";
  $z = ((float)$x) + ((float)$y); 
?>
<!DOCTYPE html>
<form action="add.php" method="GET" >
    <input type="text" name="x" placeholder="x" 
       value="<?php echo $x ?>">
    +
    <input type="text" name="y" placeholder="y" 
       value="<?php echo $y ?>"
    >
=
<input type="text" name="z" placeholder="x+y" 
    value="<?php echo $z ?>"
>
<input type="submit" value="?">

</form>