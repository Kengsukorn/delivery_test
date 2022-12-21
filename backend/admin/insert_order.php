<?php include('header.php'); ?>
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>เพิ่มข้อมูลออเดอร์</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a> </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />


                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post">

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tb_admin_admin_id">ชื่อผู้ลงข้อมูล<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select id="admin_id" name="admin_id" value="<?= $admin_id; ?>" required="required" class="form-control col-md-7 col-xs-12">
                                    <?php
                                    $sql = " select * from tb_admin";
                                    $result = $cls_conn->select_base($sql);
                                    while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                        <option value="<?= $row['admin_id']; ?>"><?= $row['admin_name']; ?></option>
                                    <?php }  ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="rider_id">ชื่อไรด์เดอร์<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select id="rider_id" name="rider_id" value="<?= $rider_id; ?>" required="required" class="form-control col-md-7 col-xs-12">
                                    <?php
                                    $sql = " select * from tb_rider";
                                    $result = $cls_conn->select_base($sql);
                                    while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                        <option value="<?= $row['rider_id']; ?> <?= $row['rider_rateprice']; ?>" ><?= $row['rider_name']; ?></option>
                                    <?php }  ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="customers_id">ชื่อลูกค้า<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select id="customers_id" name="customers_id" value="<?= $customers_id; ?>" required="required" class="form-control col-md-7 col-xs-12">
                                    <?php
                                    $sql = " select * from tb_customers";
                                    $result = $cls_conn->select_base($sql);
                                    while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                        <option value="<?= $row['customers_id']; ?>"><?= $row['customers_name']; ?></option>
                                    <?php }  ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="order_detail">ข้อมูลออเดอร์<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="order_detail" name="order_detail" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="order_quantity">จำนวน<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="number" id="order_quantity" name="order_quantity" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="order_weight">น้ำหนัก<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="number" id="order_weight" name="order_weight" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="order_date">วันที่ส่ง<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="date" id="order_date" name="order_date" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="order_time">เวลาที่ส่ง<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="time" id="order_time" name="order_time" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="order_deliveryfee">ค่าส่ง<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                          


                                <input type="number" id="order_deliveryfee" name="order_deliveryfee" required="required" class="form-control col-md-7 col-xs-12" readonly>
                            </div>
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
                    if (isset($_POST['submit'])) {
                        $admin_id = $_POST['admin_id'];
                        $rider_id = $_POST['rider_id'];
                        $customer_id = $_POST['customer_id'];
                        $order_detail = $_POST['order_detail'];
                        $order_quantity = $_POST['order_quantity'];
                        $order_weight = $_POST['order_weight'];
                        $order_date = $_POST['order_date'];
                        $order_deliveryfee = $_POST['order_deliveryfee'];
                        $order_time = $_POST['order_time'];


                        $sql = " insert into tb_order (tb_admin_admin_id,tb_rider_rider_id,tb_client_client_id,order_detail,order_quantity,order_weight,order_date,order_status,order_deliveryfee,time
                            )";
                        $sql .= " values ('$tb_admin_admin_id','$tb_rider_rider_id','$tb_client_client_id','$order_detail','$order_quantity','$order_weight','$order_date','$order_status','$order_deliveryfee','$time
                            )";


                        if ($cls_conn->write_base($sql) == true) {
                            echo $cls_conn->show_message('บันทึกข้อมูลสำเร็จ');
                            echo $cls_conn->goto_page(1, 'show_admin.php');
                        } else {
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
<?php include('footer.php'); ?>