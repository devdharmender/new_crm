<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Customer Data Edit</title>
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
                    <h1 class="h2">From Id<td><b>: LM </b><?php echo  $submit_form_data['ticket_no']; ?></td>
                    </h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <a class="btn btn-primary" href="<?= base_url('form_sub_off/create'); ?>">Add New</a>
                        </div>

                    </div>
                </div>
                <!-- <h2>Section title</h2> -->
                <div class="table-responsive">

                    <div class="container">
                        <div class="d-flex justify-content-between mt-4">

                            <?php if($this->session->flashdata('success') != ''){ ?>
                            <div class="alert alert-success fade show" role="alert">
                                <strong>Success!</strong> <?= $this->session->flashdata('success'); ?>
                            </div>
                            <?php } ?>
                            <?php if($this->session->flashdata('email_sent') != ''){ ?>
                            <div class="alert alert-success fade show" role="alert">
                                <strong>Success!</strong> <?= $this->session->flashdata('email_sent'); ?>
                            </div>
                            <?php } ?>
                            <?php if($this->session->flashdata('error') != ''){ ?>
                            <div class="alert alert-danger fade show" role="alert">
                                <strong>Error!</strong> <?= $this->session->flashdata('error'); ?>
                            </div>
                            <?php } ?>

                            <div class="row mt-3">
                                <div class="col-3  mb-3"><b>Name : </b><?php echo  $submit_form_data['name']; ?></div>
                                <div class="col-4 mb-3"><b>Email : </b><?php echo  $submit_form_data['email']; ?></div>
                                <div class="col-3 mb-3"><b>Contact : </b><?php echo  $submit_form_data['contact']; ?>
                                </div>
                                <div class="col-2  mb-3"><a class="btn btn-success"
                                        href="<?= base_url().'form_sub_off/form_edit_user/'.$submit_form_data['ticket_no']; ?>">Edit</a>
                                </div>
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