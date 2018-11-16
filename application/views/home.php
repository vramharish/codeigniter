<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <title>Home</title>
  </head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><b><i>Codeigniter</i></b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"><b>Home</b><span class="sr-only">(current)</span></a>
      </li>
      <!--<li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>-->
    </ul>
    <span class="navbar-text">
      <a class="nav-link" href="<?php echo site_url();?>/Logout"><b>Log out</b></a>
    </span>
  </div>
</nav>

<div class="container"><br>

    <div class="col-md-5">
    <p>Welcome to Codeigniter <b><?php echo $_SESSION['username'];?></b>...!!!!</p>
     
    </div>
    <div class="col-md-3">
        <button class="btn btn-primary" onclick="myFunction()">Click here to edit profile</button>
    </div><br>

    <div class="col-md-3">
        <a href="<?php echo site_url(); ?>/Auth/delete_request">
        <button class="btn btn-danger">Delete my Account</button></a>
    </div>

    <div id="myDIV" style="display: none;">
        <form action="<?php echo site_url(); ?>/Auth/update_request" method="post">
          <?php   foreach ($get_user->result() as $row) {
            # code...
           ?>
        <div class="form-group">
            <label for="username" class="label-default"></label>
            <input class="form-control" name="editname" id="username" type="text" value="<?php  echo $row->username ; ?>">
        </div>
        <div class="form-group">
            <label for="password" class="label-default"></label>
            <input class="form-control" name="editemail" id="password" type="text" value="<?php echo $row->email ; ?>">
        </div>
        <div class="form-group">
            <label for="password" class="label-default"></label>
            <input class="form-control" name="editpassword" id="password" type="text" value="<?php echo $row->password; ?>">
        </div>
        <div class="form-group">
            <label for="password" class="label-default"></label>
            <input class="form-control" name="editphone" id="password" type="text" value="<?php echo $row->phone ;  ?>">
        </div>
        <div class="text-center">
          <input class="btn btn-primary" name="update" value="Update" type="submit">
        </div>
      <?php   } ?>
    </form>
    </div>

<script>
function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>

</div>
  </body>
</html>
