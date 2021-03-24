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
<li class="active" ><a href="<?php echo site_url(); ?>logout">Add Users</a></li>
</ul>
</div>
</nav>

<div class="container">

<h2>Add Users</h2>
<form role="form" method="post" action="<?php echo site_url()?>/add-users-post" enctype="multipart/form-data">
<div class="form-group col-lg-6">
<label for="name">Name:</label>
<input type="text" class="form-control form-control-sm" id="name" name="name">
</div>
<div class="form-group col-lg-6">
<label for="username">Username:</label>
<input type="text" class="form-control form-control-sm" id="username" name="username">
</div>
<div class="form-group col-lg-6">
<label for="email">Email:</label>
<input type="email" class="form-control form-control-sm" id="email" name="email">
</div>
<div class="form-group col-lg-6">
<label for="email">Mobile Number:</label>
<input type="text" class="form-control form-control-sm" id="mobile_number" name="mobile_number">
</div>
<div class="form-group col-lg-6">
<label for="password">Password:</label>

<input id="password" class="form-control form-control-sm" name="password" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" placeholder="Password" required>




</div>
<div class="form-group col-lg-6">
<label for="confirm_password">Confirm_password:</label>
<input id="password_two" class="form-control form-control-sm" name="confirm_password" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');" placeholder="Verify Password" required>

</div>
<div class="form-group col-lg-6">
<label for="dob">Dob:</label>
<input type="text" class="form-control form-control-sm" id="dob" name="dob">
</div>
<div class="form-group col-lg-6">
<label for="profile_image">User_Profile_Image:</label>
<input type="file" class="form-control form-control-sm" id="profile_image" name="profile_image">
</div>
<div class="form-group col-lg-6">
<label for="address">Address:</label>
<textarea  class="form-control" id="address form-control-sm" name="address"></textarea>
</div>
<div class="form-group col-lg-6">
<label for="country">Country:</label>
<input type="text" class="form-control form-control-sm" id="country" name="country">
</div>
<div class="form-group col-lg-6">
<label for="state">State:</label>
<input type="text" class="form-control form-control-sm" id="state" name="state">
</div>
<div class="form-group col-lg-6">
<label for="city">City:</label>
<input type="text" class="form-control form-control-sm" id="city" name="city">
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>