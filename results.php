<?php
    $sum = 0;
    $numbers = "";

    $userNumFirst = $_POST['firstNumber'];
    $userNumSecond = $_POST['secondNumber'];

for ($counter = 0; $counter < $userNumSecond; $counter++) {
    if ($counter < $userNumSecond - 1){
        $numbers = $numbers . $userNumFirst . "+";
    }
    else {
        $numbers = $numbers . $userNumFirst;
    }
    $sum = $sum + $userNumFirst;
}
?>  
    <h3>Results:</h3>
    <?php echo $numbers . " = " . $sum ?>