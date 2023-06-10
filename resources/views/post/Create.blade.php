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
        .main {
    height: 335px;
    width: 100%;
  margin-top: 50px;
}

.form-group label {
  font-weight: bold;
}

.form-control {
  border: 1px solid #ced4da;
}

.btn-secondary {
    color: white;
    background-color: palevioletred;
  width: 100%;
  margin-top: 10px;
}

.btn-secondary:hover {
    color: palevioletred;
    background-color: rgb(116, 99, 99);

}

#home-btn {
  margin-top: 10px;
  margin-left: 5px;
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
   <main>
      <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-6">
            <div class="main">
               <form role="form" action="{{route('post.store')}}" method="post">
                  @csrf
                  <div class="form-group">
                     <label for="title">Post Title<span class="text-danger">*</span></label>
                     <input type="text" name="title" class="form-control" required>
                  </div>
                  <div class="form-group">
                     <label for="author">Post Author<span class="text-danger">*</span></label>
                     <input type="text" name="author" class="form-control" required>
                  </div>
                  <div class="form-group">
                     <label for="description">Post Description<span class="text-danger">*</span></label>
                     <input type="text" name="description" class="form-control" required>
                  </div>
                  <div class="form-group">
                     <button type="submit" class="btn btn btn-secondary">save</button>
               </form>
               <a href="{{url('/post-list')}}" style="display: inline-block; text-align: center; width: 100%; text-decoration:none; color:blue; padding-top:20px; font-weight:bold;">GO TO LIST</a>

               </div>
            </div>
         </div>
         
      </div>
   </main>
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
