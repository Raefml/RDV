
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="../css/style_login.css" rel="stylesheet">
</head>
<body >
<header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
    
          <h1 class="logo me-auto"><a href="<h1 class="logo me-auto"><a href="../RDV/index.php">DECADE</a></h1></a></h1>
         
    
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
<section class="back">
    <!-- Jumbotron -->
    <div class="px-4 py-5 px-md-5 text-center text-lg-start" >
      <div class="container">
        <div class="row gx-lg-5 align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <img src="../assets/doctor1.png" alt="Description of the image"  style="margin-top: 150px;">
           
          </div>
  
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="card">
              <div class="card-body py-5 px-md-5">
              <form action="./actions/traitement_login.php" method="POST">
                  <!-- 2 column grid layout with text inputs for the first and last names -->
                 
  
                  <!-- Email input -->
                  <div class="form-outline mb-4">
                  <input type="email" id="form3Example3" class="form-control" name="email">
                    <label class="form-label" for="form3Example3">Email address</label>
                  </div>
  
                  <!-- Password input -->
                  <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cg" class="form-control form-control-lg" name="password">
                    <label class="form-label" for="form3Example4">Password</label>
                  </div>
  
                  <!-- Checkbox -->
                  <div class="form-check d-flex justify-content-center mb-4">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                    <label class="form-check-label" for="form2Example33">
                      Subscribe to our newsletter
                    </label>
                  </div>
  
                  <!-- Submit button -->
                  <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block mb-4" style="background-color: black; color: white; border: 1px solid black;" routerLink="/home">
                    Sign in
                  </button>
                </div>
  
                  <!-- Register buttons -->
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




