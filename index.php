<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tea Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    
    <div class="container text-center"> 
        <h1>Tea Form</h1>
        <div class="realform">
          <form class="row mt-5 mb-4 ">

            <div class="col">
              <image src="teaimage.jpg" class="img-thumbnail" width="400px">
            </div>

            <div class="row mt-4"> 
              <div class="col">
                  <h2>Log-In</h2>
              </div>
            </div>
            
            <div class="row">
              <div class="col col-md-6" style="margin:auto">
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                  <label for="floatingInput">Email address</label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col col-md-6" style="margin:auto">
                <div class="form-floating">
                  <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">Password</label>
                </div>
              </div>
            </div>

            <div class="row mt-4">
              <div class="col col-md-6" style="margin:auto">
                <button type="submit" class="btn btn-primary">Sign in</button>
              </div>
            </div>
            
            <div class="row mt-4">
              <div style="margin:auto">
                <p>New around here? Create an account!</p>
                <a href="register.php">Register</a>
              </div>


            </div>
          



          </form>

        </div>
    </div>

  </body>
</html>