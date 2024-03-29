@extends('frontend.master')
@section('content')

<div class="container">
    <div class="category_section">
       <div class="row">
          <div class="col-lg-2 col-sm-12">
             <h1 class="category_text">Category</h1>
          </div>
          <div class="col-lg-10 col-sm-12 main">
             <div class="col">
                <div class="box_main">
                   <div class="icon_1"></div>
                   <h4 class="fashion_text active">New Fashion</h4>
                </div>
             </div>
             <div class="col">
                <div class="box_main">
                   <div class="icon_2"></div>
                   <h4 class="fashion_text">Clothing</h4>
                </div>
             </div>
             <div class="col">
                <div class="box_main">
                   <div class="icon_3"></div>
                   <h4 class="fashion_text">Watches</h4>
                </div>
             </div>
             <div class="col">
                <div class="box_main">
                   <div class="icon_4"></div>
                   <h4 class="fashion_text">Accessories</h4>
                </div>
             </div>
             <div class="col">
                <div class="box_main">
                   <div class="icon_5"></div>
                   <h4 class="fashion_text">Sweaters & Jackets</h4>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div class="category_section_2">
       <div class="row">
          <div class="col-lg-4 col-sm-12">
             <div class="beds_section active">
                <h1 class="bed_text">Up to 50% off | Beds</h1>
                <div><img src="{{url('frontend\images/img-2.png')}}" class="image_2"></div>
                <div class="seemore_bt"><a href="#">see More</a></div>
             </div>
          </div>
          <div class="col-lg-4 col-sm-12">
             <div class="beds_section">
                <h1 class="bed_text">organized in style</h1>
                <div><img src="{{url('frontend\images/img-3.png')}}" class="image_2"></div>
                <div class="seemore_bt"><a href="#">see More</a></div>
             </div>
          </div>
          <div class="col-lg-4 col-sm-12">
             <div class="beds_section">
                <h1 class="bed_text">Refurbished mixer</h1>
                <div><img src="{{url('frontend\images/img-4.png')}}" class="image_2"></div>
                <div class="seemore_bt"><a href="#">see More</a></div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- category section end -->
 <!-- beauty product section start -->
 <div class="beauty_section layout_padding">
    <div class="container">
       <div class="row">
          <div class="col-lg-4 col-sm-12">
             <div class="beauty_box">
                <h1 class="bed_text">Beauty products</h1>
                <div><img src="{{url('frontend\images/img-5.png')}}" class="image_3"></div>
                <div class="seemore_bt"><a href="#">see More</a></div>
             </div>
          </div>
          <div class="col-lg-8 col-sm-12">
             <div class="beauty_box_1">
                <h1 class="bed_text_1">Explore trending electronics</h1>
                <div><img src="frontend\images/img-6.png" class="image_3"></div>
                <div class="seemore_bt_1"><a href="#">see More</a></div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- beauty product section end -->
 <!-- product section start -->
 <div class="product_section layout_padding">
    <div class="container">
       <h1 class="feature_taital">FEATURED PRODUCTS</h1>
       <p class="feature_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking</p>
       <div class="product_section_2">
          <div class="row">
             <div class="col-sm-5">
                <div class="feature_box">
                   <h1 class="readable_text">Readable content of</h1>
                   <div><img src="frontend\images/img-7.png" class="image_7"></div>
                </div>
                <div class="feature_box_1">
                   <h1 class="readable_text">Readable content of</h1>
                   <div><img src="frontend\images/img-7.png" class="image_7"></div>
                </div>
             </div>
             <div class="col-sm-7">
                <div class="feature_box_2">
                   <h1 class="readable_text">Readable content of</h1>
                   <div><img src="frontend\images/img-8.png" class="image_8"></div>
                   <div class="seemore_bt"><a href="#">see More</a></div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- product section end -->
 <!-- client section start -->
 <div class="client_section layout_padding">
    <div id="main_slider" class="carousel slide" data-ride="carousel">
       <div class="carousel-inner">
          <div class="carousel-item active">
             <div class="container">
                <h1 class="feature_taital">what is says our customer</h1>
                <p class="feature_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking</p>
                <div class="client_section_2">
                   <div class="image_9"><img src="frontend\images/img-9.png"></div>
                   <h3 class="nolmal_text">Normal distribution</h3>
                   <p class="ipsum_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                   <div class="image_9"><img src="frontend\images/icon-10.png"></div>
                </div>
             </div>
          </div>
          <div class="carousel-item">
             <div class="container">
                <h1 class="feature_taital">FEATURED PRODUCTS</h1>
                <p class="feature_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking</p>
                <div class="client_section_2">
                   <div class="image_9"><img src="frontend\images/img-9.png"></div>
                   <h3 class="nolmal_text">Normal distribution</h3>
                   <p class="ipsum_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                   <div class="image_9"><img src="frontend\images/icon-10.png"></div>
                </div>
             </div>
          </div>
          <div class="carousel-item">
             <div class="container">
                <h1 class="feature_taital">FEATURED PRODUCTS</h1>
                <p class="feature_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking</p>
                <div class="client_section_2">
                   <div class="image_9"><img src="frontend\images/img-9.png"></div>
                   <h3 class="nolmal_text">Normal distribution</h3>
                   <p class="ipsum_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                   <div class="image_9"><img src="frontend\images/icon-10.png"></div>
                </div>
             </div>
          </div>
       </div>
       <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
       <i class=""><img src="frontend\images/left-icon.png"></i>
       </a>
       <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
       <i class=""><img src="frontend\images/right-icon.png"></i>
       </a>
    </div>
 </div>
 <!-- client section end -->
 <!-- newsletter section start -->
 <div class="newsletter_section layout_padding">
    <div class="container">
       <h6 class="conect_text">Connect to caraft</h6>
       <h1 class="newsletter_taital">Join Our Newsletter</h1>
       <p class="newsletter_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration </p>
       <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Enter your email" aria-label="Enter your email" aria-describedby="basic-addon2">
          <div class="input-group-append">
             <span class="input-group-text" id="basic-addon2">Subscribe</span>
          </div>
       </div>
    </div>
 </div>

@endsection