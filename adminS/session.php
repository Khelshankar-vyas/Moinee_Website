
<?php 
session_start();   // session starts with the help of this function 
//print_r($_SESSION);
if (!$_SESSION['email'])   // Checking whether the session is already there or not if 
// true then header redirect it to the home page directly 
{
    header("Location:index.php");
}

else // it checks whether the user clicked login button or not 
{
   //
}
?>