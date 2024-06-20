<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>All Job Sheet Data</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- bootstrap icon link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- all links for data table -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />
    <!--jQuery library file -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <!--Datatable plugin JS library file -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

    <!-- Favicons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Custom styles for this template -->
    <link href="<?=base_url('assets/admin_css/main.css')?>" rel="stylesheet">
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
</head>

<body>
    <?php $this->load->view('admin/common/header')?>


    <div class="container-fluid">
        <div class="row">
            <?php $this->load->view('admin/common/sidebar')?>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Job Sheet User Data</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <!-- anything we want to put in right side from of sadhbord -->
                        </div>

                    </div>
                </div>
                <!-- <h2>Section title</h2> -->
                <div class="table-responsive">
                    
                    <div class="main_div p-4">

                        <div class="row" style="overflow:scroll;">
                            <table class="table table-responsive" id="doorser">
                                <thead>
                                    <tr>
                                        <th scope="col">Ser.&nbsp;no</th>
                                        <th scope="col">Ticket&nbsp;no</th>
                                        <th scope="col">Customer</th>
                                        <th scope="col">Contact&nbsp;No</th>
                                        <th scope="col">Location</th>
                                        <th scope="col">Date&nbsp;Time</th>
                                        <th scope="col">Exclutive&nbsp;Name</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                        $abc = 1;
                        foreach ($users as $user) { 
                               $id =  base64_encode($user->id);
                            ?>

                                    <tr>
                                        <th scope='row'><?=$abc?></th>
                                        <th>LM <?=$user->Tracking_id?></th>
                                        <td><a href="<?=base_url('form_sub_off/load_door_form_proof/').$user->id?>"
                                                class='name_style'><?= $user->name ?></a></td>
                                        <td><?= $user->contact?></td>
                                        <td><?= $user->address ?></td>
                                        <td><?=$user->date?></td>

                                        <td><?=$user->exclutive_name?></td>
                                        <td>
                                            <?php if($user->status == 1){?>
                                            <a href="<?=base_url('form_sub_off/load_door_form_proof/').$user->id?>"
                                                class="btn btn-success"><i class="bi bi-eye-fill"></i></a>
                                            <?php }else{?>
                                            <a href="<?=base_url('form_sub_off/otp/').$user->id?>"
                                                class="btn btn-danger"><i class="bi bi-patch-check-fill"></i></a>
                                            <?php } ?>

                                        </td>

                                    </tr>

                                    <?php $abc++; }  ?>

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>
            </main>
        </div>
    </div>
    <hr>
    <div class="credit">Illustration by <a href="https://wddevelopers.github.io/" target="_blank">Dharmender</a>.</div>
</body>

<script>
$(document).ready(function() {
    $('#doorser').DataTable();
});
</script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
</script>

</html>