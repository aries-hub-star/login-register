<!DOCTYPE html>
<html>
  <head>
    <title>Registration Form</title>
    <style>
      body {
        background-image: url('https://www.1e.com/wp-content/uploads/2014/12/iStock_000016083602_Small.jpg');
        background-size: 1225px;
        background-repeat: no repeat;
        align-content: center;
        font-family: arial, sans-serif;
        color: black;
        margin: 0;
      }
      .login-form {
        background-color: FFFFFF;
        padding: 20px;
        border-radius: 20px;
        box-shadow: 0px 0px 20px #000;
        width: 300px;
        height: 450px;
        margin: 0 auto;
        margin-top: 100px;
        margin-bottom: 100px;
        text-align: center;
      }
       input[type="text"],
       input[type="password"] {
        padding: 10px;
        border: none;
        border-radius: 5px;
        margin-bottom: auto;
        width: 60%;
        font-size: 12px;
      }
       button[type="submit"] {
        background-color: #4CAF50;
        color: #fff;
        border: none;
        padding: 5px;
        border-radius: 5px;
        cursor: pointer;
        width: 35%;
        font-size: 16px;
        letter-spacing: 2px;
        margin-top: 12px;
        transition: all 0.3s ease;
      }
      .inner-page {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 20px #000;
        width: 80%;
        margin: 0 auto;
        text-align: center;
      }
      h2 {
        color: black;
        font-family: garamond;
        font-size: 30px;
        margin-top: 30px;
        margin-bottom: 30px;
      }
      p {
        margin-top: 30px;
        margin-bottom: 20px;
        font-size: 12px;
      </style> 
      }
      <script>
          function showRegistrationAlert() {
          alert("Registration Successful");
          window.location.replace("../index.php");
      }
     </script>
    </head>
  <body>
    <form action="be/register.php" method="POST">
    <div class="login-form">
      <h2>REGISTER</h2>
      <input type="text" placeholder="name" name="name" required>
      <br><br>
      <input type="text" placeholder="username" name="username" required>
      <br><br>
      <input type="password" placeholder="password" name="password" required>
      <br><br>
      <input type="password" placeholder="confirm password" name="c_password" required>
      <br><br>
      <button type="submit" name="register" onclick="showRegistrationAlert()">Register</button>
      <p>Already have an account? <a href="login.php">Click here to login.</a></p>
    </div>
  </form>
  </body>
</html>
  