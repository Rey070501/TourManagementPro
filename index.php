<!DOCTYPE html>
<link href="index.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet"/>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
</head>
<body>
<nav class="navbar" id="navbavhome" style="display:none;">
<div class="navdiv">
<ul>
<li><h1>Tour Management</h1></li>
<li>Home</li>
<li>About</li>
<li>Contact</li>
<li>Logout</li>
</ul>
</div>
</nav>
   <div class="container" id="signup" style="display: none;">
    <h1 class="form-title">Register</h1>
    <form method="post" action="register.php">
        <div class="input-group">

        <i class="fas fa-user"></i>
        <label for="fname">First Name:</label>
        <input type="text" name="fname" id="fname" placeholder="First name" required>
        <br>
        <i class="fas fa-user"></i>
        <label for="lname">Last Name:</label>
        <input type="text" name="lname" id="lname" placeholder="Last name" required>
        <br>
        <label for="email">E-Mail:</label>
        <br>
        <input type="email" name="email" id="email" placeholder="Email" required>
        <br>
        <label for="password">Password:</label>
        <br>
        <input type="password" name="password" id="password" placeholder="Password" required>
        <br>
        <label for="confirm-password">Confirm Password:</label>
        <br>
        <input type="password" name="confirm-password" id="confirm-password" placeholder="Confirm Password" required>
        <br>
         <input type="submit" class="btn" value="Sign Up" name="SignUp"id="SignUp" ></input>
         </form>
         </div>
         <div class="links">
            <p>Already Have Account ?</p>
            <button id="signInbutton">Sign In</button>
         </div>
   </div>
   <div class="container" id="signin">
    <h1 class="form-title">Sign-IN</h1>
    <form method="post" action="register.php">
        <div class="input-group">
        <label for="email">E-Mail:</label>
        <input type="email" name="Email" id="Email" placeholder="Email" required>
        <label for="password">Password:</label>
        <input type="password" name="Password" id="Password" placeholder="Password" required>
         <input type="submit" class="btn" value="Sign In" name="SignIn" id="SignIn"></input>
    </form>
    </div>
         <div class="links">
            <p>Don't Have Account yet ?</p>
            <button id="signUpbutton">Sign Up</button>
         </div>

   </div>
<script src="index.JS" ></script>
</body>
</html>