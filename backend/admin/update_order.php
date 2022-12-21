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

                    <?php
                        if(isset($_GET['id']))
                        {
                            $id=$_GET['id'];
                            
                            $sql=" select * from tb_order";
                            $sql.=" where";
                            $sql.=" order_id='$id'";
                            $result=$cls_conn->select_base($sql);
                            while($row=mysqli_fetch_array($result))
                            {
                                 $order_id=$row['order_id'];
                                 $order_detail=$row['order_detail'];
                                 $order_quantity=$row['order_quantity'];
                                 $order_weight=$row['order_weight'];
                                 $order_date=$row['order_date'];
                                 $order_time=$row['order_time'];
                                
                                
                            }
                        }
                        ?>
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post">
                    <input type="hidden" name="order_id" value="<?=$order_id;?>" />

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="admin_id">ชื่อผู้ลงข้อมูล<span class="required">:</span> </label>
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
                                        <option value="<?= $row['rider_id']; ?>" label="<?= $row['rider_name']; ?>"><?= $row['rider_rateprice']; ?></option>
                                    <?php }
                                    ?>
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
                                <input type="text" id="order_detail" name="order_detail" required="required" value="<?= $order_detail; ?>" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="order_quantity">จำนวน<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="number" id="order_quantity" name="order_quantity" required="required" value="<?= $order_quantity; ?>" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="order_weight">น้ำหนัก<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="number" id="order_weight" name="order_weight" required="required" value="<?= $order_weight; ?>" class="form-control col-md-7 col-xs-12" onChange=onChange()>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="order_date">วันที่ส่ง<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="date" id="order_date" name="order_date" required="required" value="<?= $order_date; ?>" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="order_time">เวลาที่ส่ง<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="time" id="order_time" name="order_time" required="required" value="<?= $order_time; ?>" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="order_deliveryfee">ค่าส่ง<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">




                                <input type="number" id="order_deliveryfee" name="order_deliveryfee" class="form-control col-md-7 col-xs-12" readonly>



                            </div>
                        </div>


                        <script>
                            /*var yourSelect = document.getElementById("rider_id").selectedIndex;
                            echo(yourSelect);*/


                            var e = document.getElementById("rider_id");
                            var k = document.getElementById("order_weight").value;

                            function onChange() {
                                var text = e.options[e.selectedIndex].text;
                                var textk = document.getElementById("order_weight").value;
                                console.log(text, textk);

                                document.getElementById("order_deliveryfee").value = text * textk

                            }
                            k.onchange = onChange;
                            e.onchange = onChange;
                            onChange();
                        </script>




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
                        $customers_id = $_POST['customers_id'];
                        $order_detail = $_POST['order_detail'];
                        $order_quantity = $_POST['order_quantity'];
                        $order_weight = $_POST['order_weight'];
                        $order_date = $_POST['order_date'];
                        $order_deliveryfee = $_POST['order_deliveryfee'];
                        $order_time = $_POST['order_time'];


                        $sql = " insert into tb_order (admin_id,rider_id,customers_id,order_detail,order_quantity,order_weight,order_date,order_status,order_deliveryfee,order_time
                            )";
                        $sql .= " values ('$admin_id','$rider_id','$customers_id','$order_detail','$order_quantity','$order_weight','$order_date','$order_status','$order_deliveryfee','$order_time'
                            )";


                        if ($cls_conn->write_base($sql) == true) {
                            echo $cls_conn->show_message('บันทึกข้อมูลสำเร็จ');
                            echo $cls_conn->goto_page(1, 'show_order.php');
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