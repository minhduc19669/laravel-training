

<!DOCTYPE html>
<html class="no-js" lang="zxx">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Pet Food eCommerce</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Favicon -->
    <link
      rel="shortcut icon"
      type="image/x-icon"
  href="{{asset('assets_page/img/favicon.png')}}"
    />

    <!-- all css here -->
    <link rel="stylesheet" href="{{asset('assets_page/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets_page/css/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('assets_page/css/simple-line-icons.css')}}" />
    <link rel="stylesheet" href="{{asset('assets_page/css/themify-icons.css')}}" />
    <link rel="stylesheet" href="{{asset('assets_page/css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets_page/css/slick.css')}}" />
    <link rel="stylesheet" href="{{asset('assets_page/css/meanmenu.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets_page/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('assets_page/css/responsive.css')}}" />
  <link rel="stylesheet" href="{{asset('assets_page/css/stylelogin.css')}}">
  <script src="{{asset('assets_page/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.css">
  </head>
  <body>
    <header class="header-area">
      <div class="header-top theme-bg">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
              <div class="welcome-area">
                <p>Default welcome msg!</p>
              </div>
            </div>
            <div class="col-lg-8 col-md-8 col-12">
              <div class="account-curr-lang-wrap f-right">
                <ul>
                  </li>
                  <li>
                      @if(Session::get('customer'))

                </div>
                    <a href="#">{{Session::get('customer')['name']}} <i class="fa fa-sort-desc" aria-hidden="true"></i></a>
                    <ul>
                      <li>
                        <a href="#"
                          >Tài khoản
                        </a>
                      </li>
                      <li>
                        <a href="#"
                          >Các địa chỉ</a
                        >
                      </li>
                      <li>
                        <a href="{{route('google_logout')}}"
                          >Đăng xuất
                        </a>
                      </li>
                    </ul>
                    @else
                  <a href="{{route('home.getlogin')}}"
                  >
                    Đăng nhập/Đăng kí</a>
                    @endif
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="header-bottom transparent-bar">
        <div class="container">
          <div class="row">
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-5">
              <div class="logo pt-39">
              <a href="{{route('home')}}"
                  ><img alt="" src="{{asset('assets_page/img/logo/logo.png')}}"
                /></a>
              </div>
            </div>
            <div class="col-xl-8 col-lg-7 d-none d-lg-block">
              <div class="main-menu text-center">
                <nav>
                  <ul>
                    <li>
                    <a href="{{route('home')}}">Trang chủ</a>
                    </li>
                    <li class="mega-menu-position">
                      <a href="shop-page.html">Danh mục</a>
                      <ul class="mega-menu">
                        <li>
                          <ul>
                            <li class="mega-menu-title">Thức ăn cho chó</li>
                            <li><a href="shop-page.html">Eggs</a></li>
                            <li><a href="shop-page.html">Carrots</a></li>
                            <li><a href="shop-page.html">Salmon fishs</a></li>
                            <li><a href="shop-page.html">Peanut Butter</a></li>
                            <li>
                              <a href="shop-page.html">Grapes & Raisins</a>
                            </li>
                          </ul>
                        </li>
                        <li>
                          <ul>
                            <li class="mega-menu-title">Thức ăn cho mèo</li>
                            <li><a href="shop-page.html">Meat</a></li>
                            <li><a href="shop-page.html">Fish</a></li>
                            <li><a href="shop-page.html">Eggs</a></li>
                            <li><a href="shop-page.html">Veggies</a></li>
                            <li><a href="shop-page.html">Cheese</a></li>
                          </ul>
                        </li>
                        <li>
                          <ul>
                            <li>
                              <a href="shop-page.html"
                                ><img
                                  alt=""
                                  src="{{asset('assets_page/img/banner/menu-img-4.jpg')}}"
                              /></a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li>
                    <a href="{{route('page.index')}}">Sản phẩm</a>
                      {{-- <ul class="submenu">
                        <li>
                          <a href="about-us.html">about us</a>
                        </li>
                        <li>
                          <a href="shop-page.html">shop page</a>
                        </li>
                        <li>
                          <a href="shop-list.html">shop list</a>
                        </li>
                        <li>
                          <a href="product-details.html">product details</a>
                        </li>
                        <li>
                          <a href="cart.html">cart page</a>
                        </li>
                        <li>
                          <a href="checkout.html">checkout</a>
                        </li>
                        <li>
                          <a href="wishlist.html">wishlist</a>
                        </li>
                        <li>
                          <a href="contact.html">contact us</a>
                        </li>
                        <li>
                          <a href="my-account.html">my account</a>
                        </li>
                        <li>
                          <a href="login-register.html">login / register</a>
                        </li>
                      </ul> --}}
                    </li>
                    <li>
                      <a href="blog-leftsidebar.html">Blog</a>
                      <ul class="submenu">
                        <li>
                          <a href="blog.html">blog page</a>
                        </li>
                        <li>
                          <a href="blog-leftsidebar.html">blog left sidebar</a>
                        </li>
                        <li>
                          <a href="blog-details.html">blog details</a>
                        </li>
                      </ul>
                    </li>
                    <li><a href="about-us.html">ABOUT US</a></li>
                    <li><a href="contact.html">Liên hệ</a></li>
                  </ul>
                </nav>
              </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-8 col-sm-8 col-7">
              <div class="search-login-cart-wrapper">
                <div class="header-search same-style">
                  <button class="search-toggle">
                    <i class="icon-magnifier s-open"></i>
                    <i class="ti-close s-close"></i>
                  </button>
                  <div class="search-content">
                    <form action="#">
                      <input type="text" placeholder="Bạn muốn tìm gì ?" />
                      <button>
                        <i class="icon-magnifier s-open"></i>
                      </button>
                    </form>
                  </div>
                </div>

                <div class="header-cart same-style">
                  <button class="icon-cart">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                  <span class="count-style" id="countcart">{{$count}}</span>
                  </button>
                  <div class="shopping-cart-content" style="width:500px;">
                    <ul id="cart">
                        @foreach ($data as $item)
                    <li class="single-shopping-cart" id="item_id_{{$item->rowId}}">
                        <div class="shopping-cart-img">
                        <a href="#">
                            <img alt="" src="{{asset('product/'.$item->options['image'])}}"/>
                        </a>
                        </div>
                        <div  class="shopping-cart-title">
                        <h4><a href="#">{{$item->name}}</a></h4>
                        <h6>Số lượng: {{$item->qty}}</h6>
                        <span>Giá: {{number_format($item->price)}} VNĐ</span>
                        </div>
                        <div id="productcart" class="shopping-cart-delete" style="">
                        <a style="cursor: pointer;" id="deleteitem" item-id="{{$item->rowId}}"><i class="ti-close"></i></a>
                        </div>
                    </li>
                        @endforeach
                    </ul>
                    <div class="shopping-cart-total">
                      <h4>Phí vận chuyển : <span>$20.00</span></h4>
                    <h4>Tổng tiền : <span class="shop-total" id="total" >{{$total}} VNĐ</span></h4>
                    </div>
                    <div class="shopping-cart-btn">
                    <a href="{{route('cart.view')}}">Xem giỏ hàng</a>
                      <a href="checkout.html">Checkout</a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div
              class="mobile-menu-area electro-menu d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none"
            >
              <div class="mobile-menu">
                <nav id="mobile-menu-active">
                  <ul class="menu-overflow">
                    <li>
                      <a href="#">HOME</a>
                    </li>
                    <li>
                      <a href="#">pages</a>
                      <ul>
                        <li>
                          <a href="about-us.html">about us</a>
                        </li>
                        <li>
                          <a href="shop-page.html">shop page</a>
                        </li>
                        <li>
                          <a href="shop-list.html">shop list</a>
                        </li>
                        <li>
                          <a href="product-details.html">product details</a>
                        </li>
                        <li>
                          <a href="cart.html">cart page</a>
                        </li>
                        <li>
                          <a href="checkout.html">checkout</a>
                        </li>
                        <li>
                          <a href="wishlist.html">wishlist</a>
                        </li>
                        <li>
                          <a href="contact.html">contact us</a>
                        </li>
                        <li>
                          <a href="my-account.html">my account</a>
                        </li>
                        <li>
                          <a href="login-register.html">login / register</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="#">Danh mục</a>
                      <ul>
                        <li>
                          <a href="#">Dogs Food</a>
                          <ul>
                            <li>
                              <a href="shop-page.html">Grapes and Raisins</a>
                            </li>
                            <li><a href="shop-page.html">Carrots</a></li>
                            <li><a href="shop-page.html">Peanut Butter</a></li>
                            <li><a href="shop-page.html">Salmon fishs</a></li>
                            <li><a href="shop-page.html">Eggs</a></li>
                          </ul>
                        </li>
                        <li>
                          <a href="#">Cats Food</a>
                          <ul>
                            <li><a href="shop-page.html">Meat</a></li>
                            <li><a href="shop-page.html">Fish</a></li>
                            <li><a href="shop-page.html">Eggs</a></li>
                            <li><a href="shop-page.html">Veggies</a></li>
                            <li><a href="shop-page.html">Cheese</a></li>
                          </ul>
                        </li>
                        <li>
                          <a href="#">Fishs Food</a>
                          <ul>
                            <li><a href="shop-page.html">Rice</a></li>
                            <li><a href="shop-page.html">Veggies</a></li>
                            <li><a href="shop-page.html">Cheese</a></li>
                            <li><a href="shop-page.html">wheat bran</a></li>
                            <li><a href="shop-page.html">Cultivation</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="#">blog</a>
                      <ul>
                        <li>
                          <a href="blog.html">blog page</a>
                        </li>
                        <li>
                          <a href="blog-leftsidebar.html">blog left sidebar</a>
                        </li>
                        <li>
                          <a href="blog-details.html">blog details</a>
                        </li>
                      </ul>
                    </li>
                    <li><a href="contact.html"> Contact us </a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
