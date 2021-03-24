<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: auto; /* Should be removed. Only for demonstration */
  margin-left: 100px;
  margin-right: 100px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
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

<h2>User Details:</h2>

<div class="row">
  <div class="column">
   Name  :  <?php echo $users[0]->name ?>
  </div>
  <div class="column">
   UserName  :  <?php echo $users[0]->username ?>
  </div>
  <div class="column">
   Email  :  <?php echo $users[0]->email ?>
  </div>
  <div class="column">
   DON  :  <?php echo $users[0]->dob ?>
  </div>
  <div class="column">
   Address  :  <?php echo $users[0]->address ?>
  </div>
  <div class="column">
   Country  :  <?php echo $users[0]->country ?>
  </div>
  <div class="column">
   State  :  <?php echo $users[0]->state ?>
  </div>
  <div class="column">
   City  :  <?php echo $users[0]->city ?>
  </div>
</div>

</body>
</html>