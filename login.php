<?php
$con=mysqli_connect("localhost","root","","signupbt") or die(mysqli_error());
?>
<?php
error_reporting(0);
session_start();
if(isset($_POST['Login']))
{
  if($_POST['username']==""|| $_POST['password']=="")
{
  $err="fill your username and password first";
}
else
{
$d=mysqli_query($con,"SELECT * FROM users where name='{$_POST['username']}'");
$row=mysqli_fetch_object($d);
$fid=$row->name;
$fpass=$row->password;
if($fid==$_POST['username'] && $fpass==$_POST['password'])
{
  $_SESSION['suname']=$_POST['username'];
  header('location: index.php');
}
else
{
  $err="invalid username or password";
}
}
}
?>

<!DOCTYPE html>
<html>
    <head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script>
    <link rel="stylesheet" href="C:\Users\Shreshtha singh\Desktop\e-commerce website\css\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="C:\Users\Shreshtha singh\Desktop\e-commerce website\js\bootstrap.min.js">
    <script type="text/javascript" src="jq.js"></script>
        <title>Login Page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta name="viewport" content="width=device-width", initial-scale="1.0">
    </head>
    <body>
  
   <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">Lifestyle Store</a>
            </div>
            <div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                </ul>
                </div>
        </div>
   </nav><br>
                    <div class="col-xs-6 col-xs-offset-3">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                            <h1>LOGIN</h1> <br>
                                </div>
                             <div class="panel-body">
                                 <div class="text-warning"><h3>Login to make purchase</h3></div> <br>       
                            <form method="get" action="login.php">
                                <div class="form-group">
                                    <label for="name">Username</label>
                                <input type="text" class="form-control" name="username"><br>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                <input type="text" class="form-control" name="password"><br>
                                </div>
                                <div class="form-group">
                            <button type="button" class="btn btn-primary btn-lg" input type="button"  id="Login" name="Login">Login</button>
                                 </div>
                                 
                                </div>
                            </form><br>
                                  <div class="panel-footer">
                                      <left>Don't have an account? <a href="https://www.google.co.in/search?q=register+lifestylestore&oq=register+lifestylestore&aqs=chrome..69i57.10616j0j8&sourceid=chrome&ie=UTF-8">
                                         Register</a></left>
                                 </div>
                             </div>
                            </div>
                        </div>

               <footer class="login-page-footer">
            <div class="container"></div>
            <center>Copyright Lifestyle Store.All Rights Reserved|Contact Us:+91 900000000</center>
        </footer>
      
    </body>
</html>
