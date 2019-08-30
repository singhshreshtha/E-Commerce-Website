<!DOCTYPE html>
<html>
    <head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script>
    <link rel="stylesheet" href="C:\Users\Shreshtha singh\Desktop\e-commerce website\css\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="C:\Users\Shreshtha singh\Desktop\e-commerce website\js\bootstrap.min.js">
    <script type="text/javascript" src="jq.js"></script>
        <title>Signup Page</title>
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
   </nav> <br>
              <div class="col-xs-6 col-xs-offset-3">
                   <div class="panel panel-primary">
                   <div class="panel panel-heading">
                       <h1>Signup</h1><br>
                   </div>
                   <div class="panel-body">
                      <form action="signupdb.php" method="post" onsubmit="return validation();">
                           <div class="form-group">
                            <label for="name">Name</label>
                               <input type="text" class="form-control"  name="name" placeholder="Name">
                           </div>
                           <label for="email">Email</label>
                           <div class="form-group">
                               <input type="text" class="form-control" name="email" placeholder="Email">
                           </div>
                           <div class="form-group">
                            <label for="password">Password</label>
                               <input type="text" class="form-control" name="password" placeholder="Password">
                           </div>
                           <div class="form-group">
                            <label for="contact">Contact</label>
                              <input type="text" class="form-control" name="contact" placeholder="Contact">
                           </div> 
                           <div class="form-group">
                            <label for="city name">City</label>
                               <input type="text" class="form-control" name="city" placeholder="City">
                           </div>
                            <input type="submit" class="btn btn-primary" id="Submit" name="Submit">
                       </form>
                     </div>
               </div>
             </div>
               
               <footer class="signup-page-footer">
            <div class="container"></div>
            <center>Copyright Lifestyle Store.All Rights Reserved|Contact Us:+91 900000000</center>
        </footer>
               
               
       
    </body>
</html>
