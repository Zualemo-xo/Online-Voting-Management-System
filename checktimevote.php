<html>
<body>
  <body>
      <head>
        <link rel="stylesheet" type="text/css" href="css/login_mahel.css">
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <script src='https://kit.fontawesome.com/a076d05399.js'></script>
      <!-- Add icon library -->
          <!-- <img src="https://knowindia.gov.in/assets/images/National-Emblem.png" alt="Vote" style="background: auto;float:right; width:400px;height:300px"> -->

          <style>

            body {
              background-image: url('https://knowindia.gov.in/assets/images/National-Emblem.png');
              /* background-repeat: no-repeat; */
              /*background-color: red;*/
              background-color: rgb(201,76,76);
              background-position:center;
              background-repeat:no-repeat;
              background-attachment:inherit;
              background-size:auto;
                  }

          </style>
        </body>
        <h1 align="center" style="font-family:Georgia"><i><b>Election Commission Of India</b></i></h1>
       <!-- actual size:300px 200 px 100px 200 px -->
          <!-- </head>
          <div class="panel">

            <center><b><h1><font color="darkblue" size="30">Election Commission Of India</font></h1></b></center>
          </div>
        </figure> -->
<!-- </html> -->
<!-- <script> -->
<!DOCTYPE HTML>
<!-- <html> -->
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
p {
  text-align:center;
  font-family: Courier;
  /* padding-bottom: 100px; */
  position:100px absolute;
  font-size: 30px;
  margin-top: 0px;
}
</style>
</head>
<body>
</html>
<p id="demo"></p>


<script>
var StartcountDownDate = new Date("June 2, 2020 15:27:25").getTime();
var EndcountDownDate=new Date("June 28, 2020 1:04:25").getTime();
// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = StartcountDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  // document.write('Time left for election to begin');
  document.getElementById("demo").innerHTML = '<br><b>Time left for election to begin:'+days + "d " + hours + "h "
  + minutes + "m "+ "<br>You are being redirected";
  setTimeout(function(){
   window.location = "http://localhost/NEWDBMSPROJ/index.html";
 },5000);
// </body>

if (distance < 0) {
   clearInterval(x);
   // document.getElementById("demo").innerHTML = "EXPIRED";
   // header('Location: http://localhost/NEWDBMSPROJ/indexx.php');
   // Display message
   var delay=5000;
   // var x = setInterval(function() {

     // Get today's date and time
     var now = new Date().getTime();
     var left=EndcountDownDate-now;
     var days = Math.floor(left/ (1000 * 60 * 60 * 24));
     var hours = Math.floor((left % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
     var minutes = Math.floor((left % (1000 * 60 * 60)) / (1000 * 60));
     var seconds = Math.floor((left % (1000 * 60)) / 1000);

    document.getElementById("demo").innerHTML = "<br><b>Please wait! Elections have begun. You are being redirected to the new page.<br>Elections will end by:"+days + "d " + hours + "h "
    + minutes + "m " ;

    setTimeout(function(){
     window.location = "http://localhost/NEWDBMSPROJ/indexx.php";
    },delay);
    if(left<0)
    {
      document.getElementById("demo").innerHTML = "<br><b>Sorry, elections have been completed.";
      setTimeout(function(){
       window.location = "http://localhost/NEWDBMSPROJ/index.html";
      },delay);
    }
 }
}, 1000);
</script>
