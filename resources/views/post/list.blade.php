<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="{{url('css/main.css')}}">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.row {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
}

.leftcolumn {
  flex: 75%;
  height: 365px;
  width:100%;
}

.card {
  background-color: white;
  padding: 20px;
  margin-top: 20px;
}

h2 {
  color: #0071a1;
}

h5 {
  color: #e91e63;
}

p {
  margin-bottom: 10px;
}

a {
  text-decoration: none;
  color: #0071a1;
}

a:hover {
  text-decoration: underline;
}

</style>
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
</head>
<body>
<div class="row">
  <div class="leftcolumn">
   @foreach($posts as $post)
    <div class="card">
      <h2 style="color:#0071a1;">{{ $post->title }}</h2>
      <h5 style="color:#e91e63;">Published at : {{$post->created_at->format('jS \\of F Y') }}</h5>
      <p>{{ $post->description }}</p>
      <p><b><a href="{{route('post.view',$post->id)}}">Read Article</a></b></p>
    </div>
   @endforeach
  </div>
</div>
</div>
<footer class="site-footer bg-dark text-center" style="">
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