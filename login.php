<?php
session_start();
include("connect.php");
include("function.php");

if($_SERVER['REQUEST_METHOD']=="POST")

{
$user_name=$_POST['user_name'];
$password=$_POST['password'];

if(!empty($user_name) && !empty($password) && !is_numeric($user_name))

{

$query = "select * from users  where  user_name ='$user_name' limit 1";

mysqli_query($con,$query);
$result=mysqli_query($con, $query);

if($result){
if($result && mysqli_num_rows($result)>0)
{

$user_data=mysqli_fetch_assoc($result);
if($user_data['password']=== $password)
{
$_SESSION['user_id']=$user_data['user_id'];
 header("Location: index.php");

 die;

}

}


}
 echo"wrong credentials";





}
else{
  echo "Please enter some valid credentials";
}
}


















 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Login</title>

   </head>
   <body>
<style type ="text/css">


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

.login-block {
    width: 320px;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    border-top: 5px solid #ff656c;
    margin: 0 auto;
}

.login-block h1 {
    text-align: center;
    color: #000;
    font-size: 18px;
    text-transform: uppercase;
    margin-top: 0;
    margin-bottom: 20px;
}

.login-block input {
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

.login-block input#username {
    background: #fff  20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#username:focus {
    background: #fff  20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input#password {
    background: #fff  20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#password:focus {
    background: #fff  20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input:active, .login-block input:focus {
    border: 1px solid #ff656c;
}

.login-block button {
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


.login-block a {
    width: 100%;
    height: 60px;
    background: #ff656c;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #e15960;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 16px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;
}




.login-block a:hover {
    background: #ff7b81;
}





.login-block button:hover {
    background: #ff7b81;
}





</style>

<div class="login-block">
  <form  method="post">


  <h1> TO DO LIST APP</h1>
  <input id ="text" type= "text"  name="user_name"  >
  <input id ="text"  type ="password"  name="password" >
  <input id ="button" type ="submit" value="Login">
  <a href="signup.php">  signup  </a>

  </form>
</div>

   </body>
 </html>
