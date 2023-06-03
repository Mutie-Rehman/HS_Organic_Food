<!DOCTYPE html>
<html>
<head>
    <title>Price form</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- MAIN CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('css/main.css')}}">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" /> -->
</head>
  <!-- NAV BAR -->
  <nav class="navbar navbar-expand-sm ">
        <div class="container-fluid">
            <h2 style="color: palevioletred;">HS Organic Food</h2>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{url('/myHome')}}" class="nav-link smoothScroll">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{url('/myPrice')}}" class="nav-link smoothScroll">Price</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{url('/myAbout')}}" class="nav-link smoothScroll">About Us</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{url('/contact-us')}}" class="nav-link smoothScroll">Contact Us</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{url('/myItem')}}" class="nav-link smoothScroll">More Items</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <body>
    <div class="pcontainer">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image: url('https://img.freepik.com/free-photo/wooden-kitchen-desktop-with-bread-oil_23-2147835211.jpg?w=826&t=st=1685110010~exp=1685110610~hmac=7b5562e80bc6b7f6fa0fde85b2120c91f30e5b0cc2582b6c2af803165ee04552');"></div>
        <div class="swiper-slide" style="background-image: url('https://img.freepik.com/free-photo/top-view-delicious-cream-soup-yellow-dish-white-desk-soup-sauce-meal-cream-dish-dinner_140725-96359.jpg?size=626&ext=jpg');"></div>
        <div class="swiper-slide" style="background-image: url('https://img.freepik.com/free-photo/sweet-honey-spoon-close-up_23-2148346624.jpg?size=626&ext=jpg&ga=GA1.2.365537867.1685109666&semt=ais');"></div>
        <div class="swiper-slide" style="background-image: url('https://img.freepik.com/free-photo/honey-products-composition-honey-jar-honeycomb-tea-special-spoon-white-background_1268-16987.jpg?w=740&t=st=1685110080~exp=1685110680~hmac=1acb07dba43762ada380e3664b263bb3e5547160127b761e639bec29d0c79eef');"></div>
      </div>
      <h1 class="price-heading">HERE'S THE PRICE SECTION</h1>
    </div>
</div>

<div class="zcontainer">
  <h1 class="main-heading">Welcome to HS Organic Official Store</h1>
</div>
<div class="table-container">
  <table>
    <thead>
      <tr>
        <th>HONEY</th>
        <th>DESI GHEE</th>
      </tr>
    </thead>
    <tbody>
      <tr style="font-weight: bold;">
        <td>1 KG Pack</td>
        <td>1 KG Pack</td>
      </tr>
      <tr style="font-size: 35px; font-weight: bold;">
        <td>899/- RS</td>
        <td>2000/- RS</td>
      </tr>
      <tr style="font-weight: bold;">
        <td>500 Gram Pack</td>
        <td>500 Gram Pack</td>
      </tr>
      <tr style="font-size: 35px; font-weight: bold;">
        <td>500/- RS</td>
        <td>1200/- RS</td>
      </tr>
      <tr>
        <td>No Hidden Charges</td>
        <td>No Hidden Charges</td>
      </tr>
      <tr>
        <td>Money-Back Guarantee</td>
        <td>Money-Back Guarantee</td>
      </tr>
      <tr>
        <td>100% pure and naturally</td>
        <td>100% pure and naturally</td>
      </tr>
      <tr>
        <td>Safe and Secure Packing</td>
        <td>Safe and Secure Packing</td>
      </tr>
      <tr>
        <td>Damaged Warranty</td>
        <td>Damaged Warranty</td>
      </tr>
      <tr>
        <td>Special Price for Resellers</td>
        <td>Special Price for Resellers</td>
      </tr>
      <tr>
        <td><a href="https://wa.me/+923010153266" target="_blank" id="home-btn" class=" btn mt-3">Shop Now</a></td>
        <td><a href="https://wa.me/+923010153266" target="_blank" id="home-btn" class=" btn mt-3">Shop Now</a></td>
      </tr>
    </tbody>
  </table>
</div>







    <footer class="site-footer bg-dark text-center">
        <div class="container">
            <div class="social-icons">
                <a href="https://www.facebook.com/your_facebook_username_or_page_id/" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                    <span class="icon-name">Facebook</span>
                </a>
                <a href="https://www.instagram.com/your_instagram_id/"  target="_blank">
                    <i class="fab fa-instagram"></i>
                    <span class="icon-name" style="color: purple;">Instagram</span>
                </a>
            </div>
            <br>
            <div class="row">
                <div class="mx-auto mt-4 mt-lg-0 mt-md-0 col-lg-5 col-md-6 col-12">
                    <pre style="color: white;"><b>Email:</b> info@hsorganic.com  <b>Phone:</b>  <a href="https://wa.me/+923105973534" target="_blank">03105973534</a></pre>
                    <p>&copy; 2023 HS Organic. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper('.swiper-container', {
      loop: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
    });
  </script>
    </body>