<?php

if(isset($_GET['seatNo']) && isset($_GET['seatState'])){
    include('config.php');

    $seatNo = $_GET['seatNo'];
    $seatState = ($_GET['seatState'] == "N/A") ? "" : $_GET['seatState'];

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