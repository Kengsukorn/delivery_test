<?php include('header.php');?>
<div class="right_col" role="main">
  <?php
    session_destroy();
    echo $cls_conn->goto_page(0,'../../index.php');
    ?>

           
</div>
<?php include('footer.php');?>
     