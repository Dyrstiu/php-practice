<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">   
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"rel="stylesheet"/>
    
    <title>Login</title>
</head>
<body style="background: conic-gradient(  rgb(0, 255, 200) 50%, rgb(8, 126, 180) 50%);" >
    <div class="container" >
        <div class="row" style="margin-top: 6%;">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto" style="margin-top: 3%;">
            <div class="card card-signin my-5" style="border-radius: 30px;  align-content: center ;align-items: center; margin-top: 50%; padding: 50px; margin: 44px; ">
              <div class="card-body">
                  <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.lxRdWPrr04Eabw2cBs9D-AHaHa%26pid%3DApi&f=1" alt=""width="100px"height="100px" style="margin-left: 52px;margin-top: -44px;margin-bottom: 34px;">
                
                <h5 class="card-title text-center">Sign In</h5>
                <form class="form-signin" method="POST">
                  <div class="form-label-group">
                    <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required autofocus>
                    <label for="inputEmail">Email address</label>
                  </div>
    
                  <div class="form-label-group">
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" name= "pwd" required>
                    <label for="inputPassword">Password</label>
                  </div>
    
                  <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Remember password</label>
                  </div>
                  <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="signin">Sign in</button>
                  <?php
                   
                   $btncliked=$_POST['signin'];

                   if(isset($btncliked)){
                    $email=$_POST['email'];
                    $password=$_POST['pwd'];
                    echo"the password is $password and email is $email";
                    header(" location : test.php");

                   }
                      
                   
                      
                  
                  ?>
                 
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

 
    

    
    
</body>
</html>
