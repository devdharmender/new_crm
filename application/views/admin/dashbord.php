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


    <style>

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
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <!-- anything we want to put in right side from of sadhbord -->
                        </div>

                    </div>
                </div>
                <!-- <h2>Section title</h2> -->
                <div class="table-responsive">
                    <div class="container-fluid py-1">
                        <div class="row">
                            <div class="col-xl-3 col-sm-6 mb-xl-0 py-2">
                                <div class="card">
                                    <div class="card-header p-3 pt-2">
                                        <div class="icon position-absolute">
                                            <i class="bi bi-bus-front"> Dilivery</i>
                                        </div>
                                        <div class="text-end pt-1">
                                            <p class="text-sm mb-0 text-capitalize">Total Money</p>
                                            <h4 class="mb-0">$53k</h4>
                                        </div>
                                    </div>
                                    <hr class="dark horizontal my-0">
                                    <div class="card-footer p-3">
                                        <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55%
                                            </span>than lask week</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 mb-xl-0 py-2">
                                <div class="card">
                                    <div class="card-header p-3 pt-2">
                                        <div
                                            class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                                            <i class="bi bi-person-walking">Job Sheet</i>
                                        </div>
                                        <div class="text-end pt-1">
                                            <p class="text-sm mb-0 text-capitalize">Total Users</p>
                                            <h4 class="mb-0">2,300</h4>
                                        </div>
                                    </div>
                                    <hr class="dark horizontal my-0">
                                    <div class="card-footer p-3">
                                        <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3%
                                            </span>than lask month</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 mb-xl-0 py-2">
                                <div class="card">
                                    <div class="card-header p-3 pt-2">
                                        <div
                                            class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                                            <i class="material-icons opacity-10">Diagnos</i>
                                        </div>
                                        <div class="text-end pt-1">
                                            <p class="text-sm mb-0 text-capitalize">Total Clients</p>
                                            <h4 class="mb-0">3,462</h4>
                                        </div>
                                    </div>
                                    <hr class="dark horizontal my-0">
                                    <div class="card-footer p-3">
                                        <p class="mb-0"><span class="text-danger text-sm font-weight-bolder">-2%</span>
                                            than yesterday</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 mb-xl-0 py-2">
                                <div class="card">
                                    <div class="card-header p-3 pt-2">
                                        <div
                                            class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                                            <i class="material-icons opacity-10">In Diagnos</i>
                                        </div>
                                        <div class="text-end pt-1">
                                            <p class="text-sm mb-0 text-capitalize">Total Sales</p>
                                            <h4 class="mb-0">$103,430</h4>
                                        </div>
                                    </div>
                                    <hr class="dark horizontal my-0">
                                    <div class="card-footer p-3">
                                        <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+5%
                                            </span>than yesterday</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 mb-xl-0 py-2">
                                <div class="card">
                                    <div class="card-header p-3 pt-2">
                                        <div class="icon position-absolute">
                                            <i class="bi bi-bus-front"> Diagnos Status</i>
                                        </div>
                                        <div class="text-end pt-1">
                                            <p class="text-sm mb-0 text-capitalize">Total Money</p>
                                            <h4 class="mb-0">$53k</h4>
                                        </div>
                                    </div>
                                    <hr class="dark horizontal my-0">
                                    <div class="card-footer p-3">
                                        <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55%
                                            </span>than lask week</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 mb-xl-0 py-2">
                                <div class="card">
                                    <div class="card-header p-3 pt-2">
                                        <div
                                            class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                                            <i class="bi bi-person-walking">Quatation Form</i>
                                        </div>
                                        <div class="text-end pt-1">
                                            <p class="text-sm mb-0 text-capitalize">Total Users</p>
                                            <h4 class="mb-0">2,300</h4>
                                        </div>
                                    </div>
                                    <hr class="dark horizontal my-0">
                                    <div class="card-footer p-3">
                                        <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3%
                                            </span>than lask month</p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>


</body>

</html>