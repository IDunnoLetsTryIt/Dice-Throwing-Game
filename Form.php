<?php
include_once "Dice.php";

$Dice = new Dice((int)$_POST["dice"]);
$Diceroll = $Dice->roll();

?>


<form action="Form.php" method="post">
    <input type="text"name = "dice">
    <button type="submit">Throw the Dice</button>
</form>


<?php 
foreach($Diceroll as $die){
   echo 
   '<div class="Die">'. $die .'</div>';
}
?>
