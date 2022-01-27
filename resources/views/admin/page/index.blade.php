
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
      <h1>ยินดีต้อนรับสู่ <span>Ac Coffee Shop</span></h1>
      <h2>พวกเราขายกาแฟชนิดซองและขนมต่างๆ</h2>
    </div>

    <div class="col-3">
    <img src="{{asset('font_end/img/icon.svg')}}" alt="">
  </div> 

      </div>  
    </div> 
  </section>
  <!-- End Hero -->

  <main id="main">

    <!-- ======= Recommend Product Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">
        
        <div class="section-title">
          <h2>สินค้าแนะนำ</h2>
          </div>

          <div class="container">
            <div class="row">
              
          <div class="col-4">
          <div class="card" style="width: 20rem;">
            <img class="card-img-top" src="{{asset('font_end/img/c1.PNG')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">กาแฟเวียดนาม Wake up</h5>
              <p class="card-text">
                ฿95</p>
            </div>
          </div>
        </div>

        <div class="col-4">
          <div class="card" style="width: 20rem;">
            <img class="card-img-top" src="{{asset('font_end/img/c2.PNG')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">กาแฟดำG7 กาแฟเวียดนาม</h5>
              <p class="card-text">฿40</p>
            </div>
          </div>
        </div>

        <div class="col-4">
          <div class="card" style="width: 20rem;">
            <img class="card-img-top" src="{{asset('font_end/img/c3.png')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">กาแฟขี้ชะมดคั่วบด เวียดนาม</h5>
              <p class="card-text">฿169</p>
            </div>
          </div>
        </div>

        </div>
      </div>
                
    </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>เกร็ดความรู้</h2>
          <h3>ข้อมูลเกี่ยวกับ <span>เกร็ดความรู้</span></h3>
        </div>

        <div class="row mt-5">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="{{asset('font_end/img/solder.png')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3>ที่มาของอเมริกาโน่</h3>
            <p class="">
              หลายๆ คนอาจสงสัยว่าทำไมเมนูกาแฟถึงมีชื่อประเทศรวมอยู่ด้วย นั่นทหารอเมริกันมักจะสั่งกาแฟเอสเพรสโซ่ดื่มเพื่อให้ร่างกายตื่นตัวมากขึ้น แต่มักจะขอให้ผสมน้ำอุ่นลงไปด้วยเสมอ เพื่อไม่ให้มีรสแรงจนเกินไป และนั่นก็คือที่มาของเมนูอย่างอเมริกาโน่ที่เราทานกันอยู่ทุกวันนี่ ขอบคุณข้อมูล 
              : https://omgworld.net/10-coffee-969636/ 
            </p>
            
           
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="{{asset('font_end/img/goat.png')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3>ทุกอย่างเริ่มจากแพะ</h3>
            <p class="">ก่อนที่จะมาเป็นกาแฟที่เรากินกันอยู่ทุกวันนี้ เชื่อไหมว่าคนสมัยก่อนนั้นเขาไม่ได้เอาเมล็ดกาแฟมากินกัน แต่เอาไว้ใช้เป็นอาหารเลี้ยงสัตว์มาก่อน จนกระทั่งชาวเอธิโอเปียสังเกตว่าแพะที่กินเมล็ดกาแฟเข้าไปดูร่าเริงกระปรี้กระเปร่าผิดปกติ จึงได้เกิดสงสัยขึ้นมาว่าเจ้าเมล็ดกาแฟนี่อาจเอามาใช้เป็นของกินเพิ่มพลังงานให้มนุษย์เราได้เหมือนกัน
            : https://omgworld.net/10-coffee-969636/ 
            </p>


          </div>
        </div>

        <div class="row mt-5">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="{{asset('font_end/img/candy.png')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3>กาแฟเคยเป็นขนมมาก่อน</h3>
            <p class="">ก่อนจะมาเป็นเครื่องดื่มที่ขาดไม่ได้ในชีวิตประจำวันของใครหลายๆ คน ชาวแอฟริกันเคยเอาเมล็ดกาแฟมาบดแล้วปั้นผสมกับไขมันสัตว์เพื่อใช้กินเหมือนกับเป็นขนมมาก่อน แต่มันไม่ได้รับความนิยมสักเท่าไหร่ คงจะเดาเรื่องรสชาติกันได้ไม่ยากเลยทีเดียว
            : https://omgworld.net/10-coffee-969636/ 
            </p>

            
          </div>
        </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>ผู้จัดทำ</h2>
          <h3>ผู้จัดทำแต่ละ <span>ตําแหน่ง</span></h3>

        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="{{asset('font_end/img/mix.jpg')}}" class="img-fluid" alt="">
                
              </div>
              <div class="member-info">
                <h4>นายธนาสรรค์ ธงศรี</h4>
                <span>Back End</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="{{asset('font_end/img/it.jpg')}}" class="img-fluid" alt="">
                
              </div>
              <div class="member-info">
                <h4>นายอชิรวัตร ทองอร่าม</h4>
                <span>Tester</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="{{asset('font_end/img/nut.jpg')}}" class="img-fluid" alt="">
               
              </div>
              <div class="member-info">
                <h4>นายธันยพัฒน์ สืบจากน้อย</h4>
                <span>Front End</span>
              </div>
            </div>
          </div>

          

        </div>

      </div>
    </section><!-- End Team Section -->





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