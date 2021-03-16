@extends('frontend.master')
@section('title','Welcome - NexCorpora')
@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" style="background: linear-gradient(35deg, #772953eb 30%, #e95420ba);">
      <a href="#" class="hero-logo" data-aos="zoom-in"><img src="assets/img/hero-logo.png" alt="" style="max-width: 25%;"></a>
      <h1 data-aos="zoom-in">Selamat Datang Di Nex Corpora</h1>
      <h2 data-aos="fade-up">Kami Adalah Start-up Basis Kuliner, Rumah Bagi <a href="http://manre.id">Manre</a></h2>
      <a data-aos="fade-up" data-aos-delay="200" href="#about" class="btn-get-started scrollto">Selengkapnya..</a>
    </div>
  </section><!-- End Hero -->
@include('frontend.components.navbar')
  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Tentang Kami</h2>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <div class="image">
              <img src="assets/img/about.jpg" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-left">
            <div class="content pt-4 pt-lg-0 pl-0 pl-lg-3 ">
              <h3>Kami, Nex Corpora</h3>
              <p class="font-italic">
              Nex Corpora adalah sebuah perusahaan rintisan yang bergerak di bidang aplikasi berbasis kuliner.
              </p>
              <p>
              Kami bermimpi menjadi perusahaan teknologi yang berfokus pada dunia kuliner terbesar dalam lingkup
              Indonesia dan Internasional. Melalui produk yang diawali dari dapur para ibu rumah tangga menjadi
              makanan yang disukai dengan harga yang terjangkau, dukungan teknologi, pelayanan cepat dan ramah,
              pengendalian kualitas serta riset pasar dan pengembangan kreatif.</p>
              <p>
              Kami berjuang untuk menjadi perusahaan terkemuka di Indonesia dan di negara-negara sekitar dengan
              pendekatan "New Retail" dimana tak ada lagi batasan dari interaksi online dan offline dalam upaya
              kami memenuhi kebutuhan pelanggan akan makanan berkualitas dan pelayanan terbaik.
              </p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Layanan Kami</h2>
          <p>Di Nex Corpora, kami membangun Manre<br></p>
          <hr>
        </div>

        <div class="row">
          <div class="col-md-12" data-aos="fade-down" style="text-align:center;max-width:80%;display:block;margin:0 auto 30px auto;">
          <p><b>Manre</b> diambil dari singkatan makanan dan resep, menjadi sebuah perusahaan berbasis
          teknologi berfokus pada bidang kuliner kaki lima hingga restoran bintang 5 dengan pertumbuhan
          tercepat di Indonesia. <b>Manre</b> dimulai dari mimpi para pendirinya untuk menyebarkan
          kecintaan mereka akan dunia kuliner di Indonesia kepada masyarakat luas dan dunia.</p>
          </div>
          <div class="image col-md-12" data-aos="fade-up" data-aos-delay="100">
              <img src="assets/img/services.jpg" alt="" style="max-width:60%;display:block;margin:0 auto;">
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Featured Section ======= -->
    <section id="featured" class="featured">
      <div class="container">

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <figure>
                  <img src="assets/img/bisnis.png" alt="" class="img-fluid" style="margin:0 auto;display:block;">
                </figure>
              </div>
              <div class="tab-pane" id="tab-2">
                <figure>
                  <img src="assets/img/food.png" alt="" class="img-fluid" style="margin:0 auto;display:block;">
                </figure>
              </div>
              <div class="tab-pane" id="tab-3">
                <figure>
                  <img src="assets/img/store.png" alt="" class="img-fluid" style="margin:0 auto;display:block;">
                </figure>
              </div>
              <div class="tab-pane" id="tab-4">
                <figure>
                  <img src="assets/img/express.png" alt="" class="img-fluid" style="margin:0 auto;display:block;">
                </figure>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-left">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
                  <h4>Manre Bisnis</h4>
                  <p>Dapatkan penawaran menarik bermitra usaha bersama Manre, dan raih beragam keuntungan.</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
                  <h4>Manre Food</h4>
                  <p>Dapatkan akses ke berbagai menu makanan dan resep dalam pembuatannya di Manre, dan bagikan.</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
                  <h4>Manre Store</h4>
                  <p>Belanja keperluan stok bahan baku dan utilitas dapur untuk menunjang usahamu, bisa.</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">
                  <h4>Manre Express</h4>
                  <p>Ingin mengantarkan barang dan makanan, atau bergabung menjadi mitra kurir Manre, bisa.</p>
                </a>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End Featured Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2 style="margin-top:30px;">Lini Usaha Kami</h2>
          <p>Di Nex Corpora, kami juga memiliki unit usaha kuliner ternama dan dicintai masyarakat 
          lokal</p>
        </div>

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in">
            <a href="https://razakopi.com"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></a>
          </div>

          <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="100">
            <a href="https://zabarger.com"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></a>
          </div>

          <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="200">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="300">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="400">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="500">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">
        <div class="quote-icon">
          <i class="bx bxs-quote-right"></i>
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                </p>
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                </p>
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section  -->

    <!-- ======= Team Section =======
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Team</h2>
          <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fuga eum quidem</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="zoom-in">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <p>Animi est delectus alias quam repellendus nihil nobis dolor. Est sapiente occaecati et dolore. Omnis aut ut nesciunt explicabo qui. Eius nam deleniti ut omnis</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <p>Aspernatur iste esse aliquam enim et corporis. Molestiae voluptatem aut eligendi quis aut. Libero vel amet voluptatem eos rerum non doloremque</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <p>Ut enim possimus nihil cupiditate beatae. Veniam facere quae non qui necessitatibus rerum eos vero. Maxime sit sunt quo dolor autem est qui quaerat</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> End Team Section -->

    <!-- ======= Contact Section =======
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fuga eum quidem</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="info d-flex flex-column justify-content-center" data-aos="fade-right">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street,<br>New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form" data-aos="fade-left">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section> End Contact Section -->

  </main><!-- End #main -->
@endsection