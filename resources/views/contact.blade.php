<x-layout>
    <div id="contact" class="paddsection">
      <div class="container">
        <div class="contact-block1">
          <div class="row">
            <div class="col-lg-6">

              <div class="contact-contact">
                <h2 class="mb-30">Hire me!!</h2>
                <ul class="contact-details">
                  <li><span>jln. Pertanian BBPMKP</span></li>
                  <li><span>Kec. Ciawi, Kab. Bogor, Indonesia</span></li>
                  <li><span>+08954321</span></li>
                  <li><span>kafiyanurilkautsar@smkwikrama.sch.id</span></li>
                </ul>
                <div class="ratio ratio-1x1">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d546.6505292865891!2d106.8636429534286!3d-6.667448771572519!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2s!5e0!3m2!1sid!2sid!4v1718285395791!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
            </div>
            
            <div class="col-lg-6">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row gy-3">
                  <div class="col-lg-6">
                    <div class="form-group contact-block1">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <textarea class="form-control" name="message" placeholder="Message" required></textarea>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                  <div class="mt-0">
                    <input type="submit" class="btn btn-defeault btn-send" value="Send message">
                  </div>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
</x-layout>