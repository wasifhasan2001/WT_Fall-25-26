<?php
require_once(__DIR__ . '/../../../shared/db.php');


function checkAndUnlock($userId, $actionType) {
    global $conn;


    $qBuy = mysqli_query($conn, "SELECT COUNT(*) as c FROM payments WHERE user_id=$userId AND payment_type='buy' AND payment_status='success'");
    $buyCount = mysqli_fetch_assoc($qBuy)['c'];


    $qRent = mysqli_query($conn, "SELECT COUNT(*) as c FROM payments WHERE user_id=$userId AND payment_type='rent' AND payment_status='success'");
    $rentCount = mysqli_fetch_assoc($qRent)['c'];


    if ($actionType === 'buy' && $buyCount >= 1) {
        awardBadge($userId, 'first_buy');
    }


    if ($actionType === 'rent' && $rentCount >= 1) {
        awardBadge($userId, 'renter');
    }
    

    if ($actionType === 'download') {
        awardBadge($userId, 'downloader');
    }
}


function awardBadge($userId, $code) {
    global $conn;
    

    $qA = mysqli_query($conn, "SELECT id FROM achievements WHERE code='$code' LIMIT 1");
    $ach = mysqli_fetch_assoc($qA);
    
    if(!$ach) return; 
    
    $achId = $ach['id'];


    $check = mysqli_query($conn, "SELECT * FROM user_achievements WHERE user_id=$userId AND achievement_id=$achId");
    
    if(mysqli_num_rows($check) == 0) {

        $stmt = mysqli_prepare($conn, "INSERT INTO user_achievements (user_id, achievement_id) VALUES (?, ?)");
        mysqli_stmt_bind_param($stmt, "ii", $userId, $achId);
        mysqli_stmt_execute($stmt);
    }
}
?>