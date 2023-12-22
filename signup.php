<?php

session_start();
include("connect.php");
include("function.php");

if($_SERVER['REQUEST_METHOD']=="POST")
{

 $user_name= $_POST['user_name'];
$password= $_POST['password'];
if(!empty($user_name)&& !empty($password)&& !is_numeric($user_name))

{
$user_id=random_num(10);
  $query= "insert into users (user_id,	user_name	,password) values ('$user_id','$user_name','$password')";
 mysqli_query($con,$query);
 header("Location:login.php");
 die;
}
  else
  {

    echo "Please enter some  valid information";
  }
}

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title> signup</title>
   </head>
   <body>
     <style type ="text/css" >
     body {
         background:  no-repeat fixed center center;
         background-size: cover;
         font-family: Montserrat;
     }

     .logo {
         width: 213px;
         height: 36px;
         background:  no-repeat;
         margin: 30px auto;
     }

     .signup-block {
         width: 320px;
         padding: 20px;
         background: #fff;
         border-radius: 5px;
         border-top: 5px solid #ff656c;
         margin: 0 auto;
     }

     .signup-block h1 {
         text-align: center;
         color: #000;
         font-size: 18px;
         text-transform: uppercase;
         margin-top: 0;
         margin-bottom: 20px;
     }

     .signup-block input {
         width: 100%;
         height: 42px;
         box-sizing: border-box;
         border-radius: 5px;
         border: 1px solid #ccc;
         margin-bottom: 20px;
         font-size: 14px;
         font-family: Montserrat;
         padding: 0 20px 0 50px;
         outline: none;
     }

     .signup-block input#username {
         background: #fff  20px top no-repeat;
         background-size: 16px 80px;
     }

     .signup-block input#username:focus {
         background: #fff  20px bottom no-repeat;
         background-size: 16px 80px;
     }

     .signup-block input#password {
         background: #fff  20px top no-repeat;
         background-size: 16px 80px;
     }

     .signup-block input#password:focus {
         background: #fff  20px bottom no-repeat;
         background-size: 16px 80px;
     }

     .signup-block input:active, .signup-block input:focus {
         border: 1px solid #ff656c;
     }

     .signup-block button {
         width: 100%;
         height: 40px;
         background: #ff656c;
         box-sizing: border-box;
         border-radius: 5px;
         border: 1px solid #e15960;
         color: #fff;
         font-weight: bold;
         text-transform: uppercase;
         font-size: 14px;
         font-family: Montserrat;
         outline: none;
         cursor: pointer;
     }



      </style>
<div class="logo">   </div>

<div class="signup-block">
  <form method="post">
<h1> TO DO LIST APP <hi>
  <input id="text" type= "text" name="user_name" >
  <input id="text" type="password" name="password">
<input id ="button"  type="submit" value="signup">



</div>

      </form>
   </body>
 </html>
