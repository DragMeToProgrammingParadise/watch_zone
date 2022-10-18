<?php 

include 'partials/header.php';

?>

  <!--Section: Contact v.2-->
  <section class="mb-4">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us
      directly. Our team will come back to you within
      a matter of hours to help you.</p>

    <div class="row align-items-center justify-content-center">

      <!--Grid column-->
      <div class="col-md-9 mb-md-0 mb-5">
        <form id="contact-form" name="contact-form" action="mail.php" method="POST">

          <!--Grid row-->
          <div class="row">

            <!--Grid column-->
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" id="name" name="name" class="form-control">
                <label for="name" class=" mb-4">Your name</label>
              </div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-6 myclass">
              <div class="md-form mb-0">
                <input type="text" id="email" name="email" class="form-control">
                <label for="email" class=" mb-4">Your email</label>
              </div>
            </div>
            <!--Grid column-->

          </div>
          <!--Grid row-->

          <!--Grid row-->
          <div class="row">
            <div class="col-md-12">
              <div class="md-form mb-0">
                <input type="number" id="mobile-number" name="mobile-number" class="form-control">
                <label for="mobile-number" class="mb-4">Mobile Number</label>
              </div>
            </div>
          </div>
          <!--Grid row-->

          <!--Grid row-->
          <div class="row">
            <div class="col-md-12">
              <div class="md-form mb-0">
                <input type="text" id="subject" name="subject" class="form-control">
                <label for="subject" class="mb-4">Subject</label>
              </div>
            </div>
          </div>
          <!--Grid row-->

          <!--Grid row-->
          <div class="row">

            <!--Grid column-->
            <div class="col-md-12">

              <div class="md-form">
                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                <label for="message" class="mb-2">Your message</label>
              </div>

            </div>
          </div>
          <!--Grid row-->

        </form>

        <div class="text-center text-md-left">
          <a class="btn btn-outline-danger" onclick="document.getElementById('contact-form').submit();">Send</a>
        </div>
        <div class="status"></div>
      </div>




    </div>

  </section>



  <!-- Footer -->

  <?php 

include 'partials/footer.php';

?>