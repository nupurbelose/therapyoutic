<!DOCTYPE html>
<html lang="en">

<head><?php
 require 'config.php';
if (isset($_POST["bookbtn"])) {
  $Name = $_POST["Name"];
    $email = $_POST["email"];
    $event = $_POST["event"];
    $e_number = $_POST["e_number"];
    if($Email = $email)
        {
        $query = "INSERT INTO ticket VALUES('','$Name','$email','$event','$e_number')";
        mysqli_query($conn, $query);

        "<script> alert('Your Seat is Booked, see you there.'); </script>";
        }
      header("location: events.php");
}

?>
 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>TherapYOUtic</title>
    <link rel="icon" type="images/x-icon" href="img/logo.png" />
      <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   
    <!-- Favicons-->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon"> 
  
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
  
    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/venobox/venobox.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- custom css file link  -->
  <link rel="stylesheet" href="events.css">
</head>
<body>
    
    <!-- header section starts  -->

    <header class="header">

      <a href="log.php" class="logo"> <i class="fas fa-heartbeat"></i> TherapYOUtic </a>
      
      <nav class="navbar">
        <a href="home.php">home</a>
        <a href="calendar.php">calendar</a>
        <a href="events.php">Events</a>
        <a href="breath.php">Breath</a>
        <a href="chatroom.php">chat</a> 
        <a href="logout.php">logout</a>  
    
          
          
      </nav>
    
      <div id="menu-btn" class="fas fa-bars"></div>
    
    </header>
    
    <!-- Intro Section -->
    <section id="intro">
      <div class="intro-container wow fadeIn">
        <h3 class="mb-4 pb-0">Event:<br><span>Art Therapy</span></h3>
        <p class="mb-4 pb-0"> Every Sat and Sun at Art Heals- Therapyoutic, Bandra(w)</p>
        <a href="https://youtu.be/4BZynyGzyow" class="venobox play-btn mb-4" data-vbtype="video"
          data-autoplay="true"></a>
          <a href="#about"  class="about-btn scrollto" >About The Event</a>
      </div>
    </section>
  
    <main id="main">
        <!-- About Section -->
 
        <section id="about">
          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <h2>About The Event</h2>
                <p>Art therapy is a technique that hepls in creative expression that can foster healing and mental well-being. </p>
              </div>
              <div class="col-lg-3">
                <h3>Where</h3>
                <p>Art Heals- Therapyoutic, Bandra(w)</p>
              </div>
              <div class="col-lg-3">
                <h3>When</h3>
                <p> Every Saturday and Sunday from 9:00 to 11:00 am & 8:00 to 10:00 pm</p>
              </div>
            </div>
          </div>
        </section>
    
        <!-- Schedule Section -->

    <section id="schedule" class="section-with-bg">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h2>Event Schedule</h2>

        </div>

        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" href="#day-1" role="tab" data-toggle="tab">Art Threapy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-2" role="tab" data-toggle="tab">Human Library</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-3" role="tab" data-toggle="tab">Fund Raisers</a>
          </li>
        </ul>



        <div class="tab-content row justify-content-center">

          <!-- Schdule Day 1 -->
          <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">
