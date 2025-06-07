<?php 
session_start();   // session starts with the help of this function 
// print_r($_SESSION);
if ($_SESSION['email'])   // Checking whether the session is already there or not if 
// true then header redirect it to the home page directly 
{
    header("Location:utility.php");
}

else // it checks whether the user clicked login button or not 
{
   //
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Quiz Academy Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">

    <!-- Start Include All CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
    
    
    
    <link rel="stylesheet" href="assets/css/preset.css" />
    

    
    <link rel="stylesheet" href="assets/css/responsive.css" />
    

    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/login.css" />
    <!-- <link rel="stylesheet" href="assets/css/themePHP.css" /> -->
    


    
    <!-- End Include All CSS -->
    <style>html {scroll-behavior: smooth;}</style>
    <!-- End Include All CSS -->

    
    <!-- bootstrap cdn -->
   
     <!-- Favicon Icon -->
     <link rel="icon" type="image/png" href="assets/images/logo-icon-png.jpg">
    <!-- Favicon Icon -->

</head>

<body>

    <!-- Header start -->


    <header class="header-01 sticky ">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg " >
                        <!-- logo Start-->
                        <a class="navbar-brand" href="">
                            <img src="assets/images/Q A Logo Black.png" alt="">
                            <img class="sticky-logo" src="assets/images/Q A Logo White.png" alt="">
                        </a>
                        <!-- logo End-->

                        <!-- Moblie Btn Start -->
                        <button class="navbar-toggler" type="button">
                            <i class="fal fa-bars"></i>
                        </button>
                        <!-- Moblie Btn End -->

                        <!-- Nav Menu Start -->
                        <div class="collapse navbar-collapse" >
                            <ul class="navbar-nav"  >
                                                                  
                            <li>
                                    
                                    <ul class="sub-menu">
                                        <!-- <li class="menu-item-has-children">
                                            <a>Roles</a>
                                            <ul class="sub-menu">
                                                <li><a>Super Admin</a></li>
                                                <li><a>School Admin</a></li>
                                                <li><a>Editor</a></li>
                                                <li><a>Guest</a></li>
                                            </ul>
                                        </li>
                                        <li><a>Log-Out</a></li> -->
                                    </ul>
                                </li>
                                <li>
                                    <a  href="#overview" >Overview</a>
                                </li>
                                <li>
                                    <a  href="#features">Features</a>
                                </li>
                                <li>
                                    <a  href="#contact">Contact Us</a>
                                </li>

                            </ul>
                        </div>
                        <!-- Nav Menu End -->

                    </nav>
                </div>
            </div>
        </div>
    </header>


    <!-- Header End -->
    



    <!-- Hero Banner Start -->
    <section class="hero-banner-1" style="background-image: url(assets/images/home/banner.png);">
        <!-- shape -->
        
        <!-- shape -->
        <div class="container">
            <div class="">
                <div class="">


             <!-- Login form start -->
                    <div class="" id="login-form">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto shadow p-4" style="box-shadow: 0 0 15px 9px #00000096;">
                            <div class="form-group">
                                <h3 >Sign In</h3>
                                <div id="message" class='alert alert-danger alert-dismissible' style="display:none;"> 
                                
                                </div>
                                <label for="username"> Email <small class="text-danger">*</small></label>
                                <input  type="text" name="user" id="email" class="form-control" placeholder="Enter Email">
                            </div>
                                    <div class="form-group">
                                        <label for="password"> Password <small class="text-danger">*</small></label>
                                        <input input type="password" name="pass" id="password" class="form-control" placeholder="Enter Password">
                                    </div>


                            <div class="d-flex justify-content-between p-3">
                                <label>
                                    <input type="checkbox" checked="checked" name="remember"> Remember me
                                </label>
                                <select class="form-select p-2" aria-label="Default select example" id="roledropdown">
                                    <option value="0">Select your role</option>
                                    <option value="superAdmin">Super Admin</option>
                                    <option value="schoolAdmin">School Admin</option>
                                    <option value="editor">Editor</option>
                                    <option value="guest">Guest</option>
                                </select>
                            </div>
                        
                               <button onclick="processLogin()" class="btn-login"> Log in </button>
                
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </section>
    <!-- Banner End -->
    <!-- lOGIN FORM END  -->




<!-- Overview start -->
        

    <section class="abpage-section-1" id="overview">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7" >
                        <div class="ab-thumb ">
                            <img src="assets/images/body1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="ab-content-2">
                            <CENTER> <h3>OVERVIEW</h3> </CENTER>
                            <ul>
                                <li>Smooth functioning of all utilities in a single interface as right now its running on multiple platforms.
                                </li><li>Portal should have access rights control system which can control the access of features based on the role of user. ( User role can be asked at the time of login)
                                </li><li>It should have beautiful and eye catching user interface.
                                </li><li>Login Credentials should be mapped with QuizAcademy.
                                </li><li>Contact form or details should be there to be in touch in technical team
                                </li><li>First Login Page Should have details about the what this portal is about
                                </li><li>Branding will be of QuizAcademy only</li>

                            </ul>
                           
                        </div>
                    </div>
                </div>
            </div>
    </section>

       <!-- Overview end -->

        <!-- SOME SPACES -->
            <br>
            &nbsp;
            <br>
            <br>
            &nbsp;
            <br>
        <!-- SOME SPACES -->   
      


    <!-- FEATURES Start -->
     
     <section class="popular-course-section" id="features">
        <div class="container">
            <div id="features" class="section lb1">
                <div class="container">
                    <div class="big-title text-center">
                            <h1>FEATURES!</h1>
                            <hr class="customhr customhrcenter">
                    </div>

                    <div class="big-title">
                        <p class="sec-desc">
                            <ul>
                                <li>Smooth functioning of all utilities in a single interface as right now its running on multiple platforms.
                                </li><li>Portal should have access rights control system which can control the access of features based on the role of user. ( User role can be asked at the time of login)
                                </li><li>It should have beautiful and eye catching user interface.
                                </li><li>Login Credentials should be mapped with QuizAcademy.
                                </li><li>Contact form or details should be there to be in touch in technical team
                                </li><li>First Login Page Should have details about the what this portal is about
                                </li><li>Branding will be of QuizAcademy only</li>
                            </ul>
                        </p>
                    </div>
            
                    <br>
                      &nbsp;
                    <br>

                    <!-- Features svg utilites links starts here -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="course-wrapper">
                                

                                <div class="course-item-1 text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="74" height="70" viewBox="0 0 74 70">
                                        <image id="proposal" width="74" height="70" xlink:href="assets/images/home/data-image.png" />
                                    </svg>
                                        <h4><a >Content Related Utilities</a></h4>
                                </div>

                                <div class="course-item-1 text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64" height="64" viewBox="0 0 64 64">
                                        <image id="data" width="64" height="64" xlink:href="assets/images/home/item_01-image.png" />
                                    </svg>
                                        <h4>SIAB Related Utilities</h4>
                                </div>


                                <div class="course-item-1 text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64" height="64" viewBox="0 0 64 64">
                                        <image id="data" width="64" height="64" xlink:href="assets/images/home/mind-image.png" />
                                    </svg>
                                        <h4><a >Quiz Related Utilities</a></h4>
                                </div>


                                <div class="course-item-1 text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64" height="64" viewBox="0 0 64 64">
                                        <image id="data" width="64" height="64" xlink:href="assets/images/home/proposal-image.png" />
                                    </svg>
                                        <h4><a >Assessment Related Utilities</a></h4>
                                </div>
                        
                            


                            </div>
                        </div>
                    </div>
                    <!-- Features svg utilites links starts here -->
                </div>
    </section>
    <!-- Course End -->
    

    
    <!-- Contact section start here -->


    <section class="contact-section" id="contact">
        <div class="container">
            <div class="row">
                    
            
                <div class="col-md-4">
                    <h1>Contact Us</h1>
                    <div class="contact--info-area">
                        
                        <p>Looking for help? </p>

                        <div class="single-info">
                            <h5>Address</h5>
                            <p>
                                <i class="icon_house_alt"></i>
                                    Jaipur - 302039, Rajasthan India (Dummy).
                            </p>
                        </div>

                        <div class="single-info">
                            <h5>Phone</h5>
                            <p>
                                <i class="icon_phone"></i>
                                +91 9828534060 (Dummy)<br>
                            </p>
                        </div>
                        <div class="single-info">
                            <h5>Email</h5>
                            <p>
                                <i class="icon_mail_alt"></i>
                                srm@moinee.org<br>
                                connect@moinee.com(dummy)
                            </p>
                        </div>
                        
                    </div>
                </div>


                <div class="col-md-8">
                    <div class="contact-form">


                        <form action="#" method="post" class="row">
                            <div class="col-md-6">
                                <input type="text" name="f-name" placeholder="First Name" id="contact_name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="l-name" placeholder="Last Name" id="contact_last" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" placeholder="Email Address" id="contact_email" required>
                            </div>
                            <div class="col-md-6">
                                <input type="number" name="phone" placeholder="Phone Number" id="contact_phone" required>
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="subject" placeholder="Subject" id="contact_subject" required>
                            </div>
                            <div class="col-md-12">
                                <textarea name="message" placeholder="How can we help?" id="contact_text" required></textarea>
                            </div>
                            <div class="col-md-6 text-left">
                                <input type="submit" name="submit" value="Send Message" id="contact_sub" >
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section>
    

       <!-- Conatct section end here -->

    

<!-- Footer Section Start -->

<?php include('footer.php'); ?>

    <!-- Footer Section End -->

    

    <!-- Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"> </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <!-- custom script js -->

    <!-- Start Include All JS -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/TweenMax.min.js"></script>
    <script src="assets/js/lightcase.js"></script>
    <script src="assets/js/jquery.plugin.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>
    <script src="assets/js/jquery.shuffle.min.js"></script>

    <script src="assets/js/theme.js"></script>
    <!-- End Include All JS -->
        <script>
            $("#message").hide();
            function processLogin()
            {
                //alert("Login Clicked");
                //we have to validate email address and password
                var emailId=$("#email").val();
                var password=$("#password").val();
                var selectedRole=$("#roledropdown").val();
                if(emailId==''||password==''||selectedRole=='0')
                {
                    $("#message").html("Please Fill All Details");
                            $("#message").show();
                            $("#message").delay(3000).fadeOut();
                }
                else
                {
                    if(validateEmailId(emailId))
                    {
                        //alert("Email Is Correct");
                
                        if(isPasswordValidate(password))
                        {
                        // $("#message").html("Everything is okay!!");
                        // $("#message").show();
                            //$("#message").delay(3000).fadeOut();
                            //go for the ajax call
                            processAjaxCall(emailId,password,selectedRole);
                        }
                        else
                        {
                            $("#message").html("Password should have atleast 6 digits");
                            $("#message").show();
                            $("#message").delay(3000).fadeOut();
                        }
                        
                    }
                    else
                    {
                        $("#message").html("Enter Correct Email Address");
                        $("#message").show();
                        $("#message").delay(3000).fadeOut();
                    }
                }
                
            }



            function processAjaxCall(email,password,selectedRole)
            {    
                var activity ="LOGIN";
                var data={email:email,password:password,selectedRole:selectedRole,activity:activity};
                $.ajax({
                            type: "GET",
                            url: "validation.php",
                            data: data,
                            success: function(result)
                            {
                                // console.log(result);
                                //it will let you know the result to the php script
                                //console.log(data);
                                var resultObj=JSON.parse(result);
                            //    console.log(resultObj);
                                processLoginAndSetNewUi(resultObj,email,selectedRole);
                            }
                        }); 
            }



            //this function will switch page to home page and filter new UI  based on the results reecivied
            function processLoginAndSetNewUi(resultObj,email,selectedRole)
            {
                //create new session (as we have user id with us you can create session with this emaill adderess)
                //completed
                console.log(resultObj);
                //now you can process for page ui filtering
                //console.log(resultObj.ROLES_ARRAY.length);
                for(var i=0;i<resultObj.ROLES_ARRAY.length;i++)
                {
                    if(resultObj.ROLES_ARRAY[i]==selectedRole)
                    {
                    // $("#message").html("Roles Matched");
                    // $("#message").show();
                    
                    // $("#message").delay(3000).fadeOut();
                    //move to new page now you have refine the ui of the home paged based on the given role
                    localStorage.myArrData=JSON.stringify(resultObj);
                    window.open('utility.php',"_self");
                    console.log("index.php");
                    }
                    else
                    {
                        if(i==resultObj.ROLES_ARRAY.length-1)
                        {
                            $("#message").html("Given role is not matched");
                            $("#message").show();
                            $("#message").delay(3000).fadeOut();
                            //as after successfull login session is already created which need to be destroy
                            window.open(logout.php);
                        }
                    }
                }
            }



            function validateEmailId(emailId)
                {
                    //var emailId = document.getElementById("emailForForgotPwd").value;
                    
                    var atpos=emailId.indexOf("@");
                    var dotpos=emailId.lastIndexOf(".");
                    //if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(emailId)==false)
                    if (/^\w+([\.-]?\w+)([\+-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(emailId)==false)
                    //if (atpos<1 || dotpos<atpos+2 || dotpos+2>=emailId.length)
                    {
                            
                            return false;
                    }
                    else
                    {
                        return true;
                    }
                }
                function isPasswordValidate(password)
                {
                    if(password.length < 6)
                    {
                        return false;
                    }
                    else
                    {
                        var passwordExpression=(/^[0-9a-zA-Z-_]+$/);
                        if(passwordExpression.test(password))
                        {
                            return true;
                        }
                        else
                        {
                            return false;
                        }
                    }
                }
        </script>
</body>

</html>
