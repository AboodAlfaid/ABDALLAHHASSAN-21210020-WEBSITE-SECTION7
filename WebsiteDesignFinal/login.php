<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
    />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
</head>
<body class="bg-gradient-primary" style="background: rgb(255,255,255);">
    <?php include "templates/headerTemplate.php"; ?>
<div class="p-5">
    <div class="text-center">
        <h4 class="text-dark mb-4">Welcome Back!</h4>
    </div>
    <span style="color: red; font-weight: bold;" id="span"><?php // echo $err;?></span>
    <form   action="includes/login.php" method="post">
        <div class="mb-3">
            <input 
            id="exampleInputEmail" 
            class="form-control form-control-user" 
            style="text-align:left;" 
            type="text" 
            aria-describedby="emailHelp" 
            placeholder="Enter Email Address..." 
            name="Username" />
        </div>
        <div class="mb-3"><input id="exampleInputPassword" class="form-control form-control-user" style="text-align:left;" type="password" placeholder="Password" name="Password" /></div>
        <button class="btn btn-primary d-block btn-user w-100" type="submit"name="submit">Login</button>
        <hr />
    </form>
     <div class="text-center"><a class="small" href="signup.php">Sign Up</a></div>
</div>
    <?php include "templates/footer.html";?>
</body>
</html>