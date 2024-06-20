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
    <!-- data table with jquery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js">
    </script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js">
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
                    <h1 class="h2">All User</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <!-- anything we want to put in right side from of sadhbord -->
                        </div>

                    </div>
                </div>
                <!-- <h2>Section title</h2> -->
                <div class="table-responsive">

                    <table class="table table-striped table-sm" id="mytable">
                        <thead>
                            <tr>
                                <th scope="col">S. No.</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Password</th>
                                <th scope="col">User Type</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
            $n = 1;
                foreach($user as $a){
                    $pass = base64_encode($a->password);
                    ?>

                            <tr>
                                <td><?=$n?></td>
                                <td><?=$a->name?></td>
                                <td><?=$a->email?></td>
                                <td><?=$pass?></td>
                                <td><?=$a->admin_type?></td>
                                <td>
                                    <a class="btn btn-success edit" id="<?=$a->id?>" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"><i class="bi bi-pencil-fill"></i></a>
                                    <a class="btn btn-danger del" id="<?=$a->id?>"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>

                            <?php $n++; }
            ?>



                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit user data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container" id="msg"></div>
                    <form id="data_edit">
                        <input type="hidden" name="id" id="iidd">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Edit user name">
                        </div>
                        <div class="text-danger" id="nameerror"></div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email"
                                placeholder="Edit user email">
                        </div>
                        <div class="text-danger" id="emailerror"></div>
                        <div class="mb-3">
                            <label for="pass" class="form-label">Password</label>
                            <input type="password" class="form-control" id="pass" name="pass"
                                placeholder="Enter new password">
                        </div>
                        <div class="text-danger" id="passerror"></div>
                        <div class="mb-3">
                        <label for="Select" class="form-label">Select User</label>
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="u_type" id="u_type">
                        <option value="" id="un"></option>
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                        </select>
                        </div>
                        <div class="text-danger" id="usererror"></div>
                        <button type="submit" class="btn btn-primary">Update Data</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="credit">Illustration by <a href="https://wddevelopers.github.io/" target="_blank">Dharmender</a>.</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    $(document).ready(function() {
        $('#mytable').DataTable({
            "pageLength": 25,
            "aLengthMenu": [[25, 50, 75, -1], [25, 50, 75, "All"]]
        });
        // get details for user 
        $('.edit').on('click',function(){
            var id = $(this).attr('id');
            $.ajax({
                url : "<?=base_url('users/get_user_data')?>",
                type : "post",
                data:{'id':id},
                dataType:"json",
                success:function(data){
                    $('#name').val(data.name);
                    $('#email').val(data.email);
                    $('#pass').val(data.pass);
                    $('#iidd').val(data.id);
                    $('#un').val(data.usertype);
                    $('#un').html(data.usertype);
                }
            });
        })
        // update code
        $('#data_edit').on('submit',function(e){
            e.preventDefault();
            var ab = $(this).serialize();
            $.ajax({
                url:"<?=base_url('users/update_user')?>",
                type:'post',
                data:$(this).serialize(),
                dataType:'json',
                success:function(data){
                    
                    if(data.result == 'error'){
                        $('#nameerror').html(data.name);
                        $('#emailerror').html(data.email);
                        $('#passerror').html(data.password);
                        $('#usererror').html(data.usertype);
                        $('#msg').html(data.message);
                    }else{
                        // alert("har har sambhu");
                        $('#msg').html(data.message);
                        $('#data_edit').trigger("reset");
                        setTimeout(function(){
                            window.location.reload();
                        },2000);
                    }
                }
            });
        });
        // delete code
        $(".del").on("click",function(){
            var id = $(this).attr('id');
            Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
            }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                url : "<?=base_url('users/delete_user')?>",
                type : "post",
                data:{'id':id},
                dataType:"json",
                success:function(data){
                Swal.fire({
                title: "User Deleted!",
                text: data.message,
                icon: "success"
                });
                }
            });

                
            }
            });
        });
    });
    </script>
</body>

</html>