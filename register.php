<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Register Now</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('images/login.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3>Register to <strong>CareCycle</strong></h3>
            
            <form action="register_exe.php" method="post">
              <div class="form-group first">
                <label for="username">Full Name</label>
                <input type="text" class="form-control" required name="fullname"  pattern="[a-zA-Z\s]+" title="only alphabets and spaces allowed" placeholder="Full Name" id="fullname">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Address</label>
                <input type="text" class="form-control" required placeholder="Address" name="address" id="address">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Mobile</label>
                <input type="number" class="form-control" required placeholder="Mobile" name="phone" id="phone" pattern="[9876][0-9]{9}" title="Enter a valid mobile number">
              </div>
              
              <div class="form-group last mb-3">
                <label for="password">Aadhar Card Number </label>
                <input type="number" class="form-control" required placeholder="Aadhar Number " name="aadhar" id="aadhar">
              </div>
              
              <div class="form-group last mb-3">
                <label for="password">State</label>
                <select class="form-control" required  name="state" id="state">
                  <option>Kerala</option>
                </select>
              </div>
              <div class="form-group first">
                <label for="username">Email</label>
                <input type="email" class="form-control" required name="email" placeholder="Email" id="email">
              </div>
              <div class="form-group first">
                <label for="username">Password</label>
                <input type="password" class="form-control" required name="password"  id="password">
              </div>
              <input type="submit" value="Register Now" class="btn btn-block btn-primary">

            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>