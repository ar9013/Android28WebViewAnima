<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/Carcassone.css" rel="stylesheet">

</head>

<body>
<div class="container" >

      <form class="form-signin" action="Login.php" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="account" class="sr-only">Account</label>
        <input type="text" id="account" name="account" class="form-control" placeholder="請輸入帳號"  required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" name="passwd"  placeholder="請輸入密碼" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        		
        		 <a class="btn btn-lg btn-block btn-default" href="anima_SignUp.php">Sign Up</a>
 								<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
 			
 			
  
</div>
        		
        		
        
        
        
      </form>

    </div> <!-- /container -->


</body>
</html>


