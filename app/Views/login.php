<!DOCTYPE html>
<html>
<head>
    <title>2-Step Verification using Google Authenticator</title>
    <link rel="stylesheet" type="text/css" href="style.css" charset="utf-8" />
</head>
<body>
  <div id="container">
    <h1>2-Step Verification using Google Authenticator</h1>
      <div id="login">
      <h3>Login</h3>

        <form method="post" action="home/cek_login" name="login">
        <label>Username or Email</label>
        <input type="text" name="usernameEmail" autocomplete="off" />
        <label>Password</label>
        <input type="password" name="password" autocomplete="off"/>
        
       
        <input type="submit" class="button" name="loginSubmit" value="Login">
        </form>
      </div>


    <div id="signup">
      <h3>Registration</h3>
      <form method="post" action="" name="signup">
        <label>Name</label>
        <input type="text" name="nameReg" autocomplete="off" />
        <label>Email</label>
        <input type="text" name="emailReg" autocomplete="off" />
        <label>Username</label>
        <input type="text" name="usernameReg" autocomplete="off" />

        <label>Password</label>
        <input type="password" name="passwordReg" autocomplete="off"/>
        <input type="submit" class="button" name="signupSubmit" value="Signup">
      </form>
      </div>

  </div>

</body>
</html>