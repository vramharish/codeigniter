<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <title>Register Page</title>
  </head>
  <body>
    
<div class="container">
    <div class="col-md-5 col-md-offset-5">
    <h1 class="text-center">Register</h1>
    <p class="text-center">Fill the details to register</p>
    <form action="<?php echo site_url(); ?>/Auth/register_request" method="post">
        <div class="form-group">
            <label for="username" class="label-default">Username : </label>
            <input class="form-control" name="username" id="username" type="text">
            <span class="danger" style="background-color:red"><?php echo form_error('username'); ?></span>
        </div>
        <div class="form-group">
            <label for="email" class="label-default">Email : </label>
            <input class="form-control" name="email" id="email" type="text">
            <span class="danger" style="background-color:red"><?php echo form_error('email'); ?></span>
        </div>
        <div class="form-group">
            <label for="password" class="label-default">Password : </label>
            <input class="form-control" name="password" id="password" type="password">
            <span class="danger" style="background-color:red"><?php echo form_error('password'); ?></span>
        </div>
        <div class="form-group">
            <label for="phone" class="label-default">Phone : </label>
            <input class="form-control" name="phone" id="phone" type="text">
            <span class="danger" style="background-color:red"><?php echo form_error('phone'); ?></span>
        </div>
        <div class="text-center">
          <input class="btn btn-primary" name="submit" type="submit">
          &nbsp&nbsp&nbsp
          <a href='<?php echo site_url()."/Auth/login"; ?>'>Login</a>
        </div>
    </form>
    </div>
</div>
  </body>
</html>