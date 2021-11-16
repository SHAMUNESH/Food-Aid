<?php require_once 'controllers/authController.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>FOOD-AID | Login</title>
</head>
<body>
   <div style="" class="container">
       <div class="row">
           <div class="col-md-4 offset-md-4 form-div login" style="background-image: radial-gradient(73% 147%, #EADFDF 59%, #ECE2DF 100%), radial-gradient(91% 146%, rgba(255,255,255,0.50) 47%, rgba(0,0,0,0.50) 100%);
 background-blend-mode: screen;">
             <form action="login.php" method="post">
               <h3 class="text-center" >Login</h3>
               <?php if(count($errors) > 0): ?>
                <div class="alert alert-danger">
                  <?php foreach($errors as $error): ?>
                     <li><?php echo $error; ?> </li>
                  <?php endforeach; ?>
                </div>
              <?php endif; ?>
               <div class="form-group">
                 <label for="username" style="font-size: 16px">Username or Email</label>
                 <input type="text" name="username" value="<?php echo $username; ?>" class="form-control form-control-lg">
               </div>
          
               <div class="form-group">
                 <label  style="font-size: 16px" for="password">Password</label>
                 <input type="password" name="password" class="form-control form-control-lg">
               </div>
              
               <div class="form-group">
                 <button type="submit" name="login-btn" class="btn btn-primary btn-block btn-lg">Login</button>
               </div>
               <p class="text-center">Not yet a member? <a href="signup.php">Sign Up</a> </p>
               <div class="text-center">
                 <a style="font-size: 0.8em; text-align: center;" href="forgot_password.php">Forgot your Password?</a>
               </div>
             </form>
           </div>
       </div>
   </div>
</body>
</html>