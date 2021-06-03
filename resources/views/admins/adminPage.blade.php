@extends('layouts.app')
@section('content')
	<title>Hostel management system</title>
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
@csrf
    <div id="wrapper">

        <div class="content">
            <div style="position: absolute;text-align:center;
            color:white;right:40%; margin-top:130px;font-size:24;" >
                <a href="ViewApplicant" style="color:yellow">View Applicant</a>&nbsp;&nbsp;&nbsp;
                <a href="report" style="color:yellow">Report</a>&nbsp;&nbsp;&nbsp;
                <a href="Logout" style="color:yellow">Log Out</a></div>
                 <img src="../images/hostel.png" style="height:100%; width:100%;">
            </div>

    </div>

