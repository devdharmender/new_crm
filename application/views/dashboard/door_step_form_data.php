<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Work Sheet Door Services : Lappy Maker</title>
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
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
    <link href="<?=base_url('assets/admin_css/main.css')?>" rel="stylesheet">
    
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
        .img img{
            /* border:1px solid black; */
            width:100%;
            height:auto;
        }
        input[type="checkbox"] {
        appearance: none;
        width: 26px;
        height: 26px;
        border-radius: 7px;
        text-align: center;
        font-size: large;
        background-color: #ff7404;
        
        transition: 250ms;
        
    }

    input[type="checkbox"]:before {
        content: "✖";
    }

    input[type="checkbox"]:checked:before {
        
        content: "✔";
        color:#fff;
    }

    input[type="checkbox"]:checked {
        accent-color: white;
        background-color: #2b74dc;

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
                    <h1 class="h2">Door Step Customer Details</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <!-- anything we want to put in right side from of sadhbord -->
                        </div>

                    </div>
                </div>
                <!-- <h2>Section title</h2> -->
                <div class="table-responsive">
                    
        <div class="container-fluid">
            <?php 
            if($all_data->status == 0){?>

                <div class="alert alert-danger text-center" role="alert">
                    <strong>LM <?=$all_data->Tracking_id?> | <?=$all_data->name?> is not verified by OTP </strong>
                </div>

           <?php }else{?>
                <div class="alert alert-success text-center" role="alert">
                    <strong>LM <?=$all_data->Tracking_id?> | <?=$all_data->name?> Verified User </strong>
                </div>

           <?php }

            ?>
            
        </div>


<?php  
   if(!empty($all_data->before_installation)){$a = json_decode($all_data->before_installation);}else{$a = "sorry";};
   if(!empty($all_data->after_installation)){$b = json_decode($all_data->after_installation);}else{$b = "sorry";};
//    $b = json_decode($all_data->	after_installation);
?>


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
                    <div class="col-3 p-0 d-flex align-items-center text-right">
                    <h3 class="display-5 m-0"> <b style="font-weight:600;">Work Sheet</b></h3>
                    <input type="text" name="page" value="work_sheet" class="d-none">
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
                        <span class="details-feild d-flex align-items-center">Date<span
                                style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span><span
                            class="details-feild d-flex align-items-center" id="span"><?=$all_data->date?></span>
                        
                    </div>
                    <div class="col-sm-12 col-md-6 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Name<span
                                style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span>
                        <input class="form-control <?php echo form_error('name') ? 'is-invalid' : ''; ?>" type="text"
                            name="name" id="name" value="<?= $all_data->name; ?>"disabled>
                    </div>
                    <div class="col-sm-12 col-md-12 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Address<span
                                style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span>
                        <input class="form-control <?php echo form_error('address') ? 'is-invalid' : ''; ?>" type="text"
                            name="address" id="address" value="<?= $all_data->address ?>"disabled>
                    </div>

                    <div class="col-sm-12 col-md-5 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Contact<span
                                style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span>
                        <input class="form-control <?php echo form_error('contact') ? 'is-invalid' : ''; ?>" type="tel"
                            name="contact" id="contact" value="<?= $all_data->contact ?>"disabled>
                    </div>

                    <div class="col-sm-12 col-md-7 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Email<span
                                style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span>
                        <input class="form-control <?php echo form_error('email') ? 'is-invalid' : ''; ?>" type="email"
                            name="email" id="email" value="<?= $all_data->email ?>"disabled>
                    </div>


                </div>
            </div>
        </section>
        <section class="laptop-detail">
            <div class="container-fluid p-0">
                <div class="row">


                    <div class="col-sm-12 col-md-6 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">&nbsp;Model&nbsp;No.<span
                                style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span><input
                            class="form-control <?php echo form_error('model_no') ? 'is-invalid' : ''; ?>" type="text"
                            name="model_no" id="model_no" value="<?= $all_data->mod_no ?>"disabled>
                    </div>


                    <div class="col-sm-12 col-md-6 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Serial&nbsp;No.<span
                                style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span><input
                            class="form-control <?php echo form_error('serial_no') ? 'is-invalid' : ''; ?>" type="text"
                            name="serial_no" id="serial_no" value="<?= $all_data->mod_no ?>"disabled>
                    </div>

                    

                    <div class="col-sm-12 col-md-5 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Final Amount<span
                                style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span><input
                            class="form-control <?php echo form_error('finalamount') ? 'is-invalid' : ''; ?>"
                            type="text" name="finalamount" id="finalamount"
                            value="<?= $all_data->f_amount ?>"disabled>
                    </div>

                    <div class="col-sm-12 col-md-7 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Part which is replaced <span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span><input class="form-control  <?php echo form_error('replacedpart') ? 'is-invalid' : ''; ?>" type="text" name="replacedpart" id="replacedpart" value="<?= $all_data->rep_part ?>"disabled>
                    </div>

                    <!-- <div class="col-sm-12 col-md-12 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Physical&nbsp;Condition<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span><input type="text" class="form-control <?php echo form_error('physical_condition') ? 'is-invalid' : ''; ?>" name="physical_condition" id="physical_condition" value="<?= set_value('physical_condition'); ?>">
                    </div> -->

                </div>
            </div>
        </section>
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
                <section class="reported-problem">
                    <div class="row">
                        <div class="col-12 my-1 ">
                            <span class="">Reported Problem By customer :</span>
                            <br>
                            <textarea type="text" class="" name="reported_problems_cust"
                                disabled id="reported_problems_cust"><?=$all_data->rep_prblm_by_cust ?> </textarea>
                        </div>
                    </div>
                </section>
                <section class="reported-problem">
                    <div class="row">
                        <div class="col-12 my-1 mt-5 mb-5">
                            <span class="">Solution Provided By Executive</span>
                            <br>
                            <textarea type="text" class="" name="sol_given"
                               disabled id="reported_problems"><?=$all_data->sol_giv_by_execl?></textarea>
                        </div>
                    </div>
                </section>
                

        <!-- Parts Picker External Section -->
        <!-- <section class="parts-picked px-2">
            <p class="parts-picked-heading text-center">Accessories Submitted From Customer</p>
            <div class="row">
                <div class="col-6 col-md-4 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="laptop_carry_case" value="Laptop Carry Case"   <?php echo set_checkbox('laptop_carry_case', 'Laptop Carry Case'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Laptop Carry Bag</h6>
                </div>

                <div class="col-6 col-md-4 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="power_cord" value="Power Cord"   <?php echo set_checkbox('power_cord', 'Power Cord'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Power Cord</h6>
                </div>

                <div class="col-6 col-md-4 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="adapter" value="Adaptor"   <?php echo set_checkbox('adapter', 'Adaptor'); ?>>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Adaptor(Charger)</h6>
                </div>

            </div>
        </section> -->

        <!--check list-->
        <!--  checklist for before part install -->
        <section class="parts-picked px-2">
            <p class="parts-picked-heading text-center">Check&nbsp;List&nbsp; ~ Before Part Installation</p>
            <hr style="color:#fff;">
            <div class="row">
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox"    <?php if($a[0] == 'Keyboard'){echo "checked";}else{echo " ";}?> disabled>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Keyboard</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="touoch_pad" value="Touch Pad"  
                        <?php echo set_checkbox('touoch_pad', 'Touch Pad'); ?> <?php if($a[1] == 'Touch Pad'){echo "checked";}else{echo " ";}?> disabled>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Touch Pad</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="camera" value="Camera"  
                        <?php echo set_checkbox('camera', 'Camera'); ?><?php if($a[2] == 'Camera'){echo "checked";}else{echo " ";}?> disabled>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Camera</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="wi_fi" value="WI-FI"   <?php if($a[3] == 'WI-FI'){echo "checked";}else{echo " ";}?> disabled>
                    <h6 class="part-name d-flex align-items-center">&nbsp;WI-FI</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="display" value="Display"  
                    <?php if($a[4] == 'Display'){echo "checked";}else{echo " ";}?> disabled>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Display</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="ms_office" value="MS Office"  
                    <?php if($a[5] == 'MS Office'){echo "checked";}else{echo " ";}?> disabled>
                    <h6 class="part-name d-flex align-items-center">&nbsp;MS Office</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="touchpad_clicks" value="Touchpad Clicks"  
                    <?php if($a[6] == 'Touchpad Clicks'){echo "checked";}else{echo " ";}?> disabled>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Touchpad Clicks</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="sound" value="Sound"  
                    <?php if($a[7] == 'Sound'){echo "checked";}else{echo " ";}?> disabled>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Sound</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="safari_chrome" value="Safari/Chrome"  
                    <?php if($a[8] == 'Safari/Chrome'){echo "checked";}else{echo " ";}?> disabled>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Safari/Chrome</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="touch_screen" value="Touch Screen"  
                    <?php if($a[9] == 'Touch Screen'){echo "checked";}else{echo " ";}?> disabled>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Touch Screen</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="touch_id" value="Touch ID/Face ID"  
                    <?php if($a[10] == 'Touch ID/Face ID'){echo "checked";}else{echo " ";}?> disabled>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Touch ID/Face ID</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="touch_bar" value="Touch Bar"  
                    <?php if($a[11] == 'Touch Bar'){echo "checked";}else{echo " ";}?> disabled>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Touch&nbsp;Bar</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="battery_h" value="Battery H"  
                    <?php if($a[12] == 'Battery H'){echo "checked";}else{echo " ";}?> disabled>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Battery H.</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="battery_backup" value="Battery Backup"  
                    <?php if($a[13] == 'Battery Backup'){echo "checked";}else{echo " ";}?> disabled>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Battery Backup</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="charging_port" value="Charging_Port"  
                    <?php if($a[14] == 'Charging_Port'){echo "checked";}else{echo " ";}?> disabled>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Charging/Port</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="bluetooth" value="Bluetooth"  
                    <?php if($a[15] == 'Bluetooth'){echo "checked";}else{echo " ";}?> disabled>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Bluetooth</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="back_light" value="Back Light"  
                    <?php if($a[16] == 'Back Light'){echo "checked";}else{echo " ";}?> disabled>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Back Light</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="internal_sno" value="Internal S.No"  
                    <?php if($a[17] == 'Internal S.No'){echo "checked";}else{echo " ";}?> disabled>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Internal S.No</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="usb_port" value="USB Port"  
                    <?php if($a[18] == 'USB Port'){echo "checked";}else{echo " ";}?> disabled>
                    <h6 class="part-name d-flex align-items-center">&nbsp;USB Port</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="audio_port" value="Audio Port"  
                    <?php if($a[19] == 'Audio Port'){echo "checked";}else{echo " ";}?> disabled>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Audio Port</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="sleep_mode" value="Sleep Mode"  
                    <?php if($a[20] == 'Sleep Mode'){echo "checked";}else{echo " ";}?> disabled>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Sleep Mode</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="mic" value="Mic"    <?php if($a[21] == 'Mic'){echo "checked";}else{echo " ";}?> disabled>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Mic</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="shut_down" value="Shut Down"  
                    <?php if($a[22] == 'Shut Down'){echo "checked";}else{echo " ";}?> disabled>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Shut Down</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="downloads" value="Downloads"  
                    <?php if($a[23] == 'Downloads'){echo "checked";}else{echo " ";}?> disabled>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Downloads</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="restart" value="Restart"  
                    <?php if($a[24] == 'Restart'){echo "checked";}else{echo " ";}?> disabled>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Restart</h6>
                </div>
            </div>
        </section>




        <!--------------------------  checklist for after part install ---------------------------------->





        <section class="parts-picked px-2">
            <p class="parts-picked-heading text-center">Part&nbsp;Working&nbsp; ~ After Part Installation</p>
            <hr style="color:#fff;">
            <div class="row">
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="keyboard1" value="Keyboard"  
                    <?php if($b[0] == 'Keyboard'){echo "checked";}else{echo " ";}?> disabled>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Keyboard</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="touoch_pad1" value="Touch Pad"  
                    <?php if($b[1] == 'Touch Pad'){echo "checked";}else{echo " ";}?> disabled>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Touch Pad</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="camera1" value="Camera"  
                    <?php echo set_checkbox('camera', 'Camera'); ?><?php if($b[2] == 'Camera'){echo "checked";}else{echo " ";}?> disabled>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Camera</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="wi_fi1" value="WI-FI"  
                    <?php if($b[3] == 'WI-FI'){echo "checked";}else{echo " ";}?> disabled>
                    <h6 class="part-name d-flex align-items-center">&nbsp;WI-FI</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="display1" value="Display"  
                    <?php if($b[4] == 'Display'){echo "checked";}else{echo " ";}?> disabled>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Display</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="ms_office1" value="MS Office"  
                    <?php if($b[5] == 'MS Office'){echo "checked";}else{echo " ";}?> disabled>
                    <h6 class="part-name d-flex align-items-center">&nbsp;MS Office</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="touchpad_clicks1" value="Touchpad Clicks"  
                    <?php if($b[6] == 'Touchpad Clicks'){echo "checked";}else{echo " ";}?> disabled>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Touchpad Clicks</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="sound1" value="Sound"  
                    <?php if($b[7] == 'Sound'){echo "checked";}else{echo " ";}?> disabled>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Sound</h6>
                </div>






                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="safari_chrome1" value="Safari/Chrome"  
                    <?php if($b[8] == 'Safari/Chrome'){echo "checked";}else{echo " ";}?> disabled>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Safari/Chrome</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="touch_screen1" value="Touch Screen"  
                    <?php if($b[9] == 'Touch Screen'){echo "checked";}else{echo " ";}?> disabled>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Touch Screen</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="touch_id1" value="Touch ID/Face ID"  
                    <?php if($b[10] == 'Touch ID/Face ID'){echo "checked";}else{echo " ";}?> disabled>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Touch ID/Face ID</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="touch_bar1" value="Touch Bar"  
                    <?php if($a[11] == 'Touch Bar'){echo "checked";}else{echo " ";}?> disabled>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Touch&nbsp;Bar</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="battery_h1" value="Battery H"  
                    <?php if($b[12] == 'Battery H'){echo "checked";}else{echo " ";}?> disabled>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Battery H.</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="battery_backup1" value="Battery Backup"  
                    <?php if($b[13] == 'Battery Backup'){echo "checked";}else{echo " ";}?> disabled>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Battery Backup</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="charging_port1" value="Charging/Port"  
                    <?php if($b[14] == 'Charging_Port'){echo "checked";}else{echo " ";}?> disabled>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Charging/Port</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="bluetooth1" value="Bluetooth"  
                    <?php if($b[15] == 'Bluetooth'){echo "checked";}else{echo " ";}?> disabled>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Bluetooth</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="back_light1" value="Back Light"  
                    <?php if($b[16] == 'Back Light'){echo "checked";}else{echo " ";}?> disabled>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Back Light</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="internal_sno1" value="Internal S.No"  
                    <?php if($b[17] == 'Internal S.No'){echo "checked";}else{echo " ";}?> disabled>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Internal S.No</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="usb_port1" value="USB Port"  
                    <?php if($b[18] == 'USB Port'){echo "checked";}else{echo " ";}?> disabled>
                    <h6 class="part-name d-flex align-items-center">&nbsp;USB Port</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="audio_port1" value="Audio Port"  
                    <?php if($b[19] == 'Audio Port'){echo "checked";}else{echo " ";}?> disabled>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Audio Port</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="sleep_mode1" value="Sleep Mode"  
                    <?php if($b[20] == 'Sleep Mode'){echo "checked";}else{echo " ";}?> disabled>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Sleep Mode</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="mic1" value="Mic"   <?php if($b[21] == 'Mic'){echo "checked";}else{echo " ";}?> disabled>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Mic</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="shut_down1" value="Shut Down"  
                    <?php if($b[22] == 'Shut Down'){echo "checked";}else{echo " ";}?> disabled>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Shut Down</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="downloads1" value="Downloads"  
                    <?php if($b[23] == 'Downloads'){echo "checked";}else{echo " ";}?> disabled>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Downloads</h6>
                </div>
                <div class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                    <input type="checkbox" name="restart1" value="Restart"  
                    <?php if($b[24] == 'Restart'){echo "checked";}else{echo " ";}?> disabled>
                    <h6 class="part-name d-flex align-items-center">&nbsp;Restart</h6>
                </div>
            </div>
        </section>

        




        <!-- Laptop Image Section -->
        <section class="laptop-image">
            <h3 class="text-center">Physical Condition</h3>
            <div class="container ">
                <div class="row g-3 my-1">


                
                    <div class="col-sm-12 col-md-6 p-3" style="border:.3px solid black;">
                        <label for="inputTag2">
                            <?php  
                                    if($all_data->cam1 != NULL){ ?>
                                        <a href="<?=base_url()?>/assets/uploads_img/home_door/<?=$all_data->cam1;?>">
                                            <img src="<?=base_url()?>/assets/uploads_img/home_door/<?=$all_data->cam1;?>" height="100px" width="100px">
                                        </a>
                                    <?php }else{ ?>
                                        <img src="<?=base_url()?>/assets/img/No_Image_Available.jpg" height="100px" width="100px">
                                   <?php }

                            ?>   
                            <span id="imageName2"></span>
                        </label>
                    </div>
                    <div class="col-sm-12 col-md-6  p-3" style="border:.3px solid black;">
                        <label for="inputTag3">
                            <!-- Display Pannel Back view <span style="color: red;font-size: large;">*</span><br />
                            <i class="fa fa-2x fa-camera"></i> -->
                            <?php  
                                    if($all_data->cam2 != NULL){ ?>
                                        <a href="<?=base_url()?>/assets/uploads_img/home_door/<?=$all_data->cam2;?>">
                                            <img src="<?=base_url()?>/assets/uploads_img/home_door/<?=$all_data->cam2;?>" height="100px" width="100px">
                                        </a>
                                    <?php }else{ ?>
                                        <img src="<?=base_url()?>/assets/img/No_Image_Available.jpg" height="100px" width="100px">
                                   <?php }

                            ?>   <br />
                            <span id="imageName3"></span>
                        </label>
                    </div>









                    <div class="col-sm-12 col-md-6  p-3" style="border:.3px solid black;">
                        <label for="inputTag4">
                            <!-- Keyboard View<span style="color: red;font-size: large;">*</span><br />
                            <i class="fa fa-2x fa-camera"></i> -->
                            <?php  
                                    if($all_data->cam3 != NULL){ ?>
                                        <a href="<?=base_url()?>/assets/uploads_img/home_door/<?=$all_data->cam3;?>">
                                            <img src="<?=base_url()?>/assets/uploads_img/home_door/<?=$all_data->cam3;?>" height="100px" width="100px">
                                        </a>
                                    <?php }else{ ?>
                                        <img src="<?=base_url()?>/assets/img/No_Image_Available.jpg" height="100px" width="100px">
                                   <?php }

                            ?><br />
                            <span id="imageName4"></span>
                        </label>
                    </div>
                    <div class="col-sm-12 col-md-6   p-3" style="border:.3px solid black;">
                        <label for="inputTag5">
                        <?php  
                                    if($all_data->cam4 != NULL){ ?>
                                        <a href="<?=base_url()?>/assets/uploads_img/home_door/<?=$all_data->cam4;?>">
                                            <img src="<?=base_url()?>/assets/uploads_img/home_door/<?=$all_data->cam4;?>" height="100px" width="100px">
                                        </a>
                                    <?php }else{ ?>
                                        <img src="<?=base_url()?>/assets/img/No_Image_Available.jpg" height="100px" width="100px">
                                   <?php }

                            ?> <br />
                            <span id="imageName5"></span>
                        </label>
                    </div>
                </div>
                
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
                        <p style="text-align:justify;">I hereby confirm the above-mentioned part that has been installed or serviced by the Lappy Maker Engineer, I am fully satisfied with installation process and with the quality of the service provided. I affirm that my laptop is functioning properly following the service or part installation, and there has been no negative impact on any other part of device during the repair or replacement process. <br>
                            <span style="font-size:15px;font-weight:bold;">NO DATA GUARANTEE</span>
            </p>
                    </div>
                </div>
                <div class="row signature-row d-flex justify-content-around">
                    <div class="col-sm-10 col-md-5 p-0">
                        <p class="text-center sign-text"><b>Customer Signature</b></p>


                        <?php  
                                    if($all_data->cam4 != NULL){ ?>
                                            <img src="<?=base_url()?>/assets/uploads_img/customer_sign/<?=$all_data->customer_sign;?>" height="100px" width="100px">
                                       
                                    <?php }else{ ?>
                                        <img src="<?=base_url()?>/assets/img/No_Image_Available.jpg" height="150px" width="150px">
                                   <?php }

                            ?>



                        <!-- <img src="<?=base_url()?>/assets/uploads_img/executive_sign/660aa2a9079ef.png" height="150px" width="150px"> -->
                    </div>
                    <div class="col-sm-10 col-md-5 p-0">
                        <p class="text-center sign-text"><b>Executive Signature</b></p>
                        <!-- <div id="sig1"></div> -->
                        <?php  
                                    if($all_data->cam4 != NULL){ ?>
                                            <img src="<?=base_url()?>/assets/uploads_img/executive_sign/<?=$all_data->execlutive_sign;?>" height="100px" width="100px">
                                       
                                    <?php }else{ ?>
                                        <img src="<?=base_url()?>/assets/img/No_Image_Available.jpg" height="150px" width="150px">
                                   <?php }

                            ?>


                    </div>
                </div>
            </div>
        </section>
        <div class="row">
            <div class="col-sm-12 col-md-6 my-1 d-flex flex-row">
                <span class="details-feild d-flex align-items-center">Executive&nbsp;Name.<span
                        style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span>
                        <input class="form-control " type="text" id="executive_name" value="<?= $all_data->exclutive_name ?>" disabled>
            </div>
        </div>
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
                    <h4 class="text-center"><a href="#" class="text-decoration-none fw-bold">Lappymaker </a>Office No. 703, 7<sup>th</sup> Floor, Madhuban Building, Opp. Sona Sweets, Nehru Place, New Delhi - 110019 </h4>
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