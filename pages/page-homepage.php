<?php
  function getHomepage()
  {
    $website = '';
    return $website;
  }
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     <title>
     Adminify
     </title>
   </head>
   <link rel="stylesheet" href="assets/css/global.css">
   <body>
     <div id="carouselExampleControls" class="carousel slide" >
       <div class="carousel-inner" role="listbox">

         <div class="carousel-item active">    <!--first item! -->
           <div id="title">
             <a>Log into your Account!</a>
           </div>
           <div class="container">
             <form class="form-signin" id="form" action="index.php"  method="post">

               <input type="email" class="form-control" name="username" placeholder="Email address"><br>
               <input type="password" class="form-control" name="password" placeholder="password"><br>
               <input type="submit"  class="btn btn-primary" name="login" value="login">
             </form>
           </div>
           <img class="img-fluid" src="/assets/images/background.jpg" alt="First slide">
         </div>

         <div class="carousel-item">              <!--second item! -->
            <div id="title">
              <a>Register your new Account!</a>
            </div>
           <form class="form-signin" id="form" action="index.php"  method="post">
             <input type="email" class="form-control" name="username" placeholder="Email address"><br>
             <input type="password" class="form-control" name="password" placeholder="password"><br>
             <input type="submit"  class="btn btn-primary" name="register" value="login">
           </form>
           <img class="img-fluid" src="/assets/images/background2.jpg" alt="Second slide">
         </div>

       </div>
       <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
       </a>
       <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
       </a>
     </div>

   </body>
 </html>
