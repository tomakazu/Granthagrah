<?php
  require("config.php");
  if(isset($_POST["submit"])){
    session_start();
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "SELECT * from login where username = '".$username."' and password = '".$password."' " ;
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
      $_SESSION["username"] = $username;
      $_SESSION["password"] = $password;
      header('Location:student.php');
    }else{
      echo '<script>
        alert("Password or Username is valid");
        </script>';
    }
  }

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    body {
      background-color: gold;
      background-size: cover;
      font-family: Arial, Helvetica, sans-serif;
    }
    form{
      border: 3px solid #f1f1f1;
      width: 32%;
      margin-top: 40px;
      height: 500px;
      margin-left: 500px;
      position: relative;
    }
    button:hover {
      opacity: 0.8;
  }
  h1{
    margin-left: 530px;
    font-weight: bold;
    font-size: 40px;
    -webkit-text-stroke: 0.1vw #FF9999;
    text-transform: uppercase;
    color: gold;
    position:relative;
}
 h1::before{
   position: absolute;
    top:0;
    left:0;
    width: 20%;
    height:100%;
    content: attr(data-text);
    color:tomato;

   -webkit-text-stroke: 0vw #FF9999;
    border-right: 2px solid tomato;
    overflow: hidden;
    animation: animate 6s linear infinite;
  }
@keyframes animate {
    0%,10%,100%{
      width: 0;
    }
    70%,90%{
      width: 100%;
    }
  }

    input[type=text], input[type=password] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    margin-top: 30px;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }

   button {
   background-color: gold;
   color: white;
   padding: 14px 20px;
   margin: 8px 0;
   border: none;
   cursor: pointer;
   width: 40%;
 }
 .container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 16px;
  font-weight: bold;
  font-family: Arial;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  margin-left: 20px;
  margin-top: 20px;
}

/* Hide the browser's default radio button */
.container input {
  margin-left: 20px;
  position: relative;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 20px;
  width: 20px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #9b870c;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: relative;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
  top: 27%;
    left: 5px;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: white;
}

</style>
</head>
  <body>
    <h1 data-text="Granthagarah"> Granthagarah</h1>

      <form action="" onsubmit="return validation()" method="post">
      <label class="container">Student
      <input type="radio" checked="checked" name="radio">
      <span class="checkmark"></span>
      </label>
      <label class="container">Librarian
      <input type="radio" checked="checked" name="radio">
      <span class="checkmark"></span>
      </label>
      <label for="uname" style="margin-left:10px;"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required id = "Username">
      <br>
      <label for="psw" style="margin-left:10px;"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required id = "password">
      <br>
      <button type="submit" name = "submit" style="margin-left:10px;margin-top:20%;font-weight:bold;font-size:16px;background-color:#FF3333;">Login</button>
      <label style="font-weight:bold; font-size:16px;margin-left:24px;">
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </form>

  </body>
</html>
<script type="text/javascript">
  function validation(){
    var username = document.getElementById("Username");
    var password = document.getElementById("password");
    var regex = /^[a-zA-Z_][a-zA-Z0-9_]{1,}/gm;

    if(!regex.test(username.value)){
      alert("First charater should either be alphabet or _");
      return false;
    }
    if(password.value.length<=6){
      alert("Password length should be greater than 6");
      return false;
    }

    return true;
  }
</script>
