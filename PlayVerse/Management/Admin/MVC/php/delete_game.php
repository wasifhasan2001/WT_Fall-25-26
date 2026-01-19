<?php
require_once('../../../shared/auth_guard.php');
requireRole('admin');

require_once('../db/gameModel.php');


$id = (int)($_GET['id'] ?? 0);

if($id > 0){
    
   
    if(deleteGame($id)){
        header("Location: ../html/admin_dashboard.php?msg=" . urlencode("Game deleted"));
    } else {
        header("Location: ../html/admin_dashboard.php?msg=" . urlencode("Delete failed"));
    }
} else {
  
    header("Location: ../html/admin_dashboard.php");
}
exit();
?>