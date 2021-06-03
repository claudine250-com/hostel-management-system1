<!DOCTYPE html>
<html>
<head>
    <title>student App</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
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
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('students') }}">student Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('students') }}">View All students</a></li>
        <li><a href="{{ URL::to('students/s_create') }}">Create a student</a>
    </ul>
</nav>

<h1>Showing {{ $student->fname }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $student->fname }}</h2>
        <p>
            <strong>Last Name:</strong> {{ $student->lname }}<br>
            <strong>Gender:</strong> {{ $student->gender }}<br>
            <strong>Reg NO:</strong> {{ $student->reg_no }}<br>
            <strong>Department:</strong> {{ $student->department }}<br>
            <strong>Level:</strong> {{ $student->level }}<br>
            <strong>Phone:</strong> {{ $student->phone }}<br>
            <strong>Hostel:</strong> {{ $student->hostel_category }}<br>
            <strong>status:</strong> {{ $student->status }}<br>


        </p>
    </div>

</div>
</body>
</html>