<!-- 
            <div class="row schedule-item">
              <div class="col-md-2"></div>
              <div class="col-md-10">

              </div>
            </div> -->

            <div class="row schedule-item">
              <div class="col-md-2"><time>9:00 AM </time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/1.jpg" alt="Brenden Legros">
                </div>
                <h4>Nrutya-qala  <span>by Ms.Nupur Belose</span></h4>
                <p>Dancing your heart out has proven to be a healing mechanism.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>11.00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/2.jpg" alt="Hubert Hirthe">
                </div>
                <h4>Canvas it out <span>by Ms.Sherin John</span></h4>
                <p>We provide you the material,this therapy shines on your inner artist.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>7:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/3.jpg" alt="Cole Emmerich">
                </div>
                <h4>Musical-you <span>by Ms.Sakshi Raghuvanshi</span></h4>
                <p>find yourself in the world of instruments and sing your trauma out</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>9:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/4.jpg" alt="Jack Christiansen">
                </div>
                <h4>foodlicious<span>by Ms.Vaibhavi Patel</span></h4>
                <p>so your mind can focus on important things like food than overthinking </p>
              </div>
            </div>

          </div>
          <!-- End Schdule Day 1 -->

          <!-- Schdule Day 2 -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-2">

            <div class="row schedule-item">
              <div class="col-md-2"><time>10:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/1.jpg" alt="Brenden Legros">
                </div>
                <h4>Mr.mohammed Arfan Shaikh</h4>
                <p>know more about our speaker and their struggle in life through a library session</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>11:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/2.jpg" alt="Hubert Hirthe">
                </div>
                <h4>Mr.Sushant Gaikwad</h4>
                <p>know more about our speaker and their struggle in life through a library session</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>12:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/3.jpg" alt="Cole Emmerich">
                </div>
                <h4>Mr.Nilesh Tribhuvane</h4>
                <p>know more about our speaker and their struggle in life through a library session</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>02:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/4.jpg" alt="Jack Christiansen">
                </div>
                <h4>Mr.Rohan Panigrahi</h4>
                <p>know more about our speaker and their struggle in life through a library sessionp>
              </div>
            </div>



          </div>
          <!-- End Schdule Day 2 -->

          <!-- Schdule Day 3 -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-3">

            <div class="row schedule-item">
              <div class="col-md-2"><time>10:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/2.jpg" alt="Hubert Hirthe">
                </div>
                <h4>charity work for a mental institution.</h4>
                <p>Come attend and help us in charity work for these places.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>12:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/3.jpg" alt="Cole Emmerich">
                </div>
                <h4>Fund raiser for the disabled kids.</h4>
                <p>Come attend and help us in charity work for these places.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>6:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/1.jpg" alt="Brenden Legros">
                </div>
                <h4>charity for people of poverty.</h4>
                <p>Come attend and help us in charity work for these places.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>08:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/4.jpg" alt="Jack Christiansen">
                </div>
                <h4>fund raiser for the orphans.</h4>
                <p>Come attend and help us in charity work for these places.</p>
              </div>
            </div>

        </div>

    </div>

  </section>
          <!-- End Schdule Day 2 -->


        <!-- Buy Ticket Section -->
                    <section id="buy-tickets" class="section-with-bg wow fadeInUp">
                      <div class="container">
                
                        <div class="section-header">
                          <h2>Book Tickets</h2>
                        
                        </div>
                
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="card mb-5 mb-lg-0">
                              <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">Art Threapy</h5>
                                <h6 class="card-price text-center">500rs.</h6>
                                <hr>
                                <ul class="fa-ul">
                                  <li><span class="fa-li"><i class="fa fa-shopping-cart"></i></span>Nrutya-qala (e1)</li>
                                  <li><span class="fa-li"><i class="fa fa-shopping-cart"></i></span>canvas it out (e2)</li>
                                  <li><span class="fa-li"><i class="fa fa-shopping-cart"></i></span>Musical-you (e3)</li>
                                  <li><span class="fa-li"><i class="fa fa-shopping-cart"></i></span>foodlicious (e4)</li>
                                  
                                </ul>
                                <hr>
                                <div class="text-center">
                                  <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="standard-access">Book Now</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="card mb-5 mb-lg-0">
                              <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">Human Library</h5>
                                <h6 class="card-price text-center">300rs.</h6>
                                <hr>
                                <ul class="fa-ul">
                                  <li><span class="fa-li"><i class="fa fa-user"></i></span>mr.mohammed arfan shaikh (e1)</li>
                                  <li><span class="fa-li"><i class="fa fa-user"></i></span>mr.sushant gaikwad (e2)</li>
                                  <li><span class="fa-li"><i class="fa fa-user"></i></span>mr.nilesh Tribhuvane (e3) </li>
                                  <li><span class="fa-li"><i class="fa fa-user"></i></span>mr.rohan Panigrahi (e4) </li>
                                 
                                </ul>
                                <hr>
                                <div class="text-center">
                                  <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="pro-access">Book Now</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Pro Tier -->
                          <div class="col-lg-4">
                            <div class="card">
                              <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">Fundraisers</h5>
                                <h6 class="card-price text-center">free</h6>
                                <hr>
                                <ul class="fa-ul">
                                  <li><span class="fa-li"><i class="fa fa-check"></i></span>mental institution (e1) </li>
                                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Disabled kids (e2) </li>
                                  <li><span class="fa-li"><i class="fa fa-check"></i></span>people of poverty (e3) </li>
                                  <li><span class="fa-li"><i class="fa fa-check"></i></span>orphans (e4) </li>
             
                                </ul>
                                <hr>
                                <div class="text-center">
                                  <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="premium-access">Book Now</button>
                                </div>
                
                              </div>
                            </div>
                          </div>
                        </div>
                
                      </div>
                
                      <!-- Modal Order Form -->
                      <div id="buy-ticket-modal" class="modal fade">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Book Tickets</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form method="POST" action="#">
                                <div class="form-group">
                                  <input type="text" class="form-control" name="Name" placeholder="Your Name">
                                </div>
                                <div class="form-group">
                                  <input type="text" class="form-control" name="email" placeholder="Your Email">
                                </div>
                                <div class="form-group">
                                  <select id="ticket-type" name="event" class="form-control" >
                                    <option value="">Select Your Event</option>
                                    <option value="Art Threapy">Art Threapy</option>
                                    <option value="Human Library">Human Library</option>
                                    <option value="Fund Raisers">Fund Raisers</option>
                                  </select><br>
                                  <select id="ticket-type" name="e_number" class="form-control" >
                                    <option value="">Select Your Event Number </option>
                                    <option value="E1">E1</option>
                                    <option value="E2">E2</option>
                                    <option value="E3">E3</option>
                                    <option value="E4">E4</option>
                                  </select>
                                </div>
                                <div class="text-center">
                                  <button type="submit" class="btn" name="bookbtn">Book Now</button>
                                </div>
                              </form>
                            </div>
                          </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                      </div><!-- /.modal -->
                
                    </section>
                

          <!-- reviews Section -->

          <section id="hotels" class="section-with-bg wow fadeInUp">
      
            <div class="container">
              <div class="section-header">
                <h2>Reviews</h2>
                <p>Chcek these reviews by the Community</p>
              </div>
      
              <div class="row">
      
                <div class="col-lg-4 col-md-6">
                  <div class="hotel">
                    <div class="img/hotel-img">
                      <img src="img/hotels/1.jpg" alt="Hotel 1" class="img-fluid">
                    </div>
                    <h3><a href="#">review 1</a></h3>
                    <div class="stars">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <p>i really liked the event</p>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-6">
                  <div class="hotel">
                    <div class="hotel-img">
                      <img src="img/hotels/2.jpg" alt="Hotel 2" class="img-fluid">
                    </div>
                    <h3><a href="#">review2</a></h3>
                    <div class="stars">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-half-full"></i>
                    </div>
                    <p>i really liked the event</p>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-6">
                  <div class="hotel">
                    <div class="hotel-img">
                      <img src="img/hotels/3.jpg" alt="Hotel 3" class="img-fluid">
                    </div>
                    <h3><a href="#">review 3</a></h3>
                    <div class="stars">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <p>i really liked the event</p>
                  </div>
                </div>
      
              </div>
            </div>
      
          </section>
      
          <!--==========================
            Gallery Section
          ============================-->
          <!-- <section id="gallery" class="wow fadeInUp">
      
            <div class="container">
              <div class="section-header">
                <h2>Gallery</h2>
                <p>Check our gallery from the recent events</p>
              </div>
            </div>
      
            <div class="owl-carousel gallery-carousel">
              <a href="img/gallery/1.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/1.jpg" alt=""></a>
              <a href="img/gallery/2.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/2.jpg" alt=""></a>
              <a href="img/gallery/3.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/3.jpg" alt=""></a>
              <a href="img/gallery/4.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/4.jpg" alt=""></a>
              <a href="img/gallery/5.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/5.jpg" alt=""></a>
              <a href="img/gallery/6.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/6.jpg" alt=""></a>
              <a href="img/gallery/7.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/7.jpg" alt=""></a>
              <a href="img/gallery/8.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/8.jpg" alt=""></a>
            </div>
      
          </section> -->


    <div class="credit"> created by <span>Nupur & Sherin</span> </div>

