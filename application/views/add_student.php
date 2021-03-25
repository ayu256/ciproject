           <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="<?php echo base_url('dashboard')?>">Home</a></li>                  
                    <li class="active"><a href="#">Student</a></li>
                    <li class="active">Add Students</li>
                </ul>
                <!-- END BREADCRUMB -->                       
                
                <!-- PAGE CONTENT WRAPPER -->
                 <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            
                        <form class="form-horizontal" id="student_form" method="post" enctype="multipart/form-data">

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong> New Student</strong></h3>
                                  
                                </div>
                           
                                <div class="panel-body">   
                                
                                <div class="row">   
                                    
                                    <div class="col-md-6 col-sm-6">
                                            
                                    <div class="form-group">
                                       
                                        <div class="col-md-9 col-xs-12 ">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                                <input name="fname" type="text" class="form-control" placeholder="First Name" value="<?php echo set_value('fname');?>">
                                               
                                            </div>                                            
                                            <span class="help-block text-danger">
                                                    <?php echo form_error('fname'); ?>
                                            </span>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                      
                                        <div class="col-md-9 col-xs-12 ">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                                 <input name="father_name" type="text" class="form-control" placeholder="Father Name" value="<?php echo set_value('father_name');?>">
                                            </div>                                            
                                            <span class="help-block text-danger">
                                                    <?php echo form_error('father_name'); ?>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                      
                                        <div class="col-md-9 col-xs-12 ">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                 <input name="dob" type="date" class="form-control" placeholder="Date Of Birth" value="<?php echo set_value('dob');?>">
                                            </div>                                            
                                            <span class="help-block text-danger">
                                                    <?php echo form_error('dob'); ?>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                      
                                        <div class="col-md-9 col-xs-12 ">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-university"></span></span>
                                                 <input name="institute" type="text" class="form-control" placeholder="Institute Name" value="<?php echo set_value('institute');?>">
                                            </div>                                            
                                            <span class="help-block text-danger">
                                                    <?php echo form_error('institute'); ?>
                                            </span>
                                        </div>
                                    </div>

                                     <div class="form-group">
                                      
                                        <div class="col-md-9 col-xs-12 ">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-map-marker"></span></span>
                                                 <input name="address" type="text" class="form-control" placeholder="Address" value="<?php echo set_value('address');?>">
                                            </div>                                            
                                            <span class="help-block text-danger">
                                                    <?php echo form_error('address'); ?>
                                            </span>
                                        </div>
                                    </div>
                                    
                                   
                                
                                    </div>
                                    
                                    <div class="col-md-6 col-sm-6">
                                                                                                                         
                                    <div class="form-group">
                                       
                                        <div class="col-md-9 col-xs-12 ">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                                <input name="lname" type="text" class="form-control" placeholder="Last Name" value="<?php echo set_value('lname');?>">
                                               
                                            </div>                                            
                                            <span class="help-block text-danger">
                                                    <?php echo form_error('lname'); ?>
                                            </span>
                                        </div>
                                    </div>
                                    
                                     <div class="form-group">
                                      
                                        <div class="col-md-9 col-xs-12 ">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-phone"></span></span>
                                                 <input name="contact_no" type="number" class="form-control" maxlength="10" placeholder="Contact Number" value="<?php echo set_value('contact_no');?>">
                                            </div>                                            
                                            <span class="help-block text-danger">
                                                    <?php echo form_error('contact_no'); ?>
                                            </span>
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-9 col-xs-12 ">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-envelope"></span></span>
                                                 <input name="email" type="email" class="form-control" placeholder="Email" value="<?php echo set_value('email');?>">
                                            </div>                                            
                                            <span class="help-block text-danger">
                                                    <?php echo form_error('email'); ?>
                                            </span>
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-9 col-xs-12 ">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                                 <input name="profile_img" type="file" class="form-control" placeholder="Email" value="<?php echo set_value('profile_img');?>">
                                            </div>                                            
                                            <span class="help-block text-danger">
                                                    <?php echo form_error('profile_img'); ?>
                                            </span>
                                        </div>

                                    </div>
                                
                                    
                                  
                                    </div>

                                   </div>
                                </div>
                                <div class="panel-footer">
                                    <input type="reset" class="btn btn-default" value="Clear Form" />                                    
                                    <button class="btn btn-primary pull-right">Submit</button>
                                </div>
                            </div>

                          

                            </form>
                            
                        </div>
                    </div>                    
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->








