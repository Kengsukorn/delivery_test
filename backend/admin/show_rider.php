<?php include('header.php');?>
    <div class="right_col" role="main">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>แสดงข้อมูลไรด์เดอร์ </h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>

                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                         
                        <table id="datatable-buttons" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>รหัสไรด์เดอร์</th>
                                    <th>ชื่อไรด์เดอร์</th>
                                    <th>เบอร์โทรศัพท์ไรด์เดอร์</th>
                                    <th>ชื่อผู้ใช้งาน</th>
                                    <th>รหัสผ่าน</th>
                                    <th>ราคา/กิโล</th>
                                    
                                    
                                    
                                    <th>แก้ไข</th>
                                    <th>ลบ</th> 
                                </tr>
                            </thead>


                            <tbody>
                                <?php
                             $sql=" select * from tb_rider";
                             $result=$cls_conn->select_base($sql);
                             while($row=mysqli_fetch_array($result))
                             {
                                 ?>
                                    <tr>
                                        <td>
                                            <?=$row['rider_id'];?>
                                        </td>
                                        
                                        <td>
                                            <?=$row['rider_name'];?>
                                        </td>
                                        
                                        <td>
                                            <?=$row['rider_tel'];?>
                                        </td>
                                        
                                        <td>
                                            <?=$row['rider_username'];?>
                                        </td>
                                        
                                        <td>
                                            <?=$row['rider_password'];?>
                                        </td>
                                        
                                        <td>
                                            <?=$row['rider_rateprice'];?>
                                        </td>
                                        
                                        
                                        <td>
                                            <a href="update_rider.php?id=<?=$row['rider_id'];?>" onclick="return confirm('คุณต้องการแก้ไขหรือไม่?')"><img src="../../image/edit.png" /></a>
                                        </td>
                                        <td>
                                            <a href="delete_rider.php?id=<?=$row['rider_id'];?>" onclick="return confirm('คุณต้องการลบหรือไม่?')"><img src="../../image/delete.png" /></a>
                                        </td>  
                                    </tr>
                                    <?php
                             }
                          ?>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>

    </div>


    <?php include('footer.php');?>
