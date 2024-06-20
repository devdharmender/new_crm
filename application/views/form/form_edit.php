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

    <form action="<?= base_url('form/form_upload_user'); ?>" method="post" enctype="multipart/form-data">
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
                                <img src="<?= base_url(); ?>assets/img/lappy-maker-logo1.png" alt="img-error">
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