<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,600;0,700;0,800;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@300;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css\bootstrap.css">
  <link rel="stylesheet" href="css\style.css">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="js\bootstrap.js" charset="utf-8"></script>

  <title>E-Store</title>
</head>

<body>
  <section id="top-bar">
    <div class="container-fluid top-bar ">
      <div class="row d-flex justify-content-between pt-1 pb-1">
        <div class="col-lg-6 col-md-12">
          <i class="fas fa-envelope mr-1"></i>
          support@email.com
        </div>
        <div class="col-lg-6 col-md-12 right">
          <i class="fas fa-phone-alt mr-1"></i>
          +012-345-6789
        </div>
      </div>

    </div>
  </section>
  <section id="navbar">
    <div class="container-fluid nav-bar">
      <nav class="navbar navbar-expand-lg navbar-dark  ">
        <a href="#" class="navbar-brand">MENU</a>
        <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon "></span>
        </button>

        <div class="collapse navbar-collapse pl-0" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto ">
            <li class="nav-item active">
              <a class="nav-link pl-0" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Product</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Product Detail</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Cart</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Checkout</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">My Account</a>
            </li>

            <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                More Pages
              </a>
              <div class="dropdown-menu mt-0 pt-0" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Wishlist</a>
                <a class="dropdown-item" href="#">Login & Register</a>

                <a class="dropdown-item" href="#">Contact Us</a>
              </div>
            </li>

          </ul>
          <div class="nav-item dropdown active user-a">
            <a class="nav-link dropdown-toggle pl-0 pr-0 text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              User Account
            </a>
            <div class="dropdown-menu mt-0 pt-0" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Login</a>
              <a class="dropdown-item" href="#">Register</a>
            </div>
          </div>
        </div>
      </nav>

    </div>

  </section>
  <section id="bottombar">
    <div class="container-fluid bottom-bar  pt-3 pb-3">
      <div class="row align-items-center">
        <div class="col-md-3 logo">
          <img src="img\logo.png" alt="">
        </div>
        <div class="col-md-6 text-center search">
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button> </input>
          </form>
        </div>
        <div class="col-md-3 iki-buton">
          <button type="button" class="btn btn-outline-new mr-3 "><i class="fas fa-heart pr-1"></i>(0)</button>
          <button type="button" class="btn btn-outline-new"><i class="fas fa-shopping-cart pr-1"></i>(0)</button>
        </div>
      </div>
    </div>
  </section>
  <section id="header">
    <div class="container-fluid header ">
      <div class="row">
        <div class="col-md-3 list mb-sm-4 mb-lg-0">
          <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action home "><i class="fa fa-home "></i>Home</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-shopping-bag"></i>Best Selling</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-plus-square "></i>New Arrivals</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-female  "></i>Fashion & Beauty</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-child  "></i>Kids & Babies Clothes</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-tshirt  "></i>Men & Women Clothes</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-mobile-alt "></i>Gadgets & Accessories</a>
            <a href="#" class="list-group-item list-group-item-action electro"><i class="fa fa-microchip "></i>Electronics & Accessories</a>
          </div>
        </div>
        <div class="col-md-6 ">
          <div id="carouselExampleCaptions" class="carousel slide  " style="height:400px;" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target=" #carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target=" #carouselExampleCaptions" data-slide-to="1" class="mr-2 ml-2"></li>
              <li data-target=" #carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img\slider-1.jpg" class="d-block" alt="...">
                <div class="carousel-caption  d-md-block">
                  <p>Some text goes here that describes the image</p>
                  <a class="btn font-weight-bold" href="#">Shop Now </a>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img\slider-2.jpg" class="d-block " alt="...">
                <div class="carousel-caption  d-md-block">
                  <p>Some text goes here that describes the image</p>
                  <a class="btn font-weight-bold" href="#">Shop Now</a>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img\slider-3.jpg" class="d-block " alt="...">
                <div class="carousel-caption  d-md-block ">
                  <p>Some text goes here that describes the image</p>
                  <a class="btn font-weight-bold " href="#"> Shop Now</a>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon fas fa-angle-left fa-2x mb-2" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon fas fa-angle-right fa-2x mb-2" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <div class="col-md-3 mt-sm-4 mt-lg-0" style="height:400px;">
          <div class="category-item h-50 position-relative">
            <img src="img\category-1.jpg" alt="">
            <a href="#">
              <p>Some text goes here that describes the image</p>
            </a>
          </div>
          <div class="category-item h-50 position-relative">
            <img src="img\category-2.jpg" alt="">
            <a href="#">
              <p>Some text goes here that describes the image</p>
            </a>
          </div>
        </div>
      </div>

    </div>

  </section>
  <section id="brand-slider">
    <div class="container-fluid brand-slider my-4">
      <marquee behavior="scroll">
        <div class="row py-3 ">
          <div class="col"><img src="img\brand-1.png" alt=""></div>
          <div class="col"><img src="img\brand-2.png" alt=""></div>
          <div class="col"><img src="img\brand-3.png" alt=""></div>
          <div class="col"><img src="img\brand-4.png" alt=""></div>
          <div class="col"><img src="img\brand-5.png" alt=""></div>
          <div class="col"><img src="img\brand-6.png" alt=""></div>
        </div>
      </marquee>
    </div>
  </section>
  <section id=feature>
    <div class="container-fluid feature">
      <div class="row ">
        <div class="col feature-item ">
          <i class="fab fa-cc-mastercard fa-4x"></i>
          <h2>Secure Payment</h2>
          <p>Lorem ipsum dolor sit amet consectetur</p>
        </div>
        <div class="col   feature-item ">
          <i class="fa fa-truck fa-4x"></i>
          <h2>Worldwide Delivery</h2>
          <p>Lorem ipsum dolor sit amet consectetur elit</p>
        </div>
        <div class="col  feature-item">
          <i class="fa fa-sync-alt fa-4x"></i>
          <h2>90 Days Return</h2>
          <p>Lorem ipsum dolor sit amet consectetur elit</p>
        </div>
        <div class="col   feature-item">
          <i class="fa fa-comments fa-4x"></i>
          <h2>24/7 Support</h2>
          <p>Lorem ipsum dolor sit amet consectetur elit</p>
        </div>
      </div>
    </div>
  </section>
  <section id="category">
    <div class="container-fluid category mt-3 ">
      <div class="row px-3">
        <div class="col-sm-12 col-lg-3 category-item px-0">
          <img src="img\category-3.jpg" alt="">
          <a href="#">
            <p>Some text goes here that describes the image</p>
          </a>
        </div>
        <div class="col-sm-12 col-lg-3 category-item px-0">
          <div class="h-75 position-relative">
            <img src="img\category-4.jpg" alt="">
            <a href="#">
              <p>Some text goes here that describes the image</p>
            </a>
          </div>
          <div class="h-25 position-relative">
            <img src="img\category-5.jpg" alt="">
            <a href="#">
              <p>Some text goes here that describes the image</p>
            </a>
          </div>
        </div>
        <div class="col-sm-12 col-lg-3 category-item px-0">
          <div class="h-25 position-relative">
            <img src="img\category-6.jpg" alt="">
            <a href="#">
              <p>Some text goes here that describes the image</p>
            </a>
          </div>
          <div class="h-75 position-relative">
            <img src="img\category-7.jpg" alt="">
            <a href="#">
              <p>Some text goes here that describes the image</p>
            </a>
          </div>
        </div>
        <div class="col-sm-12 col-lg-3 category-item px-0">
          <img src="img\category-8.jpg" alt="">
          <a href="#">
            <p>Some text goes here that describes the image</p>
          </a>
        </div>
      </div>
    </div>
  </section>
  <section="call-to">
    <div class="container-fluid  my-4 py-4 d-flex justify-content-between align-items-center call-to">
      <h1>call us for any queries</h1>
      <button type="button" class="btn  btn-lg">+012-345-6789</button>
    </div>
    </section>
  <section id="featured-product">
      <div class="container-fluid featured-product position-relative">
        <div class="section-header py-4 mb-4 position-relative">
          <h1 class="d-inline ml-5">Featured Product</h1>



          <a class="carousel-control-prev position-absolute" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon fas fa-angle-left " aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next position-absolute" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon fas fa-angle-right " aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>

        </div>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner ">

            <div class="carousel-item active">
              <div class="row ">
                <div class="col-sm-12 col-md-6 col-lg-3 h-100 product-item ">
                  <div class="ust text-center py-4 ">
                    <p>Product Name</p>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                  </div>

                  <div class="featured-img position-relative">
                    <img src="img\product-1.jpg" alt="">
                    <div class="ust-renk">
                      <a href="#"><i class="fa fa-cart-plus pt-2"></i></a>
                      <a href="#" class="mx-2"><i class="fa fa-heart pt-2"></i></a>
                      <a href="#"><i class="fa fa-search pt-2"></i></a>
                    </div>
                  </div>
                  <div class="alt py-4 px-2">
                    <span class="fiyat"><small>$</small>99</span>
                    <button type="button" class="btn btn-outline-light float-right"><i class="fa fa-cart-plus pr-2"></i>Buy Now</button>
                  </div>

                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 h-100 product-item ">

                  <div class="ust text-center py-4 ">
                    <p>Product Name</p>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                  </div>

                  <div class="featured-img position-relative">
                    <img src="img\product-2.jpg" alt="">
                    <div class="ust-renk">
                      <a href="#"><i class="fa fa-cart-plus pt-2"></i></a>
                      <a href="#" class="mx-2"><i class="fa fa-heart pt-2"></i></a>
                      <a href="#"><i class="fa fa-search pt-2"></i></a>
                    </div>
                  </div>
                  <div class="alt py-4 px-2">
                    <span class="fiyat"><small>$</small>99</span>
                    <button type="button" class="btn btn-outline-light float-right"><i class="fa fa-cart-plus pr-2"></i>Buy Now</button>
                  </div>

                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 h-100 product-item ">

                  <div class="ust text-center py-4 ">
                    <p>Product Name</p>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                  </div>

                  <div class="featured-img position-relative">
                    <img src="img\product-3.jpg" alt="">
                    <div class="ust-renk">
                      <a href="#"><i class="fa fa-cart-plus pt-2"></i></a>
                      <a href="#" class="mx-2"><i class="fa fa-heart pt-2"></i></a>
                      <a href="#"><i class="fa fa-search pt-2"></i></a>
                    </div>
                  </div>
                  <div class="alt py-4 px-2">
                    <span class="fiyat"><small>$</small>99</span>
                    <button type="button" class="btn btn-outline-light float-right"><i class="fa fa-cart-plus pr-2"></i>Buy Now</button>
                  </div>

                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 h-100 product-item ">

                  <div class="ust text-center py-4 ">
                    <p>Product Name</p>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                  </div>

                  <div class="featured-img position-relative">
                    <img src="img\product-4.jpg" alt="">
                    <div class="ust-renk">
                      <a href="#"><i class="fa fa-cart-plus pt-2"></i></a>
                      <a href="#" class="mx-2"><i class="fa fa-heart pt-2"></i></a>
                      <a href="#"><i class="fa fa-search pt-2"></i></a>
                    </div>
                  </div>
                  <div class="alt py-4 px-2">
                    <span class="fiyat"><small>$</small>99</span>
                    <button type="button" class="btn btn-outline-light float-right"><i class="fa fa-cart-plus pr-2"></i>Buy Now</button>
                  </div>

                </div>
              </div>

            </div>

            <div class="carousel-item ">
              <div class="row ">
                <div class="col-sm-12 col-md-6 col-lg-3 h-100 product-item ">
                  <div class="ust text-center py-4 ">
                    <p>Product Name</p>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                  </div>

                  <div class="featured-img position-relative">
                    <img src="img\product-5.jpg" alt="">
                    <div class="ust-renk">
                      <a href="#"><i class="fa fa-cart-plus pt-2"></i></a>
                      <a href="#" class="mx-2"><i class="fa fa-heart pt-2"></i></a>
                      <a href="#"><i class="fa fa-search pt-2"></i></a>
                    </div>
                  </div>
                  <div class="alt py-4 px-2">
                    <span class="fiyat"><small>$</small>99</span>
                    <button type="button" class="btn btn-outline-light float-right"><i class="fa fa-cart-plus pr-2"></i>Buy Now</button>
                  </div>

                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 h-100 product-item ">

                  <div class="ust text-center py-4 ">
                    <p>Product Name</p>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                  </div>

                  <div class="featured-img position-relative">
                    <img src="img\product-6.jpg" alt="">
                    <div class="ust-renk">
                      <a href="#"><i class="fa fa-cart-plus pt-2"></i></a>
                      <a href="#" class="mx-2"><i class="fa fa-heart pt-2"></i></a>
                      <a href="#"><i class="fa fa-search pt-2"></i></a>
                    </div>
                  </div>
                  <div class="alt py-4 px-2">
                    <span class="fiyat"><small>$</small>99</span>
                    <button type="button" class="btn btn-outline-light float-right"><i class="fa fa-cart-plus pr-2"></i>Buy Now</button>
                  </div>

                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 h-100 product-item ">

                  <div class="ust text-center py-4 ">
                    <p>Product Name</p>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                  </div>

                  <div class="featured-img position-relative">
                    <img src="img\product-7.jpg" alt="">
                    <div class="ust-renk">
                      <a href="#"><i class="fa fa-cart-plus pt-2"></i></a>
                      <a href="#" class="mx-2"><i class="fa fa-heart pt-2"></i></a>
                      <a href="#"><i class="fa fa-search pt-2"></i></a>
                    </div>
                  </div>
                  <div class="alt py-4 px-2">
                    <span class="fiyat"><small>$</small>99</span>
                    <button type="button" class="btn btn-outline-light float-right"><i class="fa fa-cart-plus pr-2"></i>Buy Now</button>
                  </div>

                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 h-100 product-item ">

                  <div class="ust text-center py-4 ">
                    <p>Product Name</p>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                  </div>

                  <div class="featured-img position-relative">
                    <img src="img\product-8.jpg" alt="">
                    <div class="ust-renk">
                      <a href="#"><i class="fa fa-cart-plus pt-2"></i></a>
                      <a href="#" class="mx-2"><i class="fa fa-heart pt-2"></i></a>
                      <a href="#"><i class="fa fa-search pt-2"></i></a>
                    </div>
                  </div>
                  <div class="alt py-4 px-2">
                    <span class="fiyat"><small>$</small>99</span>
                    <button type="button" class="btn btn-outline-light float-right"><i class="fa fa-cart-plus pr-2"></i>Buy Now</button>
                  </div>

                </div>
              </div>
            </div>

          </div>


        </div>
      </div>
    </section>
  <section="subscribe">
      <div class="container-fluid subscribe call-to my-4 py-4 d-flex justify-content-between align-items-center">
        <h1>Subscribe Our Newsletter</h1>
        <div class="form-control rounded d-flex justify-content-between">
          <input class="text-muted pl-2" type="email " value="Your email here">
          <button class="btn h-100 font-weight-bold">Submit</button>
        </div>
      </div>
      </div>
      </section>
  <section id="recent-product">
        <div class="container-fluid featured-product position-relative">
          <div class="section-header py-4 mb-4 position-relative">
            <h1 class="d-inline ml-5">Recent Product</h1>

            <a class="carousel-control-prev position-absolute" href="#carouselExampleControls2" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon fas fa-angle-left " aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next position-absolute" href="#carouselExampleControls2" role="button" data-slide="next">
              <span class="carousel-control-next-icon fas fa-angle-right " aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>

          </div>
          <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner ">

              <div class="carousel-item active">
                <div class="row ">
                  <div class="col-sm-12 col-md-6 col-lg-3 h-100 product-item ">
                    <div class="ust text-center py-4 ">
                      <p>Product Name</p>
                      <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    </div>

                    <div class="featured-img position-relative">
                      <img src="img\product-10.jpg" alt="">
                      <div class="ust-renk">
                        <a href="#"><i class="fa fa-cart-plus pt-2"></i></a>
                        <a href="#" class="mx-2"><i class="fa fa-heart pt-2"></i></a>
                        <a href="#"><i class="fa fa-search pt-2"></i></a>
                      </div>
                    </div>
                    <div class="alt py-4 px-2">
                      <span class="fiyat"><small>$</small>99</span>
                      <button type="button" class="btn btn-outline-light float-right"><i class="fa fa-cart-plus pr-2"></i>Buy Now</button>
                    </div>

                  </div>
                  <div class="col-sm-12 col-md-6 col-lg-3 h-100 product-item ">

                    <div class="ust text-center py-4 ">
                      <p>Product Name</p>
                      <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    </div>

                    <div class="featured-img position-relative">
                      <img src="img\product-9.jpg" alt="">
                      <div class="ust-renk">
                        <a href="#"><i class="fa fa-cart-plus pt-2"></i></a>
                        <a href="#" class="mx-2"><i class="fa fa-heart pt-2"></i></a>
                        <a href="#"><i class="fa fa-search pt-2"></i></a>
                      </div>
                    </div>
                    <div class="alt py-4 px-2">
                      <span class="fiyat"><small>$</small>99</span>
                      <button type="button" class="btn btn-outline-light float-right"><i class="fa fa-cart-plus pr-2"></i>Buy Now</button>
                    </div>

                  </div>
                  <div class="col-sm-12 col-md-6 col-lg-3 h-100 product-item ">

                    <div class="ust text-center py-4 ">
                      <p>Product Name</p>
                      <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    </div>

                    <div class="featured-img position-relative">
                      <img src="img\product-8.jpg" alt="">
                      <div class="ust-renk">
                        <a href="#"><i class="fa fa-cart-plus pt-2"></i></a>
                        <a href="#" class="mx-2"><i class="fa fa-heart pt-2"></i></a>
                        <a href="#"><i class="fa fa-search pt-2"></i></a>
                      </div>
                    </div>
                    <div class="alt py-4 px-2">
                      <span class="fiyat"><small>$</small>99</span>
                      <button type="button" class="btn btn-outline-light float-right"><i class="fa fa-cart-plus pr-2"></i>Buy Now</button>
                    </div>

                  </div>
                  <div class="col-sm-12 col-md-6 col-lg-3 h-100 product-item ">

                    <div class="ust text-center py-4 ">
                      <p>Product Name</p>
                      <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    </div>

                    <div class="featured-img position-relative">
                      <img src="img\product-7.jpg" alt="">
                      <div class="ust-renk">
                        <a href="#"><i class="fa fa-cart-plus pt-2"></i></a>
                        <a href="#" class="mx-2"><i class="fa fa-heart pt-2"></i></a>
                        <a href="#"><i class="fa fa-search pt-2"></i></a>
                      </div>
                    </div>
                    <div class="alt py-4 px-2">
                      <span class="fiyat"><small>$</small>99</span>
                      <button type="button" class="btn btn-outline-light float-right"><i class="fa fa-cart-plus pr-2"></i>Buy Now</button>
                    </div>

                  </div>
                </div>

              </div>

              <div class="carousel-item ">
                <div class="row ">
                  <div class="col-sm-12 col-md-6 col-lg-3 h-100 product-item ">
                    <div class="ust text-center py-4 ">
                      <p>Product Name</p>
                      <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    </div>

                    <div class="featured-img position-relative">
                      <img src="img\product-6.jpg" alt="">
                      <div class="ust-renk">
                        <a href="#"><i class="fa fa-cart-plus pt-2"></i></a>
                        <a href="#" class="mx-2"><i class="fa fa-heart pt-2"></i></a>
                        <a href="#"><i class="fa fa-search pt-2"></i></a>
                      </div>
                    </div>
                    <div class="alt py-4 px-2">
                      <span class="fiyat"><small>$</small>99</span>
                      <button type="button" class="btn btn-outline-light float-right"><i class="fa fa-cart-plus pr-2"></i>Buy Now</button>
                    </div>

                  </div>
                  <div class="col-sm-12 col-md-6 col-lg-3 h-100 product-item ">

                    <div class="ust text-center py-4 ">
                      <p>Product Name</p>
                      <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    </div>

                    <div class="featured-img position-relative">
                      <img src="img\product-5.jpg" alt="">
                      <div class="ust-renk">
                        <a href="#"><i class="fa fa-cart-plus pt-2"></i></a>
                        <a href="#" class="mx-2"><i class="fa fa-heart pt-2"></i></a>
                        <a href="#"><i class="fa fa-search pt-2"></i></a>
                      </div>
                    </div>
                    <div class="alt py-4 px-2">
                      <span class="fiyat"><small>$</small>99</span>
                      <button type="button" class="btn btn-outline-light float-right"><i class="fa fa-cart-plus pr-2"></i>Buy Now</button>
                    </div>

                  </div>
                  <div class="col-sm-12 col-md-6 col-lg-3 h-100 product-item ">

                    <div class="ust text-center py-4 ">
                      <p>Product Name</p>
                      <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    </div>

                    <div class="featured-img position-relative">
                      <img src="img\product-4.jpg" alt="">
                      <div class="ust-renk">
                        <a href="#"><i class="fa fa-cart-plus pt-2"></i></a>
                        <a href="#" class="mx-2"><i class="fa fa-heart pt-2"></i></a>
                        <a href="#"><i class="fa fa-search pt-2"></i></a>
                      </div>
                    </div>
                    <div class="alt py-4 px-2">
                      <span class="fiyat"><small>$</small>99</span>
                      <button type="button" class="btn btn-outline-light float-right"><i class="fa fa-cart-plus pr-2"></i>Buy Now</button>
                    </div>

                  </div>
                  <div class="col-sm-12 col-md-6 col-lg-3 h-100 product-item ">

                    <div class="ust text-center py-4 ">
                      <p>Product Name</p>
                      <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    </div>

                    <div class="featured-img position-relative">
                      <img src="img\product-3.jpg" alt="">
                      <div class="ust-renk">
                        <a href="#"><i class="fa fa-cart-plus pt-2"></i></a>
                        <a href="#" class="mx-2"><i class="fa fa-heart pt-2"></i></a>
                        <a href="#"><i class="fa fa-search pt-2"></i></a>
                      </div>
                    </div>
                    <div class="alt py-4 px-2">
                      <span class="fiyat"><small>$</small>99</span>
                      <button type="button" class="btn btn-outline-light float-right"><i class="fa fa-cart-plus pr-2"></i>Buy Now</button>
                    </div>

                  </div>
                </div>
              </div>

            </div>


          </div>
        </div>
      </section>
  <section id="customer">
        <div class="container-fluid customer mt-4">
          <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <div class="row ">
                  <div class="col-sm-12 col-md-6  customer-item ">
                    <div class="card mb-3">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="img\review-1.jpg" alt="...">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                          </div>
                        </div>
                      </div>
                    </div>



                  </div>
                  <div class="col-sm-12 col-md-6  customer-item">
                    <div class="card mb-3 w-100">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="img\review-2.jpg" alt="...">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>

                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <div class="row ">
                  <div class="col-sm-12 col-md-6  customer-item ">
                    <div class="card mb-3">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="img\review-3.jpg" alt="...">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                          </div>
                        </div>
                      </div>
                    </div>



                  </div>
                  <div class="col-sm-12 col-md-6  customer-item">
                    <div class="card mb-3 w-100">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="img\review-1.jpg" alt="...">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>

                </div>
              </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon fas fa-angle-left fa-2x mb-3" aria-hidden="true"></span>

            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
              <span class="carousel-control-next-icon fas fa-angle-right fa-2x mb-3" aria-hidden="true"></span>

            </a>
          </div>


        </div>
      </section>

  <section id="footer">
    <div class="container-fluid footer">
      <div class="row">
        <div class="col-lg-3 col-sm-12">
          <h2>Get In Touch</h2>
          <div class="contact-info">
            <p><i class="fa fa-map-marker mr-2"></i>123 E Store, Los Angeles, USA</p>
            <p><i class="fa fa-envelope mr-2"></i>email@example.com</p>
            <p><i class="fa fa-phone mr-2"></i>+123-456-7890</p>
          </div>
        </div>
        <div class="col-lg-3 col-sm-12">
          <h2>Follow Us</h2>
          <div class="contact-info social">
            <a href="#"><i class="fab fa-twitter "></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-sm-12">
          <h2>Company Info</h2>
          <div class="contact-info company-info">
            <ul>
              <li> <a href="#">About Us</a> </li>
              <li> <a href="#">Privacy Policy</a> </li>
              <li> <a href="#">Terms & Consition</a> </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-sm-12">
          <h2>Purchase Info</h2>
          <div class="contact-info company-info">
            <ul>
              <li> <a href="#">Pyament Policy</a> </li>
              <li> <a href="#">shipping Policy</a> </li>
              <li> <a href="#">Return Policy</a> </li>
            </ul>
          </div>
        </div>
      </div>
    <hr>

    </div>

  </section>

  <section id="footer-bottom">
    <div class="container-fluid footer-bottom">
      <div class="row d-flex justify-content-between py-4">
        <div class="col-lg-6 col-sm-12 text-center">
          <span>Copyright ©</span>
          <a href="#"> HTML Codex</a>
          <span>. All Rights Reserved</span>
        </div>
        <div class="col-lg-6 col-sm-12 text-center">
        <span>Template By</span>
        <a href="#"> HTML Codex</a>
      </div>
    </div>

  </section>



</body>

</html>
