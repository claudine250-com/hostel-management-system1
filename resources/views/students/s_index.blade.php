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
        <li><a href="{{ URL::to('students/create') }}">Create a student</a>
    </ul>
</nav>

<h1>All the students</h1>

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
            <td>status</td>
            <td colspan="3">Actions</td>
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

            <!-- we will also add show, edit, and delete buttons -->
            <td>
                <form action="{{ route('students.destroy', $value->id) }}" method="POST">

                    <a href="{{ route('students.show', $value->id) }}" title="show">
                       Show
                    </a>
                </td><td>
                    <a href="{{ route('students.edit', $value->id) }}">
                        Update

                    </a></td><td>

                    @csrf
                    @method('DELETE')

                    <button type="submit" title="delete" style="border: none; background-color:transparent;">
                        Delete

                    </button></td>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>
