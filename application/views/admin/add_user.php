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
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap');
    form {
        width: 100%;
        height: auto;
        overflow: hidden;
        background: white;
        border-radius: 10px;
    }

    form label {
        font-size: 14px;
        color: darkgray;
        cursor: pointer;
    }

    form label,
    form input {
        float: left;
        clear: both;
    }

    form input {
        margin: 15px 0;
        padding: 15px 10px;
        width: 100%;
        outline: none;
        border: 1px solid #bbb;
        border-radius: 20px;
        display: inline-block;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        -webkit-transition: 0.2s ease all;
        -moz-transition: 0.2s ease all;
        -ms-transition: 0.2s ease all;
        -o-transition: 0.2s ease all;
        transition: 0.2s ease all;
    }

    form input[type=text]:focus,
    form input[type="password"]:focus {
        border-color: cornflowerblue;
    }

    .subm {
        padding: 15px 40px;
        margin:10px;
        text-decoration:none;
        width: auto;
        background: #1abc9c;
        border-radius: 10px;
        color: white;
        cursor: pointer;
        display: inline-block;
        -webkit-transition: 0.2s ease all;
        -moz-transition: 0.2s ease all;
        -ms-transition: 0.2s ease all;
        -o-transition: 0.2s ease all;
        transition: 0.2s ease all;
    }

    .subm:hover {
        opacity: 0.8;
    }

    .subm:active {
        opacity: 0.4;
    }

    #logo {
        margin: 0 auto;
        width: 100%;
        font-family: "Poetsen One", sans-serif;
        font-size: 50px;
        font-weight: bold;
        text-align: center;
        color: lightgray;
        -webkit-transition: 0.2s ease all;
        -moz-transition: 0.2s ease all;
        -ms-transition: 0.2s ease all;
        -o-transition: 0.2s ease all;
        transition: 0.2s ease all;
    }

    #logo:hover {
        color: #4174B9;
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
                    <h1 class="h2">Add User</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <!-- anything we want to put in right side from of sadhbord -->
                        </div>

                    </div>
                </div>
                <!-- <h2>Section title</h2> -->
                <div class="table-responsive">
                    <div class="container my-3" style="max-width:450px; border:2px groove #D0D3D4; border-radius:10px;">
                        <div class="msg mt-2"></div>
                        <form id="add_user">

                            <h3 id="logo">Add User</h3>

                            <label for="Name">Name : </label>
                            <input type="text" id="Name" name="Name" placeholder="Type in User's Name.."  autocomplete="off" />
                                <div class="text-danger name"></div>

                            <label for="Email">Email : </label>
                            <input type="text" id="Email" name="Email" placeholder="Type in User Email.." autocomplete="off" />
                                <div class="text-danger email"></div>
                            <label for="password">Password : </label>
                            <input type="password" id="password" name="password" placeholder="Enter User Password.."  autocomplete="off" /><div class="text-danger password"></div>
                                <!-- drop down -->
                                <label for="user">Select User : </label>
                                <div>
                                    <datalist id="suggestions">
                                        <option>user</option>
                                        <option>admin</option>
                                    </datalist>
                                    <input  autoComplete="on" name="usertype" list="suggestions" placeholder="Select user type"/> 
                                </div><div class="text-danger user"></div>
                                
                            <button type="submit"class="subm" id="add_user">Add User</button>
                            

                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <hr>
    <div class="credit">Illustration by <a href="https://wddevelopers.github.io/" target="_blank">Dharmender</a>.</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('#add_user').on('submit', function(e){
            e.preventDefault();
            $.ajax({
                url:"<?=base_url('users/insert_user')?>",
                type:'post',
                data:$(this).serialize(),
                dataType:'json',
                success:function(data){
                    if(data.result == 'error'){
                        $('.name').html(data.name);
                        $('.email').html(data.email);
                        $('.password').html(data.password);
                        $('.user').html(data.usertype);
                        $('.msg').html(data.message);
                    }else{
                        $('.msg').html(data.message);
                        $('#add_user').trigger("reset");
                    }
                }
            });
        });
    });

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>