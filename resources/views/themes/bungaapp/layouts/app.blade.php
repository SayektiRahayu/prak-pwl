<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Bunga</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/themes/bungaapp/main.css'])
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-white fixed-top py-4 shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="index.html">Bunga<span>Toko</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <div class="input-group mx-auto mt-5 mt-lg-0">
              <input type="text" class="form-control" placeholder="Mau cari apa?" aria-label="Mau cari apa?" aria-describedby="button-addon2">
              <button class="btn btn-outline-warning" type="button" id="button-addon2"><i class="bx bx-search" ></i></button>
            </div>
            <ul class="navbar-nav ms-auto mt-3 mt-sm-0">
              <li class="nav-item me-3">
                <a class="nav-link active" href="#">
                  <i class="bx bx-heart" ></i>
                  <span class="badge text-bg-warning rounded-circle position-absolute">2</span>
                </a>
              </li>
              <li class="nav-item me-5">
                <a class="nav-link" href="#">
                  <i class="bx bx-cart-alt"></i>
                  <span class="badge text-bg-warning rounded-circle position-absolute">3</span>
                </a>
              </li>
              <!-- mobile menu -->
              <div class="dropdown mt-3 d-lg-none">
                <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Menu
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="index.html">Home</a></li>
                  <li><a class="dropdown-item" href="products.html">Best Seller</a></li>
                  <li><a class="dropdown-item" href="products.html">New Arrival</a></li>
                  <li><a class="dropdown-item" href="products.html">Blog</a></li>
                </ul>
              </div>
              <li class="nav-item mt-5 mt-lg-0 text-center">
                <a class="nav-link btn-second me-lg-3" href="#">Login</a>
              </li>
              <li class="nav-item mt-3 mt-lg-0 text-center">
                <a class="nav-link btn-first" href="#">Register</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <div class="container menu-wrapper fixed-top d-none d-lg-block">
      <div class="menu d-flex justify-content-center align-items-center">
        <a class="nav-link active" href="index.html">Home</a>
        <a class="nav-link" href="products.html">Best Seller</a>
        <a class="nav-link" href="products.html">New Arrival</a>
        <a class="nav-link" href="products.html">Blog</a>
      </div>
    </div>

    <!-- Header -->
    <section class="header">
      <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://www.quipper.com/id/blog/wp-content/uploads/2023/01/pexels-pixabay-36753.webp" class="d-block w-100" alt="1">
            </div>
            <div class="carousel-item">
              <img src="https://prodigits.co.uk/thumbs/wallpapers/p2ls/misc/49/c9829d2012314646.jpg" class="d-block w-100" alt="2">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>

    <!-- Popular -->
    <section class="popular">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6">
            <h1>Popular</h1>
          </div>
          <div class="col-6 text-end">
            <a href="#" class="btn-first">View All</a>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-lg-3 col-6">
            <div class="card card-product card-body p-lg-4 p3">
              <a href="product.html"><img src="https://o-cdn-cas.sirclocdn.com/parenting/images/bunga-mawar.width-800.format-webp.webp" alt="" class="img-fluid"></a>
              <h3 class="product-name mt-3">Product 1</h3>
              <div class="rating">
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
              </div>
              <div class="detail d-flex justify-content-between align-items-center mt-4">
                 <p class="price">IDR 200.000</p>
                 <a href="product.html" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="card card-product card-body p-lg-4 p3">
              <a href="product.html"><img src="https://i0.wp.com/blog.eigeradventure.com/wp-content/uploads/2023/05/bunga-Daisy.jpg?resize=696%2C516&ssl=1" alt="" class="img-fluid"></a>
              <h3 class="product-name mt-3">Product 2</h3>
              <div class="rating">
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
              </div>
              <div class="detail d-flex justify-content-between align-items-center mt-4">
                 <p class="price">IDR 200.000</p>
                 <a href="product.html" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6 mt-3 mt-lg-0">
            <div class="card card-product card-body p-lg-4 p3">
              <a href="product.html"><img src="https://www.ruparupa.com/blog/wp-content/uploads/2022/01/closeup-shot-lotus-flower-scaled.jpg" alt="" class="img-fluid"></a>
              <h3 class="product-name mt-3">Product 3</h3>
              <div class="rating">
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
              </div>
              <div class="detail d-flex justify-content-between align-items-center mt-4">
                 <p class="price">IDR 200.000</p>
                 <a href="product.html" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6 mt-3 mt-lg-0">
            <div class="card card-product card-body p-lg-4 p3">
              <a href="#"><img src="https://cdn1.katadata.co.id/media/images/thumb/2023/05/23/Ilustrasi_Bunga_Daisy-2023_05_23-16_43_58_543a0ae4b406e95a8b3dca1bf895203d_960x640_thumb.jpg" alt="" class="img-fluid"></a>
              <h3 class="product-name mt-3">Product 4</h3>
              <div class="rating">
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
              </div>
              <div class="detail d-flex justify-content-between align-items-center mt-4">
                 <p class="price">IDR 200.000</p>
                 <a href="product.html" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Latest -->
    <section class="latest">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6">
            <h1>Latest</h1>
          </div>
          <div class="col-6 text-end">
            <a href="product.html" class="btn-first">View All</a>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-lg-3 col-6">
            <div class="card card-product card-body p-lg-4 p3">
              <a href="product.html"><img src="https://res.cloudinary.com/dk0z4ums3/image/upload/v1690334462/attached_image/bunga-daffodil-ini-potensi-manfaat-kesehatan-dan-risikonya.jpg" alt="" class="img-fluid"></a>
              <h3 class="product-name mt-3">Product 1</h3>
              <div class="rating">
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
              </div>
              <div class="detail d-flex justify-content-between align-items-center mt-4">
                 <p class="price">IDR 200.000</p>
                 <a href="product.html" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="card card-product card-body p-lg-4 p3">
              <a href="product.html"><img src="https://www.youngontop.com/wp-content/uploads/2023/05/pexels-pixabay-54186-1024x739.jpg" alt="" class="img-fluid"></a>
              <h3 class="product-name mt-3">Product 2</h3>
              <div class="rating">
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
              </div>
              <div class="detail d-flex justify-content-between align-items-center mt-4">
                 <p class="price">IDR 200.000</p>
                 <a href="product.html" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6 mt-3 mt-lg-0">
            <div class="card card-product card-body p-lg-4 p3">
              <a href="product.html"><img src="https://disperkimta.bulelengkab.go.id/public/uploads/konten/11-cara-merawat-bunga-agar-tumbuh-merekah-49.jpg" alt="" class="img-fluid"></a>
              <h3 class="product-name mt-3">Product 3</h3>
              <div class="rating">
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
              </div>
              <div class="detail d-flex justify-content-between align-items-center mt-4">
                 <p class="price">IDR 200.000</p>
                 <a href="product.html" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6 mt-3 mt-lg-0">
            <div class="card card-product card-body p-lg-4 p3">
              <a href="product.html"><img src="https://static.promediateknologi.id/crop/0x0:0x0/x/photo/p2/01/2023/06/05/bunga-lima-warna-2844143920.jpg" alt="" class="img-fluid"></a>
              <h3 class="product-name mt-3">Product 4</h3>
              <div class="rating">
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
                <i class="bx bxs-star"></i>
              </div>
              <div class="detail d-flex justify-content-between align-items-center mt-4">
                 <p class="price">IDR 200.000</p>
                 <a href="product.html" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Subscribe  -->
    <section class="subscribe">
      <div class="container">
        <div class="subscribe-wrapper">
          <div class="row justify-content-center text-center">
            <div class="col-lg-6 col-md-7 col-10 col-sub">
              <h1>Subscribe to get latest updates!</h1>
              <form action="#" class="mt-5">
                <div class="input-group w-100">
                  <input type="email" class="form-control" placeholder="Type your email ..">
                  <button class="btn btn-outline-warning">Subscribe</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="container pt-5">
        <div class="row row-content">
          <div class="col-md-6">
            <h1 class="logo-brand">Bunga <span>Toko</span></h1>
            <p>Lorem ipsum dolor sit amet</p>
          </div>
          <div class="col-md-3 mt-4 mt-sm-0">
            <h3 class="mb-3">Navigation</h3>
            <ul class="p-0">
              <li><a href="#">Home</a></li>
              <li class="mt-3"><a href="#">Best Seller</a></li>
              <li class="mt-3"><a href="#">Category</a></li>
              <li class="mt-3"><a href="#">Comunity</a></li>
              <li class="mt-3"><a href="#">Blog</a></li>
            </ul>
          </div>
          <div class="col-md-3 mt-4 mt-sm-0">
            <h3 class="mb-3">Company</h3>
            <a href="#">john@example.com</a>
            <p>Jln. Setagaya, No 32 Shibuya Jepang</p>
          </div>
        </div>
        <div class="row row-copy mt-4 mt-sm-0">
          <div class="col-md-6">
            <p>&copy; 2023 BungaToko. All rights reserved.</p>
          </div>
          <div class="col-md-6 text-sm-end">
            <a href="#"><i class='bx bxl-instagram-alt' ></i></a>
            <a href="#"><i class='bx bxl-facebook-circle' ></i></a>
          </div>
        </div>
      </div>
    </footer>
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>