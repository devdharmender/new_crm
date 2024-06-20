<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
   
    <title>Diagonis Form</title>

    <style>
        .kbw-signature {
            width: 100%;
            height: 20vw;
        }

        #sig canvas {
            width: 100% !important;
            height: 100%;
        }

        #clear {
            width: 60px;
            height: 30px;
            font-size: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .kbw-signature {
            width: 100%;
            height: 25vw;
        }

        #sig1 canvas {
            width: 100% !important;
            height: 100%;
        }

        #clear1 {
            width: 60px;
            height: 30px;
            font-size: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #submit-btn {
            width: 300px;
            background-color: green;
        }

        #camera_wrapper,
        #show_saved_img {
            float: left;
            width: 650px;
        }

        .alert-success {
            border: none;
            padding-left: 50px;
        }

        .alert-danger {
            border: none;
            padding-left: 50px;
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

       <!-- jQuery files For electronics signature -->
       <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>


    <script src="https://use.fontawesome.com/3a2eaf6206.js"></script>


    <script src="<?= base_url(); ?>assets\jquery-ui-touch-punch-master\jquery-ui-touch-punch-master\jquery.ui.touch-punch.min.js"></script>

    <link type="text/css" href="<?= base_url(); ?>assets\jquery.signature\css\jquery.signature.css" rel="stylesheet">
    <script type="text/javascript" src="<?= base_url(); ?>assets\jquery.signature\js\jquery.signature.min.js"></script>


    <!-- Custom styles for this template -->
    <link href="<?=base_url('assets/admin_css/main.css')?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
</head>

<body>
    <?php $this->load->view('admin/common/header')?>


    <div class="container-fluid">
        <div class="row">
            <?php $this->load->view('admin/common/sidebar')?>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Delivey Form</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <!-- anything we want to put in right side from of sadhbord -->
                        </div>

                    </div>
                </div>
                <!-- <h2>Section title</h2> -->
                <div class="table-responsive">
                    <!--delivery/create-->
        <!-- Top Head section -->
        <section class="top-head d-flex align-items-center">
            <div class="container-fluid">
                <div class="row p-0">
                    <div class="col-9 p-0 d-flex align-items-center">
                        <div class="">
                            <div class="img">
                                <img src="<?= base_url(); ?>assets/img/lappy-maker-logo.svg" alt="img-error">
                            </div>
                            <div class="content">
                                <h1 class="display-6 m-0">Doorstep Solution For Laptops</h1>
                                <p><span style="color :red">*</span><b>No Data Guarantee or Backup</b></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 d-flex justify-content-end p-0">
                        <div class="d-flex align-items-center">
                            <div class="d-flex flex-column align-items-start">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-row align-items-center" for="city1">
                                        <input type="radio" name="city-radio" value="delhi" id="city1"  <?php echo set_radio('city-radio', 'Delhi'); ?> <?php echo $select_city == 'delhi' ? 'checked' : ''  ?> disabled >
                                        <h6 class="city-name d-flex align-items-center">&nbsp;Delhi</h6>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-row align-items-center" for="city2">
                                        <input type="radio" name="city-radio" id="city2" value="Gurugram" <?php echo set_radio('city-radio', 'Gurugram'); ?> <?php echo $select_city == 'Gurugram' ? 'checked' : ''  ?> disabled>
                                        <h6 class="city-name d-flex align-items-center">&nbsp;Gurugram</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Horizental line -->
        <hr class="h-line">

        <!-- User Details -->
        <section class="user-details">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-sm-12 col-md-6 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Ticket No <span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span>
                        <input class="form-control <?php echo form_error('name') ? 'is-invalid' : ''; ?>" type="text" disabled name="ticket_no" id="ticket_no" value="<?= $ticket_no; ?>">
                    </div>
                    
                    <div class="col-sm-12 col-md-6 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Date<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span><span class="details-feild d-flex align-items-center"><?= $date; ?></span>
                        <input class="form-control" type="text" name="date" id="date" placeholder="" value="<?= date_default_timezone_set("Asia/kolkata"); echo date("F d Y h:i:s A.", time());?>" style="display:none;" disabled >
                    </div>
                    
                    
                    <div class="col-sm-12 col-md-6 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Name<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span>
                        <input class="form-control <?php echo form_error('name') ? 'is-invalid' : ''; ?>" type="text" name="name" id="name" value="<?= $name; ?>" disabled >
                    </div>
                    <?php if($this->session->userdata('admin_type')=='admin'){?>
                        <div class="col-sm-12 col-md-12 my-1 d-flex flex-row">
                            <span class="details-feild d-flex align-items-center">Address<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span>
                            <input class="form-control <?php echo form_error('address') ? 'is-invalid' : ''; ?>" type="text" name="address" id="address" value="<?= $address; ?>" disabled >
                        </div>

                        <div class="col-sm-12 col-md-5 my-1 d-flex flex-row">
                            <span class="details-feild d-flex align-items-center">Contact<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span>
                            <input class="form-control <?php echo form_error('contact') ? 'is-invalid' : ''; ?>" type="tel" name="contact" id="contact" value="<?= $contact; ?>" disabled >
                        </div>

                        <div class="col-sm-12 col-md-7 my-1 d-flex flex-row">
                            <span class="details-feild d-flex align-items-center">Email<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span>
                            <input class="form-control <?php echo form_error('email') ? 'is-invalid' : ''; ?>" type="email" name="email" id="email" value="<?= $email; ?>" disabled >
                        </div>

                   <?php }?>
                    
                    
                     <div class="col-sm-12 col-md-12 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Accessories Submitted From Customer&nbsp;:&nbsp;</span>
                        <input class="form-control <?php echo form_error('email') ? 'is-invalid' : ''; ?>" type="part_picked" name="part_picked" id="part_picked" value="<?= $part_picked; ?>" disabled >
                    </div>

                    <div class="col-sm-12 col-md-12 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Check&nbsp;List&nbsp;:&nbsp;</span>
                        <input class="form-control <?php echo form_error('email') ? 'is-invalid' : ''; ?>" type="check_list_detail" name="check_list_detail" id="check_list_detail" value="<?= $check_list_detail; ?>" disabled >
                    </div>


                    <div class="col-sm-12 col-md-12 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Machine Parts&nbsp;:&nbsp;</span>
                        <input class="form-control <?php echo form_error('internal_part') ? 'is-invalid' : ''; ?>" type="internal_part" name="internal_part" id="internal_part" value="<?= $internal_part; ?>" disabled >
                    </div>

                </div>
            </div>
        </section>

        
 <!--check list-->

        <!-- Laptop Ddetail section -->
        <section class="laptop-detail">
            <div class="container-fluid p-0">
                <div class="row">
                   

                    <div class="col-sm-12 col-md-7 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Serial&nbsp;No.<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span><input class="form-control <?php echo form_error('serial_no') ? 'is-invalid' : ''; ?>" type="text" name="serial_no" id="serial_no" value="<?= $serial_no; ?>" disabled>
                    </div>

                    <div class="col-sm-12 col-md-5 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">&nbsp;Model&nbsp;No.<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span><input class="form-control <?php echo form_error('model_no') ? 'is-invalid' : ''; ?>" type="text" name="model_no" id="model_no" value="<?= $model_no; ?>" disabled>
                    </div>

                    <div class="col-sm-12 col-md-6 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Estimate&nbsp;Given<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span><input class="form-control <?php echo form_error('estimate_given') ? 'is-invalid' : ''; ?>" type="text" name="estimate_given" id="estimate_given" value="<?= $estimate_given; ?>" disabled>
                    </div>

                    <div class="col-sm-12 col-md-6 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Laptop&nbsp;Password.<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span><input class="form-control  <?php echo form_error('laptop_password') ? 'is-invalid' : ''; ?>" type="text" name="laptop_password" id="laptop_password" value="<?= $lappy_pass; ?>" disabled>
                    </div>

                    <div class="col-sm-12 col-md-12 my-1 d-flex flex-row">
                        <span class="details-feild d-flex align-items-center">Physical&nbsp;Condition<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span><input type="text" class="form-control <?php echo form_error('physical_condition') ? 'is-invalid' : ''; ?>" name="physical_condition" id="physical_condition" value="<?= $physical_condition; ?>" disabled>
                    </div>
                   
                </div>
            </div>
        </section>
        
        
          <div class="row">
                    <div class="col-6"><b>Parts Pickup Along With laptop : </b><?php echo  $part_picked_detail; ?><br><img src="<?php if (strlen(base_url('assets/uploads_img/laptop_img/' . $part_along)) > 66) {
                                                                                                                                                echo base_url('assets/uploads_img/laptop_img/' . $part_along);
                                                                                                                                            } else {
                                                                                                                                                echo base_url('assets/img/No_Image_Available.jpg');
                                                                                                                                            } ?>" height="100px" width="100px" /></div>
                    <div class="col-6"><b> Front Screen View : </b><br><img src="<?php if (strlen(base_url('assets/uploads_img/laptop_img/' . $front_img)) > 66) {
                                                                                        echo base_url('assets/uploads_img/laptop_img/' . $front_img);
                                                                                    } else {
                                                                                        echo base_url('assets/img/No_Image_Available.jpg');
                                                                                    } ?>" height="100px" width="100px" /></div>
                </div>
                <div class="row">
                    <div class="col-6"><b> Back Screen View : </b><br><img src="<?php if (strlen(base_url('assets/uploads_img/laptop_img/' . $back_img)) > 66) {
                                                                                    echo base_url('assets/uploads_img/laptop_img/' . $back_img);
                                                                                } else {
                                                                                    echo base_url('assets/img/No_Image_Available.jpg');
                                                                                } ?>" height="100px" width="100px" /></div>
                    <div class="col-6"><b> keyboard view : </b><br><img src="<?php if (strlen(base_url('assets/uploads_img/laptop_img/' . $keyboard_img)) > 66) {
                                                                                    echo base_url('assets/uploads_img/laptop_img/' . $keyboard_img);
                                                                                } else {
                                                                                    echo base_url('assets/img/No_Image_Available.jpg');
                                                                                } ?>" height="100px" width="100px" /> </div>

                </div>


                <div class="row">
                    <div class="col-6"><b> Track Pad Problem : </b><br><img src="<?php if (strlen(base_url('assets/uploads_img/laptop_img/' . $trackpad_img)) > 66) {
                                                                                        echo base_url('assets/uploads_img/laptop_img/' . $trackpad_img);
                                                                                    } else {
                                                                                        echo base_url('assets/img/No_Image_Available.jpg');
                                                                                    } ?>" height="100px" width="100px" /> </div>
                    <div class="col-6"><b> Base view : </b><br><img src="<?php if (strlen(base_url('assets/uploads_img/laptop_img/' . $base_img)) > 66) {
                                                                                echo base_url('assets/uploads_img/laptop_img/' . $base_img);
                                                                            } else {
                                                                                echo base_url('assets/img/No_Image_Available.jpg');
                                                                            } ?>" height="100px" width="100px" /></div>


                </div>
                <div class="row">
                    <div class="col-6"><b> Internal Part : </b><br><img src="<?php if (strlen(base_url('assets/uploads_img/laptop_img/' . $int_part_img)) > 66) {
                                                                                    echo base_url('assets/uploads_img/laptop_img/' . $int_part_img);
                                                                                } else {
                                                                                    echo base_url('assets/img/No_Image_Available.jpg');
                                                                                } ?>" height="100px" width="100px" /></div>
                    <div class="col-6"><b> Other view : </b><br><img src="<?php if (strlen(base_url('assets/uploads_img/laptop_img/' . $lappy_img)) > 66) {
                                                                                echo base_url('assets/uploads_img/laptop_img/' . $lappy_img);
                                                                            } else {
                                                                                echo base_url('assets/img/No_Image_Available.jpg');
                                                                            } ?>" height="100px" width="100px" /></div>
                </div>
                <div class="row">
                    <div class="col-6"><b> Signature : </b><img src="<?php echo base_url('assets/uploads_img/customer_sign/' . $customer_sign); ?>" height="100px" width="100px" /></div>
                    <div class="col-6"><b> Executive : </b><img src="<?php echo base_url('assets/uploads_img/executive_sign/' . $exicutive_sign); ?>" height="100px" width="100px" /> </div>
                </div>



        <div class="row">
            <div class="col-sm-12 col-md-6 my-1 d-flex flex-row">
                <span class="details-feild d-flex align-items-center">Pickup&nbsp;Technician&nbsp;Name.<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span><input class="form-control  <?php echo $executive_name ?>" type="text" name="executive_name" id="executive_name" value="<?= $executive_name ?>" disabled>
            </div>
        </div>
        <!-- Horizental line -->
        <hr class="h-line">

 <form action="<?= base_url('delivery/delivey_form_data'); ?>" method="post" enctype="multipart/form-data">
      
      
        <!-- Top Head section -->
        <section class="top-head d-flex align-items-center">
            <div class="container-fluid">
                <div class="row p-0">
                    <div class="col-9 p-0 d-flex align-items-center">
                        <div class="">
                            <div class="content">
                                <h1 class="display-6 m-0">Proof Of Delivery</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </br>
        <!-- Horizental line -->
        <hr class="h-line">
        <!-- User Details -->
  
    
        <!-- Laptop Image Section -->
        <section class="laptop-image">
            <div class="container-fluid ">
                <div class="row ">
                    <div class="col-sm-12 col-md-6 my-1 d-flex flex-row" style="border:1px solid black;">
                        <label for="inputTag2">
                            Proof Of Delivery *(Customer Photo At The Time Of Handover)<span style="color: red;font-size: large;">*</span> <br />
                            <i class="fa fa-2x fa-camera"></i>
                            <input required id="inputTag2" type="file" name="proof_of_delivery_images" style="margin-top: 20px;" />
                            <br />
                            <span id="imageName2"></span>
                        </label>
                    </div>
                    <div class="col-sm-12 col-md-6 my-1 d-flex flex-row" style="border:1px solid black;">
                        <label for="inputTag3">
                            Warranty Stickers* (Note: Without Sticker No Warranty )<br />
                            <i class="fa fa-2x fa-camera"></i>
                            <input  id="inputTag3" type="file" name="warranty_stickers_images" style="margin-top: 20px;" />
                            <br />
                            <span id="imageName3"></span>
                        </label>
                    </div>
                    <div class="col-sm-12 col-md-6 my-1 d-flex flex-row" style="border:1px solid black;">
                        <label for="inputTag4">
                            Others (It May Vary)<br />
                            <i class="fa fa-2x fa-camera"></i>
                            <input  id="inputTag4" type="file" name="others_images" style="margin-top: 20px;" />
                            <br />
                            <span id="imageName4"></span>
                        </label>
                    </div>

                </div>
                <style>
                    .file_img1 {
                        text-align: center;
                        padding: 3%;
                        border: thin solid black;
                        margin-top: 2%;
                    }

                    #inputTag {
                        display: none;
                    }

                    label {
                        cursor: pointer;
                    }

                    #imageName {
                        color: green;
                        font-size: 12px;
                    }
                </style>
   
                <!-- Reported Problem Section -->
         
                <style>
                    textarea {
                        width: 100%;
                        height: 100%;
                        border: 1px solid black;
                        padding: 1vw;
                        outline: none;
                        box-shadow: none;
                    }
                </style>



                <div class="row declaration-row">
                    <div class="col  mt-2">
                        <span class="declaration d-flex align-items-center"><b>DECLARATION&nbsp;:&nbsp;</b></span>
                        <h6>I hereby certify the accuracy of the information by signing this application and acknowledging the successful completion of the device collection process from Lappy Maker 
