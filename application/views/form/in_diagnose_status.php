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
</head>

<body>
    <?php $this->load->view('admin/common/header')?>


    <div class="container-fluid">
        <div class="row">
            <?php $this->load->view('admin/common/sidebar')?>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">In Diagnose Status</h1>
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
            
            <?php
            if (!empty($user1_loop_in_dig)) {
                foreach ($user1_loop_in_dig as $user1_loop_in_dig) {  ?>

                    <div>
                        <table class="table" style="overflow-x: scroll;width: 100% !important;padding:20px;">
                            <div class="row">
                                <div class="col-6"><b> Ticket No: </b><?php echo  $user1_loop_in_dig['ticket_no']; ?></div>
                                <div class="col-6"><b> Name : </b><?php echo  $user1_loop_in_dig['name']; ?></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b> Email : </b><?php echo  $user1_loop_in_dig['email']; ?></div>
                                <div class="col-6"><b> Pick Up Date: </b><?php echo  $user1_loop_in_dig['pdate']; ?></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b> Submit Date: </b><?php echo  $user1_loop_in_dig['sdate']; ?></div>
                                <div class="col-6"><b>Quality Check Date: </b><?php echo  $user1_loop_in_dig['qcdate']; ?></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b> Password : </b><?php echo  $user1_loop_in_dig['password']; ?></div>
                                <div class="col-6"><b> Model No: </b><?php echo  $user1_loop_in_dig['model_no']; ?></div>
                            </div>
                             <div class="row">
                                <div class="col-6"><b> Serial No: </b><?php echo  $user1_loop_in_dig['serial_no']; ?></div>
                                <div class="col-6"><b> Pickup Engg : </b><?php echo  $user1_loop_in_dig['pe']; ?></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b> Diagnose Engg : </b><?php echo  $user1_loop_in_dig['die']; ?></div>
                                <div class="col-6"><b> Repaired By: </b><?php echo  $user1_loop_in_dig['confiremed_by']; ?></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b> Check List: </b><?php echo  $user1_loop_in_dig['diagnos_check_li']; ?></div>
                                <div class="col-6"><b>Repair / Not Repair Parts.: </b><?php echo  $user1_loop_in_dig['repair_parts']; ?></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b> Remarks (If Any) : </b><?php echo  $user1_loop_in_dig['remark_if']; ?></div>
                                <div class="col-6"><b> QC Engg: </b><?php echo  $user1_loop_in_dig['quality_engineer']; ?></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b> With/Without Email Last Input : </b><?php echo  $user1_loop_in_dig['with_email']; ?></div>
                            </div>
                            
                             <div class="row">
                                <div class="col-6"><b> Display Pannel Front View: </b><br><img src="<?php if (strlen(base_url('assets/uploads_img/laptop_img/' . $user1_loop_in_dig['front_view'])) > 65) {
                                                                                                echo base_url('assets/uploads_img/laptop_img/' . $user1_loop_in_dig['front_view']);
                                                                                            } else {
                                                                                                echo base_url('assets/img/No_Image_Available.jpg');
                                                                                            } ?>" height="100px" width="100px" /></div>
                                <div class="col-6"><b> Display Pannel Back view: </b><br><img src="<?php if (strlen(base_url('assets/uploads_img/laptop_img/' . $user1_loop_in_dig['back_screen_view'])) > 65) {
                                                                                                    echo base_url('assets/uploads_img/laptop_img/' . $user1_loop_in_dig['back_screen_view']);
                                                                                                } else {
                                                                                                    echo base_url('assets/img/No_Image_Available.jpg');
                                                                                                } ?>" height="100px" width="100px" /></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Keyboard View: </b><br><img src="<?php if (strlen(base_url('assets/uploads_img/laptop_img/' . $user1_loop_in_dig['keyboard_view'])) > 65) {
                                                                                                echo base_url('assets/uploads_img/laptop_img/' . $user1_loop_in_dig['keyboard_view']);
                                                                                            } else {
                                                                                                echo base_url('assets/img/No_Image_Available.jpg');
                                                                                            } ?>" height="100px" width="100px" /></div>

                                <div class="col-6"><b>Bottom Base View: </b><br><img src="<?php if (strlen(base_url('assets/uploads_img/laptop_img/' . $user1_loop_in_dig['base_view'])) > 65) {
                                                                                                        echo base_url('assets/uploads_img/laptop_img/' . $user1_loop_in_dig['base_view']);
                                                                                                    } else {
                                                                                                        echo base_url('assets/img/No_Image_Available.jpg');
                                                                                                    } ?>" height="100px" width="100px" /></div>
                            </div>
                             <div class="row">
                                <div class="col-6"><b>Trackpad View: </b><br><img src="<?php if (strlen(base_url('assets/uploads_img/laptop_img/' . $user1_loop_in_dig['track_pad_view'])) > 65) {
                                                                                                echo base_url('assets/uploads_img/laptop_img/' . $user1_loop_in_dig['track_pad_view']);
                                                                                            } else {
                                                                                                echo base_url('assets/img/No_Image_Available.jpg');
                                                                                            } ?>" height="100px" width="100px" /></div>
                                <div class="col-6"><b>Internal Part View: </b><br><img src="<?php if (strlen(base_url('assets/uploads_img/laptop_img/' . $user1_loop_in_dig['int_part_img'])) > 65) {
                                                                                                    echo base_url('assets/uploads_img/laptop_img/' . $user1_loop_in_dig['int_part_img']);
                                                                                                } else {
                                                                                                    echo base_url('assets/img/No_Image_Available.jpg');
                                                                                                } ?>" height="100px" width="100px" /></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Other View (Scratch & Dents): </b><br><img src="<?php if (strlen(base_url('assets/uploads_img/laptop_img/' . $user1_loop_in_dig['file_input'])) > 65) {
                                                                                                echo base_url('assets/uploads_img/laptop_img/' . $user1_loop_in_dig['file_input']);
                                                                                            } else {
                                                                                                echo base_url('assets/img/No_Image_Available.jpg');
                                                                                            } ?>" height="100px" width="100px" /></div>

                                <div class="col-6"><b>Part Along With: </b><?php echo  $user1_loop_in_dig['part_picked_detail']; ?><br><img src="<?php if (strlen(base_url('assets/uploads_img/laptop_img/' . $user1_loop_in_dig['part_along'])) > 65) {
                                                                                                        echo base_url('assets/uploads_img/laptop_img/' . $user1_loop_in_dig['part_along']);
                                                                                                    } else {
                                                                                                        echo base_url('assets/img/No_Image_Available.jpg');
                                                                                                    } ?>" height="100px" width="100px" /></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Inner Screws: </b><br><img src="<?php if (strlen(base_url('assets/uploads_img/laptop_img/' . $user1_loop_in_dig['inner_screw_img'])) > 65) {
                                                                                                echo base_url('assets/uploads_img/laptop_img/' . $user1_loop_in_dig['inner_screw_img']);
                                                                                            } else {
                                                                                                echo base_url('assets/img/No_Image_Available.jpg');
                                                                                            } ?>" height="100px" width="100px" /></div>
                                <div class="col-6"><b>Internal Parts Condition: </b><br><img src="<?php if (strlen(base_url('assets/uploads_img/laptop_img/' . $user1_loop_in_dig['internal_part_img'])) > 65) {
                                                                                                    echo base_url('assets/uploads_img/laptop_img/' . $user1_loop_in_dig['internal_part_img']);
                                                                                                } else {
                                                                                                    echo base_url('assets/img/No_Image_Available.jpg');
                                                                                                } ?>" height="100px" width="100px" /></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Problem Diagnosed by Engg: </b><br><img src="<?php if (strlen(base_url('assets/uploads_img/laptop_img/' . $user1_loop_in_dig['outer_screw_img'])) > 65) {
                                                                                                echo base_url('assets/uploads_img/laptop_img/' . $user1_loop_in_dig['outer_screw_img']);
                                                                                            } else {
                                                                                                echo base_url('assets/img/No_Image_Available.jpg');
                                                                                            } ?>" height="100px" width="100px" /></div>

                                <div class="col-6"><b>Problem Diagnosed by Engg: </b><br><img src="<?php if (strlen(base_url('assets/uploads_img/laptop_img/' . $user1_loop_in_dig['problem_diagnos_by_eng_img'])) > 65) {
                                                                                                        echo base_url('assets/uploads_img/laptop_img/' . $user1_loop_in_dig['problem_diagnos_by_eng_img']);
                                                                                                    } else {
                                                                                                        echo base_url('assets/img/No_Image_Available.jpg');
                                                                                                    } ?>" height="100px" width="100px" /></div>
                            </div>
                              <div class="row">
                                <div class="col-6"><b>QC Sticker Detail: </b><?php echo  $user1_loop_in_dig['oc_sticker_detail']; ?><br><img src="<?php if (strlen(base_url('assets/uploads_img/laptop_img/' . $user1_loop_in_dig['oc_sticker_detail_img'])) > 65) {
                                                                                                        echo base_url('assets/uploads_img/laptop_img/' . $user1_loop_in_dig['oc_sticker_detail_img']);
                                                                                                    } else {
                                                                                                        echo base_url('assets/img/No_Image_Available.jpg');
                                                                                                    } ?>" height="100px" width="100px" /></div>
                            </div>
                            <hr>
                        </table>
                    </div>
                <?php }
            } else { ?>
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

                            
            <?php } ?>
            
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
