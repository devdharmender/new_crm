<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Thank You </title>
 <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100&display=swap');
  </style>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        img.img_tag_gif {
            height: 300px;
        }

        .thankyou-gif {
            display: flex;
            justify-content: center;
            align-content: center;
        }

        .text_thank {
            text-align: center;
        }

        .para {
            font-weight: 700;
            font-size: 4rem;
        }

        .para-p {
            font-size: 20px;
            font-weight: 500;
        }
    </style>

</head>

<body>
<?php if ($this->session->flashdata('success') != '') { ?>
        <div class="alert alert-success fade show" role="alert">
            <strong>Success!</strong> <?= $this->session->flashdata('success'); ?>
        </div>
    <?php } ?>
    <!--<?php if ($this->session->flashdata('error') != '') { ?>-->
    <!--    <div class="alert alert-danger fade show" role="alert">-->
    <!--        <strong>Error!</strong> <?= $this->session->flashdata('error'); ?>-->
    <!--    </div>-->
    <!--<?php } ?>-->

    <div class="container">
        <div class="thank_box">
            <div class="thankyou-gif">
                 <form action="<?= base_url('delivery/otp_form_verfiy'); ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3 mt-3">
                      <label for="Search">Enter Otp For Verify :</label>
                      <input type="text" class="form-control" id="Search" placeholder="Enter Otp" name="otp">
                      <input type="hidden" class="form-control" id="Search" value="<?php echo $ticket_no; ?>" name="ticket_no">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                  <!--<form action="<?= base_url('delivery/Resend_otp'); ?>" method="post" enctype="multipart/form-data">-->
                  <!--    <input type="hidden" class="form-control" id="Search" value="<?php echo $ticket_no; ?>" name="ticket_no">-->
                  <!--    <input type="hidden" class="form-control" id="Search" value="<?php echo $email; ?>" name="email">-->
                  <!--  <button type="submit" class="btn btn-primary">Resend OTP</button>-->
                  <!--</form>-->
            </div>
         
        
        </div>
    </div>




</body>

</html>