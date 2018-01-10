<?php include "db.php"; ?> <!-- CONNECTION -->
<?php session_start(); ?> <!-- SESSION -->
<?php
    //checks if the login form has been submitted
    if(isset($_POST[login])) {
        
        //gets the inputs from the login form and assigns them to 2 variables and 'mysqli_real_escape_string' helps prevent PHP injection into the database. Wraps the 'username' in 'strtolower' to make it all lowecase, but NOT THE PASSWORD since that should be case sensitive.
        $username = mysqli_real_escape_string($connection, strtolower($_POST['username']) );
        $password = mysqli_real_escape_string($connection, $_POST['password']);
        
        //CHANGE TO ID INSTEAD OF USERNAME 
        $query = "SELECT * FROM users WHERE user_username = '{$username}' AND user_password = '{$password}' LIMIT 1 ";
        $select_user_query = mysqli_query($connection, $query);
        
        if(!select_user_query) {
            die("Query failed" . mysqli_error($connection));
        } //.if
        
        //assigns variables to the data gathered from the database
        while($row = mysqli_fetch_array($select_user_query)) {
            $user_id = $row['user_id'];
            $user_username = $row['user_username']; //CASE SENSITIVE. FIX!!!
            $user_password = $row['user_password']; //NOT CASE SENSITIVE. FIX!!
            $user_firstname = $row['user_firstname'];
            $user_lastname = $row['user_lastname'];
            $user_email = $row['user_email'];
            $user_role = $row['user_role'];
        }//.while
        
        
        //if the 'username' and 'password' match, and if the user is an 'admin' it will sign the user in to the admin page!
        if($username === $user_username && $password === $user_password && $user_role === 'admin') {
        //ASSIGN SESSION
            $_SESSION['user_id'] = $user_id;
            $_SESSION['user_username'] = $user_username;
            $_SESSION['user_firstname'] = $user_firstname;
            $_SESSION['user_lastname'] = $user_lastname;
            $_SESSION['user_email'] = $user_email;
            $_SESSION['user_password'] = $user_password;
            $_SESSION['user_role'] = $user_role;
        //directs authorized user to the admin page
            header("Location: ../admin/index.php");
            exit; //in case there are two header locations (for safety)
        } else {
            header("Location: ../index.php");
            exit;
        }//if/elseif/else
        
    }//.if

?>