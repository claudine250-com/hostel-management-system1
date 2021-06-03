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

<h1>All the students applied for hostel</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Fname</td>
            <td>Lname</td>
            <td>gender</td>
            <td>reg_no</td>
            <td>Dept</td>
            <td>Level</td>
            <td>phone</td>
            <td>Hostel-Category</td>
            <td>Decision</td>

        </tr>
    </thead>
    <tbody>
    @foreach($students as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->fname }}</td>
            <td>{{ $value->lname }}</td>
            <td>{{ $value->gender }}</td>
            <td>{{ $value->reg_no }}</td>
            <td>{{ $value->department }}</td>
            <td>{{ $value->level }}</td>
            <td>{{ $value->phone }}</td>
            <td>{{ $value->hostel_category }}</td>
            <td>{{ $value->status }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
<button><a href="back1" class="form-control">Please Come Back</a></button>

</div>
</body>
</html>
