<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CHAT</title>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="js/script.js"></script>  
</head>
<body>
    <a href="deconnexion.php" id="logout">Logout</a>
    <?php
        session_start();
        if($_SESSION['login'] == ''){
            header('location: login.php');
        }
    ?>
    <div class="main-container">
        <div class="chat-container">
            <?php
                require_once("upload_message.php");
                require_once("chat.php");
            ?>
        </div>

        <div class="display-user">
           <h3>Users online</h3>
           <hr>
            <?php
                require_once("display_user.php");
            ?>
        </div>
    </div>

    <section id="message-section">
        <form action="index.php" method="post">
            <label>
                Nickname:
                <?php
                   $login = $_SESSION['login'];
                    echo $login;            
                ?>
            </label>
            <textarea rows="4" cols="50" placeholder="Type your message" name="message" id="message"></textarea>
            <input type="submit" name="submit-button" class="submit-button" id="submit-button" value="Send">      
        </form>
    </section><!-- message.section -->
</body>
</html>