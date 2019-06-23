<html><!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.validate/1.8.1/jquery.validate.min.js"></script>
<link rel="stylesheet" href="styles.css" ><body>

<script>
var debugging = true;

$(document).ready(function(){
  
  $register = $('#register');
  $results = $('#results');


  $register.validate({
    messages: {
      email: {
        remote: jQuery.validator.format("{0} is already taken, please enter a new one.")

      }
     
    },
    messages: {
      username: {
        remote: jQuery.validator.format("{0} is already taken, please enter a new one.")

      }
     
    },
    submitHandler: function(){

      $first_name = $('#first_name');
      $last_name = $('#last_name');
      $email = $('#email');
      $username = $('#username');
      $password = $('#password');
   

      $.ajaxSubmit({
        type: 'POST',
        url: 'register.php',
        datatype: 'JSON',
        data: {
          'function' : 'register',
          'first_name' : $first_name.val(),
          'last_name' : $last_name.val(),
          'email' : $email.val(),
          'username' : $username.val(),
          'password' : $password.val()
  },
success: function(data) {
  if (data.result == 'true'){
    $register.slideUp(function(){
      $('register-complete').fadeIn();
    });
  } else {
    $results.html("Sorry, an error has occured."+ data.message)
  }
}
}); 
    }});
  });

</script>




<div class="container">
      <form action="" class="form-signin" method="POST" name="register" id="register">
        <h2 class="form-signin-heading">Please Register</h2>
        <div class="input-group">
      <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name" required>
	  <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name" required>
	  <input type="text" name="username" id="username" class="form-control" placeholder="Username" required remote="check_username.php" >
	</div>
        <label for="email" class="sr-only">Email address</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Email address" required remote="check_email.php"  >
        <label for="password" class="sr-only">Password</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
        <input class="btn btn-lg btn-primary btn-block" type="submit" value="Register"/>
        <a class="btn btn-lg btn-primary btn-block" href="loginForm.php">Login</a>
      </form></div>
</body>
</html>