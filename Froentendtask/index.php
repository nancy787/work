<!DOCTYPE html>
<html lang="en">
<head>
  <title>HOMEPAGE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet"  href="css/home.css">
</head>
<body>
  <div class="image">
   <style>
    .banner-image {
      background-image: url('image/background.jpg');
      background-size: cover;
    background-position: center center;
  background-repeat: no-repeat;
  background-attachment: fixed;
  
    }
  </style>
  </div>
 
<body>
  <!-- Navbar  -->
  
  <nav class="des navbar fixed-top navbar-expand-lg navbar-dark p-md-3  justify-content-center">
    <div class="container">
      <a class="navbar-brand" href="#">Web Zone</a>
      <button
        class="design navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
        text-danger
      >
              <span class="navbar-toggler-icon "></span>
              
      </button>
      
      
      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="mx-auto text-center"></div>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white " href="index.php" target="blank">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="signup.php" target="blank">SignUp</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="login.php" target="blank">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="detail.php" target="blank">Detail</a>
          </li>
       
        </ul>  
      </div>
    </div>
  </nav>

  <!-- Banner Image 
  <div
    class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center"
  >
    <div class="content text-center">
      <h1 class="wrapper">
       Love At First BYTE!
      </h1>
      <form class=" d-flex justify-content-center">
        <input class=" search form-control me-2 outline-danger" type="search" placeholder="Search" aria-label="Search">
        <button class=" btn btn-outline-danger" type="submit">Search</button>
      </form>
    </div>
  </div> -->

  <!-- Main Content Area -->
  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="image/background.jpg" class="d-block w-100" alt="scen">


      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="image/mountain.jpg" class="d-block w-100" alt="village">
      </div>
      <div class="carousel-item">
        <img src="image/s.jpg" class="d-block w-100" alt="real">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript">
    var nav = document.querySelector('nav');

    window.addEventListener('scroll', function () {
      if (window.pageYOffset > 100) {
        nav.classList.add('bg-dark', 'shadow');
      } else {
        nav.classList.remove('bg-dark', 'shadow');
      }
    });
  </script>
  <footer id="footer.html"></footer>
 
  <!-- footer  -->
  <footer class="bg-dark text-white">
    <div class="row">
    <div class="col">
       <p class="lead text-center">THEME BY |NANCY BHAGAT|&copy;---------ALL RIGHT RESERVED.</p>
       <p class="text-center small"><a style="color: white; text-decoration: none; cursor:pointer ; "href="www.udemy.com"></style>
      
    </div>
   </div>
</footer>
<div style="height: 10px ; background-color: orange"></div>
<!-- footer end -->
</body>
</html>