</header>
<div class="breadcrumb-area pt-95 pb-95 bg-img" style="background-image:url(@yield('url'));">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h2>@yield('page_name')</h2>
                    <ul>
                        <li style="color: white">@yield('note1')</li>
                        <li style="color: white" class="active">@yield('note2')</li>
                    </ul>
                </div>
            </div>
</div>
    @yield('content')
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
                <h3>Dog Calcium Food</h3>
                <div class="product-price">
                  <span>$19.00 </span>
                </div>
                <div class="product-rating">
                  <i class="ion-star theme-color"></i>
                  <i class="ion-star theme-color"></i>
                  <i class="ion-star theme-color"></i>
                  <i class="ion-star theme-color"></i>
                  <i class="ion-star theme-color"></i>
                </div>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adip elit, sed do amt
                  tempor incididun ut labore et dolore magna aliqua. Ut enim ad
                  mi , quis nostrud veniam exercitation .
                </p>
                <div class="quick-view-select">
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
                </div>
                <div class="quickview-plus-minus">
                  <div class="cart-plus-minus">
                    <input
                      type="text"
                      value="2"
                      name="qtybutton"
                      class="cart-plus-minus-box"
                    />
                  </div>
                  <div class="quickview-btn-cart">
                    <a class="btn-style" href="#">add to cart</a>
                  </div>
                  <div class="quickview-btn-wishlist">
                    <a class="btn-hover" href="#"><i class="ti-heart"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
        <footer class="footer-area">
      <div class="footer-top pt-80 pb-50 gray-bg-2">
        <div class="container">
          <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
              <div class="footer-widget mb-30">
                <div class="footer-info-wrapper">
                  <div class="footer-logo">
                    <a href="#">
                      <img src="{{asset('assets_page/img/logo/logo-2.png')}}" alt="" />
                    </a>
                  </div>
                  <p>
                    Lorem ipsum dolor sit amet, co adipisi elit, sed eiusmod
                    tempor incididunt ut labore et dolore
                  </p>
                  <div class="social-icon">
                    <ul>
                      <li>
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
              <div class="footer-widget mb-30 pl-50">
                <h4 class="footer-title">USEFUL LINKS</h4>
                <div class="footer-content">
                  <ul>
                    <li><a href="#">Help & Contact Us</a></li>
                    <li><a href="#">Returns & Refunds</a></li>
                    <li><a href="#">Online Stores</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-2 col-md-6 col-sm-6">
              <div class="footer-widget mb-30 pl-70">
                <h4 class="footer-title">HELP</h4>
                <div class="footer-content">
                  <ul>
                    <li><a href="#">Faq's </a></li>
                    <li><a href="#">Pricing Plans</a></li>
                    <li><a href="#">Order Traking</a></li>
                    <li><a href="#">Returns </a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
              <div class="footer-widget">
                <div class="newsletter-wrapper">
                  <p>
                    Subscribe to our newsletter and get 10% off your first
                    purchase..
                  </p>
                  <div class="newsletter-style">
                    <div id="mc_embed_signup" class="subscribe-form">
                      <form
                        action="#"
                        method="post"
                        id="mc-embedded-subscribe-form"
                        name="mc-embedded-subscribe-form"
                        class="validate"
                        target="_blank"
                        novalidate
                      >
                        <div id="mc_embed_signup_scroll" class="mc-form">
                          <input
                            type="email"
                            value=""
                            name="EMAIL"
                            class="email"
                            placeholder="Your mail address"
                            required
                          />
                          <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                          <div class="mc-news" aria-hidden="true">
                            <input
                              type="text"
                              name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef"
                              tabindex="-1"
                              value=""
                            />
                          </div>
                          <div class="clear">
                            <input
                              type="submit"
                              value="SEND"
                              name="subscribe"
                              id="mc-embedded-subscribe"
                              class="button"
                            />
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="payment-img">
                  <a href="index.html">
                    <img src="{{asset('assets_page/img/icon-img/payment.png')}}" alt="" />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom gray-bg-3 pt-17 pb-15">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="copyright text-center">
                <p>Copyright © <a href="#">Marten.</a> All Right Reserved.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script>
      var slider = document.getElementById("myRange");
      var output = document.getElementById("demo");
      output.innerHTML = slider.value + "$"; // Display the default slider value

      // Update the current slider value (each time you drag the slider handle)
      slider.oninput = function () {
        output.innerHTML = this.value + "$";
      };
    </script>

    <!-- all js here -->
    <script src="{{asset('assets_page/js/vendor/jquery-1.12.0.min.js')}}"></script>
    <script src="{{asset('assets_page/js/popper.js')}}"></script>
    <script src="{{asset('assets_page/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets_page/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assets_page/js/waypoints.min.js')}}"></script>
    <script src="{{asset('assets_page/js/elevetezoom.js')}}"></script>
    <script src="{{asset('assets_page/js/ajax-mail.js')}}"></script>
    <script src="{{asset('assets_page/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets_page/js/plugins.js')}}"></script>
    <script src="{{asset('assets_page/js/main.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            $(document).ready(function($){
                $('.update').change(function(){
                    var id = $(this).attr('row-id');
                    var qty = $(this).val();
                    $.ajax({
                        url:'http://laravel-training.local/cart/update/'+id+'/'+qty,
                        dataType:'json',
                        success:function(data){
                            const numberFormat = new Intl.NumberFormat('vi-VN', {
                                    style: 'currency',
                                    currency: 'VND',
                                    });
                            var price_total=(data.totalPriceCart.price)*(data.totalPriceCart.qty);
                            $("#price-item"+id).html(numberFormat.format(price_total));
                            $("#grand-total").html("Tổng tiền : "+(data.total)+"đ");
                        }
                    })
                });
            });
