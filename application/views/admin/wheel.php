<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
       @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        .main-d {
          background:#E1F1FF;
          max-width:600px;
          padding:10px;
          position: absolute;
          top: 5%;
          left: 25%;
          border-radius:10px;
          display: grid;
          place-items: center;
          z-index: 1001;
        }
        .er{
          color:#B85042;
        }
        .form-label{
          color: #002C54;
        }
        .deal-wheel {
            --size: clamp(250px, 60vmin, 500px);
            --lg-hs: 0 3%;
            --lg-stop: 50%;
            --lg: linear-gradient(hsl(var(--lg-hs) 0%) 0 var(--lg-stop),
                    hsl(var(--lg-hs) 20%) var(--lg-stop) 100%);

            position: relative;
            display: grid;
            grid-gap: calc(var(--size) / 20);
            align-items: center;
            grid-template-areas:
                "spinner"
                "trigger";
            font-family: "Poppins", sans-serif;
            font-size: calc(var(--size) / 21);
            line-height: 1;
            text-transform: lowercase;
        }


        .deal-wheel>* {
            grid-area: spinner;
        }

        .deal-wheel .btn-spin {
            grid-area: trigger;
            justify-self: center;
        }

        .spinner {
            position: relative;
            display: grid;
            align-items: center;
            grid-template-areas: "spinner";
            width: var(--size);
            height: var(--size);
            transform: rotate(calc(var(--rotate, 25) * 1deg));
            border-radius: 50%;
            box-shadow: inset 0 0 0 calc(var(--size) / 40) hsl(0deg 0% 0% / 0.06);
        }

        .spinner * {
            grid-area: spinner;
        }

        .prize {
            position: relative;
            display: flex;
            align-items: center;
            padding: 0 calc(var(--size) / 6) 0 calc(var(--size) / 20);
            width: 50%;
            height: 50%;
            transform-origin: center right;
            transform: rotate(var(--rotate));
            user-select: none;
        }

        .cap {
            --cap-size: calc(var(--size) / 4);
            position: relative;
            justify-self: center;
            width: var(--cap-size);
            height: var(--cap-size);
        }

        /* Hide select dropdown from SVG import file */
        .cap select {
            display: none;
        }

        .cap svg {
            width: 100%;
        }
        .container{
          margin-top: 50px;
        }

        .ticker {
            position: relative;
            left: calc(var(--size) / -15);
            width: calc(var(--size) / 10);
            height: calc(var(--size) / 20);
            background: var(--lg);
            z-index: 1;
            clip-path: polygon(20% 0, 100% 50%, 20% 100%, 0% 50%);
            transform-origin: center left;
        }

        .btn-spin {
            color: hsl(0deg 0% 100%);
            background: var(--lg);
            border: none;
            font-family:"Poppins", sans-serif;
            font-size: inherit;
            line-height: inherit;
            text-transform: inherit;
            padding: 0.9rem 2rem 1rem;
            border-radius: 0.25rem;
            cursor: pointer;
            transition: opacity 200ms ease-out;
        }

        .btn-spin:focus {
            outline-offset: 2px;
        }

        .btn-spin:active {
            transform: translateY(1px);
        }

        .btn-spin:disabled {
            cursor: progress;
            opacity: 0.25;
        }

        /* Spinning animation */
        .is-spinning .spinner {
            transition: transform 8s cubic-bezier(0.1, -0.01, 0, 1);
        }

        .is-spinning .ticker {
            animation: tick 700ms cubic-bezier(0.34, 1.56, 0.64, 1);
        }
        @keyframes tick {
            40% {
                transform: rotate(-12deg);
            }
        }
        .text{
          color:red;
        }
        /* Selected prize animation */
        .prize.selected .text {
            color: white;
            animation: selected 800ms ease;
        }

        @keyframes selected {
            25% {
                transform: scale(1.25);
                text-shadow: 1vmin 1vmin 0 hsla(0 0% 0% / 0.1);
            }

            40% {
                transform: scale(0.92);
                text-shadow: 0 0 0 hsla(0 0% 0% / 0.2);
            }

            60% {
                transform: scale(1.02);
                text-shadow: 0.5vmin 0.5vmin 0 hsla(0 0% 0% / 0.1);
            }

            75% {
                transform: scale(0.98);
            }

            85% {
                transform: scale(1);
            }
        }
      @media screen and (max-width: 640px) {
        .main-d {
          max-width:100%;
          top: 5%;
          left: 0;
        }
      }
      @media screen and (max-width: 800px) {
        .main-d {
          max-width:100%;
          top: 5%;
          left: 0;
        }
      }
      @media screen and (max-width: 1024px) {
        .main-d {
          max-width:600px;
          top: 5%;
          left: 15%;
        }
      }

    </style>
