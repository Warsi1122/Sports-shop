<?php
session_start();
  // if(!empty($_SESSION['id'])) 
  // {
  //   header("location:index.php");
  // }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="admin/assets/form/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="admin/assets/form/css/style.css">
</head>
<body>
    <div class="main">
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="myform">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Re-type your password"/>
                            </div>
                            <input type="hidden" name="action" value="add_user">
                            
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="submit" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="admin/assets/form/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="signin.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>

<script src="admin/assets/form/vendor/jquery/jquery.min.js"></script>
<script src="admin/assets/form/js/main.js"></script>
<script src="admin/assets/js/demo/notify/notify.js"></script>
<script type="text/javascript">

  $(document).ready(function(){
  $('input').on("keyup change",function(){
    $('#'+$(this).attr("name")+"_error").html("");
      });

    function completeHandler(event)
        {
            var res = JSON.parse(event.target.responseText);
            console.log(res);
            if(res.error==true)
            {
                $('#submit').html("Login");
                $.notify(res.msg,{ position:"top center" });
            }
            else
            {
                $.notify(res.msg,{ position:"top center",className: "success" });
                $('#myform').trigger('reset');
                setTimeout(function(){
                    var url = "http://localhost/sports-shop/signin.php";
                $(location).attr('href',url);
                  },1000);
                
            }            
               
        }

    $('#myform').submit(function(event){
      event.preventDefault();
      var name = $("#name" ).val();
      var email = $("#email" ).val();
      var password = $("#password" ).val();
      var re_pass = $("#re_pass" ).val();
      
      var error = false;
      if (name =='') 
      {
        $.notify("Name is Required",{ position:"top center" });
        error = true;
      }
      if (email =='') 
      {
        $.notify("Email is required",{ position:"top center" });
        error = true;
      }
      if (password =='') 
      {
        $.notify("Password is required",{ position:"top center" });
        error = true;
      }
      if (re_pass =='') 
      {
        $.notify("Confirm Password is required",{ position:"top center" });
        error = true;
      }
      if (password != re_pass) 
      {
        $.notify("Password & Confirm Password is not Match",{ position:"top center" });
        error = true;
      }
      
      if (!error) 
      {
        /*$('#submit').html('<div class="spinner-border m-2 text-secondary" role="status"><span class="sr-only">Loading...</span></div>');*/
            var fd = new FormData(document.getElementById("myform"));
              var ajax = new XMLHttpRequest();
              ajax.addEventListener("load",completeHandler,false);
              ajax.open("POST","login_db.php");
              ajax.send(fd);
      }

    });
  });
</script>