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
      <h1>หมวด<span>สินค้า</span></h1>
      <h2>สินค้าทั้งหมด - All Product </h2>
    </div>

    <div class="col-3">
    <img src="{{asset('font_end/img/allproduct.png')}}" alt="coffee" width="200" style="float:right">
  </div> 

      </div>  
    </div> 
  </section>

  <!-- End Hero -->

  {{-- เริ่มหน้าสินค้าทั้งหมด --}}
  
  <section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>ประเภทสินค้า</h2>
                    <div class="panel-group category-products" id="accordian">
                        <!--category-productsr-->
                       @foreach ($category as $categories)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a href="{{url('/product/category/'.$categories->category_id)}}">{{$categories->name}}</a></h4>                            
                                </div>
                        </div>
                        @endforeach
                    </div>
                    <!--/category-products-->
                    
                </div>
            </div>
                    
            <div class="col-sm-9 padding-right">

                <div class="features_items">
                    <!--features_items-->
                    <h2 class="title text-center">หน้าสินค้า</h2>
                    
                    <div class="container">
                        <div class="row">
                            @foreach ($product as $products)
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{asset('admin/images/'.$products->image)}}" alt="" style="width:100px">
                                    <h2>{{number_format($products->price)}} ฿</h2>
                                    <p>{{$products->name}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            
                </div>
                <!--features_items-->
                    <div class="d-flex flex-row-reverse">
                         {{$product->links()}}
                    </div>
            </div>
        </div>
    </div>
</section>

{{-- จบหน้าสินค้าทั้งหมด --}}

   <!-- ======= Footer ======= -->
   @include ('layouts/font_end/footer')
<!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('Font_end/vendor/aos/aos.js')}}"></script>
<script src="{{asset('Font_end/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('Font_end/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('Font_end/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('Font_end/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('Font_end/vendor/purecounter/purecounter.js')}}"></script>
<script src="{{asset('Font_end/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('Font_end/vendor/waypoints/noframework.waypoints.js')}}"></script>

<!-- Vendor JS Files v.2 -->

<!-- Template Main JS File -->
<script src="{{asset('Font_end/js/main.js')}}"></script>

{{-- Others JS File --}}
<script src="{{asset('Font_end/js/bootstrap.min.js')}}"></script>
<script src="{{asset('Font_end/js/contact.js')}}"></script>
<script src="{{asset('Font_end/js/gmaps.js')}}"></script>
<script src="{{asset('Font_end/js/html5shiv.js')}}"></script>
<script src="{{asset('Font_end/js/jquery.js')}}"></script>
<script src="{{asset('Font_end/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('Font_end/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('Font_end/js/jquery.price-range.js')}}"></script>

{{-- CSS File --}}
{{-- <link href="{{asset('font_end/css/bootstrap.min.css')}}" rel="stylesheet"> --}}
<link href="{{asset('font_end/css/font-awesome.min.css')}}" rel="stylesheet">
<link href="{{asset('font_end/css/prettyPhoto.css')}}" rel="stylesheet">
<link href="{{asset('font_end/css/price-range.css')}}" rel="stylesheet">
<link href="{{asset('font_end/css/animate.css')}}" rel="stylesheet">
<link href="{{asset('font_end/css/main.css')}}" rel="stylesheet">
<link href="{{asset('font_end/css/responsive.css')}}" rel="stylesheet">

</body>

</html>