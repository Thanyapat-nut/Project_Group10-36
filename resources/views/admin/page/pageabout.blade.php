@include ('layouts/font_end/head')

<body>

  <!-- ======= Header ======= -->
  @include ('layouts/font_end/header')
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <div class="row">

        <div class="col-9">
      <h1>หมวด<span>เกี่ยวกับ</span></h1>
      <h2>เกี่ยวกับ - ABOUT </h2>
    </div>

    <div class="col-3">
    <img src="{{asset('font_end/img/about.png')}}" alt="coffee" width="200" style="float:right">
  </div> 

      </div>  
    </div> 
  </section>

  <!-- End Hero -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>เกี่ยวกับ</h2>
          <h3>ข้อมูล <span>เกี่ยวกับ</span></h3>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="{{asset('font_end/img/onwer.png')}}" class="img-fluid" alt="เจ้าของ">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3>ที่มาของชื่อร้าน AC Coffee</h3>
            <p class="">
            ที่ทางร้านมีชื่อว่า AC Coffee เพราะว่านั้นเกิดมาจากชื่อของทางเจ้าของร้านก็มีชื่อขึ้นต้นด้วยตัว “C” และทางน้องของทางเจ้าของร้านก็ได้ร่วมหุ้นในร้านอีกด้วยและมีตัวอักษรตัว “A” จึงรวมชื่อร้านกันเป็น AC Coffee นั้นเอง!</p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

  <!-- ======= Footer ======= -->
  @include ('layouts/font_end/footer')
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('font_end/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('font_end/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('font_end/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('font_end/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('font_end/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('font_end/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('font_end/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('font_end/vendor/waypoints/noframework.waypoints.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('font_end/js/main.js')}}"></script>

</body>

</html>