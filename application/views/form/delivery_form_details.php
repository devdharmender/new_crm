<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Customer detail</title>
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
                    <h1 class="h2">LM <?php echo  $user1->ticket_no; ?></h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <!-- anything we want to put in right side from of sadhbord -->
                        </div>

                    </div>
                </div>
                <!-- <h2>Section title</h2> -->
                <div class="table-responsive">
                    <div class="container">
                        
                        <div class="row" style="overflow-x: scroll;width: 100% !important;padding:20px;">
                            <table class="table" style="overflow-x: scroll;width: 100% !important;padding:20px;">
                                <div class="row">
                                    <div class="col-6"><b>Excutive Name : </b><?php echo  $user1->drop_excutive_name; ?>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-6"><b>Proof Of Delivery Image : </b><br><img
                                            src="<?php if (strlen(base_url('assets/uploads_img/laptop_img/' . $user1->proof_of_delivery_image)) > 66) {
                                                                                                                                                echo base_url('assets/uploads_img/laptop_img/' . $user1->proof_of_delivery_image);
                                                                                                                                            } else {
                                                                                                                                                echo base_url('assets/img/No_Image_Available.jpg');
                                                                                                                                            } ?>" height="100px"
                                            width="100px" /></div>
                                    <div class="col-6"><b> Warranty Sticker Image : </b><br><img src="<?php if (strlen(base_url('assets/uploads_img/laptop_img/' . $user1->warrant_sticker_image)) > 66) {
                                                                                        echo base_url('assets/uploads_img/laptop_img/' . $user1->warrant_sticker_image);
                                                                                    } else {
                                                                                        echo base_url('assets/img/No_Image_Available.jpg');
                                                                                    } ?>" height="100px"
                                            width="100px" /></div>
                                </div>
                                <div class="row">
                                    <div class="col-6"><b> Other Image : </b><br><img src="<?php if (strlen(base_url('assets/uploads_img/laptop_img/' . $user1->other_image)) > 66) {
                                                                                    echo base_url('assets/uploads_img/laptop_img/' . $user1->other_image);
                                                                                } else {
                                                                                    echo base_url('assets/img/No_Image_Available.jpg');
                                                                                } ?>" height="100px" width="100px" />
                                    </div>

                                </div>




                                <div class="row">
                                    <div class="col-6"><b> Signature : </b><img
                                            src="<?php echo base_url('assets/uploads_img/customer_sign/' . $user1->customer_signature_image); ?>"
                                            height="100px" width="100px" /></div>
                                    <div class="col-6"><b> Executive : </b><img
                                            src="<?php echo base_url('assets/uploads_img/executive_sign/' . $user1->signature_excutive_image); ?>"
                                            height="100px" width="100px" /> </div>
                                </div>



                            </table>
                        </div>

                    </div>
                </div>
            </main>
        </div>
    </div>

    <div class="credit">Illustration by <a href="https://wddevelopers.github.io/"
                                    target="_blank">Dharmender</a>.</div>
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


</head>

<body>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>