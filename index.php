<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <style>
      button{
        color: Black;
      }

      footer{
        background-color:Black;
        color:Black;
      }
        
         body{
        background-color:lightblue;
      }
    </style>

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
      <div class="container-fluid hero-content" style="height:auto;">
    <div class="row align-items-center">
      <div class="col-md-6 col-sm-12 text-center" data-aos="fade-up">
        <h1>Spark Foundation Bank</h1>
        <p class="lead_muted" style="color:white;">The Better Way To Bank</p>
        <p class="lead_muted" style="color:white;">Welcome😊😊</p>
        <br>
        <br>
      </div>
      <div class="col-md-6 col-sm-12 text-center" data-aos="fade-left">
        <div class="hero-img-div">
          <img class="hero-img" src="images/bank3.jpg " alt="img-showing-money-transfer">
        </div>
      </div>
    </div>
  </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img class="img-fluid" src="images/create4.png" border_radius="50%"  style="height:225px; width:225px;">
                    <br>
                    <a class="nav-link2" href="createuser.php">Create a User</a>
                  </div>
                  <div class="col-md act">
                    <img class="img-fluid" src="images/delete.png" border_radius="50%" width="225px" height="225px" >
                    <br>
                    <a class="nav-link2" href="removeuser.php">Delete Users</a>
                  </div>
                  <div class="col-md act">
                    <img class="img-fluid" src="images/transaction.jpg" border_radius="50%" width="225px" height="225px" >                   
                    <br>
                    <a class="nav-link2" href="transfermoney.php">Make a Transaction</a>
                  </div>
                  <div class="col-md act">                    
                    <img class="img-fluid" src="images/history.jpeg" border_radius="50%" width="225px" height="225px" >
                    <br>           
                    <a class="nav-link2" href="transactionhistory.php">Transaction History</a>
                  </div>
                  
            </div>
      </div>

      <!-- Footer -->


     <footer class="text-center mt-5 py-2">
        <p>&copy 2023 Made by <b>Md Tanzil Ekram For #GRIPMARCH23 #sparksfoundation</b></p>
      </footer>

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>