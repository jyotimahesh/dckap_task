<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Manage Users</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
      <ul class="nav navbar-nav">
        <li class="active" ><a href="<?php echo site_url(); ?>manage-users">Manage Users</a></li>
        <li><a href="<?php echo site_url(); ?>add-users">Add Users</a></li>
         <li class="pull-right"><a href="<?php echo site_url(); ?>logout">Logout</a></li>
      </ul>
  </div>
</nav>
<div class="container">
  <h2>Manage Users</h2>
  <?php if($this->session->flashdata('success')){ ?>
  <div class="alert alert-success">
                    <strong><span class="glyphicon glyphicon-ok"></span>   <?php echo $this->session->flashdata('success'); ?></strong>
                </div>
  <?php } ?>
  
<form role="form" method="post" action="<?php echo site_url()?>/manage-users" >
<div class="input-group pull-right">
  <div class="form-outline">
    <input id="search-input" type="search" id="manage-users" name="querystring" class="form-control">
    <input type="submit" class="btn btn-primary">
  <!--  <li class="active" ><a href="<?php echo site_url(); ?>/manage-users">Clear</a></li> -->
    <a href="<?php echo site_url(); ?>/manage-users" class="btn btn-primary" role="button" aria-pressed="true">Clear</a>
  </div>
</div>

</form>

<?php if(!empty($users)) {?>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>SNo</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile Number</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    <?php $i=1; foreach($users as $users) { ?>
      <tr>
        <td> <?php echo $i; ?> </td>
        <td> <a href="<?php echo site_url()?>view-users/<?php echo $users->id?>" > <?php echo $users->name ?> </a> </td>
         <td> 
         <?php echo $users->email; ?>
         </td>
        <td> 
         <?php echo $users->mobile_number; ?>
         </td>
        
        <td>
        <a href="<?php echo site_url()?>change-status-users/<?php echo $users->id ?>" > <?php if($users->status==0){ echo "Activate"; } else { echo "Deactivate"; } ?></a>|
        <a href="<?php echo site_url()?>edit-users/<?php echo $users->id?>" >Edit</a>|
        <a href="<?php echo site_url()?>delete-users/<?php echo $users->id?>" onclick="return confirm('are you sure to delete')">Delete</a>
        </td>

      </tr>
    <?php $i++; } ?>
    </tbody>
  </table>
  <?php } else {?>
  <div class="alert alert-info" role="alert">
                    <strong>No Userss Found!</strong>
                </div>
  <?php } ?>
</div>

</body>
</html>