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

    .col-6 {
        padding: 10px;
    }

    .logo_img {
        width: 200px;
    }

    @media screen and (max-width: 992px) {
        .col-6 {
            padding: 10px;
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
                    <h1 class="h2"> LM <?php echo  $user1['ticket_no']; ?></h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <a class="btn btn-primary m-3 " href="<?= base_url('form_sub_off/create'); ?>">Add New Form
                                <b>+</b></a>
                        </div>

                    </div>
                </div>
                <!-- <h2>Section title</h2> -->
                <div class="table-responsive">
                    <div class="container">

                        <div class="row" style="overflow-x: scroll;width: 100% !important;padding:20px;">
                            <table class="table" style="overflow-x: scroll;width: 100% !important;padding:20px;">
                                <div class="row">
                                    <P>Lappy Maker® <B>do not guarantee data preservation</B>, advise users to backup
                                        independently, offer no data backup services, and any <B>older repair parts
                                            remain our property unless specified for retention on the same day</B> of
                                        service.</P>
                                        <hr>
                                    <div class="col-6"><b>Name : </b><?php echo  $user1['name']; ?></div>
                                    <div class="col-6"><b> City : </b><?php echo  $user1['select_city']; ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-6"><b> Date : </b><?php echo  $user1['date']; ?></div>
                                    <div class="col-6"><b> Address : </b><?php echo  $user1['address']; ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-6"><b> Contact No : </b><?php echo  $user1['contact']; ?></div>
                                    <div class="col-6"><b> Email : </b><?php echo  $user1['email']; ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-6"><b> Model No : </b><?php echo  $user1['model_no']; ?> </div>
                                    <div class="col-6"><b> Serial No : </b><?php echo  $user1['serial_no']; ?></div>
                                </div>


                                <div class="row">
                                    <div class="col-6"><b> Estimate Given : </b><?php echo  $user1['estimate_given']; ?>
                                    </div>
                                    <div class="col-6"><b> Laptop Password : </b><?php echo  $user1['lappy_pass']; ?>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6"><b> Reported Problem By Executive:
                                        </b><?php echo  $user1['reported_problems']; ?></div>
                                    <div class="col-6"><b> Reported Problem By Customer :
                                        </b><?php echo  $user1['reported_problems_cust']; ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-6"><b> Executive Signature :
                                        </b><?php echo  $user1['executive_name']; ?></div>
                                    <div class="col-6"><b> Submited By: </b><?php echo  $user1['submited_by']; ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-6"><b> Physical Condition :
                                        </b><?php echo  $user1['physical_condition']; ?></div>
                                    <div class="col-6"><b> Part Problem Detect :
                                        </b><?php echo  $user1['check_list_detail']; ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-6"><b>Accessories Picked From Customer :
                                        </b><?php echo  $user1['part_picked']; ?></div>
                                    <div class="col-6"><b>Machine Parts : <?php echo  $user1['internal_part']; ?></b>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6"><b>Parts Pickup Along With laptop :
                                        </b><?php echo  $user1['part_picked_detail']; ?><br><img
                                            src="<?php if (strlen(base_url('assets/uploads_img/laptop_img/' . $user1['part_along'])) > 66) {
                                                                                                                                                echo base_url('assets/uploads_img/laptop_img/' . $user1['part_along']);
                                                                                                                                            } else {
                                                                                                                                                echo base_url('assets/img/No_Image_Available.jpg');
                                                                                                                                            } ?>" height="100px"
                                            width="100px" /></div>
                                    <div class="col-6"><b> Front Screen View : </b><br><img src="<?php if (strlen(base_url('assets/uploads_img/laptop_img/' . $user1['front_img'])) > 66) {
                                                                                        echo base_url('assets/uploads_img/laptop_img/' . $user1['front_img']);
                                                                                    } else {
                                                                                        echo base_url('assets/img/No_Image_Available.jpg');
                                                                                    } ?>" height="100px"
                                            width="100px" /></div>
                                </div>
                                <div class="row">
                                    <div class="col-6"><b> Back Screen View : </b><br><img src="<?php if (strlen(base_url('assets/uploads_img/laptop_img/' . $user1['back_img'])) > 66) {
                                                                                    echo base_url('assets/uploads_img/laptop_img/' . $user1['back_img']);
                                                                                } else {
                                                                                    echo base_url('assets/img/No_Image_Available.jpg');
                                                                                } ?>" height="100px" width="100px" />
                                    </div>
                                    <div class="col-6"><b> keyboard view : </b><br><img src="<?php if (strlen(base_url('assets/uploads_img/laptop_img/' . $user1['keyboard_img'])) > 66) {
                                                                                    echo base_url('assets/uploads_img/laptop_img/' . $user1['keyboard_img']);
                                                                                } else {
                                                                                    echo base_url('assets/img/No_Image_Available.jpg');
                                                                                } ?>" height="100px" width="100px" />
                                    </div>

                                </div>


                                <div class="row">
                                    <div class="col-6"><b> Track Pad Problem : </b><br><img src="<?php if (strlen(base_url('assets/uploads_img/laptop_img/' . $user1['trackpad_img'])) > 66) {
                                                                                        echo base_url('assets/uploads_img/laptop_img/' . $user1['trackpad_img']);
                                                                                    } else {
                                                                                        echo base_url('assets/img/No_Image_Available.jpg');
                                                                                    } ?>" height="100px"
                                            width="100px" /> </div>
                                    <div class="col-6"><b> Base view : </b><br><img src="<?php if (strlen(base_url('assets/uploads_img/laptop_img/' . $user1['base_img'])) > 66) {
                                                                                echo base_url('assets/uploads_img/laptop_img/' . $user1['base_img']);
                                                                            } else {
                                                                                echo base_url('assets/img/No_Image_Available.jpg');
                                                                            } ?>" height="100px" width="100px" /></div>


                                </div>
                                <div class="row">
                                    <div class="col-6"><b> Internal Part : </b><br><img src="<?php if (strlen(base_url('assets/uploads_img/laptop_img/' . $user1['int_part_img'])) > 66) {
                                                                                    echo base_url('assets/uploads_img/laptop_img/' . $user1['int_part_img']);
                                                                                } else {
                                                                                    echo base_url('assets/img/No_Image_Available.jpg');
                                                                                } ?>" height="100px" width="100px" />
                                    </div>
                                    <div class="col-6"><b> Other view : </b><br><img src="<?php if (strlen(base_url('assets/uploads_img/laptop_img/' . $user1['lappy_img'])) > 66) {
                                                                                echo base_url('assets/uploads_img/laptop_img/' . $user1['lappy_img']);
                                                                            } else {
                                                                                echo base_url('assets/img/No_Image_Available.jpg');
                                                                            } ?>" height="100px" width="100px" /></div>
                                </div>
                                <div class="row">
                                    <div class="col-6"><b> Signature : </b><img
                                            src="<?php echo base_url('assets/uploads_img/customer_sign/' . $user1['customer_sign']); ?>"
                                            height="100px" width="100px" /></div>
                                    <div class="col-6"><b> Executive : </b><img
                                            src="<?php echo base_url('assets/uploads_img/executive_sign/' . $user1['exicutive_sign']); ?>"
                                            height="100px" width="100px" /> </div>
                                </div>



                            </table>
                        </div>
                        <div class="credit">Illustration by <a href="https://wddevelopers.github.io/"
                                    target="_blank">Dharmender</a>.</div>


                </div>
            </main>
        </div>
    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
</script>

</html>