    <?php
    require('connexion.php');
    session_start();
    $login = $_SESSION['login'];
    $sql1="update user set status=0 where login='".$login."'";
    $req1=mysqli_query($connect,$sql1); 
    mysqli_close($connect);
    session_unset();
    session_destroy();
    header('Location: login.php');
    ?>
