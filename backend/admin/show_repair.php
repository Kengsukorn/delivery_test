<?php include('header.php');?>
    <div class="right_col" role="main">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>แสดงข้อมูลการแจ้งซ่อม </h2>
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
                                    <th>รหัสแจ้งซ่อม</th>
                                    <th>วันที่เปิดงาน</th>
                                    <th>วันที่ปิดงาน</th>
                                    <th>IP เครื่อง</th>
                                    <th>ชื่อ-สกุล</th>
                                    <th>แผนก</th>
                                    <th>อาคาร</th>
                                    <th>ประเภทปัญหา</th>
                                    <th>เรื่องที่แจ้ง/ปัญหา</th>
                                    <th>รูปภาพประกอบ</th>
                                    <th>สาเหตุ</th>       
                                    <th>หลายละเอียด</th>      
                                    <th>สิ่งที่ต้องการแก้ไข</th>
                                    <th>สิ่งที่ต้องการดำเนินการต่อ</th>
                                    <th>หมายเหตุ</th>
                                    <th>สถานะการทำงาน</th>
                                  
                                    
                                    
                                    <th>แก้ไข</th>
                                    <th>ลบ</th> 
                                </tr>
                            </thead>


                            <tbody>
                                <?php
                             $sql=" SELECT
tb_repair.repair_id,
tb_repair.repair_opendate,
tb_repair.repair_closingdate,
tb_repair.repair_ipcom,
tb_repair.repair_namelastname,
tb_department.department_name,
tb_building.building_name,
tb_problemtype.problemtype_name,
tb_repair.repair_reason,
tb_repair.repair_image,
tb_repair.repair_cause,
tb_repair.repair_fix,
tb_repair.repair_continue,
tb_repair.repair_note,
tb_status.status_name,
tb_repair.repair_detail
FROM
tb_repair
INNER JOIN tb_building ON tb_repair.building_id = tb_building.building_id
INNER JOIN tb_department ON tb_repair.department_id = tb_department.department_id
INNER JOIN tb_problemtype ON tb_repair.problemtype_id = tb_problemtype.problemtype_id
INNER JOIN tb_status ON tb_repair.status_id = tb_status.status_id

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
                                            <?=$row['repair_closingdate'];?> 
                                        </td> 
                                        
                                        <td>
                                            <?=$row['repair_ipcom'];?> 
                                        </td>  
                                        
                                        <td>
                                            <?=$row['repair_namelastname'];?>  
                                        </td>  
                                        
                                        <td>
                                            <?=$row['department_name'];?> 
                                        </td> 
                                        
                                         <td>
                                            <?=$row['building_name'];?> 
                                        </td>  
                                        
                                        <td>
                                            <?=$row['problemtype_name'];?>  
                                        </td> 
                                        
                                         <td>
                                            <?=$row['repair_reason'];?>   
                                        </td> 
                                       


                                        <td>
                                            <a href="../../upload/<?=$row['repair_image'];?>" target="_blank"><img src="../../upload/<?=$row['repair_image'];?>" width="150px" hieght="150px" /></a>
                                        </td>    
                                        
                                          <td>
                                            <?=$row['repair_cause'];?>  
                                        </td>  
                                        
                                          <td>
                                            <?=$row['repair_detail'];?>  
                                        </td> 

                                        <td>
                                            <?=$row['repair_fix'];?>  
                                        </td>  
                                        
                                         <td>
                                            <?=$row['repair_continue'];?>   
                                        </td> 

                                        
                                        
                                        <td>
                                            <?=$row['repair_note'];?>
                                        </td> 
                                        
                                         <td>
                                            <?=$row['status_name'];?>
                                        </td> 
                                        
                                        
                                        <td>
                                            <a href="update_repair.php?id=<?=$row['repair_id'];?>" onclick="return confirm('คุณต้องการแก้ไขหรือไม่?')"><img src="../../image/edit.png" /></a>
                                        </td>
                                        <td>
                                            <a href="delete_repair.php?id=<?=$row['repair_id'];?>" onclick="return confirm('คุณต้องการลบหรือไม่?')"><img src="../../image/delete.png" /></a>
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
