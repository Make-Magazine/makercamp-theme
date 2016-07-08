<?php /* Template Name: Makey Game */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="google-site-verification" content="tjgq9UGR8WCMZI_40j_B5wda_oVYqKyFtQW547LzMgQ" />
  <meta name="google-site-verification" content="puhGmuLsH_mXPiJjD9UYQrjMLpKaLHbPd4SgX_gy4tU" />
  <link rel="shortcut icon" href="<?php bloginfo('url'); ?>/favicon.ico" />
  <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="/favicon-152.png" sizes="152x152">
  <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script>
document.addEventListener("keydown", myFunction, false);

function myFunction(e) {
  console.log(e.keyCode)
  if (e.keyCode == "65") { //a
      document.getElementById('Buzzer').play();
    //document.body.style.backgroundColor = "black";
  } else if (e.keyCode == "83") { //s
    document.getElementById('Buzzer').play();
    //document.body.style.backgroundColor = "black";
  } else if (e.keyCode == "32") { //space
    document.getElementById('Buzzer').play();
    //document.body.style.backgroundColor = "black";
  } else if (e.keyCode == "37") { //left
    document.getElementById('Buzzer').play();
    LeftArm.style.fill="yellow";
    //document.body.style.backgroundColor = "black";
  } else if (e.keyCode == "38") { //up
    document.getElementById('Buzzer').play();
    LeftLeg.style.fill="yellow";
    LeftShin.style.fill="yellow";
    //document.body.style.backgroundColor = "black";
  } else if (e.keyCode == "39") { //right
    document.getElementById('Buzzer').play();
    RightArm.style.fill="yellow";
    //document.body.style.backgroundColor = "black";
  } else if (e.keyCode == "40") { //down
    document.getElementById('Buzzer').play();
    RightLeg.style.fill="yellow";
    RightShin.style.fill="yellow";
    //document.body.style.backgroundColor = "black";
  }
}

document.onkeyup = function() {myFunction2()};

function myFunction2() {
    document.body.style.backgroundColor = "white";
  document.getElementById('Buzzer').pause();
  document.getElementById('Buzzer').load();
  LeftArm.style.fill="#f00";
  RightArm.style.fill="#f00";
  LeftLeg.style.fill="#f00";
  LeftShin.style.fill="#f00";
  RightLeg.style.fill="#f00";
  RightShin.style.fill="#f00";
}
</script>
</head>
<body>
  <style>
    .svg{
      width:50%; 
      display: block; 
      margin: 0 auto;
    }
  </style>

<audio id="Buzzer">
  <source src="<?php echo get_template_directory_uri(); ?>/assets/BUZZER.mp3">
</audio>

<div class="svg">
<svg xmlns="http://www.w3.org/2000/svg" width="90%" height="600" viewBox="0 0 550 569.3">
<style>
  .a{
    fill:#f00;
  }
  .b{
    fill:#fff;
  }
</style>
  <path
     d="m 96.69878,559.9263 0,-9.3515 11.68409,-8.7735 11.68403,-8.77351 68.39608,0 68.39602,0 0,18.125 0,18.125 -80.08011,0 -80.08011,0 0,-9.35149 z"
     id="LeftFoot"
  class="a"
 />
  <path
     d="m 293.14531,551.15279 0,-18.125 68.38356,0 68.38362,0 5.48764,4.0625 c 3.01823,2.23437 8.28169,6.21972 11.69653,8.85634 l 6.20886,4.79382 0,9.26868 0,9.26866 -80.08011,0 -80.0801,0 0,-18.125 z"
     id="RightFoot"
  class="a"
/>
  <path
     d="m 125.72517,519.59029 c 1.44218,-7.28306 3.33203,-17.85684 8.54556,-47.8125 2.21363,-12.71875 4.67252,-26.78125 5.46432,-31.25 l 1.43957,-8.125 50.14573,-0.32651 50.14565,-0.32653 1.45429,14.70153 c 0.7998,8.08582 2.03702,23.98276 2.74931,35.32651 2.13407,33.98684 2.34716,36.73248 3.12955,40.3125 l 0.75116,3.4375 -62.50043,0 -62.50044,0 1.17573,-5.9375 z"
     id="LeftShin"
  class="a"
/>
  <path
     d="m 301.07708,522.09029 c 0.39378,-1.89063 1.58374,-16.65625 2.64426,-32.8125 1.06054,-16.15625 2.56112,-35.70945 3.33454,-43.45155 l 1.40619,-14.07655 50.17401,0.32655 50.17395,0.32655 1.53582,8.75 c 0.84469,4.8125 2.43456,13.53125 3.53304,19.375 1.09849,5.84375 2.81923,15.6875 3.82392,21.875 1.00465,6.1875 2.37054,13.78125 3.03533,16.875 1.32149,6.15 2.15906,11.21991 3.35574,20.3125 l 0.78141,5.9375 -62.25711,0 -62.25711,0 0.71601,-3.4375 z"
     id="RightShin"
  class="a"
 />
  <path
     d="M 82.93503,493.12355 C 77.08544,491.92114 68.8025,489.758 64.52849,488.31656 43.93621,481.37163 24.68084,465.06696 15.55103,446.84441 7.18869,430.15369 2.28542,431.77779 61.03813,431.77779 l 50.67567,0 0,31.875 0,31.875 -9.07157,-0.109 c -4.98934,-0.06 -13.85762,-1.09281 -19.7072,-2.29521 z"
     id="LeftHand"
  class="a"
