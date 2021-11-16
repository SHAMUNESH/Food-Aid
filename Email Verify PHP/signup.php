<?php require_once 'controllers/authController.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Create Account | FOOD-AID</title>
</head>
<body style="background-image: linear-gradient(to top, #e6e9f0 0%, #eef1f5 100%);">
   <div class="container">
       <div class="row">
           <div class="col-md-4 offset-md-4 form-div" style="background-color: #fff">
             <form action="signup.php" method="post">
               <h3 class="text-center"> <span style="color:  #76448a ">FOOD-AID </span> Donor Register</h3>
              <?php if(count($errors) > 0): ?>
                <div class="alert alert-danger">
                  <?php foreach($errors as $error): ?>
                     <li><?php echo $error; ?> </li>
                  <?php endforeach; ?>
                </div>
              <?php endif; ?>
               <div class="form-group">
                 <label for="username">Username</label>
                 <input type="text" name="username" value="<?php echo $username; ?>" class="form-control form-control-lg">
               </div>
               <div class="form-group">
                 <label for="email">Email</label>
                 <input placeholder="Please enter carefully..." type="email"  name="email"  value="<?php echo $email; ?>" class="form-control form-control-lg">
               </div>
               <div class="form-group">
                 <label for="password">Password</label>
                 <input type="password" name="password" class="form-control form-control-lg">
               </div>
               <div class="form-group">
                 <label for="passwordConf">Confirm Password</label>
                 <input type="password" name="passwordConf" class="form-control form-control-lg">
               </div>
               <div class="form-group">
                 <button type="submit" name="signup-btn" class="btn btn-primary btn-block btn-lg"> Sign Up</button>
               </div>
               <p class="text-center">Already a member? <a href="login.php"> Sign In</a> </p>
             </form>
           </div>
       </div>
   </div>
</body>
</html>