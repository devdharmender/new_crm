<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Diagonis Form Edit</title>
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
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">


</head>

<body>
    <?php $this->load->view('admin/common/header')?>


    <div class="container-fluid">
        <div class="row">
            <?php $this->load->view('admin/common/sidebar')?>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <!-- anything we want to put in right side from of sadhbord -->
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

    <form action="<?= base_url('form_sub_off/form_upload_user'); ?>" method="post" enctype="multipart/form-data">
        <input type="text" name="ticket_no" id="ticket_no" value="<?php echo  $form_edit_user['ticket_no']; ?>" style="display:none;">
        <input required class="form-control" type="text" name="date" id="date" placeholder="" value="<?php date_default_timezone_set("Asia/kolkata");
                                                                                                        echo date("F d Y h:i:s.", time()); ?>" style="display:none;">
        <input type="text" name="part_picked" id="part_picked" value="<?php echo  $form_edit_user['part_picked']; ?>" style="display:none;">
        <input type="text" name="internal_part" id="internal_part" value="<?php echo  $form_edit_user['internal_part']; ?>" style="display:none;">
        <input type="text" name="check_list_detail" value="<?php echo $form_edit_user['check_list_detail']; ?>" style="display:none;" />
        <input type="text" name="front_view" value="<?php echo $form_edit_user['front_img']; ?>" style="display:none;" />
        <input type="text" name="back_screen_view" value="<?php echo $form_edit_user['back_img']; ?>" style="display:none;" />
        <input type="text" name="keyboard_view" value="<?php echo $form_edit_user['keyboard_img']; ?>" style="display:none;" />
        <input type="text" name="base_view" value="<?php echo $form_edit_user['base_img']; ?>" style="display:none;" />
        <input type="text" name="int_part_img" value="<?php echo $form_edit_user['int_part_img']; ?>" style="display:none;" />
        <input type="text" name="track_pad_view" value="<?php echo $form_edit_user['trackpad_img']; ?>" style="display:none;" />
        <input type="text" name="file_input" value="<?php echo $form_edit_user['lappy_img']; ?>" style="display:none;" />
        <input type="text" name="part_along" value="<?php echo $form_edit_user['part_along']; ?>" style="display:none;" />
        <input type="text" name="executive_name" value="<?php echo $form_edit_user['executive_name']; ?>" style="display:none;" />
        <input type="text" name="submited_by" value="<?php echo $form_edit_user['submited_by']; ?>" style="display:none;" />
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

        <!-- User Details -->
        <section class="user-details">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-sm-12 col-md-12 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Name<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span>
                        <input required class="form-control " type="text" name="name" id="name" value="<?php echo  $form_edit_user['name']; ?>">
                    </div>
                    <div class="col-sm-12 col-md-12 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Address<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span>
                        <input required class="form-control" type="text" name="address" id="address" value="<?php echo  $form_edit_user['address']; ?>">
                    </div>
                    <div class="col-sm-12 col-md-5 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Contact<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span>
                        <input required class="form-control " type="tel" name="contact" id="contact" value="<?php echo  $form_edit_user['contact']; ?>">
                    </div>

                    <div class="col-sm-12 col-md-7 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Email<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span>
                        <input required class="form-control " type="email" name="email" id="email" value="<?php echo  $form_edit_user['email']; ?>">
                    </div>
                    <div class="col-sm-12 col-md-7 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Serial&nbsp;No.<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span><input required class="form-control" type="text" name="serial_no" id="serial_no" value="<?php echo  $form_edit_user['serial_no']; ?>">
                    </div>

                    <div class="col-sm-12 col-md-5 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">&nbsp;Model&nbsp;No.<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span><input required class="form-control " type="text" name="model_no" id="model_no" value="<?php echo  $form_edit_user['model_no']; ?>">
                    </div>

                    <div class="col-sm-12 col-md-12 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Estimate&nbsp;Given<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span><input required class="form-control " type="text" name="estimate_given" id="estimate_given" value="<?php echo  $form_edit_user['estimate_given']; ?>">
                    </div>

                    <div class="col-sm-12 col-md-12 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Physical&nbsp;Condition<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span><input required type="text" class="form-control " name="physical_condition" id="physical_condition" value="<?php echo  $form_edit_user['physical_condition']; ?>">
                    </div>

                    <div class="col-sm-12 col-md-12 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Laptop&nbsp;Password.<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span><input required class="form-control " type="text" name="laptop_password" id="laptop_password" value="<?php echo  $form_edit_user['lappy_pass']; ?>">
                    </div>

                    <div class="col-sm-12 col-md-12 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Parts&nbsp;Picked&nbsp;Detail&nbsp;<span style="color: red;font-size: large;"></span>&nbsp;:&nbsp;</span><input class="form-control <?php echo form_error('part_picked_detail') ? 'is-invalid' : ''; ?>" type="text" name="part_picked_detail" id="part_picked_detail" value="<?php echo  $form_edit_user['part_picked_detail']; ?>">
                    </div>
                </div>
            </div>
        </section>
        <section class="reported-problem">
            <div class="row">
                <div class="col-12 my-1">
                    <span class="">Reported&nbsp;Problem&nbsp;By&nbsp;Executive&nbsp;:&nbsp;</span>
                    <br>
                    <textarea type="text" class="" name="reported_problems" id="reported_problems"><?php echo  $form_edit_user['reported_problems']; ?></textarea>
                </div>
            </div>
        </section>
        <section class="reported-problem">
                    <div class="row">
                        <div class="col-12 my-1 mt-5">
                            <span class="">Reported&nbsp;Problem&nbsp;By&nbsp;customer&nbsp;:&nbsp;</span>
                            <br>
                            <textarea type="text" class="" name="reported_problems_cust" id="reported_problems_cust"><?php echo  $form_edit_user['reported_problems_cust']; ?> </textarea>
                        </div>
                    </div>
                </section>
        <style>
            textarea {
                width: 100%;
                height: 100%;
                border: 1px solid black;
                padding: 1vw;
                outline: none;
                box-shadow: none;
            }
        </style>

        <!-- Reported Problem Section -->



        <!-- Horizental line -->
        <hr class="h-line">

        <section class="submit">
            <div class="container-fluid" style="margin:2vw 0vw;">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <button id="submit-btn" type="submit" name="submit" class="btn btn-primary d-block">Update</button>
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