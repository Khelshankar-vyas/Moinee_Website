<?php

header('Access-Control-Allow-Origin: *'); 
session_start();

//client details
date_default_timezone_set("UTC");
$ip = $_SERVER["REMOTE_ADDR"];

$userAgent = $_SERVER["HTTP_USER_AGENT"];

// include db connect class
//r//equire_once("db_connect.php");
 //$testingContent= file_get_contents('php://input')
// connecting to db
//$db = new DB_CONNECT();
define('DB_USER', "root"); 
//db user

define('DB_PASSWORD', ""); 
// db password (mention your db password here)

define('DB_DATABASE', "quizacademy_admin"); 
// database name

define('DB_SERVER', "localhost"); 

$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD) or die(mysqli_error($con));
 
// Selecing database
$db = mysqli_select_db($con,DB_DATABASE) or die(mysqli_error($con)) or die(mysqli_error($con));
//check if user wants to sign up/register 



//let recieve data first

$emailId = $_GET['email'];
$password= $_GET['password'];
$role= $_GET['selectedRole'];
$activity= $_GET['activity'];

// echo $_GET['email'];

// $emailId=!empty($_GET['email'])?$_GET['email']:'';
// $password=!empty($_GET['password'])?$_GET['password']:'';//$_GET['password'];
// $role=!empty($_GET['selectedRole'])?$_GET['selectedRole']:'';//$_GET['selectedRole'];
// $activity=!empty($_GET['activity'])?$_GET['activity']:'';//$_GET['activity'];
//echo ($emailId.$password.$role.$activity);

//check if user wants to login
if($activity=="LOGIN")
{
   
    //$username = $_POST['username'];
    //$password = $_POST['password'];
    $rolesArray['ROLES_ARRAY']=array();
    $rolesArray['SELECTED_ROLE']=array();
    //echo "In this loop";
    if(isUserExists($activity, $emailId, $password,$con))
    { 
       // $queryStatsLogin = "INSERT INTO `stats_login` (`USER_ID` ,`USER_AGENT` ,`IP_ADDRESS` ,`LOGIN_STATUS` ,`LOGIN_TIME`)VALUES ('$username',  '$userAgent',  '$ip',  '1', CURRENT_TIMESTAMP);";
               // echo $queryStatsLogin;
		//mysqli_query($queryStatsLogin);
         createSessionForThisUser($emailId);
        
         //echo "Login Successfull";
         // so now you will be needing the different releationtype roles array
        $queryTOGetRoles="SELECT `RELATIONSHIP_TYPE` from `relationship_table_admin` where `RELATIONSHIP_OF`='$emailId'";
       // echo $queryTOGetRoles;
        $query = mysqli_query($con,$queryTOGetRoles);
        $rows = mysqli_num_rows($query);
        // echo "{1-".mysql_insert_id();
        if($rows==0)
        {
            array_push($rolesArray,"No roles for this user");
            //echo "No roles for this user";
        }
        else
        {

            while($row=mysqli_fetch_array($query))
			{
                array_push($rolesArray['ROLES_ARRAY'],$row['RELATIONSHIP_TYPE']);
            }
        }
       // print_r($_SESSION);
    }
    else
    {
        array_push($rolesArray,"NS");
     //createSessionForThisUser($username);

    }
    array_push($rolesArray['SELECTED_ROLE'],$role);
    echo json_encode($rolesArray);
}



//check if user forgot his/her password
else if($activity=="FORGOTPWD")
{
    
    $username = $_POST['username'];
    
    //check if that username exists or not
    //if exists mail send his password on his email id
    if(isUserExists($activity, $username, null))
    {
        $getUserPwd = "select * from `user_table` where `EMAIL_ID` = '".$username."'";
        $query = mysqli_query($con, $getUserPwd);
        $result = mysqli_fetch_array($query);
        $passwordInDbForEmailId = $result['PASSWORD'];
        
        // if mail sent
        if($passwordInDbForEmailId == "" || $passwordInDbForEmailId == null)
        {
            echo $passwordInDbForEmailId;
            echo "{4";
        }
        else if(sendPwdByMail($passwordInDbForEmailId, $username))
        {
            echo $passwordInDbForEmailId;
            //echo "Check your email for the password...";
            echo "{1";
        }
        else //if mail not sent
        {
            //echo "sorry try again....";
            echo "{3";
        }
        
    }
    // if does not exist
    else
    {
        //echo "Invalid username.";
        echo "{2";
    }
   
}



//
//method to check if username already exists.
function isUserExists($activity, $username, $password,$con) //returns true or false
{
   // $checkUserId = "select * from `user_table` where `EMAIL_ID` = '".$username."'";
    $queryText = "select * from `user_table_admin` where `EMAIL_ID` = '".$username."' AND `PASSWORD` = '".$password."'";
    $query = mysqli_query($con,$queryText);
    $rows = mysqli_num_rows($query);
   // echo $rows;
    if($rows == 0)
    { 
        return false; //if user does not exists
    }
    else
    {
       //setUser
       return true; //if user exists
    }
}




function createSessionForThisUser($emailId)
 {
    session_destroy();
    session_start();
    $_SESSION['email'] = $emailId;
    //header('Location: index.html');
    // session_destroy();
    // if (isset($_SESSION['username'])) { header('Location: index.html'); }
    
 }


// function createSessionForThisUser($username)
// {
//         session_destroy();
//         $_SESSION['name'] = "User";
//         $_SESSION['userNAME'] = $username;
// }
?>

