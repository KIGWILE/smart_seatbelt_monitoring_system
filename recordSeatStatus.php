<?php

if(isset($_POST['seatNo']) && isset($_POST['seatState'])){
    include('config.php');

    $seatNo = $_POST['seatNo'];
    $seatState = $_POST['seatState'];

    $insert1= "INSERT INTO `seatbelt_status`( `seatnumber`, `state`) VALUES ('$seatNo','$seatState') ON DUPLICATE KEY UPDATE state = VALUES(state);";
    if(mysqli_query($conn,$insert1)){
        echo "Recorded successfully";
    }else{
        echo "unable to record seat status";
    }
}else{
    echo "Invalid request";
}

?>