<!DOCTYPE html>
<php lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Project</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url();?>assets/css/theme-white.css"/>
        <!-- EOF CSS INCLUDE -->       

        <style type="text/css">
            .dropdown-menu.open {z-index: 10;}
            .dropdown-menu.inner.selectpicker {z-index: 10;}
            .to-top{background: #1caf9a;}
            .mCSB_scrollTools {right: -5px;}
            .innerselect {background: #1e293d;border:none;}
            .cordianitems {height: 30px;vertical-align: middle;padding: 7px;background: #f5f5f5;}
            .cordianitems a {text-decoration: none; color: #000; font-size: 14px;}
        </style>                             
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="index.php">
                                Project</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <!-- <a href="#" class="profile-mini">
                            <img src="<?php echo base_url();?>assets/images/sgew-logo.jpeg" alt="John Doe"/>
                        </a> -->
                        <div class="profile">
                          <!--   <div class="profile-image">
                                <img src="<?php echo base_url();?>assets/images/sgew-logo.jpeg" alt="John Doe"/>
                            </div> -->
                            <div class="profile-data">
                                <div class="profile-data-name">Project Title</div>
                               <!-- <div class="profile-data-title">Web Developer/Designer</div>-->
                            </div>
                           <!-- <div class="profile-controls">
                                <a href="#" class="profile-control-left"><span class="fa fa-info"></span></a>
                                <a href="#" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                            </div>-->
                        </div>                                                                        
                    </li>
                   <!--  <li class="xn-title">Navigation</li> -->
                    
                        <li class="active">
                            <a href="<?php echo base_url();?>student"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>                        
                        </li>                    
                        <li class="xn-openable">
                            <a href="#"><span class="fa fa-group"></span> <span class="xn-text">Student</span></a>
                            <ul>
                                <li><a href="<?php echo base_url();?>student/add"><span class="fa fa-plus"></span> Add</a></li>
                                <li><a href="<?php echo base_url();?>student/view"><span class="fa fa-align-justify"></span> View</a></li>
                            </ul>
                        </li>

                </ul>
                <!-- END X-NAVIGATION -->
            </div>

            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                  
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->  
        
        
        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="<?php echo base_url('logout') ?>" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="<?php echo base_url();?>assets/audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="<?php echo base_url();?>assets/audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                  
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/icheck/icheck.min.js'></script>        
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/scrolltotop/scrolltopcontrol.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/morris/raphael-min.js"></script>
     <!--   <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/morris/morris.min.js"></script> -->      
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/rickshaw/rickshaw.min.js"></script>
        <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
        <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>                
        <script type='text/javascript' src='<?php echo base_url();?>assets/js/plugins/bootstrap/bootstrap-datepicker.js'></script>                
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/owl/owl.carousel.min.js"></script>                 
        
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/moment.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- END THIS PAGE PLUGINS-->        

    <!--Other page plugins-->

         <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
             <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/datatables/jquery.dataTables.min.js"></script> 
    
    <!--end of other page plugins-->


        <!-- START TEMPLATE -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/settings.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins.js"></script>        
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/actions.js"></script>
        
       <!-- <script type="text/javascript" src="<?php echo base_url();?>assets/js/demo_dashboard.js"></script>-->
        <!-- END TEMPLATE -->
        
    <!-- END SCRIPTS -->         
    </body>
</html>