</section>
    <!-- custom js file link  -->
<script src="events.js"></script>

<!-- JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery/jquery-migrate.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/superfish/hoverIntent.js"></script>
<script src="lib/superfish/superfish.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/venobox/venobox.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Contact Form JavaScript File -->
<script src="contactform/contactform.js">
  </script>
  <!-- <script>
    let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}
  </script> -->
</body>
</html>


  <meta charset="utf-8">
  <title>Events</title>
  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   
    <!-- Favicons-->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon"> 
  
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
  
    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/venobox/venobox.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- custom css file link  -->
  <link rel="stylesheet" href="events.css">
</head>
<body>
    
    <!-- header section starts  -->

    <header class="header">

      <a href="log.php" class="logo"> <i class="fas fa-heartbeat"></i> TherapYOUtic </a>
      
      <nav class="navbar">
          <a href="home.php">home</a>
          <!-- <a href="#services">services</a>
          <a href="#about">about</a>
          <a href="#doctors">doctors</a>
          <a href="#appointments">appointments</a> -->
          <!-- <a href="#insights">insights</a> -->
          <a href="calendar.php">calendar</a>
          <a href="events.php">Events</a>
          <a href="Post.php">Post</a>
          <a href="log.php">login</a>
    
          
          
      </nav>
    
      <div id="menu-btn" class="fas fa-bars"></div>
    
    </header>
    
    <!-- Intro Section -->
    <section id="intro">
      <div class="intro-container wow fadeIn">
        <h3 class="mb-4 pb-0">Event:<br><span>Art Therapy</span></h3>
        <p class="mb-4 pb-0"> Every Sat and Sun at Art Heals- Therapyoutic, Bandra(w)</p>
        <a href="https://youtu.be/4BZynyGzyow" class="venobox play-btn mb-4" data-vbtype="video"
          data-autoplay="true"></a>
          <a href="#about"  class="about-btn scrollto" >About The Event</a>
      </div>
    </section>
  
    <main id="main">
        <!-- About Section -->
 
        <section id="about">
          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <h2>About The Event</h2>
                <p>Art therapy is a technique that hepls in creative expression that can foster healing and mental well-being. </p>
              </div>
              <div class="col-lg-3">
                <h3>Where</h3>
                <p>Art Heals- Therapyoutic, Bandra(w)</p>
              </div>
              <div class="col-lg-3">
                <h3>When</h3>
                <p> Every Saturday and Sunday from 9:00 to 11:00 am & 8:00 to 10:00 pm</p>
              </div>
            </div>
          </div>
        </section>
    
        <!-- Schedule Section -->

    <section id="schedule" class="section-with-bg">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h2>Event Schedule</h2>

        </div>

        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" href="#day-1" role="tab" data-toggle="tab">Art Threapy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-2" role="tab" data-toggle="tab">Human Library</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-3" role="tab" data-toggle="tab">Fund Raisers</a>
          </li>
        </ul>



        <div class="tab-content row justify-content-center">

          <!-- Schdule Day 1 -->
          <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">
