<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Customer Data </title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Favicons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
    body {
        overflow-x: hidden;
        background-color: #e9ecef;
    }

    td th {
        border: 1px solid;
    }

    .name_style {
        text-decoration: none;
        font-size: 18px;
        line-height: 1px;
    }

    .name_style:hover {
        text-decoration: none;
        font-size: 18px;
        line-height: 1px;
        color: #1d375e;
    }

    .logo_img {
        width: 200px;
    }

    .main_div {
        width: 98% !important;
        padding: 0px 20px;
        margin: 20px 1%;

        background-color: #ffffff;
    }

    .created_by p {
        font-size: 14px;
        background-color: black;
        color: aliceblue;
        padding: 10px auto 0px 20px;
    }

    @media screen and (max-width: 1040px) {
        .main_div {
            height: 100vh;
            overflow-x: scroll;
            width: 98% !important;
            padding: 0px 20px;
            margin: 20px 1%;
            background-color: #ffffff;
        }



        .created_by p {
            font-size: 10px;
            background-color: black;
            color: aliceblue;
            padding: 10px auto 0px 20px;
        }
    }
    </style>
    <!-- Custom styles for this template -->
    <link href="<?=base_url('assets/admin_css/main.css')?>" rel="stylesheet">
</head>

<body>
    <?php $this->load->view('admin/common/header')?>


    <div class="container-fluid">
        <div class="row">
            <?php $this->load->view('admin/common/sidebar')?>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">All User-Data</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <div>
                                <div class="row justify-content-between">
                                    <div class="col-md-3 col-sm-12">

                                    </div>
                                    <div class="col-md-9  col-sm-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" name="search_text" id="search_text"
                                                    placeholder="LM ID , Email , Contact , Serial No , Location"
                                                    class="form-control" style="margin-right:10px;" />
                                                <select name="search_text_status" id="search_text_status"
                                                    class="form-control">
                                                    <option value="">Search Last 100 Status</option>
                                                    <option value="Laptop Pickup">Laptop Pickedup</option>
                                                    <option value="Submitted in office Under Diagnose">Submitted in
                                                        office Under Diagnose</option>
                                                    <option value="Quotation Send Waiting for Approval">Quotation Send
                                                        Waiting for Approval</option>
                                                    <option value="Approved Under Repair">Approved Under Repair</option>
                                                    <option value="Repaired Under QC Test">Repaired Under QC Test
                                                    </option>
                                                    <option value="OC Testing Fail">OC Testing Fail</option>
                                                    <option value="Testing Pass Ready To Go">Testing Pass Ready To Go
                                                    </option>
                                                    <option value="Hold By Customer">Hold By Customer</option>
                                                    <option value="Delivered With Repair">Delivered With Repair</option>
                                                    <option value="Delivered Without Repair {Not Repairable}">Delivered
                                                        Without Repair {Not Repairable}</option>
                                                    <option value="Returned Without Repair {Not Approved For Repaired}">
                                                        Returned Without Repair {Not Approved For Repaired}</option>
                                                </select>
                                                <!--<input type="date" name="search_date_now" id="search_date_now"  class="form-control" style="margin-left:10px;"/>-->
                                                <!--<p style="margin:auto 0px auto 10px;">to</p>-->
                                                <!--<input type="date" name="search_date_pre" id="search_date_pre"  class="form-control" style="margin-left:10px;"/>-->
                                            </div>
                                        </div>
                                        <br />

                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <!-- <h2>Section title</h2> -->
                <div class="table-responsive">
                    <!-- <nav class="navbar navbar-light bg-light">
                        <div class="container-fluid">
                            <a class="navbar-brand"> <img src="<?= base_url(); ?>assets/img/lappy-maker-logo.svg"
                                    class="logo_img" alt="img-error"></a>
                            <div class="d-flex">
                                <a class="btn btn-primary"
                                    href="<?= base_url('form_sub_off/check_door_step_services'); ?>">Check Door
                                    Services</a>
                                <a class="ms-3 btn btn-primary"
                                    href="<?= base_url('form_sub_off/create_door_step'); ?>">Door-Step-Services<b>+</b></a>
                                <a class="btn btn-primary ms-3"
                                    href="<?= base_url('delivery/search_ticket_no'); ?>">Delivery Form<b>+</b></a>
                                <a class="ms-3 btn btn-primary" href="<?= base_url('form_sub_off/create'); ?>">Add
                                    Form<b>+</b></a>
                                <a class="ms-3" href="<?= base_url() . 'Users/logout' ?>"><input
                                        class="btn btn-outline-danger" type="submit" value="Logout"></a>
                            </div>
                        </div>
                    </nav> -->
                    <?php if ($this->session->flashdata('error') != '') { ?>
                    <div class="alert alert-danger fade show" role="alert">
                        <strong>Error!</strong> <?= $this->session->flashdata('error'); ?>
                    </div>
                    <?php } ?>
                    <?php if ($this->session->flashdata('email_sent') != '') { ?>
                    <div class="alert alert-success fade show" role="alert">
                        <strong>Success!</strong> <?= $this->session->flashdata('email_sent'); ?>
                    </div>
                    <?php } ?>
                    <?php if ($this->session->flashdata('success') != '') { ?>
                    <div class="alert alert-success fade show" role="alert">
                        <strong>Success!</strong> <?= $this->session->flashdata('success'); ?>
                    </div>
                    <?php } ?>
                    <div class="main_div">
                        <br>
                        <!-- <div>
            <div class="row justify-content-between">
                <div class="col-md-4 col-sm-12">

                </div>
                <div class="col-md-6  col-sm-12">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" name="search_text" id="search_text" placeholder="LM ID , Email , Contact , Serial No , Location" class="form-control" style="margin-right:10px;" />
                            <select name="search_text_status" id="search_text_status" class="form-control">
                                <option value="">Search Last 100 Status</option>
                                 <option value="Laptop Pickup">Laptop Pickedup</option>
                                 <option value="Submitted in office Under Diagnose">Submitted in office Under Diagnose</option>
                                 <option value="Quotation Send Waiting for Approval">Quotation Send Waiting for Approval</option>
                                 <option value="Approved Under Repair">Approved Under Repair</option>
                                 <option value="Repaired Under QC Test">Repaired Under QC Test</option>
                                 <option value="OC Testing Fail">OC Testing Fail</option>
                                 <option value="Testing Pass Ready To Go">Testing Pass Ready To Go</option>
                                 <option value="Hold By Customer">Hold By Customer</option>
                                 <option value="Delivered With Repair">Delivered With Repair</option>
                                 <option value="Delivered Without Repair {Not Repairable}">Delivered Without Repair {Not Repairable}</option>
                                 <option value="Returned Without Repair {Not Approved For Repaired}">Returned Without Repair {Not Approved For Repaired}</option>
                            </select>
                            </div>
                    </div>
                    <br />

                </div>

            </div>
        </div> -->

                        <div class="row">
                            <div id="result"></div>
                            <div style="clear:both"></div>
                        </div>
                        <script>
                        $(document).ready(function() {

                            //  load_data();

                            function load_data(query) {
                                $.ajax({
                                    url: "<?php echo base_url(); ?>ajaxsearch/fetch",
                                    method: "POST",
                                    data: {
                                        query: query
                                    },
                                    success: function(data) {
                                        $('#result').html(data);
                                    }
                                })
                            }

                            $('#search_text').keyup(function() {
                                var search = $(this).val();

                                if (search != '') {
                                    load_data(search);
                                } else {
                                    $('#result').html("");
                                }
                            });
                        });
                        </script>

                        <div class="row">
                            <div id="result_status"></div>
                            <div style="clear:both"></div>
                        </div>

                        <script>
                        const select = document.getElementById('search_text_status');
                        const selectedValue = select.value;
                        console.log(selectedValue);
                        </script>
                        <script>
                        $(document).ready(function() {

                            //  load_data();

                            function load_data(query_status) {
                                $.ajax({
                                    url: "<?php echo base_url(); ?>ajaxsearch/fetch_status",
                                    method: "POST",
                                    data: {
                                        query_status: query_status
                                    },
                                    success: function(data) {
                                        $('#result_status').html(data);
                                    }
                                })
                            }

                            $('#search_text_status').change(function() {
                                var search = $(this).val();
                                if (search != '') {
                                    load_data(search);
                                } else {
                                    $('#result_status').html("");
                                }
                            });
                        });
                        </script>

                        <br>
                        <div class="row" style="overflow:scroll;">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Ticket&nbsp;no</th>

                                        <th scope="col">Customer</th>
                                        <?php if($this->session->userdata('admin_type')== 'admin') {?>
                                        <th scope="col">Contact&nbsp;No</th>
                                        <?php } ?>

                                        <th scope="col">Location</th>
                                        <th scope="col">Time&nbsp;Taken</th>
                                        <th scope="col">Pick&nbsp;Up&nbsp;Engg. </th>
                                        <th scope="col">Form&nbsp;Update</th>
                                        <th scope="col">Form&nbsp;Submission&nbsp;Detail</th>
                                        <th scope="col">Current&nbsp;Status</th>
                                        <th scope="col">Payment</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                    if (!empty($users)) {
                        foreach ($users as $user) {  ?>

                                    <tr>
                                        <th scope='row'>LM <?php echo $user['ticket_no'] ?></th>
                                        <td><a href="<?= base_url() . 'Dashboard/customer_detail/' . $user['ticket_no'] ?>"
                                                class='name_style'><?php echo $user['name'] ?></a></td>
                                        <?php if($this->session->userdata('admin_type')== 'admin') {?>
                                        <td><?php echo $user['contact'] ?></td>
                                        <?php } ?>
                                        <td><?php echo $user['select_city'] ?></td>
                                        <td>
                                            <?php
                                    date_default_timezone_set("Asia/kolkata");
                                    $today_date = date("Y-m-d");

                                    $submit_date = date_create($user['date']);
                                    $submit_date_by =  date_format($submit_date, "Y-m-d");
                                    $date1 = date_create($today_date);
                                    $date2 = date_create($submit_date_by);
                                    $diff = date_diff($date2, $date1);
                                    echo   $diff->format("%R%a days");
                                    ?>
                                        </td>

                                        <td><?php echo $user['executive_name'] ?></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-info dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false"
                                                    style="width:180px;text-align: start;">
                                                    <?php echo $user['submit_in_off'] ?>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="<?= base_url() . 'Dashboard/status_form_upload/' . $user['ticket_no'] ?>"
                                                            class="dropdown-item">Diagnosis Report</a></li>
                                                    <?php if( $_SESSION['first_name'] == 'shivani' ) { ?> <li><a
                                                            href="<?= base_url() . 'Dashboard/aproved/' . $user['ticket_no'] ?>"
                                                            class="dropdown-item">Quotation Aproved</a></li> <?php } ?>
                                                    <?php if( $user['submit_in_off'] == 'Diagnosis Report' || $user['submit_in_off'] == 'Quotation Aproved' || $user['submit_in_off'] == 'Quality Check') { ?>
                                                    <li><a href="<?= base_url() . 'Dashboard/in_diagnosis/' . $user['ticket_no'] ?>"
                                                            class="dropdown-item">Quality Check</a></li> <?php }else{ ?>
                                                    <li><a class="dropdown-item">Quality Check</a></li><?php }?>
                                                    <li><a href="<?= base_url() . 'delivery/admin_delivey_form/' . $user['ticket_no'] ?>"
                                                            class="dropdown-item">Delivery Form</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-primary dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    Form Submission Detail
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li> <a href="<?= base_url() . 'Dashboard/customer_detail_status/' . $user['ticket_no'] ?>"
                                                            class='dropdown-item '>Diagnosis diagnosis</a></li>
                                                    <?php if( $_SESSION['first_name'] == 'shivani') { ?> <li> <a
                                                            href="<?= base_url() . 'Dashboard/aproved_form_detail/' . $user['ticket_no'] ?>"
                                                            class='dropdown-item'>Quotation Approval</a></li> <?php } ?>
                                                    <li> <a href="<?= base_url() . 'Dashboard/in_diagnose_status/' . $user['ticket_no'] ?>"
                                                            class='dropdown-item'>Quality Check</a></li>
                                                    <li><a href="<?= base_url() . 'Dashboard/delivery_form_details/' . $user['ticket_no'] ?>"
                                                            class="dropdown-item">Delivery Form Details</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td><a href="<?= base_url() . 'Dashboard/user_edit/' . $user['ticket_no'] ?>"><?php if ($user['status'] === "Delivered Without Repair {Not Repairable}" || $user['status'] === "Returned Without Repair {Not Approved For Repaired}") {
                                                                                                                echo "<strong class='btn ' style='width: 240px;text-align: start;background-color:red;color:#fff'>" . $user['status'] . "</strong>";
                                                                                                            } elseif ($user['status'] === "Delivered With Repair") {
                                                                                                                echo "<strong class='btn' style='width: 240px;text-align: start;background-color:#14c3a2;color:#fff'>" . $user['status'] . "</strong>";
                                                                                                            } else {
                                                                                                                echo "<strong class='btn ' style='width: 240px;text-align: start;background-color:#69d2e7;color:#fff'>" . $user['status'] . "</strong>";
                                                                                                            }; ?></a>
                                        </td>

                                        <td><a href="<?= base_url() . 'Dashboard/paid_unpaid/' . $user['ticket_no'] ?>">
                                                <?php if ($user['paid_unpaid'] === "Unpaid") {
                                                                                                                echo "<strong class='btn ' style='width: 80px;text-align: start;background-color:red;color:#fff'>" . $user['paid_unpaid'] . "</strong>";
                                                                                                            } elseif ($user['paid_unpaid'] === "Paid") {
                                                                                                                echo "<strong class='btn' style='width: 80px;text-align: start;background-color:#14c3a2;color:#fff'>" . $user['paid_unpaid'] . "</strong>";
                                                                                                            } else {
                                                                                                                echo "<strong class='btn ' style='width: 80px;text-align: start;background-color:#69d2e7;color:#fff'>Pending</strong>";
                                                                                                            }; ?>
                                            </a></td>
                                    </tr>

                                    <?php }
                    } else { ?>
                                    <tr>
                                        <td>No record</td>
                                    </tr>
                                    <?php } ?>

                                </tbody>

                            </table>
                            <style>
                            .page-link a {
                                text-decoration: none;
                            }
                            </style>
                            <h3><?php echo $links; ?></h3>
                        </div>

                    </div>
                    <div class="credit">Illustration by <a href="https://wddevelopers.github.io/"
                            target="_blank">Dharmender</a>.</div>

                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

</body>

</html>