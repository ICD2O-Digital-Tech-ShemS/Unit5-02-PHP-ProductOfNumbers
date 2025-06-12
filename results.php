<?php
    $sum = 0;
    $numbers = "";

    $userNum = $_POST['userNum'];
    $userNum2 = $_POST['userNum2'];

for ($counter = 0; $counter < $userNum2; $counter++) {
    if ($counter < $userNumSecond - 1){
        $numbers = $numbers . $userNum . "+";
    }
    else {
        $numbers = $numbers . $userNum;
    }
    $sum = $sum + $userNum;
}
?>  
    <h3>Results:</h3>
    <?php echo $userNum . " x " . $userNum2 . " = " . $sum ?>