</head>

<body>
  
  <div class="main-d container"style="<?php if(!isset($_COOKIE['lappy_maker'])){echo " ";}else{ echo "display:none";} ?>">
  <div class="modal-header">
        <h5 class="modal-title"> Lappy Maker </h5>
        <button type="button" class="btn-close mx-5 clos" ></button>
      </div>
    <form id="wheel">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
        <div id="namerror" class="er"></div>
      </div>
      <div class="mb-3">
        <label for="Email" class="form-label">Email</label>
        <input type="email" class="form-control" id="Email" name="email" required>
        <div id="emailerror" class="er"></div>
      </div>
      <div class="mb-3">
        <label for="phone" class="form-label">Phone no.</label>
        <input type="number" name="phone" class="form-control" id="phone" required>
        <div id="phonerror" class="er"></div>
      </div>
 
    <div class="deal-wheel">
        <ul class="spinner"></ul>
        <figure class="cap">
          <svg class="grim-reaper" data-reaction="resting" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 582 653">
            <defs>
              <clipPath id="clip-path">
                <circle class="cls-1" cx="295.6" cy="286.3" r="286.3"></circle>
              </clipPath>
              <clipPath id="clip-path-2">
                <path class="cls-1" d="M460 250c0 130-126 222-151 209-39-22-194-110-194-239S280 54 356 54c33 1 104 66 104 196z"></path>
              </clipPath>
              <clipPath id="clip-path-3">
                <path class="cls-1" d="M122 426l-100 7s28 161 167 156c37-2 69-27 66-31s-28 13-71-13c-58-35-62-119-62-119z"></path>
              </clipPath>
              <style>
                .cls-1,
                .cls-17 {
                  fill: none
                }
          
                .cls-4 {
                  fill: #141414
                }
          
                .cls-5 {
                  fill: #111010
                }
          
                .cls-6 {
                  fill: #fff
                }
          
                .cls-7 {
                  fill: #5c382b
                }
          
                .cls-9 {
                  fill: #232323
                }
          
                .cls-15 {
                  fill: #2d221e
                }
          
                .cls-16 {
                  fill: #4f2610;
                  opacity: .6;
                }
          
                .cls-17 {
                  stroke: #9b8029;
                  stroke-miterlimit: 10;
                  stroke-width: 2.5px
                }
          
                .cls-18 {
                  fill: #a7a9ad
                }
          
                .cls-20 {
                  fill: #fafafa
                }
              </style>
            </defs>
              <circle id="BG" cx="295.6" cy="286.3" r="150.3" fill="#960b0a"></circle>
              <style>
                .text {
                  font-family: Arial, sans-serif;
                  font-size: 100px;
                  font-weight: bold;
                  fill: #fff;
                  text-anchor: middle;
                 
                  dominant-baseline: central;
                }
              </style>

              <text class="text" x="295.6" y="286.3">WIN</text>
            </svg>
        </figure>
        <div class="ticker"></div>
      
        <button type="submit" class="btn-spin sub">Spin the wheel</button>
    </div>
  </form>
  </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(document).ready(function(){
        $('.clos').click(function(){
            $(".main-d").css("display", "none");
        });
    });
