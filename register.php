<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tea Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    
    <div class="container text-center" style="margin:auto"> 
        <h1>Tea Form</h1>
        <div class="realform">
            <form class="row mt-5 ">
                <div class="col col-md-5" style="margin:auto" >
                    <label class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name">
                </div>
          
                <div class="col col-md-5" style="margin:auto" >
                    <label class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name">
                </div>

                <div class="row mt-4">
                    <div class="col col-sm-9"  style="margin:auto">
                        <label class="form-label"> Username </label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                    </div>
                </div>

                
                <div class="row mt-4">
                    <div class="col col-sm-9"  style="margin:auto">
                        <label class="form-label"> Password </label>
                        <input type="text" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

  </body>
</html>