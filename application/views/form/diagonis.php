<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons -->
    <link rel="icon" type="image/x-icon" href="img/favicon.png">

    <!-- Bootstrap CSS -->
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url(); ?>css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- jQuery files For electronics signature -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>


    <script src="https://use.fontawesome.com/3a2eaf6206.js"></script>

    <!--[if IE]> 
    <script type="text/javascript" src="js/excanvas.js"></script> 
    <![endif]-->

    <script src="<?= base_url(); ?>assets\jquery-ui-touch-punch-master\jquery-ui-touch-punch-master\jquery.ui.touch-punch.min.js"></script>

    <link type="text/css" href="<?= base_url(); ?>assets\jquery.signature\css\jquery.signature.css" rel="stylesheet">
    <script type="text/javascript" src="<?= base_url(); ?>assets\jquery.signature\js\jquery.signature.min.js"></script>

    <style>
        .kbw-signature {
            width: 100%;
            height: 20vw;
        }

        #sig canvas {
            width: 100% !important;
            height: 100%;
        }

        #clear {
            width: 60px;
            height: 30px;
            font-size: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .kbw-signature {
            width: 100%;
            height: 25vw;
        }

        #sig1 canvas {
            width: 100% !important;
            height: 100%;
        }

        #clear1 {
            width: 60px;
            height: 30px;
            font-size: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #submit-btn {
            width: 300px;
            background-color: green;
        }

        #camera_wrapper,
        #show_saved_img {
            float: left;
            width: 650px;
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

    <title>Diagonis Form</title>
</head>

