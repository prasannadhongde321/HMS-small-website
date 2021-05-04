

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1 ">
  <link rel="stylesheet" type="text/css" href="homepage.css">

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<title></title>
</head>
<body>
<div class="adminlogin">
    <div id="login" class="mt-5">
       
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12 bg-info">
                        <form id="login-form" class="form" action="connectioin.php" method="POST" autocomplete="off">
                            <h3 class="text-center text-light">Admin Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-light">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control"  required="required" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-light">Password:</label><br>
                                <input type="text" name="password" id="password" class="form-control" required="required" autocomplete="none">
                            </div>
                            <br>
                            <div class="form-group text-center">
                                <input type="submit" name="login" class="btn btn-light btn-md" value="Login">
                            </div>
                            <div id="register-link">
                                <a href="homepage.php" class="text-light">Go to home</a>
                            </div>
                    
                         
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
										

</body>
</html>



















