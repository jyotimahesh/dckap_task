<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>

<title>User Login Pager</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-inverse">
<div class="container-fluid">
<ul class="nav navbar-nav">
<li><a href="<?php echo site_url(); ?>manage-users">Manage Users</a></li>
<li class="active" ><a href="<?php echo site_url(); ?>add-users">Login</a></li>
</ul>
</div>
</nav>

<div class="container">

<h2>Login user page</h2>
 <?php if($this->session->flashdata('error')){ ?>
  <div class="alert alert-danger">
                    <strong><span class="glyphicon glyphicon-ok"></span> <?php echo $this->session->flashdata('error'); ?></strong>
                </div>
  <?php } ?>

<form role="form" method="post" action="<?php echo site_url()?>/login" >
<div class="form-group col-lg-6">
<label for="name">Email:</label>
<input type="text" class="form-control form-control-sm" id="email" name="email" required="true">
</div>
<div class="form-group col-lg-6">
<label for="confirm_password">Password:</label>
<input type="password" class="form-control form-control-sm" id="password" name="password" required="true">
</div>
<button type="submit" class="btn btn-primary">Submit</button>
<button id="cancel" name="cancel" class="btn btn-default" value="1">Cancel</button>

</form>
</div>

</body>
</html>