<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Dashboard Template · Bootstrap v5.0</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    
    <!-- Favicons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">



    <!-- Custom styles for this template -->
    <link href="<?=base_url('assets/admin_css/main.css')?>" rel="stylesheet">
</head>

<body>
    <?php $this->load->view('admin/common/header')?>


    <div class="container-fluid">
        <div class="row">
            <?php $this->load->view('admin/common/sidebar')?>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Status</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                        <h2><b> LM </b><?php echo  $user_edit['ticket_no']; ?></h2>
                        </div>

                    </div>
                </div>
                <!-- <h2>Section title</h2> -->
                <div class="table-responsive">
                    
 <div class="container">
    
    <div class="row my-5">
  
          
           <form action="<?= base_url().'Dashboard/upload_status/'.$user_edit['ticket_no']; ?>" method="post" enctype="multipart/form-data">
                 <input type="text" name="ticket_no" id="ticket_no" value="<?php echo  $user_edit['ticket_no']; ?>" style="display:none;">
           <input type="email" name="email" id="email" value="<?php echo  $user_edit['email']; ?>" style="display:none;">
        <br>
       <label>User Email : </label><span> <b><?php echo $user_edit['email']?></b> </span>
        <br>
       <label for="sel1" class="form-label"> Status (select one):</label>
       <select class="form-select" id="sel1" name="status" >
            <option value="Laptop Pickup" <?php if($user_edit['status'] == "Laptop Pickup") echo 'selected="selected"';?>>Laptop Pickedup</option>
         <option value="Submitted in office Under Diagnose"<?php if($user_edit['status'] == "Submitted in office Under Diagnose") echo 'selected="selected"'; ?>>Submitted in office Under Diagnose</option>
         <option value="Quotation Send Waiting for Approval"<?php if($user_edit['status'] == "Quotation Send Waiting for Approval") echo 'selected="selected"'; ?>>Quotation Send Waiting for Approval</option>
         <option value="Approved Under Repair"<?php if($user_edit['status'] == "Approved Under Repair") echo 'selected="selected"'; ?>>Approved Under Repair</option>
         <option value="Repaired Under QC Test"<?php if($user_edit['status'] == "Repaired Under QC Test") echo 'selected="selected"'; ?>>Repaired Under QC Test</option>
         <option value="OC Testing Fail"<?php if($user_edit['status'] == "OC Testing Fail") echo 'selected="selected"'; ?>>OC Testing Fail</option>
         <option value="Testing Pass Ready To Go"<?php if($user_edit['status'] == "Testing Pass Ready To Go") echo 'selected="selected"'; ?>>Testing Pass Ready To Go</option>
         <option value="Hold By Customer"<?php if($user_edit['status'] == "Hold By Customer") echo 'selected="selected"'; ?>>Hold By Customer</option>
         <option value="Delivered With Repair"<?php if($user_edit['status'] == "Delivered With Repair") echo 'selected="selected"'; ?>>Delivered With Repair</option>
         <option value="Delivered Without Repair {Not Repairable}"<?php if($user_edit['status'] == "Delivered Without Repair {Not Repairable}") echo 'selected="selected"'; ?>>Delivered Without Repair {Not Repairable}</option>
          <option value="Returned Without Repair {Not Approved For Repaired}"<?php if($user_edit['status'] == "Returned Without Repair {Not Approved For Repaired}") echo 'selected="selected"'; ?>>Returned Without Repair {Not Approved For Repaired}</option>
       </select>
       <br>
             <div class="col-sm-12 col-md-6 my-1 d-flex flex-row">
                           <span class="details-feild d-flex align-items-center">&nbsp;Email&nbsp;<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span><input type="radio" name="email-radio" value="with" id="with"  <?php echo set_radio('email-radio', 'with');?> checked><h6 class="city-name d-flex align-items-center mb-0">&nbsp;With&nbsp;&nbsp;</h6>&nbsp;<input type="radio" name="email-radio" id="without" value="without"  <?php echo set_radio('email-radio', 'without');?>><h6 class="city-name d-flex align-items-center mb-0">&nbsp;Without</h6>
             </div>
              <div class="col-sm-12 col-md-6 my-1 d-flex flex-row">
                            <div ><b> With/Without Email Last Input: </b><?php echo  $user_edit['with_email']; ?></div>
             </div>
       <input type="submit" name="update" class="btn btn-success mt-3"></input>
      
     </form>
         
    
      </div>
    </div>
        
                </div>
            </main>
        </div>
    </div>
<hr>
    <div class="credit">Illustration by <a href="https://wddevelopers.github.io/"
                                    target="_blank">Dharmender</a>.</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>