<!DOCTYPE html>
<?php
get_header();
?>

<body>
    <header>
        <nav class="navbar fixed-top navbar-expand-sm navbar-dark">
            <img id="header-logo" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3260985/cropped-logo_font_only-1.png" alt="lemak-logo"></img>
            <button id="menu-button" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                    <a id="menu-button" class="nav-item nav-link" href="#section-gallery">Menu</a>
                    <a class="nav-item nav-link" href="#section-location">Location</a>
                    <a class="nav-item nav-link" href="#section-contact">Contact</a>
                </div>
            </div>
        </nav>
        <h3>Serving you comfort food</h3>
   </header>
   
    <div id="section-about">
        <div class="section-title">
            <div class="section-title-line"></div>
            <h3>What we do</h3>
            <div class="section-title-line"></div>
        </div>
        <div class="row">
            <div class="card col-lg p-0">
                <img src="http://lemak.com.au/wp-content/uploads/2019/09/Lemak_BeefRandang.jpg" class="card-img-top" alt="Beef Rendang">
                <div class="card-body">
                    <h5 class="card-title">Delicious, authentic malaysian food</h5>
                    <p class="card-text">Bringing the taste of Asia to you</p>
                </div>
            </div>
            <div class="card col-lg p-0">
                <img src="http://lemak.com.au/wp-content/uploads/2019/09/Lemak_Hero.jpg" class="card-img-top" alt="Lemak Banquet">
                <div class="card-body">
                    <h5 class="card-title">Come in for some fast and tasty street food,</h5>
                    <p class="card-text">or order up a banquet!</p>
                </div>
            </div>
            <div class="card col-lg p-0">
                <img src="http://lemak.com.au/wp-content/uploads/2019/09/Lemak_ChickenCurryDryNoodles.jpg" class="card-img-top" alt="Chicken Curry Dry Noodles">
                <div class="card-body">
                    <h5 class="card-title">A taste for any occasion</h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
    </div>

    <div id="section-gallery">
        <div class="section-title">
            <div class="section-title-line"></div>
            <h3>What's on the menu?</h3>
            <div class="section-title-line"></div>
        </div>
        <div class="gallery-container">
                <div id="carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="http://lemak.com.au/wp-content/uploads/2019/09/Lemak_LemakChickenBurger.jpg" alt="First slide">
                                <div class="carousel-caption">
                                    <h5>Lemak chicken burger</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="http://lemak.com.au/wp-content/uploads/2019/09/Lemak_RotiCanai.jpg" alt="Second slide">
                                <div class="carousel-caption">
                                        <h5>Fresh Roti</h5>
                                    </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="http://lemak.com.au/wp-content/uploads/2019/09/Lemak_SignatureFriedChicken.jpg" alt="Third slide">
                                <div class="carousel-caption">
                                        <h5>Signature Fried Chicken</h5>
                                    </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="http://lemak.com.au/wp-content/uploads/2019/09/Lemak_CharKwayTeow.jpg" alt="Second slide">
                                <div class="carousel-caption">
                                        <h5>Char Kway Teow</h5>
                                    </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="http://lemak.com.au/wp-content/uploads/2019/09/Lemak_ChickenPrawnMeeGoreng.jpg" alt="Third slide">
                                <div class="carousel-caption">
                                        <h5>Chicken & Prawn Mee goreng</h5>
                                    </div>
                            </div>
                        </div>
                    </div>
            <div class="row no-gutters">
                <div class="card col-lg p-0 m-0">
                    <a class="card-img-top gallery-image" href="http://lemak.com.au/wp-content/uploads/2019/06/finalmenu2019-1-1024x341.jpg"><img src="http://lemak.com.au/wp-content/uploads/2019/06/finalmenu2019-1-1024x341.jpg"> </a>
                </div>
            </div>
        </div>
    </div>

    <div id="section-location">
        <div class="section-title">
            <div class="section-title-line"></div>
            <h3>Find us</h3>
            <div class="section-title-line"></div>
        </div>

        <div class="mapouter container-fluid">
            <div class="row">
                <div class="gmap_canvas col-md">
                    <p>Garden City</p>
                    <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=lemak%208%20street&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
            
                <div class="gmap_canvas col-md">
                    <p>East Brisbane</p>
                    <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=lemak%20east%20brisbane'&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
            </div>
        </div>
    </div>
   
<div id="section-contact">
        <div class="section-title">
                <div class="section-title-line"></div>
                <h3>Drop us a line</h3>
                <div class="section-title-line"></div>
            </div>
    <form  action="https://formspree.io/ssjtin28@hotmail.com" method="POST">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="John Smith">
        </div>
        <div class="form-group">
            <label for="emailField">Email address</label>
            <input type="email" name="_replyto" class="form-control" id="emailField" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea></textarea>
        </div>
        <div id="button-container">
            <button type="submit" value="Send" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
   
<div class="section-info">
        <div class="section-title">
                <div class="section-title-line"></div>
                <h3>Contact info</h3>
                <div class="section-title-line"></div>
            </div>
    <div id="contact-container" class="container-fluid">
       <div class="row">
          <div class="card col-sm">
             <div class="card-body">
                <h5>Lemak 8 Street</h5>
                <p class="card-text">
                   <span>Westfield Garden City Shopping Centre</span><br>
                   Cnr Logan & Kessels Rd Upper Mt Gravatt<br>
                   Brisbane QLD 4122<br>
                   Located in the 8 Street Food Precinct<br><br>
                   <span class="contact-number">(07) 3420 0104</span>
                </p>
             </div>
          </div>
          <div class="card col-sm">
             <div class="card-body">
                <h5>Lemak East Brisbane</h5>
                <p class="card-text">
                   Shop 5 / 53 Lytton Rd<br>
                   East Brisbane QLD 4169<br><br><br><br>
                   <span class="contact-number">(07) 3393 2982</span>
                </p>
             </div>
          </div>
       </div>
    </div>
    <div class="row justify-content-center" id="email">
      <ion-icon name="mail"></ion-icon>
      <h6>E-mail: contact@lemak.com.au</h6>
    </div>
 </div>

 <?php
 get_footer();
 ?>