/>
  <path
     d="m 438.2905,463.63877 0,-31.88902 50.9885,0.32652 c 58.58378,0.37516 53.38783,-1.14783 46.15073,13.52725 -12.08377,24.50297 -36.07575,41.26346 -67.83026,47.38532 -7.24337,1.39643 -16.80108,2.53895 -21.23934,2.53895 l -8.06963,0 0,-31.88902 z"
     id="RightHand"
  class="a"
/>
  <path
     d="m 155.5076,393.02779 0,-31.25 41.91697,0 41.91692,0 0,31.25 0,31.25 -41.91692,0 -41.91697,0 0,-31.25 z"
     id="LeftLeg"
  class="a"
/>
  <path
     d="m 310.66281,393.02779 0,-31.28325 42.22975,0.32913 42.22975,0.32912 0,30.625 0,30.625 -42.22975,0.32913 -42.22975,0.32912 0,-31.28325 z"
     id="RightLeg"
  class="a"
/>
  <path
     d="m 10.39025,419.59029 c 0.0286,-3.53932 2.04517,-22.00881 5.62966,-51.5625 1.12573,-9.28125 2.24524,-18.5625 2.48789,-20.625 0.24259,-2.0625 1.03826,-8.8125 1.76823,-15 0.72992,-6.1875 1.33176,-11.95313 1.33741,-12.8125 0.006,-0.86404 1.54839,-1.57106 3.45121,-1.58164 6.34864,-0.0354 6.68369,-0.90396 6.29919,-16.33116 L 31.00809,287.40279 15.50404,287.0504 0,286.69802 0.7056,267.0504 c 0.7678,-21.38016 2.35773,-29.30502 8.70664,-43.39761 9.47833,-21.03886 25.87671,-38.9156 44.00728,-47.97478 14.32942,-7.15987 22.35204,-8.96198 43.59209,-9.79208 l 18.45593,-0.7213 0,60.76131 0,60.76132 -12.19966,0.35777 -12.19971,0.35776 -0.35581,14.2747 c -0.38206,15.32886 -0.0232,16.29482 6.06647,16.33116 l 3.20814,0.0191 2.12752,19.6875 c 1.17011,10.82812 2.97425,26.4375 4.00915,34.6875 1.03486,8.25 2.15656,17.53125 2.49258,20.625 0.33603,3.09375 1.17044,10.11024 1.8543,15.59221 0.6838,5.48196 1.24328,10.96634 1.24328,12.1875 0,2.0905 -2.96217,2.22029 -50.67567,2.22029 l -50.67572,0 0.0278,-3.4375 z"
     id="LeftArm"
  class="a"
/>
  <path
     d="m 438.79637,416.46529 c 1.12266,-8.62203 4.91422,-40.80751 8.20226,-69.62573 3.35383,-29.39483 3.13054,-28.58273 7.98893,-29.05386 l 3.94857,-0.38291 0,-15 0,-15 -12.19971,-0.35776 -12.19966,-0.35777 0,-60.68926 0,-60.68926 16.57906,0.36155 c 28.54988,0.6226 46.21877,6.73232 63.20021,21.85401 14.56555,12.97038 23.88889,27.29605 30.42772,46.75349 3.65322,10.87069 4.04424,13.58954 4.62347,32.14762 L 550,286.69805 l -15.50188,0.35236 -15.50191,0.35238 -0.35575,14.2747 c -0.38426,15.41741 -0.0467,16.29575 6.27538,16.33116 3.8728,0.0217 4.22327,0.93702 5.27176,13.76914 0.36512,4.46875 1.24558,12.90625 1.95655,18.75 0.71097,5.84375 1.57,14 1.90894,18.125 0.33893,4.125 1.17247,10.875 1.85237,15 0.67986,4.125 1.78982,13.23911 2.46663,20.25359 0.67677,7.01447 1.30599,13.20197 1.39831,13.75 0.94634,5.61847 3.29121,5.37141 -50.97851,5.37141 l -50.84995,0 0.85442,-6.5625 z"
     id="RightArm"
  class="a"
 />
  <path
     d="m 148.46195,349.24644 c -9.824,-4.76069 -14.91585,-9.91386 -19.39496,-19.6287 l -3.58943,-7.78506 0,-35.65244 0,-35.65245 34.87224,0 34.87226,0 1.52157,7.72622 c 5.64639,28.67124 27.10519,52.16053 55.73602,61.00987 12.25295,3.78721 32.70112,3.7807 45.04505,-0.0144 22.6981,-6.97841 41.70192,-23.59726 50.71084,-44.34672 3.75858,-8.65685 6.1915,-16.86283 6.20754,-20.9375 l 0.0135,-3.43747 35.03504,0 35.03506,0 0,34.77312 c 0,42.76636 -0.38941,44.62569 -11.692,55.82804 -12.89039,12.7761 -2.67966,11.90384 -138.91474,11.8669 l -117.78675,-0.0319 -7.67131,-3.71747 z"
     id="BodyBottom"
  class="a"