.</h6>
                    </div>
                </div>
                <div class="row signature-row d-flex justify-content-around">
                    <div class="col-sm-10 col-md-5 p-0">
                        <p class="text-center sign-text"><b>Customer Signature</b></p>
                        <div id="sig"></div>
                        <button id="clear" class="btn btn-sm btn-primary text-center">Clear</button>
                        <br>
                        <textarea id="signature64" name="signed1" style="display: none"></textarea>
                    </div>
                    <div class="col-sm-10 col-md-5 p-0">
                        <p class="text-center sign-text"><b>Executive Signature</b></p>
                        <div id="sig1"></div>
                        <button id="clear1" class="btn btn-sm btn-primary text-center">Clear</button>
                        <br>
                        <textarea id="signature641" name="signed2" style="display: none"></textarea>

                    </div>
                </div>
            </div>
        </section>
        <div class="col-sm-12 col-md-12 my-1 d-flex flex-row">
            <span class="details-feild d-flex align-items-center">Delivery&nbsp;Technician&nbsp;Name.<span style="color: red;font-size: large;">*</span>&nbsp;:&nbsp;</span><input class="form-control  <?php echo form_error('executive_name') ? 'is-invalid' : ''; ?>" type="text" name="executive_name" id="executive_name" value="<?= set_value('executive_name'); ?>">
        </div><br>
        <input class="form-control <?php echo form_error('name') ? 'is-invalid' : ''; ?>" type="hidden"  name="ticket_no" id="ticket_no" value="<?= $ticket_no; ?>">
         <input class="form-control <?php echo form_error('email') ? 'is-invalid' : ''; ?>" type="hidden" name="email" id="email" value="<?= $email; ?>"  >
         <input class="form-control <?php echo form_error('name') ? 'is-invalid' : ''; ?>" type="hidden" name="name" id="name" value="<?= $name; ?>"  >
        <!-- Horizental line -->
        <hr class="h-line">

        <section class="submit">
            <div class="container-fluid" style="margin:2vw 0vw;">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <button id="submit-btn" type="submit" class="btn btn-primary d-block">Submit</button>
                    </div>
                </div>
            </div>
        </section>

   
    </form>


     <section class="bottom-section">
            <div class="container-fluid">
                <div class="company-address">
                    <h4 class="text-center">Office No. 703, 7<sup>th</sup> Floor, Madhuban Building, Nehru Place, New Delhi - 110019 </h4>
                </div>
            </div>
            <div class="container-fluid">
                <div class="contact-way">
                    <div class="row">
                        <div class="col-4 d-flex justify-content-start align-items-center">
                            <i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;
                            <a href="#" class="text-decoration-none fw-bold">
                                services@lappymaker.com
                            </a>
                        </div>
                        <div class="col-4 d-flex justify-content-center align-items-center">
                            <i class="fa fa-phone" aria-hidden="true"></i>&nbsp;
                            <a href="#" class="text-decoration-none fw-bold">
                                93198 48444
                            </a>
                        </div>
                        <div class="col-4 d-flex justify-content-end align-items-center">
                            <i class="fa fa-globe" aria-hidden="true"></i>&nbsp;
                            <a href="#" class="text-decoration-none fw-bold">
                                lappymaker.com
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
                </div>
            </main>
        </div>
    </div>


</body>
<script type="text/javascript">
        var sig = $('#sig').signature({
            syncField: '#signature64',
            syncFormat: 'PNG'
        });
        $('#clear').click(function(e) {
            e.preventDefault();
            sig.signature('clear');
            $("#signature64").val('');
        });

        var sig1 = $('#sig1').signature({
            syncField: '#signature641',
            syncFormat: 'PNG'
        });
        $('#clear1').click(function(e) {
            e.preventDefault();
            sig1.signature('clear');
            $("#signature641").val('');
        });
    </script>

   
    <script src="js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>















<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons -->
    <link rel="icon" type="image/x-icon" href="img/favicon.png">

    <!-- Custom CSS -->
    

 

</head>

<body>

    

</body>

</html>