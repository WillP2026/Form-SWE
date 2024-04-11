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

    <?php 
      include("config.php");
      if(isset($_POST['logging'])){

        $username = $_POST['username'];
        $password = $_POST['password'];
        $result = mysqli_query($db,"SELECT * FROM users WHERE username = '$username' AND password = '$password'");
        $row = mysqli_fetch_assoc($result);

        if(is_array($row) && !empty($row)){
          $_SESSION['id'] = $row['id'];
          $_SESSION['username'] = $row['username'];
          $_SESSION['password'] = $row['password'];
          $_SESSION['firstname'] = $row['firstname'];
          $_SESSION['lastname'] = $row['lastname'];
          header("Location: form.php");
        }
        else{
          echo "<div class='alert alert-danger'> Invalid Username/Password  </div>";
        }

      }
    
    
    ?>

    
    <div class="container text-center"> 
        <h1 class="mt-5">UMBC Tea Form</h1>
        <div class="realform">
          <form class="row mt-5 mb-4" method="post">

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
                  <input type="test" class="form-control" id="username" name="username" placeholder="Username">
                  <label for="floatingInput">Username</label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col col-md-6" style="margin:auto">
                <div class="form-floating">
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                  <label for="floatingPassword">Password</label>
                </div>
              </div>
            </div>

            <div class="row mt-4">
              <div class="col col-md-6" style="margin:auto">
                <button type="submit" class="btn btn-primary" name="logging">Sign in</button>
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