<body>
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

    <form action="<?= base_url('form/create'); ?>" method="post" enctype="multipart/form-data">
        <!-- Top Head section -->
        <section class="top-head d-flex align-items-center">
            <div class="container-fluid">
                <div class="row p-0">
                    <div class="col-9 p-0 d-flex align-items-center">
                        <div class="">
                            <div class="img">
                                <img src="<?= base_url(); ?>assets/img/lappy-maker-logo1.png" alt="img-error">
                            </div>
                            <div class="content">
                                <h1 class="display-6 m-0">Doorstep Solution For Laptops</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 d-flex justify-content-end p-0">
                        <div class="d-flex align-items-center">
                            <div class="d-flex flex-column align-items-start">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-row align-items-center" for="city1">
                                        <input type="radio" name="city-radio" value="delhi" id="city1" value="Delhi" <?php echo set_radio('city-radio', 'Delhi'); ?> checked>
                                        <h6 class="city-name d-flex align-items-center">&nbsp;Delhi</h6>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-row align-items-center" for="city2">
                                        <input type="radio" name="city-radio" id="city2" value="Gurugram" <?php echo set_radio('city-radio', 'Gurugram'); ?>>
                                        <h6 class="city-name d-flex align-items-center">&nbsp;Gurugram</h6>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-row align-items-center" for="city2">
                                        <input type="radio" name="city-radio" id="city2" value="Gurugram" <?php echo set_radio('city-radio', 'Gurugram'); ?>>
                                        <h6 class="city-name d-flex align-items-center">&nbsp;Gurugram</h6>
                                    </div>
                                </div>
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
                    <div class="col-sm-12 col-md-6 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Date<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span><span class="details-feild d-flex align-items-center"><?php date_default_timezone_set("Asia/kolkata");
                                                                                                                                                                                                                echo date("F d Y h:i:s A.", time()); ?></span>
                        <input class="form-control" type="text" name="date" id="date" placeholder="" value="<?php date_default_timezone_set("Asia/kolkata");
                                                                                                            echo date("F d Y h:i:s A.", time()); ?>" style="display:none;">
                    </div>
                    <div class="col-sm-12 col-md-6 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Name<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span>
                        <input class="form-control <?php echo form_error('name') ? 'is-invalid' : ''; ?>" type="text" name="name" id="name" value="<?= set_value('name'); ?>">
                    </div>
                    <div class="col-sm-12 col-md-12 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Address<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span>
                        <input class="form-control <?php echo form_error('address') ? 'is-invalid' : ''; ?>" type="text" name="address" id="address" value="<?= set_value('address'); ?>">
                    </div>



                    <div class="col-sm-12 col-md-5 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Contact<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span>
                        <input class="form-control <?php echo form_error('contact') ? 'is-invalid' : ''; ?>" type="tel" name="contact" id="contact" value="<?= set_value('contact'); ?>">
                    </div>

                    <div class="col-sm-12 col-md-7 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Email<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span>
                        <input class="form-control <?php echo form_error('email') ? 'is-invalid' : ''; ?>" type="email" name="email" id="email" value="<?= set_value('email'); ?>">
                    </div>

                </div>
            </div>
        </section>

        <!-- Parts Picker External Section -->
        <section class="parts-picked px-2">
            <p class="parts-picked-heading text-center">Accessories Picked From Customer</p>
            <div class="row">
                <div class="col-6 col-md-4 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="laptop_carry_case" value="Laptop Carry Case" id="city1" <?php echo set_checkbox('laptop_carry_case', 'Laptop Carry Case'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Laptop Carry Bag</h6>
                </div>

                <div class="col-6 col-md-4 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="power_cord" value="Power Cord" id="city1" <?php echo set_checkbox('power_cord', 'Power Cord'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Power Cord</h6>
                </div>

                <div class="col-6 col-md-4 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="adapter" value="Adaptor" id="city1" <?php echo set_checkbox('adapter', 'Adaptor'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Adaptor(Charger)</h6>
                </div>

            </div>
        </section>
           
           <!--check list-->
           
            <section class="parts-picked px-2">
            <p class="parts-picked-heading text-center">Check&nbsp;List&nbsp;</p>
            <div class="row">
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="keyboard" value="Keyboard" id="city1" <?php echo set_checkbox('keyboard', 'Keyboard'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Keyboard</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="touoch_pad" value="Touch Pad" id="city1" <?php echo set_checkbox('touoch_pad', 'Touch Pad'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Touch Pad</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="camera" value="Camera" id="city1" <?php echo set_checkbox('camera', 'Camera'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Camera</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="wi_fi" value="WI-FI" id="city1" <?php echo set_checkbox('wi_fi', 'WI-FI'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;WI-FI</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="display" value="Display" id="city1" <?php echo set_checkbox('display', 'Display'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Display</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="ms_office" value="MS Office" id="city1" <?php echo set_checkbox('ms_office', 'MS Office'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;MS Office</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="touchpad_clicks" value="Touchpad Clicks" id="city1" <?php echo set_checkbox('touchpad_clicks', 'Touchpad Clicks'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Touchpad Clicks</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="sound" value="Sound" id="city1" <?php echo set_checkbox('sound', 'Sound'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Sound</h6>
                </div>






                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="safari_chrome" value="Safari/Chrome" id="city1" <?php echo set_checkbox('safari_chrome', 'Safari/Chrome'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Safari/Chrome</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="touch_screen" value="Touch Screen" id="city1" <?php echo set_checkbox('touch_screen', 'Touch Screen'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Touch Screen</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="touch_id" value="Touch ID/Face ID" id="city1" <?php echo set_checkbox('touch_id', 'Touch ID/Face ID'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Touch ID/Face ID</h6>
                </div>
                 <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="touch_bar" value="Touch Bar" id="city1" <?php echo set_checkbox('touch_bar', 'Touch Bar'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Touch&nbsp;Bar</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="battery_h" value="Battery H" id="city1" <?php echo set_checkbox('battery_h', 'Battery H'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Battery H.</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="battery_backup" value="Battery Backup" id="city1" <?php echo set_checkbox('battery_backup', 'Battery Backup'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Battery Backup</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="charging_port" value="Charging/Port" id="city1" <?php echo set_checkbox('charging_port', 'Charging/Port'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Charging/Port</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="bluetooth" value="Bluetooth" id="city1" <?php echo set_checkbox('bluetooth', 'Bluetooth'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Bluetooth</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="back_light" value="Back Light" id="city1" <?php echo set_checkbox('back_light', 'Back Light'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Back Light</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="internal_sno" value="Internal S.No" id="city1" <?php echo set_checkbox('internal_sno', 'Internal S.No'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Internal S.No</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="usb_port" value="USB Port" id="city1" <?php echo set_checkbox('usb_port', 'USB Port'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;USB Port</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="audio_port" value="Audio Port" id="city1" <?php echo set_checkbox('audio_port', 'Audio Port'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Audio Port</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="sleep_mode" value="Sleep Mode" id="city1" <?php echo set_checkbox('sleep_mode', 'Sleep Mode'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Sleep Mode</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="mic" value="Mic" id="city1" <?php echo set_checkbox('mic', 'Mic'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Mic</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="shut_down" value="Shut Down" id="city1" <?php echo set_checkbox('shut_down', 'Shut Down'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Shut Down</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="downloads" value="Downloads" id="city1" <?php echo set_checkbox('downloads', 'Downloads'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Downloads</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="restart" value="Restart" id="city1" <?php echo set_checkbox('restart', 'Restart'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Restart</h6>
                </div>
            </div>
        </section>


       <!-- Parts Picker internal Section -->
        <section class="parts-picked px-2">
            <p class="parts-picked-heading text-center">Machine Parts</p>
            <div class="row">
                <div class="col-6 col-md-4 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="ram_exter" value="Ram External" id="city1" <?php echo set_checkbox('ram_exter', 'Ram External'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Ram&nbsp;External</h6>
                </div>
                <div class="col-6 col-md-4 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="ram_intern" value="Ram Internal" id="city1" <?php echo set_checkbox('ram_intern', 'Ram Internal'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Ram&nbsp;Internal</h6>
                </div>
                <div class="col-6 col-md-4 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="cd_rom" value="CD Rom" id="city1" <?php echo set_checkbox('cd_rom', 'CD Rom'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;CD Rom</h6>
                </div>
                <div class="col-6 col-md-4 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="bluetooth_device_intern" value="Bluetooth Card /  WiFi Card Internal" id="city1" <?php echo set_checkbox('bluetooth_wifi_device_intern', 'Bluetooth Card /  WiFi Card Internal'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Bluetooth/WiFi Card Internal</h6>
                </div>
                  <div class="col-6 col-md-4 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="bluetooth_device_exter" value="Bluetooth Card / WiFi Card External" id="city1" <?php echo set_checkbox('bluetooth_device_exter', 'Bluetooth Card / WiFi Card External'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Bluetooth/WiFi Card External</h6>
                </div>
             
              
                 <div class="col-6 col-md-4 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="battery_exter" value="Battery External" id="city1" <?php echo set_checkbox('battery_exter', 'Battery External'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Battery External</h6>
                </div>
                 <div class="col-6 col-md-4 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="battery_intern" value="Battery Internal" id="city1" <?php echo set_checkbox('battery_intern', 'Battery Internal'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Battery Internal</h6>
                </div>
                <div class="col-6 col-md-4 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="ssd_exter" value=" SSD External" id="city1" <?php echo set_checkbox('ssd_exter', ' SSD External'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp; SSD External</h6>
                </div>
                                <div class="col-6 col-md-4 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="ssd_intern" value="SSD Internal" id="city1" <?php echo set_checkbox('ssd_intern', 'SSD Internal'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp; SSD Internal</h6>
                </div>
                <div class="col-6 col-md-4 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="hard_disk_exter" value="Hard Drive External" id="city1" <?php echo set_checkbox('hard_disk', 'Hard Drive External'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Hard Drive External</h6>
                </div>
               
            </div>
        </section>
        
          <section class="parts-picked px-2">
            <div class="row">
              <div class="col-sm-12 col-md-12 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Parts&nbsp;Picked&nbsp;Detail&nbsp;<span style="color: red;font-size: large;"></span>&nbsp;:&nbsp;</span><input class="form-control <?php echo form_error('part_picked_detail') ? 'is-invalid' : ''; ?>" type="text" name="part_picked_detail" id="part_picked_detail" value="<?= set_value('part_picked_detail'); ?>">
                    </div>
                     <div class="col-sm-12 col-md-12 my-1 d-flex flex-row">
                        <input id="inputTag9" type="file" name="part_along_with" />
                    </div>
            </div>
        </section>

        <!-- Laptop Ddetail section -->
        <section class="laptop-detail">
            <div class="container-fluid p-0">
                <div class="row">
                   
                    <div class="col-sm-12 col-md-7 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Serial&nbsp;No.<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span><input class="form-control <?php echo form_error('serial_no') ? 'is-invalid' : ''; ?>" type="text" name="serial_no" id="serial_no" value="<?= set_value('serial_no'); ?>">
                    </div>

                    <div class="col-sm-12 col-md-5 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">&nbsp;Model&nbsp;No.<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span><input class="form-control <?php echo form_error('model_no') ? 'is-invalid' : ''; ?>" type="text" name="model_no" id="model_no" value="<?= set_value('model_no'); ?>">
                    </div>

                    <div class="col-sm-12 col-md-6 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Estimate&nbsp;Given<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span><input class="form-control <?php echo form_error('estimate_given') ? 'is-invalid' : ''; ?>" type="text" name="estimate_given" id="estimate_given" value="<?= set_value('estimate_given'); ?>">
                    </div>

                    <div class="col-sm-12 col-md-6 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Laptop&nbsp;Password.<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span><input class="form-control  <?php echo form_error('laptop_password') ? 'is-invalid' : ''; ?>" type="text" name="laptop_password" id="laptop_password" value="<?= set_value('laptop_password'); ?>">
                    </div>

                    <div class="col-sm-12 col-md-12 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Physical&nbsp;Condition<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span><input type="text" class="form-control <?php echo form_error('physical_condition') ? 'is-invalid' : ''; ?>" name="physical_condition" id="physical_condition" value="<?= set_value('physical_condition'); ?>">
                    </div>


                    <!--  <div class="col-sm-12 col-md-6 my-1 d-flex flex-row">-->
                    <!--    <span class="details-feild d-flex align-items-center">Submited&nbsp;By&nbsp;<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span><input type="radio" name="pick-radio" value="Visit" id="Visit"  <?php echo set_radio('city-radio', 'Visit'); ?> checked><h6 class="city-name d-flex align-items-center">&nbsp;Visit&nbsp;&nbsp;</h6>&nbsp;<input type="radio" name="pick-radio" id="pick2" value="Office"  <?php echo set_radio('city-radio', 'Office'); ?>><h6 class="city-name d-flex align-items-center">&nbsp;Office</h6>-->
                    <!--</div>-->

                </div>
            </div>
        </section>



        <!-- Laptop Image Section -->
        <section class="laptop-image">
            <div class="container-fluid ">
                <div class="row ">
                    <div class="col-sm-12 col-md-6 my-1 d-flex flex-row" style="border:1px solid black;">
                        <label for="inputTag2">
                            Display Pannel Front View<span style="color: red;font-size: large;">*</span> <br />
                            <i class="fa fa-2x fa-camera"></i>
                            <input required id="inputTag2" type="file" name="front_view" style="margin-top: 20px;" />
                            <br />
                            <span id="imageName2"></span>
                        </label>
                    </div>
                    <div class="col-sm-12 col-md-6 my-1 d-flex flex-row" style="border:1px solid black;">
                        <label for="inputTag3">
                            Display Pannel Back view <span style="color: red;font-size: large;">*</span><br />
                            <i class="fa fa-2x fa-camera"></i>
                            <input required id="inputTag3" type="file" name="back_screen_view" style="margin-top: 20px;" />
                            <br />
                            <span id="imageName3"></span>
                        </label>
                    </div>
                    <div class="col-sm-12 col-md-6 my-1 d-flex flex-row" style="border:1px solid black;">
                        <label for="inputTag4">
                            Keyboard View<span style="color: red;font-size: large;">*</span><br />
                            <i class="fa fa-2x fa-camera"></i>
                            <input required id="inputTag4" type="file" name="keyboard_view" style="margin-top: 20px;" />
                            <br />
                            <span id="imageName4"></span>
                        </label>
                    </div>
                    <div class="col-sm-12 col-md-6 my-1 d-flex flex-row" style="border:1px solid black;">
                        <label for="inputTag5">
                            Bottom Base View<span style="color: red;font-size: large;">*</span> <br />
                            <i class="fa fa-2x fa-camera"></i>
                            <input required id="inputTag5" type="file" name="base_view" style="margin-top: 20px;" />
                            <br />
                            <span id="imageName5"></span>
                        </label>
                    </div>
                    <div class="col-sm-12 col-md-6 my-1 d-flex flex-row" style="border:1px solid black;">
                        <label for="inputTag6">
                            Trackpad View<span style="color: red;font-size: large;">*</span> <br />
                            <i class="fa fa-2x fa-camera"></i>
                            <input required id="inputTag6" type="file" name="track_pad_view" style="margin-top: 20px;" />
                            <br />
                            <span id="imageName6"></span>
                        </label>
                    </div>

                    <div class="col-sm-12 col-md-6 my-1 d-flex flex-row" style="border:1px solid black;">
                        <label for="inputTag">
                            Internal Part View<span style="color: red;font-size: large;">*</span> <br />
                            <i class="fa fa-2x fa-camera"></i>
                            <input required id="inputTag8" type="file" name="internal_part_img" style="margin-top: 20px;" />
                            <br />
                            <span id="imageName"></span>
                        </label>
                    </div>



                    <div class="col-sm-12 col-md-6 my-1 d-flex flex-row" style="border:1px solid black;">
                        <label for="inputTag">
                            Other View (Scratch & Dents)<br />
                            <i class="fa fa-2x fa-camera"></i>
                            <input id="inputTag7" type="file" name="file_input" style="margin-top: 20px;" />
                            <br />
                            <span id="imageName"></span>
                        </label>
                    </div>

                </div>
                <style>
                    .file_img1 {
                        text-align: center;
                        padding: 3%;
                        border: thin solid black;
                        margin-top: 2%;
                    }

                    #inputTag {
                        display: none;
                    }

                    label {
                        cursor: pointer;
                    }

                    #imageName {
                        color: green;
                        font-size: 12px;
                    }
                </style>
   
                <!--<?php echo (!empty($errorImgUpload)) ? $errorImgUpload : ''; ?>-->







                <!-- Reported Problem Section -->
                <section class="reported-problem">
                    <div class="row">
                        <div class="col-12 my-1">
                            <span class="">Reported&nbsp;Problem&nbsp;By&nbsp;Executive&nbsp;:&nbsp;</span>
                            <br>
                            <textarea type="text" class="" name="reported_problems" id="reported_problems"><?php echo set_value('reported_problems'); ?> </textarea>
                        </div>
                    </div>
                </section>
                 <section class="reported-problem">
                    <div class="row">
                        <div class="col-12 my-1 mt-5">
                            <span class="">Reported&nbsp;Problem&nbsp;By&nbsp;customer&nbsp;:&nbsp;</span>
                            <br>
                            <textarea type="text" class="" name="reported_problems_cust" id="reported_problems_cust"><?php echo set_value('reported_problems_cust'); ?> </textarea>
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



                <div class="row declaration-row">
                    <div class="col  mt-2">
                        <span class="declaration d-flex align-items-center"><b>DECLARATION&nbsp;:&nbsp;</b></span>
                        <h6>I am affixing my signature below in evidence that I have submitted my device to Lappy Maker.</h6>
                    </div>
                </div>
                <div class="row signature-row d-flex justify-content-around">
                    <div class="col-sm-10 col-md-5 p-0">
                        <p class="text-center sign-text"><b>Customer Signature</b></p>
                        <div id="sig"></div>
                        <button id="clear" class="btn btn-sm btn-primary text-center">Clear</button>
                        <br>
                        <textarea id="signature64" name="signed1" style="display: none"></textarea>
                    </div>
                    <div class="col-sm-10 col-md-5 p-0">
                        <p class="text-center sign-text"><b>Executive Signature</b></p>
                        <div id="sig1"></div>
                        <button id="clear1" class="btn btn-sm btn-primary text-center">Clear</button>
                        <br>
                        <textarea id="signature641" name="signed2" style="display: none"></textarea>

                    </div>
                </div>
            </div>
        </section>
        <div class="col-sm-12 col-md-12 my-1 d-flex flex-row">
            <span class="details-feild d-flex align-items-center">Executive&nbsp;Name.<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span><input class="form-control  <?php echo form_error('executive_name') ? 'is-invalid' : ''; ?>" type="text" name="executive_name" id="executive_name" value="<?= set_value('executive_name'); ?>">
        </div><br>
        <!-- Horizental line -->
        <hr class="h-line">

        <section class="submit">
            <div class="container-fluid" style="margin:2vw 0vw;">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <button id="submit-btn" type="submit" class="btn btn-primary d-block">Submit</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="bottom-section">
            <div class="container-fluid">
                <div class="company-address">
                    <h4 class="text-center">Office No. 703, 7<sup>th</sup> Floor, Madhuban Building, Nehru Place, New
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

    <!-- <script>
        $(function() {
            //give the php file path
            webcam.set_api_url('saveimage.php');
            webcam.set_swf_url('scripts/webcam.swf');
            webcam.set_quality(100); // Image quality (1 - 100)
            webcam.set_shutter_sound(true); // play shutter click sound

            var camera = $('#camera');
            camera.html(webcam.get_html(600, 460));

            $('#capture_btn').click(function() {
                //take snap
                webcam.snap();
            });

            //after taking snap call show image
            webcam.set_hook('onComplete', function(img) {
                $('#show_saved_img').html('<img src="' + img + '">');
                //reset camera for next shot
                webcam.reset();
            });

        });
    </script> -->

    <script src="js/bootstrap.bundle.min.js"></script>


</body>

</html>