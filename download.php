<?php

/**
 * This file is purpose to download external files easily.
 * 
 * This file is protected by MIT LICENSE (c)
 * 
 * @author xqwtxon
 * @link https://xqwtxon.ml/
 */
 
if(!isset($_GET['s'])){
    header("Location: https://www.xqwtxon.ml/");
    return;
}

if(!base64_encode(base64_decode($_GET['s'], true)) === $_GET['s']){
    header("Location: https://www.xqwtxon.ml/");
    return;
}

if(!filter_var(base64_decode($_GET['s']), FILTER_VALIDATE_URL)){
    header("Location: https://www.xqwtxon.ml/");
    return;
}

$url = base64_decode($_GET['s']);

?>

<html>
    <style>
        html {
            color: #ffffff;
            background-color: #424242;
            font-family: Arial;
            margin: auto; 
            display: flex;  
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            align-items: center;
            justify-content: center;
        }
        #btn {
            background-color: DodgerBlue;
            border: none;
            color: white;
            padding: 12px 30px;
            cursor: pointer;
            font-size: 20px;
            display: none;
        }
        
        #btn:hover {
            background-color: RoyalBlue;
        }
        .lds-spinner {
  color: official;
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
}
.lds-spinner div {
  transform-origin: 40px 40px;
  animation: lds-spinner 1.2s linear infinite;
}
.lds-spinner div:after {
  content: " ";
  display: block;
  position: absolute;
  top: 3px;
  left: 37px;
  width: 6px;
  height: 18px;
  border-radius: 20%;
  background: #fff;
}
.lds-spinner div:nth-child(1) {
  transform: rotate(0deg);
  animation-delay: -1.1s;
}
.lds-spinner div:nth-child(2) {
  transform: rotate(30deg);
  animation-delay: -1s;
}
.lds-spinner div:nth-child(3) {
  transform: rotate(60deg);
  animation-delay: -0.9s;
}
.lds-spinner div:nth-child(4) {
  transform: rotate(90deg);
  animation-delay: -0.8s;
}
.lds-spinner div:nth-child(5) {
  transform: rotate(120deg);
  animation-delay: -0.7s;
}
.lds-spinner div:nth-child(6) {
  transform: rotate(150deg);
  animation-delay: -0.6s;
}
.lds-spinner div:nth-child(7) {
  transform: rotate(180deg);
  animation-delay: -0.5s;
}
.lds-spinner div:nth-child(8) {
  transform: rotate(210deg);
  animation-delay: -0.4s;
}
.lds-spinner div:nth-child(9) {
  transform: rotate(240deg);
  animation-delay: -0.3s;
}
.lds-spinner div:nth-child(10) {
  transform: rotate(270deg);
  animation-delay: -0.2s;
}
.lds-spinner div:nth-child(11) {
  transform: rotate(300deg);
  animation-delay: -0.1s;
}
.lds-spinner div:nth-child(12) {
  transform: rotate(330deg);
  animation-delay: 0s;
}
@keyframes lds-spinner {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}
p {
    color: #fff;
}

a {
    color: DodgerBlue;
    text-decoration: none;
}

a:hover {
    color: RoyalBlue;
    text-decoration: underline;
}
    </style>
    <script>
     var timeleft = 10;
     setInterval(function(){
  if(timeleft <= 0){
    clearInterval();
    document.getElementById("countdown").innerHTML = "Click to download your file!";
    document.getElementById("btn").style.display = "block";
  } else {
    document.getElementById("countdown").innerHTML = timeleft + " seconds remaining...";
  }
  timeleft -= 1;
}, 1000);

function download(){
    window.location.replace("<?php echo $url; ?>");
}
    </script>
    <header>
        <title>Download — <?php date("d/m/Y"); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </header>
    <body>
        <br><br><br><br><br><br><br><br>
        <center>
            <div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
               <h1>Please Wait...</h1>
               <p><span id="countdown">10 seconds remaining...</span></p>
               <button id="btn" onClick="download()"><i class="fa fa-download"></i> Download</button>
        </center>
    </body>
</html>
