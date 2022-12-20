<?php include('header.php');?>
    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>หลายละเอียด</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a> </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        
                          <?php
                        if(isset($_GET['id']))
                        {
                            $id=$_GET['id'];
                            
                            $sql=" select * from tb_repair";
                            $sql.=" where";
                            $sql.=" repair_id='$id'";
                            $result=$cls_conn->select_base($sql);
                            while($row=mysqli_fetch_array($result))
                            {
                                 $repair_id=$row['repair_id'];
                                 $repair_opendate=$row['repair_opendate'];
                                 $repair_closingdate=$row['repair_closingdate'];
                                 $repair_ipcom=$row['repair_ipcom'];
                                 $repair_namelastname=$row['repair_namelastname'];
                                 $department_id=$row['department_id'];
                                 $building_id=$row['building_id'];
                                 $problemtype_id=$row['problemtype_id'];
                                 $repair_reason=$row['repair_reason'];
                                 $repair_image=$row['repair_image'];
                                 $repair_cause=$row['repair_cause'];
                                 $repair_fix=$row['repair_fix'];
                                 $repair_continue=$row['repair_continue'];
                                 $repair_note=$row['repair_note'];
                                 $status_id=$row['status_id'];
                                
                                
                                
                                
                            }
                        }
                        ?>
                        
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
                      
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="repair_opendate">วันที่เปิดงาน<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="repair_opendate" name="repair_opendate" value="<?=$repair_opendate;?>" required="required" class="form-control col-md-7 col-xs-12" > </div>
                        </div>
                            
                            
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="repair_closingdate">วันที่ปิดงาน<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="repair_closingdate" name="repair_closingdate"  value="<?=$repair_closingdate;?>" required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>
                            
                            
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="repair_ipcom">IP เครื่อง<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="repair_ipcom" name="repair_ipcom" value="<?=$repair_ipcom;?>"   required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>    
                            
                            
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="repair_namelastname">ชื่อ-สกุล<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="repair_namelastname" name="repair_namelastname" value="<?=$repair_namelastname;?>"  required="required" class="form-control col-md-7 col-xs-12"> </div>
                       
                            
                            </div> 
                            
                            
                       <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="department_id">แผนก<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select id="department_id" name="department_id" required="required" class="form-control col-md-7 col-xs-12">
                                    <?php 
                                    $sqld=" select * from tb_department where department_id='$department_id'";
                                    $resultd=$cls_conn->select_base($sqld);
                                    while($rowd=mysqli_fetch_array($resultd))
                                    {
                                        ?>                                  
                                    <option value="<?=$rowd['department_id'];?>"><?=$rowd['department_name'];?></option>
                                      <?php
                                    }
                                    ?>
                                </select>                           
                           </div>
                        </div>   
                            
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="building_id">อาคาร<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12"> 
                                
                                <select id="building_id" name="building_id" required="required" class="form-control col-md-7 col-xs-12">
                                    <?php 
                                    $sqld=" select * from tb_building where building_id='$building_id'";
                                    $resultd=$cls_conn->select_base($sqld);
                                    while($rowd=mysqli_fetch_array($resultd))
                                    {
                                        ?>                                  
                                    <option value="<?=$rowd['building_id'];?>"><?=$rowd['building_name'];?></option>
                                      <?php
                                    }
                                    ?>
                                </select>      
                            
                            </div>
                        </div>
                            
                            
                         <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="problemtype_id">ประเภทปัญหา<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                
                             
                               <select id="problemtype_id" name="problemtype_id" required="required" class="form-control col-md-7 col-xs-12">
                                    <?php 
                                    $sqld=" select * from tb_problemtype  where problemtype_id='$problemtype_id'";
                                    $resultd=$cls_conn->select_base($sqld);
                                    while($rowd=mysqli_fetch_array($resultd))
                                    {
                                        ?>                                  
                                    <option value="<?=$rowd['problemtype_id'];?>"><?=$rowd['problemtype_name'];?></option>
                                      <?php
                                    }
                                    ?>
                                </select>     
                             
                             </div>
                        </div>   
                            
                            
                         <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="repair_reason">เรื่องที่แจ้ง/ปัญหา<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="repair_reason" name="repair_reason" value="<?=$repair_reason;?>" required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>
                            
                            
                         <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="repair_image">รูปภาพประกอบ<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                           
                                <img src="upload/<?=$repair_image;?>" />
                             
                             
                             </div>
                        </div>
                            
                            
                         <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="repair_cause">สาเหตุ<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="repair_cause" name="repair_cause" value="<?=$repair_cause;?>" required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>   
                            
                         <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="repair_fix">สิ่งที่ต้องการแก้ไข<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="repair_fix" name="repair_fix"  value="<?=$repair_fix;?>" required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>   
                            
                            
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="repair_continue">สิ่งที่ต้องการดำเนินการต่อ<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="repair_continue" name="repair_continue"  value="<?=$repair_continue;?>"  required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>
                            
                            
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="repair_note">หมายเหตุ<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="repair_note" name="repair_note" value="<?=$repair_note;?>"  required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div> 
                            
                            
                             <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status_id">สถานะการทำงาน<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                             
                                 
                                    <select id="status_id" name="status_id" required="required" class="form-control col-md-7 col-xs-12">
                                    <?php 
                                    $sqld=" select * from tb_status where status_id='$status_id'";
                                    $resultd=$cls_conn->select_base($sqld);
                                    while($rowd=mysqli_fetch_array($resultd))
                                    {
                                        ?>                                  
                                    <option value="<?=$rowd['status_id'];?>"><?=$rowd['status_name'];?></option>
                                      <?php
                                    }
                                    ?>
                                </select>     
                                 
                                 
                                 </div>
                        </div>     
  

                    
                            
                            
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <a href="home.php"><button type="button" name="submit" class="btn btn-success">กลับ</button></a>
                                    
                                </div>
                            </div>
                        </form>
                        
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('footer.php');?>