<?php require_once "connection.php"?>
<?php require_once "auxillaries.php"?>
<?php require_once "login_handler.php"?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>Responsive Registration Form | CodingLab</title>
    <link rel="stylesheet" href="./styles/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
      .input-box {
        width: 100% !important;
      }
      .container {
        max-width: 500px;
      }
      .user-details {
        flex-direction: column;
        justify-content: center;
        align-items: center;
      }
    </style>
  </head>
  <body>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
    <div class="container">
      <div class="title">Login <Inp></Inp></div>
      <div class="content">
        <form action="#">
          <div class="user-details">
            <div class="input-box">
              <span class="details">Username</span>
              <input type="text" name="username" placeholder="Enter your username" required />
            </div>

            <div class="input-box">
              <span class="details">Password</span>
              <input type="text" name="password" placeholder="Enter your password" required />
            </div>
          </div>

          <div class="button">
            <input type="submit" name="login" value="Login" />
          </div>
          <p>Dont have an accout? <a href="./signup.php">Signup</a></p>
        </form>
      </div>
    </div>
	</form>
  </body>
</html>
