<?php require_once "connection.php"?>
<?php require_once "auxillaries.php"?>
<?php require_once "signup_handler.php"?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>Responsive Registration Form | CodingLab</title>
    <link rel="stylesheet" href="./styles/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
  
    <div class="container">
      <div class="title">Registration</div>
      
      <div class="content">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> "method="POST">
          <div class="user-details">
            <div class="input-box">
            <
              <span class="details">Full Name</span>
              <input type="text" name="full_name" placeholder="Enter your name" required />
            </div>
            <div class="input-box">
              <span class="details">Username</span>
              <input type="text" name="username"  placeholder="Enter your username" required />
            </div>
            <div class="input-box">
              <span class="details">Email</span>
              <input type="text" name="email" placeholder="Enter your email" required />
            </div>
            <div class="input-box">
              <span class="details">Phone Number</span>
              <input type="text" name="phone_number" placeholder="Enter your number" required />
            </div>
            <div class="input-box">
              <span class="details">Password</span>
              <input type="text" name="password_1" placeholder="Enter your password" required />
            </div>
            <div class="input-box">
              <span class="details">Confirm Password</span>
              <input type="text" name="password_2" placeholder="Confirm your password" required />
            </div>
          </div>

          <div class="button">
            <input type="submit" name="Register" value="Register" />
          </div>

          <p>Dont have an accout? <a href="./login.php">Login</a></p>
        </form>
      </div>
    </div>
  </body>
</html>
