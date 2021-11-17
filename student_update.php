<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home Page</title>


    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/nprogress.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">

<div class="container body">

    <div class="main_container">
	
        <div class="col-md-3 left_col">
		
            <div class="left_col scroll-view">
			
                <div class="navbar nav_title" style="border: 0;">
				
                    <a href="#" class="site_title"><i class="fa fa-book"></i> <span>LMS</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>

                         
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- /menu profile quick info -->

                <br/>

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li><a href="my_issue_book.php"><i class="fa fa-home"></i>issued book <span class="fa fa-chevron-down"></span></a>

                            </li>
                            
							<li><a href="student_display_search_book.php"><i class="fa fa-desktop"></i>display and search books<span class="fa fa-chevron-down"></span></a>

                            </li>
							</li>
							<li><a   ><i class="fa fa-edit"></i>update student info<span class="fa fa-chevron-down"></span></a>

                            </li>
							 

                        </ul>
                    </div>


                </div>

            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                               aria-expanded="false">
                                <img src="" alt="">log out
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="template.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>

                        <!--<li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown"
                               aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green">6</span>
                            </a>

                        </li>-->
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Plain Page</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>update student</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
							<form name="from1" action="student_update_connect.php" method="post" class="col-lg-6">
						<table class="table table border">
						<tr>
						<td><input type="text" class="form-control" placeholder="student id" name="sid" required=""></td>
						</tr>
						
						<tr>
						<td><input type="text" class="form-control" placeholder="New first name" name="aname" required=""></td>
						</tr>
						
						<tr>
						<td><input type="text" class="form-control" placeholder="last new name" name="pname" required=""></td>
						</tr>
						<tr>
						<td><input type="text" class="form-control" placeholder="new username" name="nuser" required=""></td>
						</tr>
						<tr>
						<td><input type="text" class="form-control" placeholder="new password" name="npass" required=""></td>
						</tr>
						<tr>
						<td><input type="text" class="form-control" placeholder="new email" name="nemil" required=""></td>
						</tr>
						<tr>
						<td><input type="text" class="form-control" placeholder="new contruct no" name="ncn" required=""></td>
						</tr>
						
						 
						 
						<tr>
						<td><input type="submit" name="submit1" class="btn btn-default submit" value="update"></td>
						</tr>
						</table>
						</form>
							 
										
									
								
								
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->


        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Library Management System
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="js/fastclick.js"></script>
<!-- NProgress -->
<script src="js/nprogress.js"></script>

<!-- Custom Theme Scripts -->
<script src="js/custom.min.js"></script>
</body>
</html>
