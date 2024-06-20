<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Payment Status Update</title>
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
                    <h1 class="h2">Payment Status For LM <?php echo  $user_edit['ticket_no']; ?></h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <!-- anything we want to put in right side from of sadhbord -->
                        </div>

                    </div>
                </div>
                <!-- <h2>Section title</h2> -->
                <div class="table-responsive">
                <div class="container">
    
    <div class="row">
         
          
           <form action="<?= base_url().'Dashboard/paid_unpaid_status_upload/'.$user_edit['ticket_no']; ?>" method="post" enctype="multipart/form-data">
                 <input type="text" name="ticket_no" id="ticket_no" value="<?php echo  $user_edit['ticket_no']; ?>" style="display:none;">
           <input type="email" name="email" id="email" value="<?php echo  $user_edit['email']; ?>" style="display:none;">
        <br>
       <label>User Email : </label><span> <b><?php echo $user_edit['email']?></b> </span>
        <br>
       <label for="sel1" class="form-label"> Status (select one):</label>
       <select class="form-select" id="sel1" name="status" >
           <option>Select</option>
            <option value="Paid" <?php if($user_edit['paid_unpaid'] == "Paid") echo 'selected="selected"';?>>Paid</option>
         <option value="Unpaid"<?php if($user_edit['paid_unpaid'] == "Unpaid") echo 'selected="selected"'; ?>>Unpaid</option>
       </select>
       <br>
             <div class="col-sm-12 col-md-6 my-1 d-flex flex-row">
                           <span class="details-feild d-flex align-items-center">&nbsp;Email&nbsp;<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span><input type="radio" name="email-radio" value="with" id="with"  <?php echo set_radio('email-radio', 'with');?> checked><h6 class="city-name d-flex align-items-center mb-0">&nbsp;With&nbsp;&nbsp;</h6>&nbsp;<input type="radio" name="email-radio" id="without" value="without"  <?php echo set_radio('email-radio', 'without');?>><h6 class="city-name d-flex align-items-center mb-0">&nbsp;Without</h6>
             </div>
              <div class="col-sm-12 col-md-6 my-1 d-flex flex-row">
                            <div ><b> With/Without Email Last Input: </b><?php echo  $user_edit['with_email_pay']; ?></div>
             </div>
       <input type="submit" name="update" class="btn btn-primary mt-3"></input>
       
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





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    
  </head>
  <body>
 


 
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>