<!DOCTYPE html>
<html>
<head>

<style>

body {
  font-family: Arial, Helvetica, sans-serif;
  color:red;
  background-color:orange;
  background: url("https://ak6.picdn.net/shutterstock/videos/8712106/thumb/1.jpg");

  background-attachment: fixed;
  background-position: right;
  background-repeat:no-repeat;
  background-size: cover;
  width:700px

}
.animation {
  width: 24px;
  height: 24px;
  background-color: red;
  position: relative;
  animation-name: example;
  animation-duration: 2s;
  animation-iteration-count: infinite;
}

@keyframes example {
  0%   {background-color:red; left:25px; top:20px;}
  25%  {background-color:yellow; left:620px; top:20px;}
  50%  {background-color:#ADD8E6; left:620px; top:105px;}
  75%  {background-color:MediumSeaGreen; left:25px; top:105px;}
  100% {background-color:red; left:25px; top:20px;}
}
.animation1 {
  width: 24px;
  height: 24px;
  background-color: red;
  position: relative;
  animation-name: example1;
  animation-duration: 2s;
  animation-iteration-count: infinite;
}

@keyframes example1 {
  0%   {background-color:red; left:620px; top:80px;}
  25%  {background-color:yellow; left:25px; top:80px;}
  50%  {background-color:#ADD8E6; left:25px; top:0px;}
  75%  {background-color:MediumSeaGreen; left:620px; top:0px;}
  100% {background-color:red; left:620px; top:80px;}
}
* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {  position: relative;
  left: 300px;

  left-padding:40px;
  padding: 20px;
  background-color: red;
background: url("https://img.freepik.com/free-photo/3d-grunge-room-interior-with-spotlight-smoky-atmosphere-background_1048-11333.jpg?size=626&ext=jpg");
}
#ip5 {
    border-radius: 15px 50px;
    background: #f1f1f1;
    padding: 15px;
    width: 500px;
    height: 15px;
}
/* Full-width input fields */
input[type=text], input[type=password] {
  width: 70%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: black;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
border-radius: 25px;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}

</style>

</head>

<body>


<form action="library.html">

  <div class="container"><div class="animation"></div><div class="animation1"></div>
    <center><h1>Register with us to Start Reading!!!</h1> <img src="https://i.pinimg.com/originals/de/9e/b6/de9eb637d1dac9a77a7f3822ed57ce07.gif" alt="Image cannot be diplayed. Please check your Internet connection" width="100" height="100">
    <p>Please fill in this form to create your account.</p>
    <hr>
</center>
     <label for="First Name"><b>First Name </b></label><br>
    <input type="text" placeholder="Enter First Name" name="first name" id="ip5" required><br>

    <label for="Last Name"><b> Last Name </b></label><br>
    <input type="text" placeholder="Enter Last Name" name="Last name" id="ip5" required><br>

    <label for="email"><b>Email</b></label><br>
    <input type="text" placeholder="Enter Email" name="email" id="ip5" required><br>

    <label for="psw"><b>New Password </b></label><br>
    <input type="password" placeholder="Enter Password" name="psw" id="ip5" required><br>


    <hr>

<center>
    <button type="submit" class="registerbtn">Register</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="library.php">Sign in</a>.</p>
  </div>
</form>

</center>


</body>

</html>