</script>
    <script>

        ///addtocart
        $(document).ready(function($){
            let listProduct=$("#product #addtocart");
                listProduct.on('click',function(){
                    var id=$(this).attr('buy-id');
                    $.ajax({
                    url:'http://laravel-training.local/cart/add/'+id,
                    dataType:'json',
                    success:function(result){
                        let count = result.countCart;
                        let data=result.contentCart;
                        let element="";
                        $.each(data,function(key,value){
                        element+= '<li class="single-shopping-cart" id="'+'item_id_'+value.rowId+ '">'+'<div class="shopping-cart-img">' +'<a href="#" >'+'<img src="' +'product'+'/'+ value.options.image + '" />'+'</a>'+'</div>'+'<div class="shopping-cart-title">'+'<h4>'+'<a href="">'+value.name+'</a>'+'</h4>'+'<h6>Số lượng: '+value.qty+'</h6>'+'<span>Giá: '+value.price+'</span>'+'</div>'+'<div id="productcart" class="shopping-cart-delete" style="">'+'<a style="cursor: pointer;" id="deleteitem" item-id="'+value.rowId+'">'+'<i class="ti-close">'+'</i>'+'</a>'+'</div>'+'</li>';
                        });
                        $('#cart').html(element);
                        $("#countcart").html(""+count);
                        $("#total").html(result.total+" VNĐ")
                        }
                    });
                    Swal.fire({
                        title: 'Sản phẩm đã được thêm vào giỏ hàng của bạn!',
                        icon:'success',
                        background: '#fff url(/images/trees.png)',
                        backdrop: `
                            rgba(0,0,123,0.4)
                            url("/images/nyan-cat.gif")
                            left top
                            no-repeat
                        `
                    });
                });

                ////add in qickview-modal
            let product=$("#addtocart1");
                product.on('click',function(){
                    var id=$("#addtocart1").val();
                    $.ajax({
                    url:'http://laravel-training.local/cart/add/'+id,
                    dataType:'json',
                    success:function(result){
                        let count = result.countCart;
                        let data=result.contentCart;
                        let element="";
                        $.each(data,function(key,value){
                        element+= '<li class="single-shopping-cart" id="'+'item_id_' + value.rowId + '">'+'<div class="shopping-cart-img">' +'<a href="#" >'+'<img src="' +'product'+'/'+ value.options.image + '" />'+'</a>'+'</div>'+'<div class="shopping-cart-title">'+'<h4>'+'<a href="">'+value.name+'</a>'+'</h4>'+'<h6>Số lượng: '+value.qty+'</h6>'+'<span>Giá: '+value.price+'</span>'+'</div>'+'<div id="productcart" class="shopping-cart-delete" style="">'+'<a style="cursor: pointer;" id="deleteitem" item-id="'+value.rowId+'">'+'<i class="ti-close">'+'</i>'+'</a>'+'</div>'+'</li>';
                        });
                        $('#cart').html(element);
                        $("#countcart").html(""+count);
                        $("#total").html(result.total+" VNĐ")
                        }
                    })
                });

                ///delete
            $("body").on('click','#deleteitem',function(){
                var rowId=$(this).attr('item-id');
                console.log(rowId);
                $.ajax({
                    url:'http://laravel-training.local/cart/delete/'+rowId,
                    dataType:'json',
                    success:function(data){
                        $("#item_id_"+rowId).remove();
                        let count=data.countCart;
                        $("#countcart").html(""+count);
                    }
                })
            });
            /////quick-view
            let listquickview=$('#product #viewproduct');
            listquickview.on('click',function(){
                var view_id=$(this).attr('view-id');
                $.ajax({
                    url:'http://laravel-training.local/cart/quick-view/'+view_id,
                    dataType:'json',
                    success:function(result){
                        document.getElementById('addtocart1').value=view_id;
                        let product_name=result.product_name;
                        let product_price=result.product_price;
                        let product_desc=result.product_desc;
                        let product_content=result.product_content;
                        $("#product-name").html(product_name);
                        $("#product-price").html(product_price);
                        $("#product-content").html(product_content);
                        $("#product-desc").html(product_desc);
                    }
                })
            })
        });
    </script>
</body>
</html>
