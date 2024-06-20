<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Status Form Update</title>
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
                    <h1 class="h2">Status Form Update</h1>
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

   
    <form action="<?= base_url('Dashboard/status_form_upload_data'); ?>" method="post" enctype="multipart/form-data">
        <input type="text" name="ticket_no" id="ticket_no" value="<?php echo  $status_form_upload['ticket_no']; ?>" style="display:none;">
        <input type="text" name="name" id="name" value="<?php echo  $status_form_upload['name']; ?>" style="display:none;">
        <input type="email" name="email" id="email" value="<?php echo  $status_form_upload['email']; ?>" style="display:none;">
        <input type="text" name="submit_in_off" id="submit_in_off" value="Diagnosis Report" style="display:none;">
        <input class="form-control" type="text" name="date" id="date" placeholder="" value="<?php echo $status_form_upload['date']; ?>" style="display:none;">
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
                                <h1 class="display-6 m-0">Doorstep Solution For Laptops</h1> <br>
                                <p><span style="color :red">*</span><b>No Data Guarantee or Backup</b></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Horizental line -->
        <hr class="h-line">
        <h4>Ticket No : LM <?php echo  $status_form_upload['ticket_no']; ?></h4>
    <h6>Name : <?php echo  $status_form_upload['name']; ?></h6>
    <h6>Email : <?php echo  $status_form_upload['email']; ?></h6>
    <h6>Pick Up Date : <?php echo  $status_form_upload['date']; ?></h6>
        <!-- User Details -->
        <section class="user-details">
            <div class="container-fluid p-0">
                <div class="row">

                    <div class="col-sm-12 col-md-6 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Submit&nbsp;Date<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span>
                        <input class="form-control <?php echo form_error('sdate') ? 'is-invalid' : ''; ?>" type="text" name="sdate" id="sdate" placeholder="" value="<?php date_default_timezone_set("Asia/kolkata");
                                                                                                                                                                    echo date("F d Y h:i:s.", time()); ?>">
                    </div>
                         <div class="col-sm-12 col-md-6 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Password<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span>
                        <input class="form-control <?php echo form_error('password') ? 'is-invalid' : ''; ?>" type="text" name="password" id="password" value="<?php echo  $status_form_upload['lappy_pass']; ?>">
                    </div>


                    <div class="col-sm-12 col-md-6 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Model&nbsp;No<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span>
                        <input class="form-control" type="text" name="model_no" id="model_no" placeholder="" value="<?php echo  $status_form_upload['model_no']; ?>">
                    </div>
                    
                     <div class="col-sm-12 col-md-6 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Serial&nbsp;No<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span>
                        <input class="form-control" type="text" name="serial_no" id="serial_no" placeholder="" value="<?php echo  $status_form_upload['serial_no']; ?>">
                    </div>
                    <div class="col-sm-12 col-md-6 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Problem&nbsp;Reported&nbsp;By&nbsp;Customer<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span>
                        <input class="form-control <?php echo form_error('pr_bc') ? 'is-invalid' : ''; ?>" type="text" name="pr_bc" id="pr_bc" value="<?php echo  $status_form_upload['reported_problems_cust']; ?>">
                    </div>
                    <div class="col-sm-12 col-md-6 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Problem&nbsp;Reported&nbsp;By&nbsp;Executive&nbsp;<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span>
                        <input class="form-control" type="text" name="pr_be" id="pr_be" placeholder="" value="<?php echo  $status_form_upload['reported_problems']; ?>">
                    </div>
             
                    <div class="col-sm-12 col-md-6 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Pickup&nbsp;Engg&nbsp;<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span>
                        <input class="form-control" type="text" name="pe" id="pe" placeholder="" value="<?php echo  $status_form_upload['executive_name']; ?>">
                    </div>
                    <div class="col-sm-12 col-md-6 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Diagnose&nbsp;Engg&nbsp;<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span>
                        <input class="form-control <?php echo form_error('die') ? 'is-invalid' : ''; ?>" type="text" name="die" id="die" value="<?= set_value('die'); ?>">
                    </div>
                    <div class="col-sm-12 col-md-12 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Condition<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span>
                        <input class="form-control <?php echo form_error('body_laptop') ? 'is-invalid' : ''; ?>" type="text" name="body_laptop" id="body_laptop" value="<?= set_value('body_laptop'); ?>">
                    </div>
                </div>
            </div>
        </section>

        <!-- Parts Picker Section -->
        <section class="parts-picked px-2">
            <p class="parts-picked-heading text-center">Check&nbsp;List&nbsp;</p>
            <div class="row">
                <div class="col-6 col-md-6 col-lg-3 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="keyboard" value="Keyboard" id="city1" <?php echo set_checkbox('keyboard', 'Keyboard'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Keyboard</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-3 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="touoch_pad" value="Touch Pad" id="city1" <?php echo set_checkbox('touoch_pad', 'Touch Pad'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Touch Pad</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-3 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="camera" value="Camera" id="city1" <?php echo set_checkbox('camera', 'Camera'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Camera</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-3 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="wi_fi" value="WI-FI" id="city1" <?php echo set_checkbox('wi_fi', 'WI-FI'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;WI-FI</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-3 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="display" value="Display" id="city1" <?php echo set_checkbox('display', 'Display'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Display</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-3 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="ms_office" value="MS Office" id="city1" <?php echo set_checkbox('ms_office', 'MS Office'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;MS Office</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-3 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="touchpad_clicks" value="Touchpad Clicks" id="city1" <?php echo set_checkbox('touchpad_clicks', 'Touchpad Clicks'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Touchpad Clicks</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-3 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="sound" value="Sound" id="city1" <?php echo set_checkbox('sound', 'Sound'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Sound</h6>
                </div>






                <div class="col-6 col-md-6 col-lg-3 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="safari_chrome" value="Safari/Chrome" id="city1" <?php echo set_checkbox('safari_chrome', 'Safari/Chrome'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Safari/Chrome</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-3 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="touch_screen" value="Touch Screen" id="city1" <?php echo set_checkbox('touch_screen', 'Touch Screen'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Touch Screen</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-3 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="touch_id" value="Touch ID/Face ID" id="city1" <?php echo set_checkbox('touch_id', 'Touch ID/Face ID'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Touch ID/Face ID</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-3 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="battery_h" value="Battery H" id="city1" <?php echo set_checkbox('battery_h', 'Battery H'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Battery H.</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-3 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="battery_backup" value="Battery Backup" id="city1" <?php echo set_checkbox('battery_backup', 'Battery Backup'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Battery Backup</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-3 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="charging_port" value="Charging/Port" id="city1" <?php echo set_checkbox('charging_port', 'Charging/Port'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Charging/Port</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-3 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="bluetooth" value="Bluetooth" id="city1" <?php echo set_checkbox('bluetooth', 'Bluetooth'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Bluetooth</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-3 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="back_light" value="Back Light" id="city1" <?php echo set_checkbox('back_light', 'Back Light'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Back Light</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-3 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="internal_sno" value="Internal S.No" id="city1" <?php echo set_checkbox('internal_sno', 'Internal S.No'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Internal S.No</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-3 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="usb_port" value="USB Port" id="city1" <?php echo set_checkbox('usb_port', 'USB Port'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;USB Port</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-3 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="audio_port" value="Audio Port" id="city1" <?php echo set_checkbox('audio_port', 'Audio Port'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Audio Port</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-3 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="sleep_mode" value="Sleep Mode" id="city1" <?php echo set_checkbox('sleep_mode', 'Sleep Mode'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Sleep Mode</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-3 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="mic" value="Mic" id="city1" <?php echo set_checkbox('mic', 'Mic'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Mic</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-3 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="shut_down" value="Shut Down" id="city1" <?php echo set_checkbox('shut_down', 'Shut Down'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Shut Down</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-3 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="downloads" value="Downloads" id="city1" <?php echo set_checkbox('downloads', 'Downloads'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Downloads</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-3 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="restart" value="Restart" id="city1" <?php echo set_checkbox('restart', 'Restart'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Restart</h6>
                </div>
            </div>
        </section>

            
              
            
             
               
              
              
          <!-- Laptop Image Section -->
        <section class="laptop-image">
            <div class="container-fluid ">
                  <h2 class="text-center">Submit&nbsp;Time&nbsp;Photos/Images</h2>
                  <div class="row ">
                       <div class="col-sm-12 col-md-6 my-1 d-flex flex-row  " style="border:1px solid black;">
                        <label for="inputTag2">
                            Display Pannel Front View<span style="color: red;font-size: large;">*</span> <br/>
                             <input type="text" name="front_view" value="<?php echo $status_form_upload['front_img']; ?>"   style="display:none;"/>
                             <img src="<?php  if(strlen(base_url('assets/uploads_img/laptop_img/'.$status_form_upload['front_img'])) > 66){ echo base_url('assets/uploads_img/laptop_img/'.$status_form_upload['front_img']);}else{ echo base_url('assets/img/No_Image_Available.jpg'); } ?>" height="100px" width="100px"/>
                            <br/>
                            <span id="imageName2"></span>
                        </label>
                    </div>
                      <div class="col-sm-12 col-md-6 my-1 d-flex flex-row  " style="border:1px solid black;">
                        <label for="inputTag3">
                            Display Pannel Back view <span style="color: red;font-size: large;">*</span><br/>
                                <input type="text" name="back_screen_view" value="<?php echo $status_form_upload['back_img']; ?>"   style="display:none;"/>
                           <img src="<?php  if(strlen(base_url('assets/uploads_img/laptop_img/'.$status_form_upload['back_img'])) > 66){ echo base_url('assets/uploads_img/laptop_img/'.$status_form_upload['back_img']);}else{ echo base_url('assets/img/No_Image_Available.jpg'); } ?>" height="100px" width="100px"/>
                            <br/>
                            <span id="imageName3"></span>
                        </label>
                    </div>
                      <div class="col-sm-12 col-md-6 my-1 d-flex flex-row  " style="border:1px solid black;">
                        <label for="inputTag4">
                            Keyboard View<span style="color: red;font-size: large;">*</span><br/>
                              <input type="text" name="keyboard_view" value="<?php echo $status_form_upload['keyboard_img']; ?>"  style="display:none;" />
                           <img src="<?php  if(strlen(base_url('assets/uploads_img/laptop_img/'.$status_form_upload['keyboard_img'])) > 66){ echo base_url('assets/uploads_img/laptop_img/'.$status_form_upload['keyboard_img']);}else{ echo base_url('assets/img/No_Image_Available.jpg'); } ?>" height="100px" width="100px"/>
                            <br/>
                            <span id="imageName4"></span>
                        </label>
                    </div>
                      <div class="col-sm-12 col-md-6 my-1 d-flex flex-row  " style="border:1px solid black;">
                        <label for="inputTag5">
                          Bottom Base View<span style="color: red;font-size: large;">*</span> <br/>
                                <input type="text" name="base_view" value="<?php echo $status_form_upload['base_img']; ?>"   style="display:none;"/>
                          <img src="<?php  if(strlen(base_url('assets/uploads_img/laptop_img/'.$status_form_upload['base_img'])) > 66){ echo base_url('assets/uploads_img/laptop_img/'.$status_form_upload['base_img']);}else{ echo base_url('assets/img/No_Image_Available.jpg'); } ?>" height="100px" width="100px"/>
                            <br/>
                            <span id="imageName5"></span>
                        </label>
                    </div>
                      <div class="col-sm-12 col-md-6 my-1 d-flex flex-row  " style="border:1px solid black;">
                        <label for="inputTag6">
                            Trackpad View<span style="color: red;font-size: large;">*</span> <br/>
                             <input type="text" name="track_pad_view" value="<?php echo $status_form_upload['trackpad_img']; ?>"  style="display:none;" />
                          <img src="<?php  if(strlen(base_url('assets/uploads_img/laptop_img/'.$status_form_upload['trackpad_img'])) > 66){ echo base_url('assets/uploads_img/laptop_img/'.$status_form_upload['trackpad_img']);}else{ echo base_url('assets/img/No_Image_Available.jpg'); } ?>" height="100px" width="100px"/>
                            <br/>
                            <span id="imageName6"></span>
                        </label>
                    </div>
                  
                      <div class="col-sm-12 col-md-6 my-1 d-flex flex-row  " style="border:1px solid black;">
                        <label for="inputTag">
                            Internal Part View<span style="color: red;font-size: large;">*</span>  <br/>
                               <input type="text" name="int_part_img" value="<?php echo $status_form_upload['int_part_img']; ?>"   style="display:none;"/>
                           <img src="<?php  if(strlen(base_url('assets/uploads_img/laptop_img/'.$status_form_upload['int_part_img'])) > 66 ){ echo base_url('assets/uploads_img/laptop_img/'.$status_form_upload['int_part_img']);}else{ echo base_url('assets/img/No_Image_Available.jpg'); } ?>" height="100px" width="100px"/>
                            <br/>
                            <span id="imageName"></span>
                        </label>
                    </div>
                    
                    
                    
                    <div class="col-sm-12 col-md-6 my-1 d-flex flex-row  " style="border:1px solid black;">
                        <label for="inputTag">
                            Other View (Scratch & Dents)<br/>
                              <input type="text" name="file_input" value="<?php echo $status_form_upload['lappy_img']; ?>"  style="display:none;" />
                          <img src="<?php  if(strlen(base_url('assets/uploads_img/laptop_img/'.$status_form_upload['lappy_img'])) > 66){ echo base_url('assets/uploads_img/laptop_img/'.$status_form_upload['lappy_img']);}else{ echo base_url('assets/img/No_Image_Available.jpg'); } ?>" height="100px" width="100px"/>
                            <br/>
                            <span id="imageName"></span>
                        </label>
                    </div>
                     <div class="col-sm-12 col-md-6 my-1 d-flex flex-row  " style="border:1px solid black;">
                        <label for="inputTag">
                            Part Along With : <?php echo  $status_form_upload['part_picked_detail']; ?><br/>
                              <input type="text" name="part_picked_detail" value="<?php echo $status_form_upload['part_picked_detail']; ?>"  style="display:none;" />
                               <input type="text" name="part_along" value="<?php echo $status_form_upload['part_along']; ?>"  style="display:none;" />
                           <img src="<?php  if(strlen(base_url('assets/uploads_img/laptop_img/'.$status_form_upload['part_along'])) > 66){ echo base_url('assets/uploads_img/laptop_img/'.$status_form_upload['part_along']);}else{ echo base_url('assets/img/No_Image_Available.jpg'); } ?>" height="100px" width="100px"/>
                            <br/>
                            <span id="imageName"></span>
                        </label>
                    </div>
                </div> 
                <style>
                    .file_img1{
                        text-align:center;
                        padding:3%;
                        border:thin solid black;
                        margin-top: 2%;
                    }

                    #inputTag{
                        display: none;
                    }
                    label{
                        cursor:pointer;
                    }
                    #imageName{
                        color:green;
                        font-size: 12px;
                    }
                </style>
            
            </div>
        </section>
        
          <!-- Laptop Image Section -->
        <section class="laptop-image">
            <div class="container-fluid ">
                  <h2 class="text-center">Diagnosis&nbsp;Photos/Images</h2>
                  <div class="row">
                    
                  
                    <div class="col-sm-12 col-md-6 my-1 d-flex flex-row" style="border:1px solid black;">
                        <label for="inputTag">
                            Inner Screws<span style="color: red;font-size: large;">*</span><br/>
                            <i class="fa fa-2x fa-camera"></i>
                            <input id="inputTag7" type="file" name="inner_sw_file_input" style="margin-top: 20px;" required/>
                            <br/>
                            <span id="imageName"></span>
                        </label>
                    </div>
                    <div class="col-sm-12 col-md-6 my-1 d-flex flex-row" style="border:1px solid black;">
                        <label for="inputTag">
                            Internal Parts Condition<span style="color: red;font-size: large;">*</span><br/>
                            <i class="fa fa-2x fa-camera"></i>
                            <input id="inputTag7" type="file" name="int_pt_file_input" style="margin-top: 20px;" required/>
                            <br/>
                            <span id="imageName"></span>
                        </label>
                    </div>
                          <div class="col-sm-12 col-md-6 my-1 d-flex flex-row" style="border:1px solid black;">
                        <label for="inputTag">
                           Problem&nbsp;Diagnosed&nbsp;by&nbsp;Engg.<br/>
                            <i class="fa fa-2x fa-camera"></i>
                             <input id="inputTag9" type="file" name="pro_diag_by_eng" style="margin-top: 20px;" />
                            <br/>
                            <span id="imageName"></span>
                        </label>
                    </div>
                     <div class="col-sm-12 col-md-6 my-1 d-flex flex-row" style="border:1px solid black;">
                        <label for="inputTag">
                            Problem&nbsp;Diagnosed&nbsp;by&nbsp;Engg.<br/>
                            <i class="fa fa-2x fa-camera"></i>
                            <input id="inputTag7" type="file" name="out_sw_file_input" style="margin-top: 20px;" />
                            <br/>
                            <span id="imageName"></span>
                        </label>
                    </div>  
                  
        </div>
            </div>
        </section>
        
        <div class="row">

            <div class="col-sm-12 col-md-6 my-1 d-flex flex-row">
                <span class="details-feild d-flex align-items-center">Repair&nbsp;/&nbsp;Not&nbsp;Repair&nbsp;Parts&nbsp;:&nbsp;</span>
                <input class="form-control <?php echo form_error('repair_not_parts') ? 'is-invalid' : ''; ?>" type="text" name="repair_not_parts" id="repair_not_parts" value="<?= set_value('repair_not_parts'); ?>">
            </div>

            <div class="col-sm-12 col-md-6 my-1 d-flex flex-row">
                <span class="details-feild d-flex align-items-center">Repaired&nbsp;By&nbsp;:&nbsp;</span>
                <input class="form-control" type="text" name="confiremed_by" id="confiremed_by" placeholder="" value="<?= set_value('confiremed_by'); ?>">
            </div>
            
             <div class="col-sm-12 col-md-8 my-1 d-flex flex-row">
                <span class="details-feild d-flex align-items-center">Remarks&nbsp;(If&nbsp;Any)<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span>
                <input class="form-control" type="text" name="remarks" id="remarks" placeholder="" value="<?= set_value('remarks'); ?>" >
            </div>
            
             <div class="col-sm-12 col-md-4 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">&nbsp;Email&nbsp;<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span><input type="radio" name="email-radio" value="with" id="with"  <?php echo set_radio('email-radio', 'with');?> checked><h6 class="city-name d-flex align-items-center">&nbsp;With&nbsp;&nbsp;</h6>&nbsp;<input type="radio" name="email-radio" id="without" value="without"  <?php echo set_radio('email-radio', 'without');?>><h6 class="city-name d-flex align-items-center">&nbsp;Without</h6>
             </div>
        </div>

        <!-- Horizental line -->
        <hr class="h-line">

        <section class="submit">
            <div class="container-fluid" style="margin:2vw 0vw;">
                <div class="row justify-content-around">
                    <div class="col-4 d-flex justify-content-center">
                        <button id="submit-btn" type="submit" class="btn btn-primary d-block">Submit</button>
                    </div>
                    <div class="col-4 d-flex justify-content-center">
                        <a class="btn btn-primary d-block" href="<?= base_url('Dashboard/index'); ?>" style="width:300px">Back</a>
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

<script type="text/javascript">
        var sig = $('#sig').signature({
            syncField: '#signature64',
            syncFormat: 'PNG'
        });
        $('#clear').click(function(e) {
            e.preventDefault();
            sig.signature('clear');
            $("#signature64").val('');
        });

        var sig1 = $('#sig1').signature({
            syncField: '#signature641',
            syncFormat: 'PNG'
        });
        $('#clear1').click(function(e) {
            e.preventDefault();
            sig1.signature('clear');
            $("#signature641").val('');
        });
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>