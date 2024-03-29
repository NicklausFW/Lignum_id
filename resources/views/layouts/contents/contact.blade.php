<section>
    <div class="d-flex h-100 align-items-center">
        <div class="container">
            <header class="text-center mb-5">
            <h2 class="text-uppercase lined">Contact</h2>
            </header>
            <div class="row">
              <div class="col-lg-6">
                <form action="{{route('contact.store')}}" method="post" class="contact-form">
                @csrf
                  <div class="row">
                    <div class="form-group col-lg-6">
                      <label for="firstName">Your firstname *</label>
                      <input id="firstName" type="text" name="firstname" placeholder="Enter your firstname" class="form-control" required>
                    </div>
                    <div class="form-group col-lg-6">
                      <label for="lastName">Your lastname *</label>
                      <input id="lastName" type="text" name="lastname" placeholder="Enter your lastname" class="form-control"required>
                    </div>
                    <div class="form-group col-lg-12">
                      <label for="email">Your email *</label>
                      <input id="email" type="email" name="email" placeholder="Enter your email" class="form-control"required>
                    </div>
                    <div class="form-group col-lg-12">
                      <label for="message">Your message for us *</label>
                      <textarea id="message" name="message" placeholder="Enter your message" class="form-control"required></textarea>
                    </div>
                    <div class="form-group col-lg-12">
                      <button type="submit" class="btn btn-outline-primary w-100">Send message</button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-lg-6">
                <p>Contact us with any questions or inqueries or call 087860827495. We sehould be happy to answer your questions. Reach out to us and we'll respond as soon as we can.</p>
                <p>Even if there is an issue that you would like to inform us. Let us know and we'll do our best to solve the issue.</p>
                <ul class="mb-0 list-inline text-center">
                  <li class="list-inline-item"><a href="#" class="social-link social-link-facebook"><i class="fab fa-facebook-f"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="social-link social-link-twitter"><i class="fab fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="social-link social-link-google-plus"><i class="fab fa-google-plus-g"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="social-link social-link-instagram"><i class="fab fa-instagram"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="social-link social-link-email"><i class="fas fa-envelope"></i></a></li>
                </ul>
              </div>
            </div>
            <div id="allert">
              @include('inc.message')
            </div>
            <footer class="py-5 mt-5">
              <div class="row">
                <div class="col-lg-6 text-center text-lg-left">
                  <p class="font-italic mb-0 text-gray">&copy; 2019 LIGNUM Indonesia, Surabaya</p>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                  <p class="font-italic mb-0 text-gray">&copy; Template by <a href="https://bootstrapious.com/p/big-bootstrap-tutorial" class="text-gray">Bootstrapious</a></p>
                </div>
              </div>
            </footer>
          </div>
        </div>
      </section>