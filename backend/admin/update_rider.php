<?php include('header.php');?>
    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>แก้ไขข้อมูลไรด์เดอร์</h2>
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
                            
                            $sql=" select * from tb_rider";
                            $sql.=" where";
                            $sql.=" rider_id='$id'";
                            $result=$cls_conn->select_base($sql);
                            while($row=mysqli_fetch_array($result))
                            {
                                 $rider_id=$row['rider_id'];
                                 $rider_name=$row['rider_name'];
                                 $rider_tel=$row['rider_tel'];
                                 $rider_username=$row['rider_username'];
                                 $rider_password=$row['rider_password'];
                                 $rider_rateprice=$row['rider_rateprice'];
                                
                                
                            }
                        }
                        ?>
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post">
                        <input type="hidden" name="rider_id" value="<?=$rider_id;?>" />
                            
                            
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="rider_name">ชื่อผู้ไรด์เดอร์<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="rider_name" name="rider_name" value="<?=$rider_name;?>" required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div>
                           
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="rider_tel">เบอร์ติดต่อไรด์เดอร์<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="number" id="rider_tel" name="rider_tel" value="<?=$rider_tel;?>"   required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div> 
                            
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="rider_username">Username<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="rider_username" name="rider_username" value="<?=$rider_username;?>"  required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div> 
                            
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="rider_password">Password<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="password" id="rider_password" name="rider_password" value="<?=$rider_password;?>"  required="required" class="form-control col-md-7 col-xs-12"> </div>
                        </div> 
                            
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="admin_tel">ราคา/กิโล<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="number" id="rider_rateprice" name="rider_rateprice" value="<?=$rider_rateprice;?>"   required="required" class="form-control col-md-7 col-xs-12"> </div>
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
                            $rider_id=$_POST['rider_id'];
                            $rider_name=$_POST['rider_name'];
                            $rider_tel=$_POST['rider_tel'];
                            $rider_username=$_POST['rider_username'];
                            $rider_password=$_POST['rider_password'];
                            $rider_rateprice=$_POST['rider_rateprice'];
                        
                            
                            $sql=" update tb_rider";
                            $sql.=" set";
                            $sql.=" rider_name='$rider_name'";
                            $sql.=" ,rider_tel='$rider_tel'";
                            $sql.=" ,rider_username='$rider_username'";
                            $sql.=" ,rider_password='$rider_password'";
                            $sql.=" ,rider_rateprice='$rider_rateprice'";
                            $sql.=" where";
                            $sql.=" rider_id='$rider_id'";
                            
                            if($cls_conn->write_base($sql)==true)
                            {
                                echo $cls_conn->show_message('บันทึกข้อมูลสำเร็จ');
                                echo $cls_conn->goto_page(1,'show_rider.php');
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