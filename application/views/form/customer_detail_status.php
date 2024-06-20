<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Customer detail</title>
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

    <style>
    body {
        background-color: #e9ecef21;
    }

    td {
        border: 1px solid;
    }

    .logo_img {
        width: 200px;
    }

    @media screen and (max-width: 992px) {
        .col-6 {
            width: 100% !important;
        }
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
                    <h1 class="h2">Customer Details Status</h1>
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

                            <?php if (!empty($user1_loop)) { foreach ($user1_loop as $user) {  ?>

                            <div>
                                <table class="table" style="overflow-x: scroll;width: 100% !important;padding:20px;">
                                    <div class="row">
                                        <div class="col-6"><b> Ticket No : LM </b><?php echo  $user['ticket_no']; ?>
                                        </div>
                                        <div class="col-6"><b>Pick Up Date : </b><?php echo  $user['date']; ?></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6"><b>Submit Date : </b><?php echo  $user['sdate']; ?></div>
                                        <div class="col-6"><b> Email : </b><?php echo  $user['email']; ?></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6"><b>Model No : </b><?php echo  $user['model_no']; ?></div>
                                        <div class="col-6"><b>Serial No : </b><?php echo  $user['serial_no']; ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6"><b>Pickup Engg : </b><?php echo  $user['pe']; ?></div>
                                        <div class="col-6"><b>Diagnose Engg : </b><?php echo  $user['die']; ?></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6"><b>Problem Reported By Executive :
                                            </b><?php echo  $user['pr_bc']; ?></div>
                                        <div class="col-6"><b>Problem Reported By Customer :
                                            </b><?php echo  $user['pr_be']; ?></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6"><b>Condition : </b><?php echo  $user['body_laptop']; ?></div>
                                        <div class="col-6"><b> Remarks : </b><?php echo  $user['remarks']; ?></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6"><b>Repair / Not Repair Parts :
                                            </b><?php echo  $user['checked_by']; ?></div>
                                        <div class="col-6"><b> Repaired BY : </b><?php echo  $user['confiremed_by']; ?>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-6"><b>Part Problem Detect :
                                            </b><?php echo  $user['part_status']; ?></div>
                                        <div class="col-6"><b> With/Without Email:
                                            </b><?php echo  $user['with_email']; ?></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6"><b> Laptop Password : </b><?php echo  $user['lappy_pass']; ?>
                                        </div>
                                    </div>
                                    <h6 class="text-center m-4 fs-2 fw-bold">Submit Time Photos/Images</h6>
                                    <div class="row">
                                        <div class="col-6"><b>Parts Pickup Along with laptop :
                                            </b><?php echo  $user['part_picked_detail']; ?><br><img
                                                src="<?php if (strlen(base_url('assets/uploads_img/laptop_img/' . $user['part_along'])) > 66) {
                                                                                                                                                        echo base_url('assets/uploads_img/laptop_img/' . $user['part_along']);
                                                                                                                                                    } else {
                                                                                                                                                        echo base_url('assets/img/No_Image_Available.jpg');
                                                                                                                                                    } ?>" height="100px"
                                                width="100px" /></div>
                                        <div class="col-6"><b> Front Screen view : </b><br><img src="<?php if (strlen(base_url('assets/uploads_img/laptop_img/' . $user['front_view'])) > 66) {
                                                                                                    echo base_url('assets/uploads_img/laptop_img/' . $user['front_view']);
                                                                                                } else {
                                                                                                    echo base_url('assets/img/No_Image_Available.jpg');
                                                                                                } ?>" height="100px"
                                                width="100px" /></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6"><b> Back Screen View : </b><br><img src="<?php if (strlen(base_url('assets/uploads_img/laptop_img/' . $user['back_screen_view'])) > 66) {
                                                                                                echo base_url('assets/uploads_img/laptop_img/' . $user['back_screen_view']);
                                                                                            } else {
                                                                                                echo base_url('assets/img/No_Image_Available.jpg');
                                                                                            } ?>" height="100px"
                                                width="100px" /></div>
                                        <div class="col-6"><b> keyboard View : </b><br><img src="<?php if (strlen(base_url('assets/uploads_img/laptop_img/' . $user['keyboard_view'])) > 66) {
                                                                                                echo base_url('assets/uploads_img/laptop_img/' . $user['keyboard_view']);
                                                                                            } else {
                                                                                                echo base_url('assets/img/No_Image_Available.jpg');
                                                                                            } ?>" height="100px"
                                                width="100px" /> </div>

                                    </div>


                                    <div class="row">
                                        <div class="col-6"><b> Track Pad Problem : </b><br><img src="<?php if (strlen(base_url('assets/uploads_img/laptop_img/' . $user['track_pad_view'])) > 66) {
                                                                                                    echo base_url('assets/uploads_img/laptop_img/' . $user['track_pad_view']);
                                                                                                } else {
                                                                                                    echo base_url('assets/img/No_Image_Available.jpg');
                                                                                                } ?>" height="100px"
                                                width="100px" /> </div>
                                        <div class="col-6"><b> Base view : </b><br><img src="<?php if (strlen(base_url('assets/uploads_img/laptop_img/' . $user['base_view'])) > 66) {
                                                                                            echo base_url('assets/uploads_img/laptop_img/' . $user['base_view']);
                                                                                        } else {
                                                                                            echo base_url('assets/img/No_Image_Available.jpg');
                                                                                        } ?>" height="100px"
                                                width="100px" /></div>


                                    </div>
                                    <div class="row">
                                        <div class="col-6"><b> Internal Part : </b><br><img src="<?php if (strlen(base_url('assets/uploads_img/laptop_img/' . $user['int_part_img'])) > 66) {
                                                                                                echo base_url('assets/uploads_img/laptop_img/' . $user['int_part_img']);
                                                                                            } else {
                                                                                                echo base_url('assets/img/No_Image_Available.jpg');
                                                                                            } ?>" height="100px"
                                                width="100px" /></div>
                                        <div class="col-6"><b> Other View : </b><br><img src="<?php if (strlen(base_url('assets/uploads_img/laptop_img/' . $user['file_input'])) > 66) {
                                                                                            echo base_url('assets/uploads_img/laptop_img/' . $user['file_input']);
                                                                                        } else {
                                                                                            echo base_url('assets/img/No_Image_Available.jpg');
                                                                                        } ?>" height="100px"
                                                width="100px" /></div>
                                    </div>


                                    <h6 class="text-center m-4 fs-2 fw-bold">Diagnosis Photos/Images</h6>

                                    <div class="row">
                                        <div class="col-6"><b>Problem Diagnosed By Engg : </b><br><img src="<?php if (strlen(base_url('assets/uploads_img/laptop_img/' . $user['problem_diagnos_by_eng_img'])) > 66) {
                                                                                                echo base_url('assets/uploads_img/laptop_img/' . $user['problem_diagnos_by_eng_img']);
                                                                                                    } else {
                                                                                                        echo base_url('assets/img/No_Image_Available.jpg');
                                                                                                    } ?>"
                                                height="100px" width="100px" /></div>
                                        <div class="col-6"><b>Problem Diagnosed by Engg : </b><br><img src="<?php if (strlen(base_url('assets/uploads_img/laptop_img/' . $user['outer_screw_img'])) > 66) {
                                                                                            echo base_url('assets/uploads_img/laptop_img/' . $user['outer_screw_img']);
                                                                                        } else {
                                                                                            echo base_url('assets/img/No_Image_Available.jpg');
                                                                                        } ?>" height="100px"
                                                width="100px" /> </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-6"><b>Inner Screws : </b><br><img src="<?php if (strlen(base_url('assets/uploads_img/laptop_img/' . $user['inner_screw_img'])) > 66) {
                                                                                            echo base_url('assets/uploads_img/laptop_img/' . $user['inner_screw_img']);
                                                                                        } else {
                                                                                            echo base_url('assets/img/No_Image_Available.jpg');
                                                                                        } ?>" height="100px"
                                                width="100px" /></div>


                                        <div class="col-6"><b>Internal Parts Condition : </b><br><img src="<?php if (strlen(base_url('assets/uploads_img/laptop_img/' . $user['internal_part_img'])) > 66) {
                                                                                                        echo base_url('assets/uploads_img/laptop_img/' . $user['internal_part_img']);
                                                                                                    } else {
                                                                                                        echo base_url('assets/img/No_Image_Available.jpg');
                                                                                                    } ?>"
                                                height="100px" width="100px" /></div>

                                    </div>
                                    <hr>

                                </table>
                            </div>
                            <?php }} else { ?>
                            <div class="empty-state">
                                <div class="empty-state__content">
                                    <div class="empty-state__icon">
                                        <img src="https://www.lappymaker.com/images/animated-logo.gif"
                                            alt="https://www.lappymaker.com/">
                                    </div>
                                    <div class="empty-state__message">No records Found</div>
                                    <div class="empty-state__help">
                                        Details not added | need to create new records.
                                    </div>
                                </div>
                            </div>

                            <div class="credit">Illustration by <a href="https://wddevelopers.github.io/"
                                    target="_blank">Dharmender</a>.</div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
</script>

</html>