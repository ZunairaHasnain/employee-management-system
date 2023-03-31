<?php

    include 'db_connection.php';
    if(isset($_POST['admin'])){
      $admin_id = $_POST['admin_id'];
      $password = $_POST['password'];
      $hash_password = MD5($password);
      $sql="SELECT * FROM `admin` WHERE admin_id='$admin_id' AND password='$hash_password'";
      $result=mysqli_query($conn,$sql);

      $row_user=mysqli_fetch_assoc($result);
      $admin_name=$row_user['admin_name'];
    

      $num=mysqli_num_rows($result);     
      if($num==1){
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION['admin_id']=$admin_id;
        $_SESSION['admin_name']=$admin_name;
       
        header('Location:admin/admin_dashboard.php');
        exit;
      }      
    } 

    if(isset($_POST['employee'])){
      $employee_id = $_POST['employee_id'];
      $password = $_POST['password'];
      $hash_password = MD5($password);
      $sql="SELECT * FROM `employee` WHERE employee_id='$employee_id' AND password='$hash_password'";
      $result=mysqli_query($conn,$sql);

      $row_user=mysqli_fetch_assoc($result);
      $employee_name=$row_user['employee_name'];
      $employee_image=$row_user['employee_image'];
     

      $num=mysqli_num_rows($result);     
      if($num==1){
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION['employee_id']=$employee_id;
        $_SESSION['employee_name']=$employee_name;
        $_SESSION['employee_image']=$employee_image;
        
        header('Location:employee/employee_dashboard.php');
        exit;
      } 
    } 

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log In</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="login.css">
</head>

<body>
  <div class="head">
    <h1>LOGIN TO EMS</h1>
    <a href="index.php"><input type="submit" class="home-btn" value="HOME"></a>
  </div>
  <div class="container">
    <div class="contact-form">
      <div class="profile-login-img"><img src="admin.png"></div>
      <form method="post" action="" autocomplete="off">
        <h3 class="title">Admin Login</h3>
        <div class="input-container">
          <input type="text" name="admin_id" class="input" required />
          <label for="">Admin ID</label>
          <span>Admin ID</span>
        </div>
        <div class="input-container">
          <input type="password" name="password" class="input" id="password" required />
          <strong class="input eye" onclick="myfunction()">
          <i id="hide1" class="fa fa-eye"></i>
          <i id="hide2" class="fa fa-eye-slash"></i>
          </strong>

          <label for="">Password</label>
          <span>Password</span>
        </div>
        <input type="submit" name="admin" value="Login" class="btn" />
      </form>
    </div>
    
    <div class="contact-form">
      <div class="profile-login-img"><img src="employee.png"></div>
      <form method="post" action="" autocomplete="off">
        <h3 class="title">Employee Login</h3>
        <div class="input-container">
          <input type="text" name="employee_id" class="input" required />
          <label for="">Employee ID</label>
          <span>Employee ID</span>
        </div>
        <div class="input-container">
          <input type="password" name="password" class="input" id="password1"required />
          <strong class="input eye" onclick="myfunction1()">
          <i id="hide3" class="fa fa-eye"></i>
          <i id="hide4" class="fa fa-eye-slash"></i>
          </strong>

          <label for="">Password</label>
          <span>Password</span>
        </div>
        <input type="submit" name="employee" value="Login" class="btn" />
      </form>
    </div>
  </div>

  <script src="app.js"></script>
  <script>
    function myfunction(){
      var x=document.getElementById("password");
      var y=document.getElementById("hide1");
      var z=document.getElementById("hide2");
      if(x.type==='password'){
        x.type="text";
        y.style.display="block";
        z.style.display="none";
      }
      else{
        x.type="password";
        y.style.display="none";
        z.style.display="block";
      }
    }
    function myfunction1(){
      var x=document.getElementById("password1");
      var y=document.getElementById("hide3");
      var z=document.getElementById("hide4");
      if(x.type==='password'){
        x.type="text";
        y.style.display="block";
        z.style.display="none";
      }
      else{
        x.type="password";
        y.style.display="none";
        z.style.display="block";
      }
    }
   

  </script>
</body>

</html>
