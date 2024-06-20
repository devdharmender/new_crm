<head>
  <title>
    Verify Candidate : Lappy Maker
  </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- print -->
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.min.js"></script>
  
  <style>
  .otp-field {
  flex-direction: row;
  column-gap: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.otp-field input {
  height: 45px;
  width: 42px;
  border-radius: 6px;
  outline: none;
  font-size: 1.125rem;
  text-align: center;
  border: 1px solid #ddd;
}
.otp-field input:focus {
  box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
}
.otp-field input::-webkit-inner-spin-button,
.otp-field input::-webkit-outer-spin-button {
  display: none;
}

.resend {
  font-size: 12px;
}

.footer {
  position: absolute;
  top: 10px;
  right: 10px;
  font-size: 12px;
  text-align: right;
  font-family: monospace;
}

.footer a {
  color: #fff;
  text-decoration: none;
}

/* 404 page css */
body{
  margin:0;
  padding:0;
  font-family: "Roboto", serif;
}
section {
  padding: 40px 0;
  background: #fff;
}

section img {
  width: 100%;
}
.h1{
  color:#ff7404;
}
.h2{
  color:#2b74dc;
}
.p{
  color:#ff7404;
}
.bg-img {
  background-image: url(https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif);
  height: 400px;
  background-position: center;
  background-repeat:no-repeat;
}

.bg-img h1 {
  font-size: 40px;
}
.link {
  color: #fff;
  padding: 10px 20px;
  border-radius:10px;
  background: #EE9403;
  margin: 20px 0;
  display: inline-block;
  text-decoration:none;
  transition:1s;
}

.link:hover{
  color:#fff;
  background-color:#2b74dc;
}


  </style>
</head>

<body class="container-fluid bg-body-tertiary d-block">
    <?= $this->session->flashdata('msg'); ?>
      <!--  opt code here  -->

      <?php 
        if($this->uri->segment(3)){?>
          <div class="row justify-content-center" id="cont">
                <div class="col-12 col-md-6 col-lg-4" style="min-width: 500px;">
                  <div class="card bg-white mb-5 mt-5 border-0" style="box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);">
                    <div class="card-body p-5 text-center">
                      <h4>Verify Submition</h4>
                      <div class="msg"></div>
                      <p>Your OTP has been sent to your email</p>
                          <!-- <form action="<?=base_url('form_sub_off/verify_otp_sumbit')?>" method="POST"> -->
                          <form id="verify">

                              <div class="otp-field mb-4">
                              <input type="number" name="otp"  />
                              <input type="number" name="otp1" disabled />
                              <input type="number" name="otp2" disabled />
                              <input type="number" name="otp3" disabled />
                              
                              </div>
                              <input type="hidden" name="name" value="<?=$otp_data->name?>">
                              <input type="hidden" name="email" value="<?=$otp_data->email?>">
                              <button class="btn btn-primary mb-3"> Verify </button>

                          </form>
                      <p class="resend text-muted mb-0">
                        <b>Name</b>: <?=$otp_data->name?> || <b>Email</b>: <?=$otp_data->email?>
                      </p>
                    </div>
                    
                  </div>
                </div>
              </div>
              <div class="footer">
                      <a href="<?=base_url('form_sub_off/create_door_step')?>" class="btn btn-success">Add New Form</a>
            </div>
        <?php }else{?>
          <section>
            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                  <div class="col-sm-12 col-sm-offset-1 text-center">
                    <div class="bg-img">
                      <h1 class="text-center h1">Something went wrong</h1>
                    </div>
                    <div class="content">
                      <h3 class="h2">User Not Found</h3>
                      <p class="p">Please Fill The Form First</p>
                      <a href="<?=base_url('form_sub_off/create_door_step')?>" class="link">Back To Form</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        <?php } ?>
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script>
  $( document ).ready(function() {
   $('#verify').on('submit',function(e){
        e.preventDefault();
       var form = $(this).serialize();
       $.ajax({
        url: '<?=base_url("form_sub_off/verify_otp_sumbit")?>',
        type : 'POST',
        data : form,
        dataType:'json',
        success : function(data){
          if(data.result == 'error'){
            $(".msg").html(data.message);
          }else{
            $(".msg").html(data.message);
            $('#verify')[0].reset();
            window.setTimeout(function(){
          window.location.href = "<?=base_url('form_sub_off/create_door_step')?>";
        }, 3000);
          }
        }
       });
   });
});
</script>
  <script>
    const inputs = document.querySelectorAll(".otp-field > input");
    const button = document.querySelector(".btn");

    window.addEventListener("load", () => inputs[0].focus());
    button.setAttribute("disabled", "disabled");

    inputs[0].addEventListener("paste", function (event) {
      event.preventDefault();

      const pastedValue = (event.clipboardData || window.clipboardData).getData(
        "text"
      );
      const otpLength = inputs.length;

      for (let i = 0; i < otpLength; i++) {
        if (i < pastedValue.length) {
          inputs[i].value = pastedValue[i];
          inputs[i].removeAttribute("disabled");
          inputs[i].focus;
          } else {
            inputs[i].value = ""; // Clear any remaining inputs
            inputs[i].focus;
          }
        }
      });

      inputs.forEach((input, index1) => {
        input.addEventListener("keyup", (e) => {
          const currentInput = input;
          const nextInput = input.nextElementSibling;
          const prevInput = input.previousElementSibling;

          if (currentInput.value.length > 1) {
            currentInput.value = "";
            return;
          }

          if (
            nextInput &&
            nextInput.hasAttribute("disabled") &&
            currentInput.value !== ""
          ) {
            nextInput.removeAttribute("disabled");
            nextInput.focus();
          }

          if (e.key === "Backspace") {
            inputs.forEach((input, index2) => {
              if (index1 <= index2 && prevInput) {
                input.setAttribute("disabled", true);
                input.value = "";
                prevInput.focus();
              }
            });
          }

          button.classList.remove("active");
          button.setAttribute("disabled", "disabled");

          const inputsNo = inputs.length;
          if (!inputs[inputsNo - 1].disabled && inputs[inputsNo - 1].value !== "") {
            button.classList.add("active");
            button.removeAttribute("disabled");

            return;
          }
        });
      });

  </script>

</body>
</html>