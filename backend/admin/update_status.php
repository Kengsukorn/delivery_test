<?php include('header.php');?>
    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>แก้ไขข้อมูลสถานะ</h2>
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
                            
                            $sql=" select * from tb_status";
                            $sql.=" where";
                            $sql.=" status_id='$id'";
                            $result=$cls_conn->select_base($sql);
                            while($row=mysqli_fetch_array($result))
                            {
                                 $status_id=$row['status_id'];
                                 $status_name=$row['status_name'];
                                
                                
                            }
                        }
                        ?>
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post">
                         <input type="hidden" name="status_id" value="<?=$status_id;?>" />    
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status_name">ชื่อสถานะ<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="status_name" name="status_name" required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>
                            
                          

                    
                            
                            
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" name="submit" class="btn btn-success">บันทึก</button>
                                    <button type="reset" name="reset" class="btn btn-danger">ยกเลิก</button>
                                </div>
                            </div>
                        </form>
                        <?php
                        if(isset($_POST['submit']))
                        {
                            $status_id=$_POST['status_id'];
                            $status_name=$_POST['status_name'];
                          
                            
                          
                            
                            $sql=" update tb_status";
                            $sql.=" set";
                            $sql.=" status_name='$status_name'";                           
                            $sql.=" where";
                            $sql.=" status_id='$status_id'";
                            
                            
                            if($cls_conn->write_base($sql)==true)
                            {
                                echo $cls_conn->show_message('บันทึกข้อมูลสำเร็จ');
                                echo $cls_conn->goto_page(1,'show_status.php');
                            }
                            else
                            {
                                 echo $cls_conn->show_message('บันทึกข้อมูลไม่สำเร็จ');
                                 echo $sql;
                            }
                        }
                        
                        ?>
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('footer.php');?>