    <?php
    session_start();
    session_unset();
    session_destroy();
    header('Location: login.php');
    $sql= "update user set satus=0";
    exit();
    ?>
