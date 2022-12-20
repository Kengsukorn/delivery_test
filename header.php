<?php session_start();?>
<?php include('class_conn.php');?>
<?php $cls_conn=new class_conn;?>
 
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <!-- Meta, title, CSS, favicons, etc. -->
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>ระบบแจ้งงานขนส่ง</title>
            <!-- Bootstrap -->
            <link href="backend/template/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
            <!-- Font Awesome -->
            <link href="backend/template/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
            <!-- NProgress -->
            <link href="backend/template/vendors/nprogress/nprogress.css" rel="stylesheet">
            <!-- iCheck -->
            <link href="backend/template/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
            <!-- bootstrap-progressbar -->
            <link href="backend/template/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
            <!-- JQVMap -->
            <link href="backend/template/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
            <!-- bootstrap-daterangepicker -->
            <link href="backend/template/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
            <!-- Custom Theme Style -->
            <link href="backend/template/build/css/custom.min.css" rel="stylesheet"> 
            
 

            
            </head>

        <body class="nav-md">
            <div class="container body">
                <div class="main_container">
                    <div class="col-md-3 left_col">
                        <div class="left_col scroll-view">
                            <div class="navbar nav_title" style="border: 0;" align="center"><img src="image/logo.jpg" width="145px" height="70px" /><span></span> </div>
                            <div class="clearfix"></div>
                            <!-- menu profile quick info -->
                            <div class="profile clearfix" style="margin-left:20px;" >
                                <!-- <div class="profile_pic"> </div> --> 
                                
                                <div class="profile_info" style="text-align :center;"> <span><h2> ระบบแจ้งงานขนส่ง</h2></span>
                                    <h2 style="text-align :center; font-size: 15px;"></h2> </div>
                            </div>
                            <!-- /menu profile quick info -->
                            <br />
                            <!-- sidebar menu -->
                            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                                <div class="menu_section">
                                     
                                    <ul class="nav side-menu">
                                         

                                       
                                        
                                        
                                        
                                        
                                     
                                        
                                        
                                        
                                      <li><a href="home.php"><i class="fa fa-home"></i>หน้าหลัก </a>
                                      </li>

                                      <li><a href="repair.php"><i class="fa fa-bug"></i>ข้อมูลการแจ้งซ่อม </a>
                                      </li>

                                        
                                        
                                        
                                         
                                        
                                    
                                    </ul>
                                </div>
                            </div>
                            <!-- /sidebar menu -->
                            <!-- /menu footer buttons -->
                            <!--  <div class="sidebar-footer hidden-small">
                                <a data-toggle="tooltip" data-placement="top" title="Settings"> <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> </a>
                                <a data-toggle="tooltip" data-placement="top" title="FullScreen"> <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span> </a>
                                <a data-toggle="tooltip" data-placement="top" title="Lock"> <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span> </a>
                                <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html"> <span class="glyphicon glyphicon-off" aria-hidden="true"></span> </a>
                            </div> -->
                            <!-- /menu footer buttons -->
                        </div>
                    </div>
                    <!-- top navigation -->
                   
                    <!-- /top navigation -->
                    <!-- page content -->