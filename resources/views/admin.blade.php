<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin panel</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="../../src/style/datepicker3.css" rel="stylesheet">
<link href="../../src/style/admin.css" rel="stylesheet">
<link href="../../src/style/general.css" rel="stylesheet">
<script src="../../src/js/jquery-1.11.1.min.js"></script>
<script src="../../src/js/bootstrap-datepicker.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="../../src/js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><span>Admin</span>Panel</a>
                <ul class="user-menu">
                    <li class="dropdown pull-right">
                        <a href="/admin-logout">
                            <svg class="glyph stroked cancel">
                                <use xlink:href="#stroked-cancel"></use>
                            </svg> Logout</a>
                    </li>
                </ul>
            </div>

        </div>
        <!-- /.container-fluid -->
    </nav>
        <div id="sidebar-collapse" class="col-sm-3 col-lg-2 col-md-3 sidebar">
            <ul class="nav menu">
                <li>
                    <a href="/approveRecepie">
                        <svg class="glyph stroked dashboard-dial">
                            <use xlink:href="#stroked-dashboard-dial"></use>
                        </svg> Recepti</a>
                </li>
                <li>
                    <a href="/admin-orders">
                        <svg class="glyph stroked line-graph">
                            <use xlink:href="#stroked-line-graph"></use>
                        </svg> Narudzbine</a>
                </li>
            </ul>
        </div>
        <!--/.sidebar-->
        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
            @yield('admin_content')
        </div>
</body>

</html>
