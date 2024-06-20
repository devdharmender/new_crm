<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>diagnos Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background-color: #e9ecef;">
   <div style="    justify-content: center;
    align-items: center;
    margin-top: 5%;">
<div class="row justify-content-center">
    <div class="col-6" style="background: rgba(255, 255, 255, 0.2);
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(5px);
-webkit-backdrop-filter: blur(5px);
border: 1px solid rgba(255, 255, 255, 0.3);padding: 20px;">
         <div class="img">
                                <img src="<?= base_url(); ?>assets/img/lappy-maker-logo.svg" alt="img-error">
        </div>
        <h1><?php echo $title ?></h1>
        <?php if($this->session->flashdata('message')) { ?>
            <div class="alert alert-danger">
                <?php echo $this->session->flashdata('message')?>
            </div>
        <?php } ?>
       
        <?php echo form_open('users/login', array('id' => 'loginForm')) ?>
            <div class="form-group">
                <input type="text" name="email" id="email" class="form-control" placeholder="Email" />
                <?php echo form_error('email', '<div class="error">', '</div>') ?>
            </div>
            <div class="form-group mt-3">
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" />
                <?php echo form_error('password', '<div class="error">', '</div>') ?>
            </div>
            <div class="form-group mt-3">
                <input type="submit" name="submit" value="Login" class="btn btn-primary"/>
            </div>
        <?php echo form_close(); ?>
        
    </div>
</div>
</div>


</body>

</html>
