<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <title>Login Page</title>
  </head>
  <body>
    
<div class="container">
    <div class="col-md-5 col-md-offset-5">
    <h1 class="text-center">Login</h1>
    <p class="text-center">Please enter the credentials</p>
    <form action="<?php echo site_url(); ?>/auth/login_request" method="post">
        <div class="form-group">
            <label for="username" class="label-default"></label>
            <input class="form-control" name="logusername" id="username" type="text" placeholder="Username">
            <span class="danger" style="background-color:red"><?php echo form_error('username'); ?></span>
        </div>
        <div class="form-group">
            <label for="password" class="label-default"></label>
            <input class="form-control" name="logpassword" id="password" type="password" placeholder="Password">
            <span class="danger" style="background-color:red"><?php echo form_error('password'); ?></span>
        </div>
        <div class="text-center">
          <button class="btn btn-primary" name="login" value="Login" type="submit">Login</button>&nbsp&nbsp&nbsp
          <a href='<?php echo site_url()."/Auth"; ?>'>Sign In</a>   
        </div>
    </form>
    </div>
</div>
  </body>
</html>