<!-- SESSION -->
<?php session_start(); ?> 

<?php
//This cancels the user's $_SESSION's when they press the logout button on the admin page.
    $_SESSION['username_session'] = null;
    $_SESSION['user_firstname'] = null;
    $_SESSION['user_lastname'] = null;
    $_SESSION['user_role'] = null;

header("Location: ../index.php");
exit;

?>