/>
  <path
     d="m 221.82394,242.36431 0,-51.91347 15.20943,0.35097 15.20936,0.35098 5.91719,19.375 c 3.25444,10.65625 8.32839,27.39062 11.27549,37.1875 2.94704,9.79687 5.76069,17.8125 6.25245,17.8125 0.4917,0 1.56088,-2.67188 2.37585,-5.9375 0.81496,-3.26563 4.74524,-17.46875 8.73402,-31.5625 3.98872,-14.09375 7.96645,-28.29688 8.83939,-31.5625 l 1.58716,-5.9375 15.47801,0 15.47807,0 0,51.875 0,51.875 -11.26128,0 -11.26129,0 -0.0709,-32.8125 -0.0709,-32.8125 -3.53427,11.25 c -1.94389,6.1875 -5.29913,16.875 -7.45611,23.75 -2.15699,6.875 -5.22648,16.4375 -6.82107,21.25 l -2.89928,8.75 -10.45524,0 -10.45524,0 -4.20963,-13.125 c -12.52243,-39.04313 -15.31693,-48.43064 -15.32727,-51.48873 -0.006,-1.85005 -0.57448,-3.71137 -1.26264,-4.13627 -0.82281,-0.50801 -1.25127,11.23703 -1.25127,34.30122 l 0,35.07378 -10.01001,0 -10.01002,0 0,-51.91348 z"
     id="CenterM"
  class="a"
 />
  <path
     d="m 125.47756,203.07468 c 0,-35.98014 0.18083,-39.18584 2.56977,-45.56454 3.20561,-8.5592 11.50071,-17.92233 19.48847,-21.99771 l 6.09492,-3.10964 118.84725,-0.33736 c 137.72472,-0.39094 127.42572,-1.24193 140.35679,11.5975 11.44315,11.36205 11.69199,12.63016 11.69199,59.59173 l 0,38.52313 -34.31939,0 -34.31939,0 -0.80757,-7.1875 c -0.94241,-8.38774 -4.71395,-21.12066 -8.38568,-28.31073 -10.55535,-20.66948 -31.45781,-37.04325 -53.59648,-41.98431 -10.64685,-2.37625 -35.03258,-1.14274 -44.28748,2.2402 -28.2865,10.33954 -48.14201,34.77955 -53.25792,65.55484 l -1.61043,9.6875 -34.23241,0 -34.23244,0 0,-38.70311 z"
     id="BodyTop"
  class="a"
 />
  <path
     d="m 153.00512,112.46432 c 0,-9.63645 1.61103,-18.053279 5.87365,-30.686533 C 170.43286,47.534349 198.3358,19.198896 232.45962,7.0564231 248.32925,1.4094269 256.8159,0.00181171 275.00215,2.3050793e-4 289.82607,-0.00105949 294.46219,0.50033081 305.15256,3.2609415 c 36.7141,9.4807985 66.28334,33.9874055 81.8723,67.8546155 6.32015,13.730637 8.80374,23.348981 10.74161,41.599733 l 0.82954,7.8125 -122.79542,0 -122.79547,0 0,-8.06347 z"
     id="MakeyHead"
  class="a"
 />
  <path
     d="m 219.17695,103.10143 c 12.85307,-6.550583 18.55782,-21.873829 12.82511,-34.448643 -6.54601,-14.35869 -23.11794,-20.08695 -37.08002,-12.81707 -7.34792,3.825969 -13.6435,13.720305 -14.24409,22.386384 -0.6268,9.044996 6.36662,20.432866 15.49536,25.232129 5.3718,2.82414 17.12373,2.64391 23.00364,-0.3528 z"
     id="LeftEye"
  class="b"
 />
  <path
     d="m 353.32595,103.46981 c 9.06032,-4.378193 14.75946,-12.385456 15.7688,-22.154919 0.78775,-7.625115 -1.22558,-13.252437 -7.1555,-19.999473 -9.73208,-11.073132 -27.58588,-11.672164 -38.00454,-1.275131 -13.3125,13.284834 -9.72167,34.426346 7.37378,43.413943 4.97028,2.61304 16.62517,2.62129 22.01746,0.0156 z"
     id="RightEye"
  class="b"
/>
</svg>
</div>

</body>
</html>