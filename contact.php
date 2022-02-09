<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
      <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/1ec3bde6cd.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Contact</title>
  </head>
  <body>
    <?php include("./components/nav.php"); ?>

    <div class="aboutpic-intro">
      <img class="img-responsive" src="./images/contact.jpg" alt="About" >
      <h1 style="color:white">Contact Us</h1>
    </div>

    <div class="customer-service">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="contact-intro">
              <h3> We would love to hear from you! </h3>
              <p class="strong-text">For customer <br /> service and <br /> support</p>
              <p> Contact us for answers to all questions related to our services</p>
            </div>
          </div>
          <div class="col-md-6">
            <img class="img-responsive" src="./images/wallphone.jpg" alt="Call Us"/> 
          </div>
        </div>
      </div>
    </div>

    <div class="contact-information">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3 class="contact-intro">You can reach us by:</h3>
          </div>
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-phone"></i>
              <h4>Phone</h4>
              <p><a href="tel: +25470000000"> +25470000000</a> 
                <br>
                <a href="tel: +254700000"> +254700000</a>
              </p>
              <p> </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-envelope"></i>
              <h4>Email</h4>
              <p>info@fundwallet.co.ke</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-map-marker"></i>
              <h4>Location</h4>
              <address>Njembu Investment House 
                Near Redeemed Gospel Church,
                 <br>Buruburu, NAIROBI.
            </address>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="callback-form">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Send Us an enquiry</h2>
              <p>A question? An issue? Drop us a line and we'll see how we can help.
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
            <?php
                if (!empty($errors)) {
                  $allErrors = join('<br/>', $errors);
                  $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
                }?>

              <form id="contact" action="./sendMail.php" method="POST" name="contact"  autocomplete="off" >
              <?php echo((!empty($errorMessage)) ? $errorMessage : '') ?>
                <div class="row">
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address">
                      <div id="email_error"></div>
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject">
                      <div id="subject_error"></div>
                    </fieldset>
                  </div>
                  <div class="col-lg-12  col-sm-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" ></textarea>
                      <div id="message_error"></div>
                    </fieldset>
                  </div>
                  <div class="col-lg-12  col-sm-12">
                    
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button"   >Send Message</button>
                      

                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>





  
    <!-- footer starts here -->
    <?php include("./components/footer.php") ?>
    <script src="./main.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
      crossorigin="anonymous">
    </script>
  </body>
</html>