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
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <style>
         * {
         box-sizing: border-box;
         }
         /* Add a gray background color with some padding */
         body {
            text-align:center;
        margin:10px;
         font-family: Arial;
         background: #f1f1f1;
         }
         /* Header/Blog Title */
         .header {
         padding: 30px;
         font-size: 40px;
         text-align: center;
         background: white;
         }
         /* Fake image */
         .fakeimg {
         background-color: #aaa;
         width: 100%;
         padding: 20px;
         }
         .avatar {
         vertical-align: middle;
         width: 50px;
         height: 50px;
         border-radius: 50%;
         }
         .rate {
         float: left;
         height: 46px;
         padding: 0 10px;
         }
         .rate:not(:checked) > input {
         position:absolute;
         display: none;
         }
         .rate:not(:checked) > label {
         float:right;
         width:1em;
         overflow:hidden;
         white-space:nowrap;
         cursor:pointer;
         font-size:30px;
         color:#ccc;
         }
         .rate:not(:checked) > label:before {
         content: '★ ';
         }
         .rate > input:checked ~ label {
         color: #ffc700;
         }
         .rate:not(:checked) > label:hover,
         .rate:not(:checked) > label:hover ~ label {
         color: #deb217;
         }
         .rate > input:checked + label:hover,
         .rate > input:checked + label:hover ~ label,
         .rate > input:checked ~ label:hover,
         .rate > input:checked ~ label:hover ~ label,
         .rate > label:hover ~ input:checked ~ label {
         color: #c59b08;
         }
         .rating-container .form-control:hover, .rating-container .form-control:focus{
         background: #fff;
         border: 1px solid #ced4da;
         }
         .rating-container textarea:focus, .rating-container input:focus {
         color: #000;
         }
         /* End */
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
            <div class="card">
               <h2 style="color:#0071a1;">{{ $post_detail->title }}</h2>
               <p style="color:#e91e63;">Published at : {{$post_detail->created_at->format('jS \\of F Y') }}</p>
               <p>{{ $post_detail->description }}</p>
               <hr>
               <!-- Display review section start -->
               <div data-spy="scroll" data-target="#navbar-example2" data-offset="0">
                  <div>
                     <div class="row mt-5">
                        <h4>Comment Section :</h4>
                        <div class="col-sm-12 mt-5">
                           @foreach($post_detail->ReviewData as $review)
                           <div class=" review-content">
                              <img src="https://www.w3schools.com/howto/img_avatar.png" class="avatar ">
                              <span class="font-weight-bold ml-2">{{$review->name}}</span>
                              <p class="mt-1">
                                 @for($i=1; $i<=$review->star_rating; $i++) 
                                 <span><i class="fa fa-star text-warning"></i></span>
                                 @endfor
                                 <span class="font ml-2">{{$review->email}}</span>
                              </p>
                              <p class="description ">
                                 {{$review->comments}}
                              </p>
                           </div>
                           <hr>
                           @endforeach
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Review store Section -->
               <div class="container">
                  <div class="row">
                     <div class="col-sm-10 mt-4 ">
                        <form class="py-2 px-4" action="{{route('review.store')}}" style="box-shadow: 0 0 10px 0 #ddd;" method="POST" autocomplete="off">
                           @csrf
                           <input type="hidden" name="post_id" value="{{$post_detail->id}}">
                           <div class="row justify-content-end mb-1">
                              <div class="col-sm-8 float-right">
                                 @if(Session::has('flash_msg_success'))
                                 <div class="alert alert-success alert-dismissible p-2">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>Success!</strong> {!! session('flash_msg_success')!!}.
                                 </div>
                                 @endif
                              </div>
                           </div>
                           <p class="font-weight-bold ">Review</p>
                           <div class="form-group row">
                              <div class=" col-sm-6">
                                 <input class="form-control" type="text" name="name" placeholder="Name" maxlength="40" required/>
                              </div>
                              <div class="col-sm-6">
                                 <input class="form-control" type="email" name="email" placeholder="Email" maxlength="80" required/>
                              </div>
                           </div>
                           <div class="form-group row">
                              <div class="col-sm-6">
                                 <input class="form-control" type="text" name="phone" placeholder="Phone" maxlength="40" required/>
                              </div>
                              <div class="col-sm-6">
                                 <div class="rate">
                                    <input type="radio" id="star5" class="rate" name="rating" value="5"/>
                                    <label for="star5" title="text">5 stars</label>
                                    <input type="radio" id="star4" class="rate" name="rating" value="4"/>
                                    <label for="star4" title="text">4 stars</label>
                                    <input type="radio" id="star3" class="rate" name="rating" value="3"/>
                                    <label for="star3" title="text">3 stars</label>
                                    <input type="radio" id="star2" class="rate" name="rating" value="2">
                                    <label for="star2" title="text">2 stars</label>
                                    <input type="radio" id="star1" class="rate" name="rating" value="1"/>
                                    <label for="star1" title="text">1 star</label>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group row mt-4">
                              <div class="col-sm-12 ">
                                 <textarea class="form-control" name="comment" rows="6 " placeholder="Comment" maxlength="200"></textarea>
                              </div>
                           </div>
                           <div class="mt-3 ">
                              <button class="btn btn-sm py-2 px-3 btn-info">Submit
                              </button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
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