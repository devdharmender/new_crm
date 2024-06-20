<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Dashboard Template · Bootstrap v5.0</title>
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
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Aproved Form Detail</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <!-- anything we want to put in right side from of sadhbord -->
                        </div>

                    </div>
                </div>
                <!-- <h2>Section title</h2> -->
                <div class="table-responsive">
                    <div class="container">
                        <div class="row my-5">
                            
                            <?php
                              if(!empty($aproved_form_detail)){foreach($aproved_form_detail as $aproved_form_det){  ?>

                            <div>
                                <table class="table" style="overflow-x: scroll;width: 100% !important;padding:20px;">
                                    <div class="row">
                                        <div class="col-6"><b> Ticket No:
                                            </b><?php echo  $aproved_form_det['ticket_no']; ?></div>
                                        <div class="col-6"><b> Name : </b><?php echo  $aproved_form_det['name']; ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6"><b> Email : </b><?php echo  $aproved_form_det['email']; ?>
                                        </div>
                                        <div class="col-6"><b> Quatation Update Date:
                                            </b><?php echo  $aproved_form_det['date']; ?></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6"><b> Model No :
                                            </b><?php echo  $aproved_form_det['model_no']; ?></div>
                                        <div class="col-6"><b> Serial No:
                                            </b><?php echo  $aproved_form_det['serial_no']; ?></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6"><b> Estimate Cost :
                                            </b><?php echo  $aproved_form_det['estimate_cost']; ?></div>
                                        <div class="col-6"><b> Quatation Status:
                                            </b><?php if( $aproved_form_det['quatation_status'] === "1"){ echo "<strong style='color:blue'>Approved</strong>"; }else{echo "<strong style='color:red'>Not Approved</strong>";}; ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6"><b>Turnaround Time For Repaire :
                                            </b><?php echo  $aproved_form_det['tta_time']; ?></div>
                                        <div class="col-6"><b> With/Without Email Last Input :
                                            </b><?php echo  $aproved_form_det['with_email']; ?></div>
                                    </div>
                                    <hr>
                                </table>
                            </div>
                            <?php }} else { ?>
                            <tr>
                                <td>No record</td>
                            </tr>
                            <?php } ?>
                            <div class="row"> <a class="btn btn-primary mt-3"  href="<?= base_url('user-data'); ?>">Back</a></div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <hr>
    <div class="credit">Illustration by <a href="https://wddevelopers.github.io/" target="_blank">Dharmender</a>.</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
</script>

</html>
























<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Customer detail</title>
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




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>