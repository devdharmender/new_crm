<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Job Sheet Door Services : Lappy Maker</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- jQuery files For electronics signature -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css"
        rel="stylesheet">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js">
    </script>
    <script src="https://use.fontawesome.com/3a2eaf6206.js"></script>

    <script
        src="<?= base_url(); ?>assets\jquery-ui-touch-punch-master\jquery-ui-touch-punch-master\jquery.ui.touch-punch.min.js">
    </script>

    <link type="text/css" href="<?= base_url(); ?>assets\jquery.signature\css\jquery.signature.css" rel="stylesheet">
    <script type="text/javascript" src="<?= base_url(); ?>assets\jquery.signature\js\jquery.signature.min.js"></script>


    <!-- Favicons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url(); ?>css/all.css">

    <!-- Custom styles for this template -->
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

    .img img {
        /* border:1px solid black; */
        width: 100%;
        height: auto;
    }
    </style>
</head>

<body>
    <?php $this->load->view('admin/common/header')?>


    <div class="container-fluid">
        <div class="row">
            <?php $this->load->view('admin/common/sidebar')?>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <!-- anything we want to put in right side from of sadhbord -->
                        </div>

                    </div>
                </div>
                <!-- <h2>Section title</h2> -->
                <div class="table-responsive">
                    <sesction class="content">


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

                        <form action="<?= base_url('form_sub_off/door_stp') ?>" method="post"
                            enctype="multipart/form-data">
                            <!-- <form id="jobform" enctype="multipart/form-data"> -->
                            <!-- Top Head section -->
                            <section class="top-head d-flex align-items-center">
                                <div class="container-fluid">
                                    <div class="row p-0">
                                        <div class="col-9 p-0 d-flex align-items-center">
                                            <div class="">
                                                <div class="img">
                                                    <img src="<?= base_url(); ?>assets/img/lappy-maker-logo1.png"
                                                        alt="img-error">
                                                </div>
                                                <div class="content">
                                                    <h1 class="display-6 m-0">Doorstep Solution For Laptops</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3 p-0 d-flex align-items-center text-right">
                                            <h3 class="display-5 m-0"> <b style="font-weight:600;">Job Sheet</b></h3>
                                            <input type="text" name="page" value="work_sheet" class="d-none">
                                        </div>

                                    </div>

                                </div>
                            </section>

                            <!-- Horizental line -->
                            <hr class="h-line">
                            <div id="msg"></div>
                            <!-- User Details -->
                            <section class="user-details">
                                <div class="container-fluid p-0">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 my-1 d-flex flex-row">
                                            <span class="details-feild d-flex align-items-center">Date<span
                                                    style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span><span
                                                class="details-feild d-flex align-items-center" id="span"> </span>
                                            <input class="form-control" type="text" name="date" id="date" placeholder=""
                                                value="" style="display:none;">
                                        </div>
                                        <div class="col-sm-12 col-md-6 my-1 d-flex flex-row">
                                            <span class="details-feild d-flex align-items-center">Name<span
                                                    style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span>
                                            <input
                                                class="form-control <?php echo form_error('name') ? 'is-invalid' : ''; ?>"
                                                type="text" name="name" id="name" value="<?= set_value('name'); ?>"
                                                required>
                                        </div>
                                        <div class="col-sm-12 col-md-12 my-1 d-flex flex-row">
                                            <span class="details-feild d-flex align-items-center">Address<span
                                                    style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span>
                                            <input
                                                class="form-control <?php echo form_error('address') ? 'is-invalid' : ''; ?>"
                                                type="text" name="address" id="address"
                                                value="<?= set_value('address'); ?>" required>
                                        </div>

                                        <div class="col-sm-12 col-md-5 my-1 d-flex flex-row">
                                            <span class="details-feild d-flex align-items-center">Contact<span
                                                    style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span>
                                            <input
                                                class="form-control <?php echo form_error('contact') ? 'is-invalid' : ''; ?>"
                                                type="tel" name="contact" id="contact"
                                                value="<?= set_value('contact'); ?>" required>
                                        </div>

                                        <div class="col-sm-12 col-md-7 my-1 d-flex flex-row">
                                            <span class="details-feild d-flex align-items-center">Email<span
                                                    style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span>
                                            <input
                                                class="form-control <?php echo form_error('email') ? 'is-invalid' : ''; ?>"
                                                type="email" name="email" id="email" value="<?= set_value('email'); ?>"
                                                required>
                                        </div>


                                    </div>
                                </div>
                            </section>
                            <section class="laptop-detail">
                                <div class="container-fluid p-0">
                                    <div class="row">


                                        <div class="col-sm-12 col-md-6 my-1 d-flex flex-row">
                                            <span
                                                class="details-feild d-flex align-items-center">&nbsp;Model&nbsp;No.<span
                                                    style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span><input
                                                class="form-control <?php echo form_error('model_no') ? 'is-invalid' : ''; ?>"
                                                type="text" name="model_no" id="model_no"
                                                value="<?= set_value('model_no'); ?>" required>
                                        </div>


                                        <div class="col-sm-12 col-md-6 my-1 d-flex flex-row">
                                            <span class="details-feild d-flex align-items-center">Serial&nbsp;No.<span
                                                    style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span><input
                                                class="form-control <?php echo form_error('serial_no') ? 'is-invalid' : ''; ?>"
                                                type="text" name="serial_no" id="serial_no"
                                                value="<?= set_value('serial_no'); ?>" required>
                                        </div>



                                        <div class="col-sm-12 col-md-5 my-1 d-flex flex-row">
                                            <span class="details-feild d-flex align-items-center">Final Amount<span
                                                    style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span><input
                                                class="form-control <?php echo form_error('finalamount') ? 'is-invalid' : ''; ?>"
                                                type="text" name="finalamount" id="finalamount"
                                                value="<?= set_value('finalamount'); ?>" required>
                                        </div>

                                        <div class="col-sm-12 col-md-7 my-1 d-flex flex-row">
                                            <span class="details-feild d-flex align-items-center">Part which is replaced
                                                <span
                                                    style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span><input
                                                class="form-control  <?php echo form_error('replacedpart') ? 'is-invalid' : ''; ?>"
                                                type="text" name="replacedpart" id="replacedpart"
                                                value="<?= set_value('replacedpart'); ?>" required>
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
                                            id="reported_problems_cust"><?php echo set_value('reported_problems_cust'); ?> </textarea>
                                    </div>
                                </div>
                            </section>
                            <section class="reported-problem">
                                <div class="row">
                                    <div class="col-12 my-1 mt-5 mb-5">
                                        <span class="">Solution Provided By Executive</span>
                                        <br>
                                        <textarea type="text" class="" name="sol_given"
                                            id="reported_problems"><?php echo set_value('reported_problems'); ?> </textarea>
                                    </div>
                                </div>
                            </section>


                            <!-- Parts Picker External Section -->
                            <!-- <section class="parts-picked px-2">
        <p class="parts-picked-heading text-center">Accessories Submitted From Customer</p>
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
    </section> -->

                            <!--check list-->
                            <!--  checklist for before part install -->
                            <section class="parts-picked px-2">
                                <p class="parts-picked-heading text-center">Check&nbsp;List&nbsp; ~ Before Part
                                    Installation</p>
                                <hr style="color:#fff;">
                                <div class="row">
                                    <div
                                        class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                                        <input type="checkbox" name="keyboard" value="Keyboard" id="city1"
                                            <?php echo set_checkbox('keyboard', 'Keyboard'); ?>>
                                        <h6 class="part-name d-flex align-items-center">&nbsp;Keyboard</h6>
                                    </div>
                                    <div
                                        class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                                        <input type="checkbox" name="touoch_pad" value="Touch Pad" id="city1"
                                            <?php echo set_checkbox('touoch_pad', 'Touch Pad'); ?>>
                                        <h6 class="part-name d-flex align-items-center">&nbsp;Touch Pad</h6>
                                    </div>
                                    <div
                                        class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                                        <input type="checkbox" name="camera" value="Camera" id="city1"
                                            <?php echo set_checkbox('camera', 'Camera'); ?>>
                                        <h6 class="part-name d-flex align-items-center">&nbsp;Camera</h6>
                                    </div>
                                    <div
                                        class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                                        <input type="checkbox" name="wi_fi" value="WI-FI" id="city1"
                                            <?php echo set_checkbox('wi_fi', 'WI-FI'); ?>>
                                        <h6 class="part-name d-flex align-items-center">&nbsp;WI-FI</h6>
                                    </div>
                                    <div
                                        class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                                        <input type="checkbox" name="display" value="Display" id="city1"
                                            <?php echo set_checkbox('display', 'Display'); ?>>
                                        <h6 class="part-name d-flex align-items-center">&nbsp;Display</h6>
                                    </div>
                                    <div
                                        class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                                        <input type="checkbox" name="ms_office" value="MS Office" id="city1"
                                            <?php echo set_checkbox('ms_office', 'MS Office'); ?>>
                                        <h6 class="part-name d-flex align-items-center">&nbsp;MS Office</h6>
                                    </div>
                                    <div
                                        class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                                        <input type="checkbox" name="touchpad_clicks" value="Touchpad Clicks" id="city1"
                                            <?php echo set_checkbox('touchpad_clicks', 'Touchpad Clicks'); ?>>
                                        <h6 class="part-name d-flex align-items-center">&nbsp;Touchpad Clicks</h6>
                                    </div>
                                    <div
                                        class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                                        <input type="checkbox" name="sound" value="Sound" id="city1"
                                            <?php echo set_checkbox('sound', 'Sound'); ?>>
                                        <h6 class="part-name d-flex align-items-center">&nbsp;Sound</h6>
                                    </div>






                                    <div
                                        class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                                        <input type="checkbox" name="safari_chrome" value="Safari/Chrome" id="city1"
                                            <?php echo set_checkbox('safari_chrome', 'Safari/Chrome'); ?>>
                                        <h6 class="part-name d-flex align-items-center">&nbsp;Safari/Chrome</h6>
                                    </div>
                                    <div
                                        class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                                        <input type="checkbox" name="touch_screen" value="Touch Screen" id="city1"
                                            <?php echo set_checkbox('touch_screen', 'Touch Screen'); ?>>
                                        <h6 class="part-name d-flex align-items-center">&nbsp;Touch Screen</h6>
                                    </div>
                                    <div
                                        class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                                        <input type="checkbox" name="touch_id" value="Touch ID/Face ID" id="city1"
                                            <?php echo set_checkbox('touch_id', 'Touch ID/Face ID'); ?>>
                                        <h6 class="part-name d-flex align-items-center">&nbsp;Touch ID/Face ID</h6>
                                    </div>
                                    <div
                                        class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                                        <input type="checkbox" name="touch_bar" value="Touch Bar" id="city1"
                                            <?php echo set_checkbox('touch_bar', 'Touch Bar'); ?>>
                                        <h6 class="part-name d-flex align-items-center">&nbsp;Touch&nbsp;Bar</h6>
                                    </div>
                                    <div
                                        class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                                        <input type="checkbox" name="battery_h" value="Battery H" id="city1"
                                            <?php echo set_checkbox('battery_h', 'Battery H'); ?>>
                                        <h6 class="part-name d-flex align-items-center">&nbsp;Battery H.</h6>
                                    </div>
                                    <div
                                        class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                                        <input type="checkbox" name="battery_backup" value="Battery Backup" id="city1"
                                            <?php echo set_checkbox('battery_backup', 'Battery Backup'); ?>>
                                        <h6 class="part-name d-flex align-items-center">&nbsp;Battery Backup</h6>
                                    </div>
                                    <div
                                        class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                                        <input type="checkbox" name="charging_port" value="Charging_Port" id="city1"
                                            <?php echo set_checkbox('charging_port', 'Charging_Port'); ?>>
                                        <h6 class="part-name d-flex align-items-center">&nbsp;Charging/Port</h6>
                                    </div>
                                    <div
                                        class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                                        <input type="checkbox" name="bluetooth" value="Bluetooth" id="city1"
                                            <?php echo set_checkbox('bluetooth', 'Bluetooth'); ?>>
                                        <h6 class="part-name d-flex align-items-center">&nbsp;Bluetooth</h6>
                                    </div>
                                    <div
                                        class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                                        <input type="checkbox" name="back_light" value="Back Light" id="city1"
                                            <?php echo set_checkbox('back_light', 'Back Light'); ?>>
                                        <h6 class="part-name d-flex align-items-center">&nbsp;Back Light</h6>
                                    </div>
                                    <div
                                        class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                                        <input type="checkbox" name="internal_sno" value="Internal S.No" id="city1"
                                            <?php echo set_checkbox('internal_sno', 'Internal S.No'); ?>>
                                        <h6 class="part-name d-flex align-items-center">&nbsp;Internal S.No</h6>
                                    </div>
                                    <div
                                        class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                                        <input type="checkbox" name="usb_port" value="USB Port" id="city1"
                                            <?php echo set_checkbox('usb_port', 'USB Port'); ?>>
                                        <h6 class="part-name d-flex align-items-center">&nbsp;USB Port</h6>
                                    </div>
                                    <div
                                        class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                                        <input type="checkbox" name="audio_port" value="Audio Port" id="city1"
                                            <?php echo set_checkbox('audio_port', 'Audio Port'); ?>>
                                        <h6 class="part-name d-flex align-items-center">&nbsp;Audio Port</h6>
                                    </div>
                                    <div
                                        class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                                        <input type="checkbox" name="sleep_mode" value="Sleep Mode" id="city1"
                                            <?php echo set_checkbox('sleep_mode', 'Sleep Mode'); ?>>
                                        <h6 class="part-name d-flex align-items-center">&nbsp;Sleep Mode</h6>
                                    </div>
                                    <div
                                        class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                                        <input type="checkbox" name="mic" value="Mic" id="city1"
                                            <?php echo set_checkbox('mic', 'Mic'); ?>>
                                        <h6 class="part-name d-flex align-items-center">&nbsp;Mic</h6>
                                    </div>
                                    <div
                                        class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                                        <input type="checkbox" name="shut_down" value="Shut Down" id="city1"
                                            <?php echo set_checkbox('shut_down', 'Shut Down'); ?>>
                                        <h6 class="part-name d-flex align-items-center">&nbsp;Shut Down</h6>
                                    </div>
                                    <div
                                        class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                                        <input type="checkbox" name="downloads" value="Downloads" id="city1"
                                            <?php echo set_checkbox('downloads', 'Downloads'); ?>>
                                        <h6 class="part-name d-flex align-items-center">&nbsp;Downloads</h6>
                                    </div>
                                    <div
                                        class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                                        <input type="checkbox" name="restart" value="Restart" id="city1"
                                            <?php echo set_checkbox('restart', 'Restart'); ?>>
                                        <h6 class="part-name d-flex align-items-center">&nbsp;Restart</h6>
                                    </div>
                                </div>
                            </section>




                            <!--------------------------  checklist for after part install ---------------------------------->





                            <section class="parts-picked px-2">
                                <p class="parts-picked-heading text-center">Check&nbsp;List&nbsp; ~ After Part
                                    Installation</p>
                                <hr style="color:#fff;">
                                <div class="row">
                                    <div
                                        class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                                        <input type="checkbox" name="keyboard1" value="Keyboard" id="city1"
                                            <?php echo set_checkbox('keyboard', 'Keyboard'); ?>>
                                        <h6 class="part-name d-flex align-items-center">&nbsp;Keyboard</h6>
                                    </div>
                                    <div
                                        class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                                        <input type="checkbox" name="touoch_pad1" value="Touch Pad" id="city1"
                                            <?php echo set_checkbox('touoch_pad', 'Touch Pad'); ?>>
                                        <h6 class="part-name d-flex align-items-center">&nbsp;Touch Pad</h6>
                                    </div>
                                    <div
                                        class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                                        <input type="checkbox" name="camera1" value="Camera" id="city1"
                                            <?php echo set_checkbox('camera', 'Camera'); ?>>
                                        <h6 class="part-name d-flex align-items-center">&nbsp;Camera</h6>
                                    </div>
                                    <div
                                        class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                                        <input type="checkbox" name="wi_fi1" value="WI-FI" id="city1"
                                            <?php echo set_checkbox('wi_fi', 'WI-FI'); ?>>
                                        <h6 class="part-name d-flex align-items-center">&nbsp;WI-FI</h6>
                                    </div>
                                    <div
                                        class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                                        <input type="checkbox" name="display1" value="Display" id="city1"
                                            <?php echo set_checkbox('display', 'Display'); ?>>
                                        <h6 class="part-name d-flex align-items-center">&nbsp;Display</h6>
                                    </div>
                                    <div
                                        class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                                        <input type="checkbox" name="ms_office1" value="MS Office" id="city1"
                                            <?php echo set_checkbox('ms_office', 'MS Office'); ?>>
                                        <h6 class="part-name d-flex align-items-center">&nbsp;MS Office</h6>
                                    </div>
                                    <div
                                        class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                                        <input type="checkbox" name="touchpad_clicks1" value="Touchpad Clicks"
                                            id="city1"
                                            <?php echo set_checkbox('touchpad_clicks', 'Touchpad Clicks'); ?>>
                                        <h6 class="part-name d-flex align-items-center">&nbsp;Touchpad Clicks</h6>
                                    </div>
                                    <div
                                        class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                                        <input type="checkbox" name="sound1" value="Sound" id="city1"
                                            <?php echo set_checkbox('sound', 'Sound'); ?>>
                                        <h6 class="part-name d-flex align-items-center">&nbsp;Sound</h6>
                                    </div>






                                    <div
                                        class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                                        <input type="checkbox" name="safari_chrome1" value="Safari/Chrome" id="city1"
                                            <?php echo set_checkbox('safari_chrome', 'Safari/Chrome'); ?>>
                                        <h6 class="part-name d-flex align-items-center">&nbsp;Safari/Chrome</h6>
                                    </div>
                                    <div
                                        class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                                        <input type="checkbox" name="touch_screen1" value="Touch Screen" id="city1"
                                            <?php echo set_checkbox('touch_screen', 'Touch Screen'); ?>>
                                        <h6 class="part-name d-flex align-items-center">&nbsp;Touch Screen</h6>
                                    </div>
                                    <div
                                        class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                                        <input type="checkbox" name="touch_id1" value="Touch ID/Face ID" id="city1"
                                            <?php echo set_checkbox('touch_id', 'Touch ID/Face ID'); ?>>
                                        <h6 class="part-name d-flex align-items-center">&nbsp;Touch ID/Face ID</h6>
                                    </div>
                                    <div
                                        class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                                        <input type="checkbox" name="touch_bar1" value="Touch Bar" id="city1"
                                            <?php echo set_checkbox('touch_bar', 'Touch Bar'); ?>>
                                        <h6 class="part-name d-flex align-items-center">&nbsp;Touch&nbsp;Bar</h6>
                                    </div>
                                    <div
                                        class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                                        <input type="checkbox" name="battery_h1" value="Battery H" id="city1"
                                            <?php echo set_checkbox('battery_h', 'Battery H'); ?>>
                                        <h6 class="part-name d-flex align-items-center">&nbsp;Battery H.</h6>
                                    </div>
                                    <div
                                        class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                                        <input type="checkbox" name="battery_backup1" value="Battery Backup" id="city1"
                                            <?php echo set_checkbox('battery_backup', 'Battery Backup'); ?>>
                                        <h6 class="part-name d-flex align-items-center">&nbsp;Battery Backup</h6>
                                    </div>
                                    <div
                                        class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                                        <input type="checkbox" name="charging_port1" value="Charging/Port" id="city1"
                                            <?php echo set_checkbox('charging_port', 'Charging/Port'); ?>>
                                        <h6 class="part-name d-flex align-items-center">&nbsp;Charging/Port</h6>
                                    </div>
                                    <div
                                        class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                                        <input type="checkbox" name="bluetooth1" value="Bluetooth" id="city1"
                                            <?php echo set_checkbox('bluetooth', 'Bluetooth'); ?>>
                                        <h6 class="part-name d-flex align-items-center">&nbsp;Bluetooth</h6>
                                    </div>
                                    <div
                                        class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                                        <input type="checkbox" name="back_light1" value="Back Light" id="city1"
                                            <?php echo set_checkbox('back_light', 'Back Light'); ?>>
                                        <h6 class="part-name d-flex align-items-center">&nbsp;Back Light</h6>
                                    </div>
                                    <div
                                        class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                                        <input type="checkbox" name="internal_sno1" value="Internal S.No" id="city1"
                                            <?php echo set_checkbox('internal_sno', 'Internal S.No'); ?>>
                                        <h6 class="part-name d-flex align-items-center">&nbsp;Internal S.No</h6>
                                    </div>
                                    <div
                                        class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                                        <input type="checkbox" name="usb_port1" value="USB Port" id="city1"
                                            <?php echo set_checkbox('usb_port', 'USB Port'); ?>>
                                        <h6 class="part-name d-flex align-items-center">&nbsp;USB Port</h6>
                                    </div>
                                    <div
                                        class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                                        <input type="checkbox" name="audio_port1" value="Audio Port" id="city1"
                                            <?php echo set_checkbox('audio_port', 'Audio Port'); ?>>
                                        <h6 class="part-name d-flex align-items-center">&nbsp;Audio Port</h6>
                                    </div>
                                    <div
                                        class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                                        <input type="checkbox" name="sleep_mode1" value="Sleep Mode" id="city1"
                                            <?php echo set_checkbox('sleep_mode', 'Sleep Mode'); ?>>
                                        <h6 class="part-name d-flex align-items-center">&nbsp;Sleep Mode</h6>
                                    </div>
                                    <div
                                        class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                                        <input type="checkbox" name="mic1" value="Mic" id="city1"
                                            <?php echo set_checkbox('mic', 'Mic'); ?>>
                                        <h6 class="part-name d-flex align-items-center">&nbsp;Mic</h6>
                                    </div>
                                    <div
                                        class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                                        <input type="checkbox" name="shut_down1" value="Shut Down" id="city1"
                                            <?php echo set_checkbox('shut_down', 'Shut Down'); ?>>
                                        <h6 class="part-name d-flex align-items-center">&nbsp;Shut Down</h6>
                                    </div>
                                    <div
                                        class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                                        <input type="checkbox" name="downloads1" value="Downloads" id="city1"
                                            <?php echo set_checkbox('downloads', 'Downloads'); ?>>
                                        <h6 class="part-name d-flex align-items-center">&nbsp;Downloads</h6>
                                    </div>
                                    <div
                                        class="col-6 col-md-6 col-lg-4 d-flex radioalign-items-center justify-content-start flex-row">
                                        <input type="checkbox" name="restart1" value="Restart" id="city1"
                                            <?php echo set_checkbox('restart', 'Restart'); ?>>
                                        <h6 class="part-name d-flex align-items-center">&nbsp;Restart</h6>
                                    </div>
                                </div>
                            </section>

                            <!-- Parts Picker internal Section -->
                            <!-- <section class="parts-picked px-2">
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
    </section> -->

                            <!-- <section class="parts-picked px-2">
        <div class="row">
          <div class="col-sm-12 col-md-12 my-1 d-flex flex-row">
                    <span class="details-feild d-flex align-items-center">Parts&nbsp;Picked&nbsp;Detail&nbsp;<span style="color: red;font-size: large;"></span>&nbsp;:&nbsp;</span><input class="form-control <?php echo form_error('part_picked_detail') ? 'is-invalid' : ''; ?>" type="text" name="part_picked_detail" id="part_picked_detail" value="<?= set_value('part_picked_detail'); ?>">
                </div>
                <div class="col-sm-12 col-md-12 my-1 d-flex flex-row">
                    <br><input id="inputTag9" type="file" name="part_along_with" />
                </div>
        </div>
    </section> -->

                            <!-- Laptop Ddetail section -->




                            <!-- Laptop Image Section -->
                            <section class="laptop-image">
                                <h3 class="text-center">Physical Condition</h3>
                                <div class="container ">
                                    <div class="row g-3 my-1">



                                        <div class="col-sm-12 col-md-6 p-3" style="border:.3px solid black;">
                                            <label for="inputTag2">
                                                <!-- Display Pannel Front View<span style="color: red;font-size: large;">*</span> <br />
                        <i class="fa fa-2x fa-camera"></i> -->
                                                <input id="inputTag2" type="file" name="cam1"
                                                    style="margin-top: 20px;" />
                                                <br />
                                                <span id="cam1"></span>
                                            </label>
                                        </div>
                                        <div class="col-sm-12 col-md-6  p-3" style="border:.3px solid black;">
                                            <label for="inputTag3">
                                                <!-- Display Pannel Back view <span style="color: red;font-size: large;">*</span><br />
                        <i class="fa fa-2x fa-camera"></i> -->
                                                <input id="inputTag3" type="file" name="cam2"
                                                    style="margin-top: 20px;" />
                                                <br />
                                                <span id="cam2"></span>
                                            </label>
                                        </div>
                                        <div class="col-sm-12 col-md-6  p-3" style="border:.3px solid black;">
                                            <label for="inputTag4">
                                                <!-- Keyboard View<span style="color: red;font-size: large;">*</span><br />
                        <i class="fa fa-2x fa-camera"></i> -->
                                                <input id="inputTag4" type="file" name="cam3"
                                                    style="margin-top: 20px;" />
                                                <br />
                                                <span id="cam3"></span>
                                            </label>
                                        </div>
                                        <div class="col-sm-12 col-md-6   p-3" style="border:.3px solid black;">
                                            <label for="inputTag5">
                                                <!-- Bottom Base View<span style="color: red;font-size: large;">*</span> <br />
                        <i class="fa fa-2x fa-camera"></i> -->
                                                <input id="inputTag5" type="file" name="cam4"
                                                    style="margin-top: 20px;" />
                                                <br />
                                                <span id="cam4"></span>
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
                                            <span
                                                class="declaration d-flex align-items-center"><b>DECLARATION&nbsp;:&nbsp;</b></span>
                                            <p style="text-align:justify;">I hereby confirm the above-mentioned part
                                                that has been installed or serviced by the Lappy Maker Engineer, I am
                                                fully satisfied with installation process and with the quality of the
                                                service provided. I affirm that my laptop is functioning properly
                                                following the service or part installation, and there has been no
                                                negative impact on any other part of device during the repair or
                                                replacement process. <br>
                                                <span style="font-size:15px;font-weight:bold;">NO DATA GUARANTEE</span>
                                            </p>
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
                                            <button id="clear1"
                                                class="btn btn-sm btn-primary text-center">Clear</button>
                                            <br>
                                            <textarea id="signature641" name="signed2" style="display: none"></textarea>

                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="row">
                                <div class="col-sm-12 col-md-6 my-1 d-flex flex-row">
                                    <span class="details-feild d-flex align-items-center">Executive&nbsp;Name.<span
                                            style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span><input
                                        class="form-control  <?php echo form_error('executive_name') ? 'is-invalid' : ''; ?>"
                                        type="text" name="executive_name" id="executive_name"
                                        value="<?= set_value('executive_name'); ?>" required>
                                </div>
                            </div>
                            <hr class="h-line">

                            <section class="submit">
                                <div class="container-fluid" style="margin:2vw 0vw;">
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-center">
                                            <button id="submit-btn" type="submit"
                                                class="btn btn-primary d-block">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="bottom-section">
                                <div class="container-fluid">
                                    <div class="company-address">
                                        <h4 class="text-center">Office No. 703, 7<sup>th</sup> Floor, Madhuban Building,
                                            Nehru Place, New Delhi - 110019 </h4>
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
                    </sesction>
                </div>
            </main>
        </div>
    </div>
    <hr>
    <div class="credit">Illustration by <a href="https://wddevelopers.github.io/" target="_blank">Dharmender</a>.</div>
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

// this is created by dharmender live time ---------
var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();

today = mm + '/' + dd + '/' + yyyy;


var span = document.getElementById('span');


function time() {
    var d = new Date();
    var s = d.getSeconds();
    var m = d.getMinutes();
    var h = d.getHours();
    var fulldate = today + " " + ("0" + h).substr(-2) + ":" + ("0" + m).substr(-2) + ":" + ("0" + s).substr(-2);
    span.textContent = fulldate;
    document.getElementById('date').value = fulldate;

}

setInterval(time, 1000);
</script>


<script src="js/bootstrap.bundle.min.js"></script>

<script>
$(document).ready(function() {

    $('#cmd').click(function() {
        var options = {};
        var pdf = new jsPDF('p', 'pt', 'a4');
        pdf.addHTML($(".content"), 15, 15, options, function() {
            pdf.save('pageContent.pdf');
        });
    });
});
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
</script>

</html>