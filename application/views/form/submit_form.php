<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Status update</title>
    <style>
    @media screen and (max-width: 992px) {
    .col-3 , .col-4 , .col-2 {
    flex: 0 0 auto;
    width: 100%;
       }
     }
      
    </style>
  </head>
  <body>
  <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
   <a class="navbar-brand"><img src="<?= base_url(); ?>assets/img/lappy-maker-logo.svg" height:"100px" width="100px" alt="img-error"></a>
  </div>
</nav>
 <div class="container">
    <div class="d-flex justify-content-between mt-4">
    <h1>From Id<td><b>: LM </b><?php echo  $submit_form_data['ticket_no']; ?></td></h1>
    <div class="">
  <a class="btn btn-primary" href="<?= base_url('form/create'); ?>">Add New</a>
    </div>
  </div>
    <hr>
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
               <div class="col-3 mb-3"><b>Contact : </b><?php echo  $submit_form_data['contact']; ?></div>
                  <div class="col-2  mb-3"><a class="btn btn-success" href="<?= base_url().'form/form_edit_user/'.$submit_form_data['ticket_no']; ?>">Edit</a></div>
   </div>
 </div>
     
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>