</script>
<script>
$(document).ready(function(){
  const prizes = [
        {
            text: "10% Off",
            color: "#F26F21",
            reaction: "dancing"
        },
        {
            text: "20% Off",
            color: "hsl(213 64% 49%)",
            reaction: "shocked"
        },
        {
            text: "30% Off",
            color: "#F26F21",
            reaction: "shocked"
        },
        {
            text: "40% Off",
            color: "hsl(213 64% 49%)",
            reaction: "shocked"
        },
        {
            text: "50% Off",
            color: "#F26F21",
            reaction: "dancing"
        },
        {
            text: "60% Off",
            color: "hsl(213 64% 49%)",
            reaction: "laughing"
        },
        {
            text: "70% Off",
            color: "#F26F21",
            reaction: "laughing"
        },
        {
            text: "90% Off",
            color: "hsl(213 64% 49%)",
            reaction: "dancing"
        }
    ];

    const wheel = document.querySelector(".deal-wheel");
    const spinner = wheel.querySelector(".spinner");
    const trigger = wheel.querySelector(".btn-spin");
    const ticker = wheel.querySelector(".ticker");
    const reaper = wheel.querySelector(".grim-reaper");
    const prizeSlice = 360 / prizes.length;
    const prizeOffset = Math.floor(180 / prizes.length);
    const spinClass = "is-spinning";
    const selectedClass = "selected";
    const spinnerStyles = window.getComputedStyle(spinner);
    let tickerAnim;
    let rotation = 0;
    let currentSlice = 0;
    let prizeNodes;

    const createPrizeNodes = () => {
        prizes.forEach(({ text, color, reaction }, i) => {
            const rotation = ((prizeSlice * i) * -1) - prizeOffset;

            spinner.insertAdjacentHTML(
                "beforeend",
                `<li class="prize" data-reaction=${reaction} style="--rotate: ${rotation}deg">
        <span class="text">${text}</span>
      </li>`
            );
        });
    };

    const createConicGradient = () => {
        spinner.setAttribute(
            "style",
            `background: conic-gradient(
            from -90deg,
            ${prizes
                .map(({ color }, i) => `${color} 0 ${(100 / prizes.length) * (prizes.length - i)}%`)
                .reverse()
            }
    );`
        );
    };


    const setupWheel = () => {
        createConicGradient();
        createPrizeNodes();
        prizeNodes = wheel.querySelectorAll(".prize");
    };

    const spinertia = (min, max) => {
        min = Math.ceil(min);
        max = Math.floor(max);
        return Math.floor(Math.random() * (max - min + 1)) + min;
    };

    const runTickerAnimation = () => {
        const values = spinnerStyles.transform.split("(")[1].split(")")[0].split(",");
        const a = values[0];
        const b = values[1];
        let rad = Math.atan2(b, a);

        if (rad < 0) rad += (2 * Math.PI);

        const angle = Math.round(rad * (180 / Math.PI));
        const slice = Math.floor(angle / prizeSlice);

        if (currentSlice !== slice) {
            ticker.style.animation = "none";
            setTimeout(() => ticker.style.animation = null, 10);
            currentSlice = slice;
        }

        tickerAnim = requestAnimationFrame(runTickerAnimation);
    };

    const selectPrize = () => {
        const selected = Math.floor(rotation / prizeSlice);
        prizeNodes[selected].classList.add(selectedClass);
        reaper.dataset.reaction = prizeNodes[selected].dataset.reaction;
    };

    trigger.addEventListener("click", (e) => {
            e.preventDefault();
            var name = document.getElementById("name").value;
            var phone = document.getElementById("phone").value;
            var email = document.getElementById("Email").value;
            if(name != "" && phone != "" && email != ""){
              if(phone.toString().length != 10){
                document.getElementById("phonerror").innerHTML = "Your phone number is not correct";
              }else{

             
              $.ajax({
                url : "<?=base_url('Welcome/wheel_sub')?>",
                type:'post',
                data:{"name":name, "phone":phone, "email":email},
                dataType:'json',
                success:function(data){
                  if(data.result == 'error'){
                    $("#phonerror").html(data.phoneerror);
                    $("#emailerror").html(data.emailerror);

                    // alert(data.phoneerror);
                  }else{
                    trigger.disabled = true;
                    rotation = Math.floor(Math.random() * 360 + spinertia(1000, 2000));
                    prizeNodes.forEach((prize) => prize.classList.remove(selectedClass));
                    wheel.classList.add(spinClass);
                    spinner.style.setProperty("--rotate", rotation);
                    ticker.style.animation = "none";
                    runTickerAnimation();
                   
                  }
                }
              });
            }}else{
              document.getElementById("namerror").innerHTML = "Please fill this first";
              document.getElementById("phonerror").innerHTML = "Please fill this first";
              document.getElementById("emailerror").innerHTML = "Please fill this first";
            }

        
    });

    spinner.addEventListener("transitionend", () => {
        cancelAnimationFrame(tickerAnim);
        trigger.disabled = false;
        trigger.focus();
        rotation %= 360;
        selectPrize();
        wheel.classList.remove(spinClass);
        spinner.style.setProperty("--rotate", rotation);
        var selectedPrize = $('.prize.selected .text').text();
        var phone = document.getElementById("phone").value;

        $.ajax({
          url : "<?=base_url('Welcome/add_prize')?>",
          type:'post',
          data:{
              phone: phone,
              prize: selectedPrize
          },
          dataType:'json',
          success:function(data){
            if(data.result == 'success'){
              Swal.fire({
                title: data.message,
                text: "You Have Win : "+ selectedPrize,
                icon: "success"
              });
              setTimeout(function(){
                window.location.reload(1);
              }, 10000);
            }
          }
        });

        
    });

    setupWheel();
  });
</script>

</html>