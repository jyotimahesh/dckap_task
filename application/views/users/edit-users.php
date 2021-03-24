<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Codeigniter Crud By PHP Code Builder</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo site_url(); ?>manage-users">Manage Users</a></li>
        <li><a href="<?php echo site_url(); ?>add-users">Add Users</a></li>
        <li class="pull-right"><a href="<?php echo site_url(); ?>logout">Logout</a></li>
      </ul>
  </div>
</nav>

<div class="container">

  <h2>Update Users</h2>  
<form role="form" method="post" action="<?php echo site_url()?>edit-users-post" enctype="multipart/form-data">

 <input type="hidden" value="<?php echo $users[0]->id ?>"   name="users_id">


      <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" value="<?php echo $users[0]->name ?>" class="form-control" id="name" name="name">
  </div>
    <div class="form-group">
    <label for="username">Username:</label>
    <input type="text" value="<?php echo $users[0]->username ?>" class="form-control" id="username" name="username">
  </div>
    <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" value="<?php echo $users[0]->email ?>" class="form-control" id="email" name="email">
  </div>
    <div class="form-group">
    <label for="dob">Dob:</label>
    <input type="text" value="<?php echo $users[0]->dob ?>" class="form-control" id="dob" name="dob">
  </div>
      <div class="form-group">
  <label for="address">Address:</label>
<textarea  class="form-control" id="address" name="address">     <?php echo $users[0]->address ?>       </textarea>
 </div>
      <div class="form-group">
    <label for="country">Country:</label>
    <input type="text" value="<?php echo $users[0]->country ?>" class="form-control" id="country" name="country">
  </div>
    <div class="form-group">
    <label for="state">State:</label>
    <input type="text" value="<?php echo $users[0]->state ?>" class="form-control" id="state" name="state">
  </div>
    <div class="form-group">
    <label for="city">City:</label>
    <input type="text" value="<?php echo $users[0]->city ?>" class="form-control" id="city" name="city">
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>