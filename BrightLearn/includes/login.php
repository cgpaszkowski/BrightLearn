<!--
      Process the login information and authenticate (or, verify) the user, i.e. 
      -compare the username and password submitted by the user with details stored in the CSV file, and 
      -verify that records match. 
      
      You can assume that the user will provide their username (not email address) along with their password. 

-->

<?php
   if (isset($_POST['submit'])){
      $usernameT = trim($_POST['username']);
      $passwordT = trim($_POST['password']);


      if ( !strlen($usernameT) || !strlen($passwordT)){
         die("<p style='color:red;'>Invalid: Please enter both fields </p>");
      }
      else {
         //$login = validateLogin($usernameT, $passwordT);
         $loginState = FALSE;
         $file = fopen("../db/users.csv","r");
         while(!feof($file)){ //if not end of file, get next line
            $line = fgetcsv($file); //get line
            if ($line[0] === $usernameT && $line[2] === $passwordT){
               $loginState = TRUE;
               $usertype = $line[3];
               break;
            }
         }
         fclose($file);


         if ($loginState){
            //login action ---> set session user id/type here??
            session_start();
            $cookie_name = "lms_access_" . md5($usernameT);
            $datetime = date("d-m-Y") . ", at " . date("h:i:sa");
            
            
            if(isset($_COOKIE[$cookie_name])) {  //if cookie exists
               $tempTime = $_COOKIE[$cookie_value];
               $_SESSION['lastlogintime'] = $tempTime; //last time logged in
            }
            else {
               $_SESSION['lastlogintime'] = "0";
            }
            
            $cookie_value = $datetime;
            setcookie($cookie_name, $cookie_value, time() + 1000); //zero means to expire at end of session
            $_SESSION['login'] = $loginState;
            $_SESSION['datetime'] = $datetime;
            $_SESSION['username'] = $usernameT;
            $_SESSION['type'] = $usertype;  

            header("Location: ../index.php?", true);
            
         }
         else {
            header("Location: ../index.php?loginError=1", true);
            die();
         }
      }
   }

?>