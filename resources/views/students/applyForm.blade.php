<!DOCTYPE html>
<html>
<head>
    <title>student App</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css1/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../css1/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../css1/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css1/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../css1/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../css1/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="back">Back</a>
    </div>
</nav>

<h1>Submit Your Application</h1>

<!-- if there are creation errors, they will show here -->
<form action="apply1" method="POST" >
    @csrf
    <div class="form-group">
     First Name:
      <input type="text" name="fname" class="form-control">
    </div>
    <div class="form-group">
        Last Name:
         <input type="text" name="lname" class="form-control">
       </div>Gender:
       <div class="form-group"><input type="radio" name="gender" value="male" checked>Male &nbsp;&nbsp;&nbsp;
        &nbsp;<input type="radio" name="gender" value="female">Female
            </div>
       <div class="form-group">
       Registration Number:
         <input type="text" name="reg_no" class="form-control">
       </div>
       <div class="form-group">
      Department:
<select class="form-control" name="department">
<option value="IT">IT</option>
<option value="ET">ET</option>
<option value="RE">RE</option>
</select>
     </div>
     <div class="form-group">
       Level:
  <select class="form-control" name="level">
  <option value="level 1">Level 1</option>
  <option value="level 3">Level 2</option>
  <option value="level 3">Level 3</option>
  </select>
       </div>
       <div class="form-group">
     Enter phone number:
         <input type="text" name="phone" class="form-control">
       </div>
       <div class="form-group">
        Hostel_Category:
  <select class="form-control" name="hostel_category">
  <option value="GR">GR</option>
  <option value="GB">BR</option>
  </select>
       </div>
       <div class="form-group">
        Application status:
  <select class="form-control" name="status">
  <option value="pending">pending....</option>
  </select>
       </div>
       <div>
        <input type="submit" class="btn btn-default submit" value="Apply">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="reset" class="btn btn-danger submit" value="clear">
      </div></form>
      </div>
</body>
</html>
