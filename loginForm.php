
<html>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    
    <link rel="stylesheet" href="styles.css" >
    <body>
    <div class="container">
          <form action="login.php" class="form-signin" method="POST">
            <h2 class="form-signin-heading">Please Login</h2>
            <div class="input-group">
        <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
      </div>
            <label for="password" class="sr-only">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
            <button class="btn btn-lg btn-primary btn-block" action="login.php" type="submit">Login</button>
           
            <button class="btn btn-lg btn-primary btn-block" href="registerForm.php">Register</button>
    
          </form>
    </div></body>
    </html>