<!-- 
            <div class="row schedule-item">
              <div class="col-md-2"></div>
              <div class="col-md-10">

              </div>
            </div> -->

            <div class="row schedule-item">
              <div class="col-md-2"><time>9:00 AM </time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/1.jpg" alt="Brenden Legros">
                </div>
                <h4>Nrutya-qala  <span>by Ms.Nupur Belose</span></h4>
                <p>Dancing your heart out has proven to be a healing mechanism.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>11.00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/2.jpg" alt="Hubert Hirthe">
                </div>
                <h4>Canvas it out <span>by Ms.Sherin John</span></h4>
                <p>We provide you the material,this therapy shines on your inner artist.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>7:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/3.jpg" alt="Cole Emmerich">
                </div>
                <h4>Musical-you <span>by Ms.Sakshi Raghuvanshi</span></h4>
                <p>find yourself in the world of instruments and sing your trauma out</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>9:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/4.jpg" alt="Jack Christiansen">
                </div>
                <h4>foodlicious<span>by Ms.Vaibhavi Patel</span></h4>
                <p>so your mind can focus on important things like food than overthinking </p>
              </div>
            </div>

          </div>
          <!-- End Schdule Day 1 -->

          <!-- Schdule Day 2 -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-2">

            <div class="row schedule-item">
              <div class="col-md-2"><time>10:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/1.jpg" alt="Brenden Legros">
                </div>
                <h4>Mr.mohammed Arfan Shaikh</h4>
                <p>know more about our speaker and their struggle in life through a library session</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>11:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/2.jpg" alt="Hubert Hirthe">
                </div>
                <h4>Mr.Sushant Gaikwad</h4>
                <p>know more about our speaker and their struggle in life through a library session</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>12:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/3.jpg" alt="Cole Emmerich">
                </div>
                <h4>Mr.Nilesh Tribhuvane</h4>
                <p>know more about our speaker and their struggle in life through a library session</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>02:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/4.jpg" alt="Jack Christiansen">
                </div>
                <h4>Mr.Rohan Panigrahi</h4>
                <p>know more about our speaker and their struggle in life through a library sessionp>
              </div>
            </div>



          </div>
          <!-- End Schdule Day 2 -->

          <!-- Schdule Day 3 -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-3">

            <div class="row schedule-item">
              <div class="col-md-2"><time>10:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/2.jpg" alt="Hubert Hirthe">
                </div>
                <h4>charity work for a mental institution.</h4>
                <p>Come attend and help us in charity work for these places.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>12:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/3.jpg" alt="Cole Emmerich">
                </div>
                <h4>Fund raiser for the disabled kids.</h4>
                <p>Come attend and help us in charity work for these places.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>6:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/1.jpg" alt="Brenden Legros">
                </div>
                <h4>charity for people of poverty.</h4>
                <p>Come attend and help us in charity work for these places.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>08:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/4.jpg" alt="Jack Christiansen">
                </div>
                <h4>fund raiser for the orphans.</h4>
                <p>Come attend and help us in charity work for these places.</p>
              </div>
            </div>

        </div>

    </div>

  </section>
          <!-- End Schdule Day 2 -->


        <!-- Buy Ticket Section -->
                    <section id="buy-tickets" class="section-with-bg wow fadeInUp">
                      <div class="container">
                
                        <div class="section-header">
                          <h2>Buy Tickets</h2>
                        
                        </div>
                
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="card mb-5 mb-lg-0">
                              <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">Art Threapy</h5>
                                <h6 class="card-price text-center">500rs.</h6>
                                <hr>
                                <ul class="fa-ul">
                                  <li><span class="fa-li"><i class="fa fa-shopping-cart"></i></span>Nrutya-qala (e1)</li>
                                  <li><span class="fa-li"><i class="fa fa-shopping-cart"></i></span>canvas it out (e2)</li>
                                  <li><span class="fa-li"><i class="fa fa-shopping-cart"></i></span>Musical-you (e3)</li>
                                  <li><span class="fa-li"><i class="fa fa-shopping-cart"></i></span>foodlicious (e4)</li>
                                  
                                </ul>
                                <hr>
                                <div class="text-center">
                                  <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="standard-access">Buy Now</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="card mb-5 mb-lg-0">
                              <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">Human Library</h5>
                                <h6 class="card-price text-center">300rs.</h6>
                                <hr>
                                <ul class="fa-ul">
                                  <li><span class="fa-li"><i class="fa fa-user"></i></span>mr.mohammed arfan shaikh (e1)</li>
                                  <li><span class="fa-li"><i class="fa fa-user"></i></span>mr.sushant gaikwad (e2)</li>
                                  <li><span class="fa-li"><i class="fa fa-user"></i></span>mr.nilesh Tribhuvane (e3) </li>
                                  <li><span class="fa-li"><i class="fa fa-user"></i></span>mr.rohan Panigrahi (e4) </li>
                                 
                                </ul>
                                <hr>
                                <div class="text-center">
                                  <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="pro-access">Buy Now</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Pro Tier -->
                          <div class="col-lg-4">
                            <div class="card">
                              <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">Fundraisers</h5>
                                <h6 class="card-price text-center">free</h6>
                                <hr>
                                <ul class="fa-ul">
                                  <li><span class="fa-li"><i class="fa fa-check"></i></span>mental institution (e1) </li>
                                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Disabled kids (e2) </li>
                                  <li><span class="fa-li"><i class="fa fa-check"></i></span>people of poverty (e3) </li>
                                  <li><span class="fa-li"><i class="fa fa-check"></i></span>orphans (e4) </li>
             
                                </ul>
                                <hr>
                                <div class="text-center">
                                  <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="premium-access">Buy Now</button>
                                </div>
                
                              </div>
                            </div>
                          </div>
                        </div>
                
                      </div>
                
                      <!-- Modal Order Form -->
                      <div id="buy-ticket-modal" class="modal fade">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Buy Tickets</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form method="POST" action="#">
                                <div class="form-group">
                                  <input type="text" class="form-control" name="your-name" placeholder="Your Name">
                                </div>
                                <div class="form-group">
                                  <input type="text" class="form-control" name="your-email" placeholder="Your Email">
                                </div>
                                <div class="form-group">
                                  <select id="ticket-type" name="ticket-type" class="form-control" >
                                    <option value="">Select Your Event</option>
                                    <option value="standard-access">Art Threapy</option>
                                    <option value="pro-access">Human Library</option>
                                    <option value="premium-access">Fund Raisers</option>
                                  </select><br>
                                  <select id="ticket-type" name="ticket-type" class="form-control" >
                                    <option value="">Select Your Event Number </option>
                                    <option value="standard-access">E1</option>
                                    <option value="pro-access">E2</option>
                                    <option value="premium-access">E3</option>
                                    <option value="premium-access">E4</option>
                                  </select>
                                </div>
                                <div class="text-center">
                                  <button type="submit" class="btn">Buy Now</button>
                                </div>
                              </form>
                            </div>
                          </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                      </div><!-- /.modal -->
                
                    </section>
                

          <!-- reviews Section -->

          <section id="hotels" class="section-with-bg wow fadeInUp">
      
            <div class="container">
              <div class="section-header">
                <h2>Reviews</h2>
                <p>Chcek these reviews by the Community</p>
              </div>
      
              <div class="row">
      
                <div class="col-lg-4 col-md-6">
                  <div class="hotel">
                    <div class="img/hotel-img">
                      <img src="img/hotels/1.jpg" alt="Hotel 1" class="img-fluid">
                    </div>
                    <h3><a href="#">review 1</a></h3>
                    <div class="stars">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <p>i really liked the event</p>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-6">
                  <div class="hotel">
                    <div class="hotel-img">
                      <img src="img/hotels/2.jpg" alt="Hotel 2" class="img-fluid">
                    </div>
                    <h3><a href="#">review2</a></h3>
                    <div class="stars">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-half-full"></i>
                    </div>
                    <p>i really liked the event</p>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-6">
                  <div class="hotel">
                    <div class="hotel-img">
                      <img src="img/hotels/3.jpg" alt="Hotel 3" class="img-fluid">
                    </div>
                    <h3><a href="#">review 3</a></h3>
                    <div class="stars">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <p>i really liked the event</p>
                  </div>
                </div>
      
              </div>
            </div>
      
          </section>
      
          <!--==========================
            Gallery Section
          ============================-->
          <!-- <section id="gallery" class="wow fadeInUp">
      
            <div class="container">
              <div class="section-header">
                <h2>Gallery</h2>
                <p>Check our gallery from the recent events</p>
              </div>
            </div>
      
            <div class="owl-carousel gallery-carousel">
              <a href="img/gallery/1.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/1.jpg" alt=""></a>
              <a href="img/gallery/2.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/2.jpg" alt=""></a>
              <a href="img/gallery/3.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/3.jpg" alt=""></a>
              <a href="img/gallery/4.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/4.jpg" alt=""></a>
              <a href="img/gallery/5.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/5.jpg" alt=""></a>
              <a href="img/gallery/6.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/6.jpg" alt=""></a>
              <a href="img/gallery/7.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/7.jpg" alt=""></a>
              <a href="img/gallery/8.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/8.jpg" alt=""></a>
            </div>
      
          </section> -->


    <div class="credit"> created by <span>Nupur & Sherin</span> </div>

</section>
    <!-- custom js file link  -->
<script src="events.js"></script>

<!-- JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery/jquery-migrate.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/superfish/hoverIntent.js"></script>
<script src="lib/superfish/superfish.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/venobox/venobox.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Contact Form JavaScript File -->
<script src="contactform/contactform.js">
  </script>
  <script>
    let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}
  </script>
</body>
</html>

