<?php
    session_start();
    if($_SESSION['admin_id']) {
        session_destroy();
        echo "<script>window.location.href='admin.php'</script>";
    } elseif($_SESSION['user_id']) {
        session_destroy();
        echo "<script>window.location.href='index.php'</script>";
    }
    

?>

