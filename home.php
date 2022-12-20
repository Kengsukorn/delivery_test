<?php include('header.php');?>
    <div class="right_col" role="main">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>หน้าหลัก </h2>
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
                                    <th>คิวที่</th>
                                    <th>วันที่แจ้ง</th>
                                    <th>ผู้แจ้งซ่อม</th>
                                    <th>อาคาร</th>
                                    <th>แผนก</th>
                                    <th>ประเภทปัญหา</th>
                                    <th>รายละเอียด</th>
                                    <th>สถานะการทำงาน</th>
                                    <th>ดูหลายละเอียด</th>
                                  
                                    
                                    
                                  
                                
                                </tr>
                            </thead>


                            <tbody>
                                <?php
                             $sql=" SELECT
tb_repair.repair_id,
tb_repair.repair_opendate,
tb_department.department_name,
tb_building.building_name,
tb_repair.repair_namelastname,
tb_problemtype.problemtype_name,
tb_repair.repair_detail,
tb_status.status_name
FROM
tb_repair
INNER JOIN tb_department ON tb_repair.department_id = tb_department.department_id
INNER JOIN tb_problemtype ON tb_repair.problemtype_id = tb_problemtype.problemtype_id
INNER JOIN tb_status ON tb_repair.status_id = tb_status.status_id
INNER JOIN tb_building ON tb_repair.building_id = tb_building.building_id


";
                             $result=$cls_conn->select_base($sql);
                             while($row=mysqli_fetch_array($result))
                             {
                                 ?>
                                    <tr>
                                 
                                        
                          
                                        <td>
                                            <?=$row['repair_id'];?> 
                                        </td> 
                                        
                                        <td>
                                            <?=$row['repair_opendate'];?> 
                                        </td>  
                                   
                                         <td>
                                            <?=$row['repair_namelastname'];?> 
                                        </td> 
                                        
                                        <td>
                                            <?=$row['building_name'];?> 
                                        </td>  
                                        
                                        <td>
                                            <?=$row['department_name'];?>  
                                        </td>  
                                        
                                        <td>
                                            <?=$row['problemtype_name'];?> 
                                        </td> 
                                        
                                         <td>
                                            <?=$row['repair_detail'];?> 
                                        </td>  
                                        
                                        <td>
                                            <?=$row['status_name'];?>  
                                        </td> 
                                       

 
                                        
                                        <td>
                                            <a href="detail.php?id=<?=$row['repair_id'];?>" onclick="return confirm('คุณต้องการแก้ไขหรือไม่?')"><img src="image/magnifier.png" /></a>
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
