<?php
     include 'partials/_dbconnect.php';
     $showError = false;

          if(isset($_POST['upload'])){
               $name = $_POST['name'];
               $email = $_POST['email'];
               $phone = $_POST['phone'];
               $address = $_POST['address'];
               $acc_no = $_POST['acc_no'];
               $cacc_no = $_POST['cacc_no'];
               $ifsc = $_POST['ifsc'];
               $holder_name = $_POST['holder_name'];

               if (($acc_no == $cacc_no)){
                    $query = "INSERT INTO `host_details`(`name`, `email`, `phone`, `address`, `acc_no`, `ifsc`, `holder_name`, `cur_time`) VALUES ('$name', '$email', '$phone', '$address', '$acc_no', '$ifsc', '$holder_name', current_timestamp())";
     
                    if(mysqli_query($con, $query)){
                         // echo "Successful";
                    }
                    else{
                         echo "<script>alert('Error');</script>";
                    }
               
               } else {
                    $showError = "Account Number do not match";
                }

          }
    ?>


<!DOCTYPE html>
<html lang="en">
<head>

     <title>PHPJabber | Car Rental Website Template</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>



     <!-- NAVBAR START -->

     <?php require 'partials/_create_ev_navbar.php'; ?>
     
     <!-- NAVBAR END -->

     <?php
     if ($showError){
          echo "<script>alert('Account Numbers Did Not Matched!!');</script>";
     } 
          ?>

     <section>
          <div class="container">
               <div class="text-center">
                    <h1>Create EV Station</h1>

                    <br>

                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, alias.</p>
               </div>
          </div>
     </section>


          <!-- HOME -->
          <section id="home">
          <div class="row">
               <div class="owl-carousel owl-theme home-slider">
                    <div class="item item-first">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1>Lorem ipsum dolor sit amet.</h1>
                                        <h3>Voluptas dignissimos esse, explicabo cum fugit eaque, perspiciatis quia ab nisi sapiente delectus eiet.</h3>
                                        <a href="create_station.php" class="section-btn btn btn-default">Create EV Station</a>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="item item-second">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1>Distinctio explicabo vero animi culpa facere voluptatem.</h1>
                                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, excepturi.</h3>
                                        <a href="create_station.php" class="section-btn btn btn-default">Create EV Station</a>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="item item-third">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1>Efficient Learning Methods</h1>
                                        <h3>Nam eget sapien vel nibh euismod vulputate in vel nibh. Quisque eu ex eu urna venenatis sollicitudin ut at libero.</h3>
                                        <a href="create_station.php" class="section-btn btn btn-default">Create EV Station</a>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>



     

     <!-- <section class="section-background">
          <div class="container">
               <div class="row">
                    <div class="col-md-4 col-sm-4">
                         <div class="courses-thumb courses-thumb-secondary">
                              <div class="courses-top">
                                   <div class="courses-image">
                                        <img src="images/product-1-720x480.jpg" class="img-responsive" alt="">
                                   </div>
                                   <div class="courses-date">
                                        <span title="passegengers"><i class="fa fa-user"></i> 5</span>
                                        <span title="luggages"><i class="fa fa-briefcase"></i> 4</span>
                                        <span title="doors"><i class="fa fa-sign-out"></i> 4</span>
                                        <span title="transmission"><i class="fa fa-cog"></i> A</span>
                                   </div>
                              </div>

                              <div class="courses-detail">
                                   <h3><a href="create_station.php">Large: Premium</a></h3>
                                   <p class="lead"><small>from</small> <strong>$99</strong> <small>per weekend</small></p>
                                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                              </div>

                              <div class="courses-info">
                                   <button type="button" data-toggle="modal" data-target=".bs-example-modal" class="section-btn btn btn-primary btn-block">Book Now</button>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="courses-thumb courses-thumb-secondary">
                              <div class="courses-top">
                                   <div class="courses-image">
                                        <img src="images/product-2-720x480.jpg" class="img-responsive" alt="">
                                   </div>
                                   <div class="courses-date">
                                        <span title="passegengers"><i class="fa fa-user"></i> 5</span>
                                        <span title="luggages"><i class="fa fa-briefcase"></i> 4</span>
                                        <span title="doors"><i class="fa fa-sign-out"></i> 4</span>
                                        <span title="transmission"><i class="fa fa-cog"></i> A</span>
                                   </div>
                              </div>

                              <div class="courses-detail">
                                   <h3><a href="create_station.php">Large: Station wagon</a></h3>
                                   <p class="lead"><small>from</small> <strong>$99</strong> <small>per weekend</small></p>
                                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                              </div>

                              <div class="courses-info">
                                   <button type="button" data-toggle="modal" data-target=".bs-example-modal" class="section-btn btn btn-primary btn-block">Book Now</button>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="courses-thumb courses-thumb-secondary">
                              <div class="courses-top">
                                   <div class="courses-image">
                                        <img src="images/product-3-720x480.jpg" class="img-responsive" alt="">
                                   </div>
                                   <div class="courses-date">
                                        <span title="passegengers"><i class="fa fa-user"></i> 5</span>
                                        <span title="luggages"><i class="fa fa-briefcase"></i> 4</span>
                                        <span title="doors"><i class="fa fa-sign-out"></i> 4</span>
                                        <span title="transmission"><i class="fa fa-cog"></i> A</span>
                                   </div>
                              </div>

                              <div class="courses-detail">
                                   <h3><a href="create_station.php">Medium: Low emission</a></h3>
                                   <p class="lead"><small>from</small> <strong>$99</strong> <small>per weekend</small></p>
                                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                              </div>

                              <div class="courses-info">
                                   <button type="button" data-toggle="modal" data-target=".bs-example-modal" class="section-btn btn btn-primary btn-block">Book Now</button>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="courses-thumb courses-thumb-secondary">
                              <div class="courses-top">
                                   <div class="courses-image">
                                        <img src="images/product-4-720x480.jpg" class="img-responsive" alt="">
                                   </div>
                                   <div class="courses-date">
                                        <span title="passegengers"><i class="fa fa-user"></i> 4</span>
                                        <span title="luggages"><i class="fa fa-briefcase"></i> 4</span>
                                        <span title="doors"><i class="fa fa-sign-out"></i> 4</span>
                                        <span title="transmission"><i class="fa fa-cog"></i> A</span>
                                   </div>
                              </div>

                              <div class="courses-detail">
                                   <h3><a href="create_station.php">Small: Economy</a></h3>
                                   <p class="lead"><small>from</small> <strong>$99</strong> <small>per weekend</small></p>
                                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                              </div>

                              <div class="courses-info">
                                   <button type="button" data-toggle="modal" data-target=".bs-example-modal" class="section-btn btn btn-primary btn-block">Book Now</button>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="courses-thumb courses-thumb-secondary">
                              <div class="courses-top">
                                   <div class="courses-image">
                                        <img src="images/product-5-720x480.jpg" class="img-responsive" alt="">
                                   </div>
                                   <div class="courses-date">
                                        <span title="passegengers"><i class="fa fa-user"></i> 2</span>
                                        <span title="luggages"><i class="fa fa-briefcase"></i> 2</span>
                                        <span title="doors"><i class="fa fa-sign-out"></i> 2</span>
                                        <span title="transmission"><i class="fa fa-cog"></i> M</span>
                                   </div>
                              </div>

                              <div class="courses-detail">
                                   <h3><a href="create_station.php">Small: Mini</a></h3>
                                   <p class="lead"><small>from</small> <strong>$99</strong> <small>per weekend</small></p>
                                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                              </div>

                              <div class="courses-info">
                                   <button type="button" data-toggle="modal" data-target=".bs-example-modal" class="section-btn btn btn-primary btn-block">Book Now</button>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="courses-thumb courses-thumb-secondary">
                              <div class="courses-top">
                                   <div class="courses-image">
                                        <img src="images/product-6-720x480.jpg" class="img-responsive" alt="">
                                   </div>
                                   <div class="courses-date">
                                        <span title="passegengers"><i class="fa fa-user"></i> 5</span>
                                        <span title="luggages"><i class="fa fa-briefcase"></i> 4</span>
                                        <span title="doors"><i class="fa fa-sign-out"></i> 4</span>
                                        <span title="transmission"><i class="fa fa-cog"></i> A</span>
                                   </div>
                              </div>

                              <div class="courses-detail">
                                   <h3><a href="create_station.php">Large: Premium</a></h3>
                                   <p class="lead"><small>from</small> <strong>$99</strong> <small>per weekend</small></p>
                                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                              </div>

                              <div class="courses-info">
                                   <button type="button" data-toggle="modal" data-target=".bs-example-modal" class="section-btn btn btn-primary btn-block">Book Now</button>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section> -->

