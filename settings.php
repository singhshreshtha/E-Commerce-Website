<!DOCTYPE html>
<html>
    <head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script>
    <link rel="stylesheet" href="C:\Users\Shreshtha singh\Desktop\e-commerce website\css\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="C:\Users\Shreshtha singh\Desktop\e-commerce website\js\bootstrap.min.js">
    <script type="text/javascript" src="jq.js"></script>
        <title>Setting Page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta name="viewport" content="width=device-width", initial-scale="1.0">
    </head>
    <body>
               <div class="navbar navbar-inverse">
            <div class="container"> 
                <div class="navbar-header">
                    <a href="products.php" class="navbar-brand">Lifestyle Store</a>
                </div>
                
                <div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
                        <li><a href="settings.php"><span class="glypicon glyphicon-wrench"></span>Settings</a></li>
                        <li> <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
                    </ul>
                </div>
            </div>
             </div><br>
               <div class="col-xs-6 col-xs-offset-3">
                   <div class="panel panel-primary">
                   <div class="panel panel-heading">
                       <h1>Change Password</h1><br>
                   </div>
                   <div class="panel-body">
                       <form method="get" action="settings.php">
                           <div class="form-group">
                            <label for="Old Password">Old Password</label>
                               <input type="text" class="form-control"  name="Old Password" placeholder="Old Password">
                           </div><br>
                           <div class="form-group">
                            <label for="New Password">New Password</label>
                               <input type="text" class="form-control" name="New Password" placeholder="New Password">
                           </div><br>
                           <div class="form-group">
                            <label for="Re-type New Password">Re-type New Password</label>
                               <input type="text" class="form-control" name="Re-type New Password" placeholder="Re-type New Password">
                           </div><br>
                            <input type="submit" class="btn btn-primary" id="submit" name="submit">
                       </form><br>
                     </div>
                     </div><br>
               </div>
          <footer class="setting-page-footer">
            <div class="container"></div>
            <center>Copyright Lifestyle Store.All Rights Reserved|Contact Us:+91 900000000</center>
                </footer> 
      
    </body>
</html>

