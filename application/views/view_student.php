   
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="<?php echo base_url('dashboard') ?>">Home</a></li>
                    <li><a href="<?php echo base_url('suppliers')?>">Student</a></li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE TITLE -->
                <div class="page-title col-sm-12">                    
                    <h2 class="col-sm-6">Student</h2>
                   <!-- <div class="col-sm-6 ">
                        <a href="<?php echo base_url('suppliers/create') ?>"><button class="btn btn-primary pull-right"  >Add New Supplier</button></a>
                    </div>-->
                </div>
                <!-- END PAGE TITLE -->                
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <!-- START RESPONSIVE TABLES -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">

                                <div class="panel-heading">
                                    <h3 class="panel-title">All Students</h3>
                                   
                                </div>

                                <div class="panel-body">

                                    <div class="table-responsive">
                                        <table class="table datatable table-bordered table-striped table-actions" >
                                            <thead>
                                                <tr>
                                                    <th>Sr No</th>
                                                    <th>Student Name</th>
                                                    <th>Father Name</th>
                                                    <th>Contact No.</th>
                                                    <th>Email</th>
                                                    <th>Date Of Birth</th>
                                                    <th>Institue</th>
                                                    <th>Address</th>
                                                    <th>Profile Image</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>                                            
                                                
                                            <?php 
                                            if($student_data){
                                            $i = 0;
                                            foreach ($student_data as $data) {  
                                            $i++;
                                            
                                            ?>
                                                <tr>
                                                <td class="text-center"><?= $i ?></td>
                                                <td> <?= $data->f_name . ' ' .$data->l_name ?> </td>
                                                <td><?= $data->father_name ?></td>
                                                <td><?= $data->contact_no ?></td>
                                                <td><?= $data->email ?></td>
                                                <td><?= $data->dob ?></td>
                                                <td><?= $data->institute ?></td>
                                                <td><?= $data->address ?></td> 
                                                <td><image src="<?php echo base_url();?>assets/student_img/<?= $data->profile_img ?>" height="60px" width="60px" /></td> 
                                                </tr>
                                                <?php }}?>

                                            </tbody>
                                        </table>
                                    </div>                                

                                </div>
                            </div>                                                

                        </div>
                    </div>
                    <!-- END RESPONSIVE TABLES -->
                    
                <!-- END PAGE CONTENT WRAPPER -->                                    
                </div>         
            </div>   




          