<section>
<!-- <div class="container">
  <div class="content">
   
  </div>
  <div class="flap"></div>
</div> -->



</section>
  

     <section class="container">
      <h1 class="text-lg text-center margin-bottom" style = "margin-bottom:80px">Frequently Asked Questions?</h1>

      <ul class="faq-accordion text-md">
        <li>
          <!-- <input class="faq-input" type="radio" name="faq" id="faq-1" /> -->
          <label class="faq-label" for="faq-1">How much will I earn?<i class="fa fa-add"></i> </label>
          <div class="faq-content">
            <p>
              Netflix is a streaming service that offers a wide variety of award-winning TV shows, movies, anime, documentaries, and more on thousands of internet-connected devices. <br />
              <br />
              You can watch as much as you want, whenever you want without a single commercial – all for one low monthly price. There's always something new to discover and new TV shows and movies are added every week!
            </p>
          </div>
        </li>

        <li>
          <!-- <input class="faq-input" type="radio" name="faq" id="faq-2" /> -->
          <label class="faq-label" for="faq-2">How will I get paid?<i class="fa fa-add"></i></label>
          <div class="faq-content">
            <p>Watch Netflix on your smartphone, tablet, Smart TV, laptop, or streaming device, all for one fixed monthly fee. Plans range from IDR54,000 to IDR186,000 a month. No extra costs, no contracts.</p>
          </div>
        </li>

        <li>
          <!-- <input class="faq-input" type="radio" name="faq" id="faq-3" /> -->
          <label class="faq-label" for="faq-3">Where can I watch?<i class="fa fa-add"></i></label>
          <div class="faq-content">
            <p>
              Watch anywhere, anytime. Sign in with your Netflix account to watch instantly on the web at netflix.com from your personal computer or on any internet-connected device that offers the Netflix app, including smart TVs,
              smartphones, tablets, streaming media players and game consoles. <br />
              <br />
              You can also download your favorite shows with the iOS, Android, or Windows 10 app. Use downloads to watch while you're on the go and without an internet connection. Take Netflix with you anywhere.
            </p>
          </div>
        </li>

        <li>
          <!-- <input class="faq-input" type="radio" name="faq" id="faq-4" /> -->
          <label class="faq-label" for="faq-4">How do I cancel?<i class="fa fa-add"></i></label>
          <div class="faq-content">
            <p>Netflix is flexible. There are no pesky contracts and no commitments. You can easily cancel your account online in two clicks. There are no cancellation fees – start or stop your account anytime.</p>
          </div>
        </li>

        <li>
          <!-- <input class="faq-input" type="radio" name="faq" id="faq-5" /> -->
          <label class="faq-label" for="faq-5">What can I watch on Netflix?<i class="fa fa-add"></i></label>
          <div class="faq-content">
            <p>Netflix has an extensive library of feature films, documentaries, TV shows, anime, award-winning Netflix originals, and more. Watch as much as you want, anytime you want.</p>
          </div>
        </li>

        <li>
          <!-- <input class="faq-input" type="radio" name="faq" id="faq-6" /> -->
          <label class="faq-label" for="faq-6">Is Netflix good for kids?<i class="fa fa-add"></i></label>
          <div class="faq-content">
            <p>
              The Netflix Kids experience is included in your membership to give parents control while kids enjoy family-friendly TV shows and movies in their own space. <br />
              <br />
              Kids profiles come with PIN-protected parental controls that let you restrict the maturity rating of content kids can watch and block specific titles you don’t want kids to see.
            </p>
          </div>
        </li>
      </ul>
    </section>



     <!-- FOOTER -->
     <?php require 'partials/_footer.php'; ?>
     <!-- FOOTER END -->



     <div class="modal fade bs-example-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
               <div class="modal-content">
                    <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                         <h4 class="modal-title" id="gridSystemModalLabel">Create Your Home A Charging Station</h4>
                    </div>
                    
                    <div class="modal-body">
                         <form action="create_station.php" id="contact-form" method="post">


                              <label class="col-form-label">About Yourself:</label>

                              <input type="text" class="form-control" name="name" placeholder="Enter full name" required>
                              
                              <div class="row">
                                   <div class="col-md-6">
                                        <input type="email" class="form-control" name="email" placeholder="Enter email address" required>
                                   </div>
                                   
                                   <div class="col-md-6">
                                        <input type="tel" class="form-control" name="phone" placeholder="Enter phone" required>
                                   </div>
                              </div>

                              <input type="text" class="form-control" name="address" placeholder="Your Address" required>
                              

                              <label class="col-form-label">Bank Account Details:</label>

                              <div class="row">
                                   <div class="col-md-6">
                                        <input type="number" class="form-control" name="acc_no" placeholder="Account Number" required>
                                   </div>

                                   <div class="col-md-6">
                                        <input type="password" class="form-control" name="cacc_no" placeholder="Confirm Account Number" required>
                                   </div>
                              </div>

                              <div class="row">
                                   <div class="col-md-6">
                                        <input type="text" class="form-control" name="ifsc" placeholder="IFSC Code" required>
                                   </div>

                                   <div class="col-md-6">
                                        <input type="text" class="form-control" name="holder_name" placeholder="Account Holder Name" required>
                                   </div>
                              </div>

                         <!-- </form> -->
                    </div>
                    
                    <div class="modal-footer">
                         <button type="submit" name="upload" class="section-btn btn btn-primary">Submit</button>
                    </div>
               </form>
               </div>
          </div>
     </div>

    

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>