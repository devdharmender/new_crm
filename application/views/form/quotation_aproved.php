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
     <!-- Custom CSS -->
     <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">

<style>
    #submit-btn {
        width: 300px;
        background-color: green;
    }


    .alert-success {
        border: none;
        padding-left: 50px;
    }

    .alert-danger {
        border: none;
        padding-left: 50px;
    }
</style>
</head>

<body>
    <?php $this->load->view('admin/common/header')?>


    <div class="container-fluid">
        <div class="row">
            <?php $this->load->view('admin/common/sidebar')?>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Quotation Aproved</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                        <h4>Ticket No : LM <?php echo  $quotation_aproved['ticket_no']; ?></h4>
                        </div>

                    </div>
                </div>
                <!-- <h2>Section title</h2> -->
                <div class="table-responsive">
                <?php if ($this->session->flashdata('success') != '') { ?>
        <div class="alert alert-success fade show" role="alert">
            <strong>Success!</strong> <?= $this->session->flashdata('success'); ?>
        </div>
    <?php } ?>
    <?php if ($this->session->flashdata('error') != '') { ?>
        <div class="alert alert-danger fade show" role="alert">
            <strong>Error!</strong> <?= $this->session->flashdata('error'); ?>
        </div>
    <?php } ?>

   
    <form action="<?= base_url('Dashboard/aproved_form'); ?>" method="post" enctype="multipart/form-data">
        <input type="text" name="ticket_no" id="ticket_no" value="<?php echo  $quotation_aproved['ticket_no']; ?>" style="display:none;">
        <input type="text" name="name" id="name" value="<?php echo  $quotation_aproved['name']; ?>" style="display:none;">
        <input type="email" name="email" id="email" value="<?php echo  $quotation_aproved['email']; ?>" style="display:none;">
        <input type="text" name="submit_in_off" id="submit_in_off" value="Quotation Aproved" style="display:none;">
         <input type="text" name="quatation_status" id="quatation_status" value="0" style="display:none;">
          <input type="text" name="quatation_rand" id="quatation_rand" value="<?php echo(rand(1000,100000)); ?>" style="display:none;">
        <input class="form-control" type="text" name="date" id="date" placeholder="" value="<?php date_default_timezone_set("Asia/kolkata");
                                                                                            echo date("F d Y h:i:s A.", time()); ?>" style="display:none;">
        <!-- Top Head section -->
        <section class="top-head d-flex align-items-center">
            <div class="container-fluid">
                <div class="row p-0">
                    <div class="col-9 p-0 d-flex align-items-center">
                        <div class="">
                            <div class="img">
                                <img src="<?= base_url(); ?>assets/img/lappy-maker-logo.svg" alt="img-error">
                            </div>
                            <div class="content">
                                <h1 class="display-6 m-0">Doorstep Solution For Laptops</h1>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Horizental line -->
        <hr class="h-line">
        
    <h6>Name : <?php echo  $quotation_aproved['name']; ?></h6>
    <h6>Email : <?php echo  $quotation_aproved['email']; ?></h6>
    <h6>Pick Up Date : <?php echo  $quotation_aproved['date']; ?></h6>
        <!-- User Details -->
        <section class="user-details">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-sm-12 col-md-6 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Model&nbsp;No<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span>
                        <input class="form-control" type="text" name="model_no" id="model_no" placeholder="" value="<?php echo  $quotation_aproved['model_no']; ?>">
                    </div>
                    
                     <div class="col-sm-12 col-md-6 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Serial&nbsp;No<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span>
                        <input class="form-control" type="text" name="serial_no" id="serial_no" placeholder="" value="<?php echo  $quotation_aproved['serial_no']; ?>">
                    </div>
                    
                     <div class="col-sm-12 col-md-6 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Estimate&nbsp;Cost&nbsp;<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span>
                        <input class="form-control" type="text" name="estimate_cost" id="estimate_cost" placeholder="" value="">
                    </div>
                    
                     <div class="col-sm-12 col-md-6 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Turnaround&nbsp;Time&nbsp;For&nbsp;Repaire&nbsp;<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span>
                        <input class="form-control" type="text" name="tta_time" id="tta_time" placeholder="" value="">
                    </div>
                    
                    <div class="col-sm-12 col-md-6 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Email&nbsp;<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span><input type="radio" name="email-radio" value="with" id="with"  <?php echo set_radio('email-radio', 'with');?> checked><h6 class="city-name d-flex align-items-center">&nbsp;With&nbsp;&nbsp;</h6>&nbsp;<input type="radio" name="email-radio" id="without" value="without"  <?php echo set_radio('email-radio', 'without');?>><h6 class="city-name d-flex align-items-center">&nbsp;Without</h6>
                    </div>
                </div>
            </div>
        </section>

     
        <!-- Horizental line -->
        <hr class="h-line">

        <section class="submit">
            <div class="container-fluid" style="margin:2vw 0vw;">
                <div class="row justify-content-around">
                    <div class="col-4 d-flex justify-content-center">
                        <button id="submit-btn" type="submit" class="btn btn-primary d-block">Submit</button>
                    </div>
                   
                </div>
            </div>
        </section>

        <section class="bottom-section">
            <div class="container-fluid">
                <div class="company-address">
                <h4 class="text-center">Office No. 703, 7th Floor, Madhuban Building, Nehru Place, New
                        Delhi - 110019 </h4>
                </div>
            </div>
            <div class="container-fluid">
                <div class="contact-way">
                    <div class="row">
                        <div class="col-4 d-flex justify-content-start align-items-center">
                            <i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;
                            <a href="#" class="text-decoration-none fw-bold">
                                services@lappymaker.com
                            </a>
                        </div>
                        <div class="col-4 d-flex justify-content-center align-items-center">
                            <i class="fa fa-phone" aria-hidden="true"></i>&nbsp;
                            <a href="#" class="text-decoration-none fw-bold">
                                93198 48444
                            </a>
                        </div>
                        <div class="col-4 d-flex justify-content-end align-items-center">
                            <i class="fa fa-globe" aria-hidden="true"></i>&nbsp;
                            <a href="#" class="text-decoration-none fw-bold">
                                lappymaker.com
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </form>
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