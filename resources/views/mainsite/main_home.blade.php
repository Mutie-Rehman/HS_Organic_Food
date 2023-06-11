<!DOCTYPE html>
<html lang="en">

<head>

    <title>HS Organic Food Website</title>
    <!-- MAIN CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('css/main.css')}}">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

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

                    <li class="nav-item">
                        <a href="{{url('/myReview')}}" class="nav-link smoothScroll">Reviews</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <!-- HOME -->
    <section class="hero d-flex flex-column justify-content-center align-items-center" id="home">
    <div class="center-content">
    <div class="overlay">
        <h1 class="text-center welcome-heading">Welcome to<br><br>HS Organic Official<br><br>Store</h1>
        <a href="https://wa.me/+923010153266" target="_blank" id="home-btn" class="btn mt-3">Shop Now</a>
    </div>
</div>
        <div class="hcontainer">
            <div class="product-text text-center">
                <b>
                Experience pure delight with HS Organic Product's exquisite Cow
                <br>
                 Desi Ghee and HS Honey, unmatched in quality.</b>
            </div>
            <div class="product-images">
                <div>
                    <h2 class="product-heading">Desi Ghee</h2>
                    <img src="\images\HS desi ghee.png" alt="Desi Ghee">
                    <br>
                    <a href="https://wa.me/+923010153266" target="_blank" id="home-btn" class=" btn mt-3">Shop Now</a>
                    <br><br>
                    <p>
                        HS Organic Product Provide Organic Bee
                        <br>
                        Honey in its best quality form.
                    </p>

                </div>
                <div>
                    <h2 class="product-heading">Honey</h2>
                    <img src="\images\HS honey.png" alt="Honey">
                    <br>
                    <a href="https://wa.me/+923010153266" target="_blank" id="home-btn" class=" btn mt-3">Shop Now</a>
                    <br><br>
                    <p>
                        HS Organic Product Provide Cow Desi Ghee in
                        <br>
                        its best quality form.
                    </p>

                </div>
            </div>
        </div>

        <div class="icontainer">
            <div class="content">
                <div class="text-section">
                    <p>
                        You can enjoy Honey and Desi Ghee.
                        <br><br>
                        <br>
                        With Mutton Karahi, Paratha and French Toast.
                        <br><br>
                        Desi Ghee and Honey are essential and good for health.
                    </p>
                    <br>
                    <a href="https://wa.me/+923010153266" target="_blank" id="home-btn" class=" btn mt-3" style="margin-left: 75px;">Shop Now</a>
                </div>
                <div class="image-grid">
                    <div>
                        <img src="\images\Deshi Ghee Karahi.png" alt="Image 1">
                    </div>
                    <div>
                        <img src="\images\Honey Pratha.png" alt="Image 2">
                    </div>
                    <div>
                        <img src="\images\Medical use honey.png" alt="Image 3">
                    </div>
                    <div>
                        <img src="\images\French toast honey.png" alt="Image 4">
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- Prices-->
    <section class="price" id="price">
        <div class="pricecontainer contact-content text-center d-flex flex-column align-items-center">
            <h1>PRICES OF PRODUCTS</h1>
            <p>
                Discover premium products offered at unbeatable prices, making quality affordable for everyone. 
                <br>
For detailed pricing information, explore our dedicated price section.
            </p>
            <a style="padding: 10px;" href="{{url('/myPrice')}}" id="home-btn"  class=" btn">Price</a>
        </div>
    </section>




    <!-- About Us -->
    <section class="about" id="aboutus">
        <div class="acontainer contact-content text-center d-flex flex-column align-items-center">
            <h1>ABOUT US</h1>
            <p>
                Here you can come to know about us that why should you chose and what is special about
                <br>
                us that will
                attract you and keep your helath good.
            </p>
            <a style="padding: 10px;" href="{{url('/myAbout')}}" id="home-btn" class=" btn">Get
                Details</a>
        </div>
    </section>

        <!-- More Items -->
        <section class="items" id="moreitems">
        <div class="mcontainer contact-content text-center d-flex flex-column align-items-center">
            <h1>MORE ITEMS</h1>
            <p>
                Other than our main products Honey and Desi Ghee we will provide you the other useful things
                <br>
                which will be useful for you in your house. Which you can use in cooking and enjoy them.
            </p>
            <a style="padding: 10px;" href="{{url('/myItem')}}" id="home-btn"  class=" btn">Explore items</a>
        </div>
    </section>



    <!-- CONTACT Us-->
    <section class="contact-section" id="contactus">
        <div class="container">
            <div class="contact-content text-center d-flex flex-column align-items-center">
                <h1 class="contact-center">GET IN TOUCH</h1>
                <p class="text-center">Feel free to reach out to us with any inquiries or feedback. If you have any
                    complaints or suggestions on how we can improve our products and make it more loveable for
                    our customers, we would love to hear from you.</p>
                <p class="text-center"><b>If you want to ask anything or register a complaint, click the button
                        below.</b></p>
                <div class="mt-3">
                    <a style="padding: 10px;" href="{{url('/contact-us')}}" id="home-btn" class=" btn">Click Me</a>
                </div>
            </div>
        </div>
    </section>


    <!-- FOOTER -->
    <footer class="site-footer bg-dark text-center">
        <div class="container">
            <div class="social-icons">
                <a href="https://web.facebook.com/hsorganicofficial" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                    <span class="icon-name">Facebook</span>
                </a>
                <a href="https://www.instagram.com/hsorganicofficial/"  target="_blank">
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
</body>

</html>