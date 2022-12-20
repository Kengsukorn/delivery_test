<?php include('header.php');?>
<style>
.container1 input[type=text] {
padding:5px 0px;
margin:5px 5px 5px 0px;
}

.add_form_field
{
    background-color: #1c97f3;
    border: none;
    color: white;
    padding: 8px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin: 4px 2px;
    cursor: pointer;
 border:1px solid #186dad;
}

input{
    border: 1px solid #1c97f3;
    width: 260px;
    height: 40px;
 margin-bottom:14px;
}

.delete{
    background-color: #fd1200;
    border: none;
    color: white;
    padding: 5px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script>
 
$(document).ready(function() {
    var max_fields      = 5;
    var wrapper         = $(".form-group2");
    var add_button      = $(".add_form_field");
 
    var x = 1;
    $(add_button).click(function(e){
        e.preventDefault();
        if(x < max_fields){
            x++;
            $(wrapper).append('<div> <input type="text" id="repair_cause" name="repair_cause[]"    ><a href="#" class="delete">ลบ</a> </div>'); //add input box
        }
  else
  {
  alert('เพิ่มได้แค่ 5 สาเหตุ')
  }
    });
 
    $(wrapper).on("click",".delete", function(e){
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script>
 


    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>เพิ่มข้อมูลการแจ้งซ่อม</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a> </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
                            
                            
                            
 
                            
                            
                            
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="repair_opendate">วันที่เปิดงาน<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="datetime-local" id="repair_opendate" name="repair_opendate"  class="form-control col-md-7 col-xs-12" required> </div>
                        </div>
                            
                            
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="repair_closingdate">วันที่ปิดงาน<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="datetime-local" id="repair_closingdate" name="repair_closingdate"  class="form-control col-md-7 col-xs-12" required> </div>
                        </div>
                            
                            
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="repair_ipcom">ชื่อเครื่อง<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="repair_ipcom" name="repair_ipcom" class="form-control col-md-7 col-xs-12" placeholder="(SUN-XXX)" required> </div>
                        </div>    
                            
                            
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="repair_namelastname">ชื่อ-สกุล<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="repair_namelastname" name="repair_namelastname"  class="form-control col-md-7 col-xs-12" required> </div>
                        </div> 
                            
                            
                       <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="department_id">แผนก<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select id="department_id" name="department_id"  class="form-control col-md-7 col-xs-12">
                                    <option value="">-กรุณาเลือก-</option>
                                    <?php 
                                    $sqld=" select * from tb_department";
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
                                
                                <select id="building_id" name="building_id"  class="form-control col-md-7 col-xs-12">
                                    <option value="">-กรุณาเลือก-</option>
                                    <?php 
                                    $sqld=" select * from tb_building";
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
                                
                             
                               <select id="problemtype_id" name="problemtype_id"   class="form-control col-md-7 col-xs-12">
                                   <option value="">-กรุณาเลือก-</option>
                                    <?php 
                                    $sqld=" select * from tb_problemtype";
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
                                <input type="text" id="repair_reason" name="repair_reason" class="form-control col-md-7 col-xs-12" required> </div>
                        </div>   
                            
                         <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="repair_detail">รายละเอียดของประเภท<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                        
                             
                              <textarea class="resizable_textarea form-control" name="repair_detail"  class="form-control col-md-7 col-xs-12"></textarea>
                            
                             
                             
                             </div>
                        </div>
                            
                            
                                
                     
                            
                         
                            
                        <div class="form-group">
                      
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="repair_cause">สาเหตุ<span class="required">:</span> </label>
                            
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                      <div class="form-group2">
                                <div> <input type="text" id="repair_cause" name="repair_cause[]"    > </div>
                                  </div>
                            
                            </div>
                               <div class="col-md-2 col-sm-6 col-xs-12">
                           
                              <button type="submit" name="submit" class="add_form_field">เพิ่ม</button>
                                   
                                     
                            </div>
                                
                                
                                
                          
                        </div>
                            
                            
                         <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="repair_image">รูปภาพประกอบ<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="file" id="repair_image" name="repair_image"   class="form-control col-md-7 col-xs-12" required> </div>
                        </div>
                            
                            
                       
                            
                        
                            
                   
                            
                            
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="repair_note">หมายเหตุ<span class="required">:</span> </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="repair_note" name="repair_note"   class="form-control col-md-7 col-xs-12" required> </div>
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
                            $repair_opendate=$_POST['repair_opendate'];
                            $repair_closingdate=$_POST['repair_closingdate'];
                            $repair_ipcom=$_POST['repair_ipcom'];
                            $repair_namelastname=$_POST['repair_namelastname'];
                            $department_id=$_POST['department_id'];
                            $building_id=$_POST['building_id'];
                            $problemtype_id=$_POST['problemtype_id'];
                            $repair_reason=$_POST['repair_reason'];
                            $repair_detail=$_POST['repair_detail'];
                            //$repair_image=$_POST['repair_image'];
                            
                            
                            //$repair_cause=$_POST['repair_cause'];
                            $repair_fix=$_POST['repair_fix'];
                            $repair_continue=$_POST['repair_continue'];
                            $repair_note=$_POST['repair_note'];
                            $status_id='1';
                            
                                  $repair_image="";
                                   if($_FILES["repair_image"]["name"] != ""){
                                        
                                       
                                        $datetime=date("dmYHis");
                                        $file_name=substr($_FILES['repair_image']['name'],-4);
                                        $repair_image=$datetime.'_r1'.$file_name;
                                        move_uploaded_file($_FILES["repair_image"]["tmp_name"],"upload/".$repair_image); 
                                  }
                          
                            
                            $number = count($_POST["repair_cause"]);
                            $repair_cause2="";
                            
                            
                                        if($number > 1)
                                        {
                                            for($i=0; $i<$number; $i++)
                                            {
                                                if(trim($_POST["repair_cause"][$i] != ''))
                                                {
                                                    //$sql = "INSERT INTO tbl_name(name) VALUES('".mysqli_real_escape_string($connect, $_POST["name"][$i])."')";
                                                    //mysqli_query($connect, $sql);

                                                    $repair_cause2.=$_POST["repair_cause"][$i];

                                                }
                                                 if($number-1==$i)
                                                {

                                                            $repair_cause2.=""; 
                                                     }
                                                else
                                                {
                                                    $repair_cause2.=","; 
                                                }
                                            }
                                            //echo "Data Inserted";
                                        }
                             
                           
                            
                            
                            $sql=" insert into tb_repair(repair_opendate,repair_closingdate,repair_ipcom,repair_namelastname,department_id,building_id,problemtype_id,repair_reason,repair_detail,repair_image,repair_cause,repair_fix,repair_continue,repair_note,status_id)";
                            $sql.=" values ('$repair_opendate','$repair_closingdate','$repair_ipcom','$repair_namelastname','$department_id','$building_id','$problemtype_id','$repair_reason','$repair_detail','$repair_image','$repair_cause2','$repair_fix','$repair_continue','$repair_note','$status_id')";
                            
                            
                            if($cls_conn->write_base($sql)==true)
                            {
                               echo $cls_conn->show_message('แจ้งซ่อมเรียบร้อย');
                                //echo $cls_conn->goto_page(1,'show_repair.php');
                                $msg = "มีการแจ้งซ่อมโดย:$repair_namelastname วันที่:$repair_opendate";
                                message($msg);
                               
                            }
                            else
                            {
                                 echo $cls_conn->show_message('บันทึกข้อมูลไม่สำเร็จ');
                                 echo $sql;
                            }
                        }
                        
                        
                        
                        function message($sMessage)
    {
        
       // $sToken = "3n2QJ3VnbYNgmTuSvCxH0jd3eTMcnBgZtwqqaEPdvA7";
        $sToken = "cSNGp3k04nXy4WAwpFOczmGkWcap8OreIb33VQaCrfh";
        $chOne = curl_init(); 
        curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify"); 
        curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0); 
        curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0); 
        curl_setopt( $chOne, CURLOPT_POST, 1); 
        curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=".$sMessage); 
        $headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$sToken.'', );
        curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers); 
        curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1); 
        $result = curl_exec( $chOne ); 

        //Result error 
        if(curl_error($chOne)) 
        { 
            echo 'error:' . curl_error($chOne); 
        } 
        else { 
            $result_ = json_decode($result, true); 
           // echo "status : ".$result_['status']; echo "message : ". $result_['message'];
        } 
        curl_close( $chOne );   
    }
                        ?>
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
 