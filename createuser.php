<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/createuser.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
      .app-form-control::placeholder{
        color: #70ce85;
      }
    </style>
</head>

<body style="background-color : pink">
<?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,gender,balance) values('{$name}','{$email}','{$gender}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('User has been created!');
                               window.location='transfermoney.php';
                     </script>";
                    
    }
  }
?>

<?php
  include 'navbar.php';
?>

        <h2 class="text-center " style="color:white; background-color:crimson;" >CREATE A USER</h2>
        <br>

  <div class="background ">
  <div class="container" style="background-color:crimson;border-radius: 5%;" >
    <div class="screen" style="background: #868b90;">
      <div class="screen-header" style="background:#868b90;">
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <img class="img-fluid" src="images/create4.png" style="border: none; border-radius: 10%;">
        </div>
        <div class="screen-body-item">
          <form class="app-form" method="post">
            <div class="app-form-group">
              <input class="app-form-control" style="text-align:center;" placeholder="FULLNAME" type="text" name="name"  required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" style="text-align:center;" placeholder="EMAIL" type="email" name="email" required>
            </div>
            <div class="app-form-group" style="text-align:center;">
              <select name="gender" class="app-form-control" style="text-align:center;" type="text" required>
                <option style="text-align:center;" selected>SELECT</option>
                <option style="text-align:center;" value="Male">Male</option>
                <option style="text-align:center;" value="Female">Female</option>
              </select>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" style="text-align:center; margin-bottom:40px;" placeholder="INITIAL BALANCE" type="number" name="balance" required >
            </div>
            <br>
            <div class="app-form-group button" style="margin-right:30px">
              <input class="app-form-button" style="color:black; background-color: white; border-radius:0.5rem;"  type="submit" value="CREATE USER" name="submit"></input>
              <input class="app-form-button" style="color:black; background-color: white; floatborder-radius:0.5rem;" type="reset" value="RESET" name="reset" ;></input>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="text-center mt-5 py-2" style="background-color : crimson;">
           <p>&copy 2023 Made by <b>Md Tanzil Ekram For #GRIPMARCH23 #sparksfoundation</b></p>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>