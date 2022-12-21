<?php include('header.php'); ?>
<div class="right_col" role="main">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>แสดงข้อมูลออเดอร์ </h2>
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
                            <th>ผู้ลงงาน</th>
                            <th>ไรด์เดอร์</th>
                            <th>เบอร์โทรศัพท์ลูกค้า</th>
                            <th>รายการ</th>
                            <th>จำนวน</th>
                            <th>น้ำหนัก</th>
                            <th>วันที่ส่ง</th>
                            <th>เวลา</th>
                            <th>ค่าจัดส่ง</th>



                            <th>แก้ไข</th>
                            <th>ลบ</th>
                        </tr>
                    </thead>


                    <tbody>
                        <?php
                        $sql = " SELECT
                             tb_order.order_id,
                             tb_admin.admin_name,
                             tb_rider.rider_name,
                             tb_customers.customers_name,
                             tb_order.order_detail,
                             tb_order.order_quantity,
                             tb_order.order_weight,
                             tb_order.order_date,
                             tb_order.order_deliveryfee,
                             tb_order.order_time
                             FROM
                             tb_order
                             INNER JOIN tb_admin ON tb_order.admin_id = tb_admin.admin_id
                             INNER JOIN tb_rider ON tb_order.rider_id = tb_rider.rider_id
                             INNER JOIN tb_customers ON tb_order.customers_id = tb_customers.customers_id
                            ";


                        $result = $cls_conn->select_base($sql);
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <tr>
                                <td>
                                    <?= $row['order_id']; ?>
                                </td>

                                <td>
                                    <?= $row['admin_name']; ?>
                                </td>

                                <td>
                                    <?= $row['rider_name']; ?>
                                </td>

                                <td>
                                    <?= $row['customers_name']; ?>
                                </td>

                                <td>
                                    <?= $row['order_detail']; ?>
                                </td>

                                <td>
                                    <?= $row['order_quantity']; ?>
                                </td>

                                <td>
                                    <?= $row['order_weight']; ?>
                                </td>

                                <td>
                                    <?= $row['order_date']; ?>
                                </td>

                                <td>
                                    <?= $row['order_time']; ?>
                                </td>

                                <td>
                                    <?= $row['order_deliveryfee']; ?>
                                </td>


                                <td>
                                    <a href="update_order.php?id=<?= $row['order_id']; ?>" onclick="return confirm('คุณต้องการแก้ไขหรือไม่?')"><img src="../../image/edit.png" /></a>
                                </td>
                                <td>
                                    <a href="delete_order.php?id=<?= $row['order_id']; ?>" onclick="return confirm('คุณต้องการลบหรือไม่?')"><img src="../../image/delete.png" /></a>
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


<?php include('footer.php'); ?>