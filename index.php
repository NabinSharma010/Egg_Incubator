<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Egg Incubator</title>

    <!-- Bootstrap core CSS -->
<!--    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">-->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>

  <?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "data";
 
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }
    $query = "SELECT * FROM `arduino` ORDER BY `arduino`.`ID` DESC LIMIT 1";
    $query = mysqli_query($conn,$query);
    $result = mysqli_fetch_assoc($query);
  ?> 

  <body background = "chick.png" style="background-size:cover;">

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
      <h5 class="my-0 mr-md-auto font-weight-normal"><center><h1>Egg Incubator</h1></center></h5>
      <nav class="my-2 my-md-0 mr-md-3">
      <p><a href="graph.php">Graph</a></p>

     
      </nav>
      
    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4"><b>Status</b></h1>
      <p class="lead"><h2><b>Details And Statistics Of Egg Incubator Project : Cyber Physical System </b></h2></p>
    </div>

    <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Temp</h4>

            
          </div>
           <div class = "Temperature"><br>
            <?php 
              echo $result['Temperature'];
              ?> 
           </div>   
          
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">DH</h4>
          </div>
          <div class = "Humidity"><br>
             <?php 
                echo $result['Humidity'];
              ?> 
          </div>  
        
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Heat </h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">ON </h1>
            <ul class="list-unstyled mt-3 mb-4">
            
           
          </div>
        </div>
      </div>

          <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>
