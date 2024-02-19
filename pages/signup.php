<!-- Section: Design Block -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="../css/style_signup.css" rel="stylesheet">
</head>
<body >
   

<header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
    
          <h1 class="logo me-auto"><a href="../index.php">DECADE</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo me-auto"><img src="img/logo.png" alt="" class="img-fluid"></a>-->
    
          <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
              <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
              <li><a class="nav-link scrollto" href="#about">About</a></li>
              <li><a class="nav-link scrollto" href="#services">Services</a></li>
            
              <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
    
          <a class="appointment-btn scrollto"><span class="d-none d-md-inline"></span> SIGN UP</a>
    
        </div>
      </header><!-- End Header -->

<!-- Section: Design Block -->
<section class="back" style="margin-top: 100px;">
    <!-- Jumbotron -->
    <div class="px-4 py-5 px-md-5 text-center text-lg-start">
      <div class="container">
        <div class="row gx-lg-5 align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0">
            
            <img src="..\assets\doctor.png" alt="Description of the image" >
          </div>
  
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="card" style="    margin-top: -18px; height: 807px;">
              <div class="card-body py-5 px-md-5">
              <form action="./actions/traitement_signup.php" method="POST">
                  <!-- 2 column grid layout with text inputs for the first and last names -->
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                      <input type="text" id="form3Example1" class="form-control" name="nom">
                        <label class="form-label" for="form3Example1">First name</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                      <input type="text" id="form3Example2" class="form-control" name="prenom">
                        <label class="form-label" for="form3Example2">Last name</label>
                      </div>
                    </div>
                  </div>
  
                  <!-- Email input -->
                  <div class="form-outline mb-4">
                  <input type="email" id="form3Example3" class="form-control" name="email">
                    <label class="form-label" for="form3Example3">Email address</label>
                  </div>
  
                  <!-- Password input -->
                  
                  <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cg" class="form-control form-control-lg" name="password">

                    <label class="form-label" for="form3Example4cg">Password</label>
                  </div>
  
                  <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cdg" class="form-control form-control-lg" name="repeat_password">

                    <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                  </div>
                  <!-- gender  -->
                  <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
  
                    <h6 class="mb-0 me-4">Gender: </h6>
  
                    <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="genre" id="femaleGender" value="female">

                      <label class="form-check-label" for="femaleGender">Female</label>
                    </div>
  
                    <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="genre" id="maleGender" value="male">

                      <label class="form-check-label" for="maleGender">Male</label>
                    </div>
  
                    
  
                  </div>
                  <div class="form-outline mb-4">
                  <input type="number" id="form3Example3" class="form-control" name="telephone">
                    <label class="form-label" for="form3Example3">telephone</label>
                  </div>
                 
                  </div>
  
                 
  
                  <!-- Submit button -->
                  <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block mb-4" style="background-color: black; color: white; border: 1px solid black;" routerLink="/home">
                    Sign up
                  </button>
                </div>
  
                  <!-- Register buttons -->
                  <div class="text-center">
                    <p>or sign up with:</p>
                    <button type="button" class="btn btn-link btn-floating mx-1">
                      <i class="fa fa-facebook-f"></i>
                    </button>
  
                    <button type="button" class="btn btn-link btn-floating mx-1">
                      <i class="fa fa-google"></i>
                    </button>
  
                    <button type="button" class="btn btn-link btn-floating mx-1">
                      <i class="fa fa-twitter"></i>
                    </button>
  
                    <button type="button" class="btn btn-link btn-floating mx-1">
                      <i class="fa fa-github"></i>
                    </button>
                  </div>
                  <p class="text-center text-muted mt-5 mb-0">Have already an account? <a routerLink="/signin"
                    class="fw-bold text-body"><u>Login here</u></a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Jumbotron -->
  </section>
  <!-- Section: Design Block -->
  
   
</body>
</html>
