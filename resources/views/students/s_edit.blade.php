
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
        <a class="navbar-brand" href="{{ URL::to('students') }}">student Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('students') }}">View All students</a></li>
        <li><a href="{{ URL::to('students/create') }}">Create a student</a>
    </ul>
</nav>

<h1>Create a student</h1>

<!-- if there are creation errors, they will show here -->
<form method="post" action="{{ route('students.update', $student->id) }}">
    @csrf
    <div class="form-group">
     First Name:
      <input type="text" name="fname" class="form-control" value="{{$student->fname}}">
    </div>
    <div class="form-group">
        Last Name:
         <input type="text" name="lname" class="form-control" value="{{$student->lname}}">
       </div>Gender:
       <div class="form-group"><input type="radio" name="gender" value="male" checked>Male &nbsp;&nbsp;&nbsp;
        &nbsp;<input type="radio" name="gender" value="female">Female
            </div>
       <div class="form-group">
       Registration Number:
         <input type="text" name="reg_no" class="form-control" value="{{$student->reg_no}}">
       </div>
       <div class="form-group">
      Department:
<select class="form-control" name="department" value="{{$student->department}}">
<option value="{{$student->department}}">IT</option>
<option value="{{$student->department}}">ET</option>
<option value="{{$student->department}}">RE</option>
</select>
     </div>
     <div class="form-group">
       Level:
  <select class="form-control" name="level" value="{{$student->level}}">
  <option value="{{$student->level}}">Level 1</option>
  <option value="{{$student->level}}">Level 2</option>
  <option value="{{$student->level}}">Level 3</option>
  </select>
       </div>
       <div class="form-group">
     Enter phone number:
         <input type="text" name="phone" class="form-control" value="{{$student->phone}}">
       </div>
       <div class="form-group">
        Hostel_Category:
  <select class="form-control" name="hostel_category" value="{{$student->hostel_category}}">
  <option value="{{$student->hostel_category}}">GR</option>
  <option value="{{$student->hostel_category}}">BR</option>
  </select>
       </div>
       <div class="form-group">
        Application status:
  <select class="form-control" name="status" value="{{$student->status}}">
  <option value="{{$student->status}}">Approve</option>
  <option value="{{$student->status}}">DisApprove</option>
  </select>
       </div>
       <div>
        <input type="submit" class="btn btn-default submit" value="Update">

      </div></form>
      </div>
</body>
</html>
