
<?php 
    session_start();
    require 'config.php';

    $file = fopen("dropdown.csv","r");
    $csvfile = fgetcsv($file);
    $index = 0;
    $rating = array();
    $teas = array();
    $temperatures = array();
    while(($csvfile=fgetcsv($file))!== FALSE){
        $rating[$index] = $csvfile[0];
        $teas[$index] = $csvfile[1];
        $temperatures[$index] = $csvfile[2];
        $index++;
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <div class="container">
      <h1 class="text-center"><?php echo "Hello {$_SESSION['firstname']} {$_SESSION['lastname']}";  ?>  </h1>
      <div class="realform"> 
        <form>
          <div class="row"> 
            <p1> Do you like tea? </p1>

            <div class="col"> 
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">Yes!</label>
              </div>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">No.</label>
              </div>
            </div>
          </div>

          <div class="row mt-2"> 
            <div class="col">
              <p1>What is your favorite tea? </p1>
              <select class="form-select" id="dropdown1">
                <option selected> Choose </option>
                <option value="1"> <?php echo $teas[0]; ?> </option>
                <option value="2"> <?php echo $teas[1]; ?> </option>
                <option value="3"> <?php echo $teas[2]; ?> </option>
              </select>
            </div>
          </div>

          <div class="row mt-2"> 
            <p1> How much would you pay for tea?</p1>
            <div class ="col"> 
              <div class="input-group">
                <span class="input-group-text">$</span>
                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                <span class="input-group-text">.00</span>
              </div>
            </div>
          </div>

          <div class="row mt-2"> 
            <div class="col">
              <p1> Cold Tea or Hot Tea? </p1>
              <select class="form-select" id="dropdown2">
                <option selected> Choose </option>
                <option value="1"><?php echo $temperatures[0]; ?></option>
                <option value="2"><?php echo $temperatures[1]; ?></option>
              </select>
            </div>
          </div>

          <div class="row mt-2">
            <p1> Any thoughts on tea? </p1>
            <div class="col"> 
              <div class="input-group">
                <textarea class="form-control" aria-label="With textarea" placeholder="0 - 250 characters"></textarea>
              </div> 
            </div>
          </div>

          <div class="row"> 
            <p1> Would you recommend Tea to a friend? </p1>

            <div class="col"> 
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="recommend1" id="" value="option1">
                <label class="form-check-label" for="recommend1">Yes!</label>
              </div>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="" id="recommend2" value="option2">
                <label class="form-check-label" for="recommend2">No.</label>
              </div>
            </div>
          </div>

          <div class="row mt-2"> 
            <div class="col">
              <p1> Rate this form out of 10 </p1>
              <select class="form-select" id="dropdown2">
                <option selected> Choose </option>
                <option value="1"> <?php echo $rating[0]; ?> </option>
                <option value="2"><?php echo $rating[1]; ?></option>
                <option value="3"><?php echo $rating[2]; ?></option>
                <option value="4"><?php echo $rating[3]; ?></option>
                <option value="5"><?php echo $rating[4]; ?></option>
                <option value="6"><?php echo $rating[5]; ?></option>
                <option value="7"><?php echo $rating[6]; ?></option>
                <option value="8"><?php echo $rating[7]; ?></option>
                <option value="9"><?php echo $rating[8]; ?></option>
                <option value="10"><?php echo $rating[9]; ?></option>

              </select>
            </div>
          </div>

          
          <div class="row mt-4 text-center">
              <div class="col" style="margin:auto">
                <button type="submit" class="btn btn-primary" name="push">Submit</button>
              </div>
              
            <div class="col mt-2"> 
              <a href="logout.php">logout </a>
            </div>
          </div>



        </form>
      </div>
    </div>

    


  </body>
</html>