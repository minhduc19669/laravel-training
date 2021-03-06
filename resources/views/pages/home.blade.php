@extends('layout.layout')
@section('title','Pet Food eCommerce')
@section('url','https://www.petcity.vn/media/banner/banner_839ab468.png')
@section('content')
<h3 class="animated" style=" text-align: center; margin-top: 20px">❄️ ❄️ ❄️ ❄️ ❄️ Merry Xmas ❄️ ❄️ ❄️ ❄️ ❄️ </h3>

    <div class="slider-area">
      <div class="slider-active owl-dot-style owl-carousel">
          @foreach($slides as $key =>$slide)
        <div class="single-slider pt-215 pb-228 bg-img"
          style="background-image: url('/slide/{{$slide->slide_image}}')">
          <div class="container">
            <div class="slider-content slider-content-white slider-animated-2 text-center">
              <h3 class="animated">We keep pets for pleasure.</h3>
              <h1 class="animated">
                Standard Food & Vitamins <br />For all Pets
              </h1>
              <div class="slider-btn">
              <a class="animated" href="{{route('home.allProduct')}}">SHOP NOW</a>
              </div>
            </div>
          </div>
        </div>
          @endforeach
      </div>
    </div>
    <div class="food-category pt-100 pb-70">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="single-food-category-2 text-center mb-30">
              <div class="single-food-hover">
              <img src="{{asset('assets_page/img/product/food-catigory-1.png')}}" alt="" />
              </div>
              <h3>Dogs Food</h3>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="single-food-category-2 text-center mb-30">
              <div class="single-food-hover">
              <img src="{{asset('assets_page/img/product/food-catigory-2.png')}}" alt="" />
              </div>
              <h3>Cats Food</h3>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="product-area pt-95 pb-70 gray-bg">
      <div class="container">
        <div class="section-title text-center mb-55">
          <h4><i>Sản Phẩm Mới Nhất</i></h4>
        </div>
        <div class="row">
            @foreach ($products as $product)
          <div id="product" class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <div class="product-wrapper mb-10">
              <div class="product-img" style="width: 230px;height: 190px;">
              <a href="{{route('product.details',$product->product_id)}}">
                <img src="{{asset('storage/'.$product->product_image)}}" alt="" />
                </a>
                <div class="product-action">
                <a style="cursor: pointer;" id="addtocart" buy-id="{{$product->product_id}}" title="Add To Cart" >
                    <i class="ti-shopping-cart"></i>
                  </a>
                </div>
                <div class="product-action-wishlist">
                  <a title="Wishlist" href="#">
                    <i class="ti-heart"></i>
                  </a>
                </div>
              </div>
              <div class="product-content">

              <h4><a href="{{route('product.details',$product->product_id)}}">{{$product->product_name}}</a></h4>
                <div class="product-price">
                  <span class="new">{{number_format($product->product_price)}}<u>đ</u></span>
                <span class="old">{{number_format($product->product_price + $product->product_price_sale)}}<u>đ</u></span>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <div
      class="deal-area bg-img deal-style-white pt-95 pb-100 bg-img"
      style="background-image: url(assets_page/img/banner/banner-0.jpg)"
    >
      <div class="container">
        <div class="section-title section-title-white text-center mb-50">
          <h4>Sản phẩm tốt nhất</h4>
          <h2>Chúng tôi có những sự lựa chọn tuyệt vời dành cho bạn  </h2>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="deal-img wow fadeInLeft">
              <a href="#"
                ><img src="{{asset('assets_page/img/banner/banner-4.png')}}" alt=""
              /></a>
            </div>
          </div>
          <div style="margin-top: 200px" class="col-lg-6 col-md-6">
            <div class="deal-content">
              <div class="discount-btn mt-35">
                <a class="btn-style" href="{{route('home.allProduct')}}">Mua hàng ngay</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="service-area bg-img pt-100 pb-65">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4">
            <div class="service-content text-center mb-30 service-color-1">
              <img src="{{asset('assets_page/img/icon-img/shipping.png')}}" alt="" />
              <h4>Miễn phí ship</h4>
              <p>Free shipping trong vòng 3km</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-4">
            <div class="service-content text-center mb-30 service-color-2">
              <img src="{{asset('assets_page/img/icon-img/support.png')}}" alt="" />
              <h4>HỖ TRỢ TRỰC TUYẾN</h4>
              <p>Hỗ trợ trực tuyến 24 giờ một ngày</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-4">
            <div class="service-content text-center mb-30 service-color-3">
              <img src="{{asset('assets_page/img/icon-img/money.png')}}" alt="" />
              <h4>TIỀN TRẢ LẠI </h4>
              <p>Đảm bảo trở lại dưới 5 ngày</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="blog-area pb-70">
      <div class="container">
        <div class="section-title text-center mb-60">
          <h4>Tin tức mới nhất</h4>
          <h2>Từ Blog của chúng tôi</h2>
        </div>
        <div class="row">
            @foreach($news as $key => $news)
          <div class="col-lg-4 col-md-6">
            <div class="blog-wrapper mb-30 gray-bg">
              <div class="blog-img hover-effect">
                <a href="blog-details.html"
                  ><img alt="" src="\news\{{$news->news_image}}"
                /></a>
              </div>
              <div class="blog-content">
                <div class="blog-meta">
                  <ul>
                    <li>By: <span>Admin</span></li>
                    <li>Sep 14, 2018</li>
                  </ul>
                </div>
                <h4>
                  <a href="{{route('page.blogDetails',$news->news_id)}}"
                    >{{$news->news_title}}</a
                  >
                </h4>
              </div>
            </div>
          </div>
            @endforeach
        </div>
      </div>
    </div>
    <!-- modal -->
    <div
      class="modal fade"
      id="exampleModal"
      tabindex="-1"
      role="dialog"
      aria-hidden="true"
    >
      <button
        type="button"
        class="close"
        data-dismiss="modal"
        aria-label="Close"
      >
        <span class="ti-close" aria-hidden="true"></span>
      </button>
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="qwick-view-left">
              <div class="quick-view-learg-img">
                <div class="quick-view-tab-content tab-content">
                  <div
                    class="tab-pane active show fade"
                    id="modal1"
                    role="tabpanel"
                  >
                    <img src="{{asset('assets_page/img/quick-view/l1.jpg')}}" alt="" />
                  </div>
                  <div class="tab-pane fade" id="modal2" role="tabpanel">
                    <img src="{{asset('assets_page/img/quick-view/l2.jpg')}}" alt="" />
                  </div>
                  <div class="tab-pane fade" id="modal3" role="tabpanel">
                    <img src="{{asset('assets_page/img/quick-view/l3.jpg')}}" alt="" />
                  </div>
                </div>
              </div>
              <div class="quick-view-list nav" role="tablist">
                <a class="active" href="#modal1" data-toggle="tab">
                  <img src="{{asset('assets_page/img/quick-view/s1.jpg')}}" alt="" />
                </a>
                <a href="#modal2" data-toggle="tab" role="tab">
                  <img src="{{asset('assets_page/img/quick-view/s2.jpg')}}" alt="" />
                </a>
                <a href="#modal3" data-toggle="tab" role="tab">
                  <img src="{{asset('assets_page/img/quick-view/s3.jpg')}}" alt="" />
                </a>
              </div>
            </div>
            <div class="qwick-view-right">
              <div class="qwick-view-content">
                <h3 id="product-name"></h3>
                <div class="product-price">
                  <span id="product-price"></span>
                </div>
                <div class="product-rating">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
                <span style="padding-bottom:1px;">Tình trạng :<span style="color: red; " id="product-desc"></span></span>
                <p id="product-content">
                </p>
                {{-- <div class="quick-view-select">
                  <div class="select-option-part">
                    <label>Size*</label>
                    <select class="select">
                      <option value="">- Please Select -</option>
                      <option value="">XS</option>
                      <option value="">S</option>
                      <option value="">M</option>
                      <option value="">L</option>
                      <option value="">XL</option>
                      <option value="">XXL</option>
                    </select>
                  </div>
                  <div class="select-option-part">
                    <label>Color*</label>
                    <select class="select">
                      <option value="">- Please Select -</option>
                      <option value="">orange</option>
                      <option value="">pink</option>
                      <option value="">yellow</option>
                    </select>
                  </div>
                </div> --}}
                <div class="quickview-plus-minus">
                  <div class="quickview-btn-cart">
                    <p id="addtocart1"></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
    <!-- all js here -->
